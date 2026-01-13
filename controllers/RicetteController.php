<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class RicetteController extends Controller {

    private function assemblaPagina($page, $ricette){
        
        $page->add("content", new PageElement("ricette/filtri"));
        $page->add("js", new PageElement("js/ricettefiltri"));

        //$page->add("content", new PageElement("ricette/filtri"));
        //if ($utenteLoggato) {
        //    $page->add("content", new PageElement("ricette/crea")); 
        //}
        $page->add("content", new PageElement("ricette/elenco", ["lista" => $ricette]));
    }

    function mostraRicette(Request $request, Response $response, $args) {    
        $page = PageConfigurator::instance()->getPage();
        $page->setTitle("Le ricette");
        //connessione al database
        $db = Database::getInstance()->getConnection();
        //dammi ricette random
        $stmt = $db->query("SELECT * FROM ricette ORDER BY RAND() LIMIT 5");
        //quando faccio fetchAll mette tutti i dati in un array associativo
        $righe = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($righe);
        //exit;
        //echo "<pre>";
        //print_r($righe);
        //echo "</pre>";
        //die();
        $ricetteRandom = $this->mappaRigheInOggetti($db, $righe);
        $this->assemblaPagina($page, $ricetteRandom);
        return $response;
    }
    //questa funzione viene chiamata quando clicchiamo sul pulsante filtra, salva i parametri in $_SESSION e reindirizza a ricette/risultati dopo verrà chiamata la funzione mostraRisultati. Vedi Routes.php
    function filtri_post(Request $request, Response $response, $args) {
        if (session_status() === PHP_SESSION_NONE) session_start();
        $_SESSION['filtri_ricerca'] = $request->getParsedBody();
        return $response->withHeader('Location', BASE_PATH.'/ricette/risultati')->withStatus(302);
    }

    function mostraRisultati(Request $request, Response $response, $args) {
        if (session_status() === PHP_SESSION_NONE) session_start();
        $page = PageConfigurator::instance()->getPage();
        $page->setTitle("Risultati Ricerca");
        //prendiamo i parametri salvati in $_SESSION dalla funzione filtri_post. i due ?? voglio dire: prova a prendere questo valore, se nullo o non esiste prendi quest'altro.
        $params = $_SESSION['filtri_ricerca'] ?? [];
        if (empty($params)) {
            UIMessage::setError("Seleziona almeno un parametro.");
            return $response->withHeader('Location', BASE_PATH . '/ricette')->withStatus(302);
        }
        $db = Database::getInstance()->getConnection();
        $parametriQuery = [];  
        //inizio della query
        $sql = "SELECT r.* FROM ricette r
                JOIN ricette_ingredienti ri ON r.id = ri.id_ricetta
                JOIN ingredienti i ON ri.id_ingrediente = i.id
                WHERE 1=1";
        $filtriDiete = ['dieta_musulmana', 'dieta_ebraica', 'vegetariana', 'vegana', 
                           'senza_glutine', 'senza_lattosio', 'senza_crostacei', 'senza_frutta_secca'];
        $filtriTipologia = ['antipasto', 'primo', 'secondo', 'contorno', 'dolce'];
        //per ogni casella dei filtri controlliamo se è spuntata.
        foreach ($filtriDiete as $colonna) {
            if (isset($params[$colonna])) { 
                //se la casella è spuntata si aggiunge la condizione alla query
                $sql .= " AND r.$colonna = ?"; 
                $parametriQuery[] = 1;         
            }
        }
        $tipologieSelezionate = [];
        foreach ($filtriTipologia as $tipo) {
            if (isset($params[$tipo])) {
            $tipologieSelezionate[] = ucfirst($tipo); // Trasforma 'primo' in 'Primo'
            }
        }
        if (!empty($tipologieSelezionate)) {
        $placeholdersTipologia = implode(',', array_fill(0, count($tipologieSelezionate), '?'));
        $sql .= " AND r.tipologia IN ($placeholdersTipologia)";
        $parametriQuery = array_merge($parametriQuery, $tipologieSelezionate);
        }
        //togliamo spazi vuoti. i due ?? voglio dire: prova a prendere questo valore, se nullo o non esiste prendi quest'altro.
        $ingredientiUtente = array_filter($params['ingredienti'] ?? [], function($val) {
            return !empty(trim($val));
        });
        if (!empty($ingredientiUtente)) {
            //purtroppo nel database gli ingredienti sono scritti con la prima lettere maisucola per questo c'è bisogno di questo paio di righe. trasformano pOmOdOrO in Pomodoro
            $ingredientiUtente = array_map('ucfirst', array_map('strtolower', $ingredientiUtente));
            //in base a quanti $ingredientiUtente ci sono mette lo stesso numero di punti di domanda
            $placeholders = implode(',', array_fill(0, count($ingredientiUtente), '?'));
            $sql .= " AND i.nome IN ($placeholders)";
            $parametriQuery = array_merge($parametriQuery, array_values($ingredientiUtente));
            $sql .= " GROUP BY r.id HAVING COUNT(DISTINCT i.nome) = ?";
            //qui aggiungiamo a parametriQuery il numero di ingredienti inseriti dall'utente al fine di una corretta query
            $parametriQuery[] = count($ingredientiUtente); 
        } else {
            //nel cas in cui non abbia messo nessun ingrediente nei filtri
            $sql .= " GROUP BY r.id";
        }
        //echo $sql;
        //
        // die;
        //invia la query al database con i placeholders, ovvero i punti di domanda
        $stmt = $db->prepare($sql);
        //invia veramente i dati
        $stmt->execute($parametriQuery); 
        //prendo i risultati
        $righe = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($righe) === 0) {
        UIMessage::setError("Nessuna ricetta corrisponde ai filtri selezionati.");
        return $response->withHeader('Location', BASE_PATH . '/ricette')->withStatus(302);
    }
        $risultatiOggetti = $this->mappaRigheInOggetti($db, $righe);
        $this->assemblaPagina($page, $risultatiOggetti);
        return $response;
    }

    private function mappaRigheInOggetti($db, $righe) {
        $oggetti = [];
        //ciclo: per ogni riga (chiamata $r) di $righe
        foreach ($righe as $r) {
            $ingredientiNomi = $this->getIngredientiPerRicetta($db, $r['id']);
            $etichetteDieta = [];
            //se nella colonna vegetariana è vera (c'è 1) allora $etichettaDieta diventa "Vegetariana"
            if($r['vegetariana']) $etichetteDieta[] = "Vegetariana";
            if($r['vegana']) $etichetteDieta[] = "Vegana";
            if($r['senza_glutine']) $etichetteDieta[] = "Senza Glutine";
            if($r['senza_lattosio']) $etichetteDieta[] = "Senza Lattosio";
            if($r['senza_crostacei']) $etichetteDieta[] = "Senza Crostacei";
            if($r['senza_frutta_secca']) $etichetteDieta[] = "Senza Frutta Secca";
            //se ci sono più etichiette di diete li unisce (con implode) con la virgola, altrimenti scrive standard
            $testoDieta = !empty($etichetteDieta) ? implode(', ', $etichetteDieta) : "Standard";
            $oggetti[] = new Ricetta($r['titolo'], $r['procedimento'], $ingredientiNomi, $testoDieta, $r['tipologia']);
        }
        return $oggetti;
    }

    private function getIngredientiPerRicetta($db, $idRicetta) {
        $stmt = $db->prepare("SELECT i.nome FROM ingredienti i JOIN ricette_ingredienti ri ON i.id = ri.id_ingrediente WHERE ri.id_ricetta = ?");
        $stmt->execute([$idRicetta]);
        return $stmt->fetchAll(PDO::FETCH_COLUMN); 
    }
}