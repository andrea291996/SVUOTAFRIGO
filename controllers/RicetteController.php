<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class RicetteController extends Controller {

    //get funzione di aiuto 
    //carica la pagina, template di login, stile di login
    private function assemblaPagina($page, $ricette){
        $page->add("content", new PageElement("ricette/filtri"));
        $page->add("js", new PageElement("js/ricettefiltri"));
        $page->add("content", new PageElement("ricette/elenco", ["lista" => $ricette]));
    }

    //get 
    //questa fuzione mostra le ricette appena si carica la pagina quindi prima di aver messo dei filtri
    function mostraRicette(Request $request, Response $response, $args) {    
        $page = PageConfigurator::instance()->getPage();
        $page->setTitle("Le ricette");
        //connessione al database
        $db = Database::getInstance()->getConnection();
        //se utente registrato mi prendo le sue ricette e quelle del db di default
        if(isset($_SESSION['utente-registrato'])){
            $email =$_SESSION['dati']['email'];
            $sql = "SELECT id_utente FROM utenti WHERE email='$email'";
            $idUtente = $db->query($sql)->fetchColumn();
            //prendo solo 5 ricette random (tra quelle di default e quelle dell'utente)
            $stmt = $db->query("SELECT * FROM ricette WHERE id_utente IS NULL OR id_utente='$idUtente' ORDER BY RAND() LIMIT 5");
        }else{
            //se l'utente non è registrato prendo 5 ricette random dal db di default
            $stmt = $db->query("SELECT * FROM ricette WHERE id_utente IS NULL ORDER BY RAND() LIMIT 5");
        }
        $righe = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $ricetteRandom = $this->mappaRigheInOggetti($db, $righe);
        $this->assemblaPagina($page, $ricetteRandom);
        return $response;
    }

    //post funzione di aiuto 
    function filtri_post(Request $request, Response $response, $args) {
        if (session_status() === PHP_SESSION_NONE) session_start();
        //salvo in $_SESSION i parametri scritti dall'utente tramite il form di filtri
        $_SESSION['filtri_ricerca'] = $request->getParsedBody();
        return $response->withHeader('Location', BASE_PATH.'/ricette/risultati')->withStatus(302);
    }

    //post
    //questa fuzione mostra le ricette filtrate quindi solo dopo aver premuto sul pulsante del form filtri 
    function mostraRisultati(Request $request, Response $response, $args) { 
        if (session_status() === PHP_SESSION_NONE) session_start();
        //verifichiamo se l'utente è registrato o no
        $idUtente = $_SESSION['utente-id'] ?? null;
        $page = PageConfigurator::instance()->getPage();
        $page->setTitle("Risultati Ricerca");
        //prendiamo i parametri messi dall'utente (se ci sono, altrimenti array vuoto)
        $params = $_SESSION['filtri_ricerca'] ?? [];
        //se non ha messo nessun parametro: errore e reindirizzamento
        if (empty($params)) {
            UIMessage::setError("Seleziona almeno un parametro.");
            return $response->withHeader('Location', BASE_PATH . '/ricette')->withStatus(302);
        }
        //connessione al db
        $db = Database::getInstance()->getConnection();
        if($idUtente){
            //se l'utente è registrato mi prendo la mail e poi mi prendo l'id
            $email =$_SESSION['dati']['email'];
            $sql = "SELECT id_utente FROM utenti WHERE email='$email'";
        }
        //inizializzo l'array per i parametri della query
        $parametriQuery = []; 
        //se l'utente è registrato ci mettiamo dentro l'id
        if($idUtente) {
            $parametriQuery[] = $idUtente;
        } 
        //inizio della query
        //attenzione al where: se $idUtente non c'è la parte fra parentesi diventa una stringa vuota
        //gestisce sia la query di un utente registrato sia di un utente non registrato
        $sql = "SELECT r.* FROM ricette r
                JOIN ricette_ingredienti ri ON r.id = ri.id_ricetta
                JOIN ingredienti i ON ri.id_ingrediente = i.id
                WHERE (r.id_utente IS NULL" . ($idUtente ? " OR r.id_utente = ?" : "") . ")";
        $filtriDiete = ['dieta_musulmana', 'dieta_ebraica', 'vegetariana', 'vegana', 
                           'senza_glutine', 'senza_lattosio', 'senza_crostacei', 'senza_frutta_secca'];
        $filtriTipologia = ['antipasto', 'primo', 'secondo', 'contorno', 'dolce'];
        foreach ($filtriDiete as $colonna) {
            if (isset($params[$colonna])) { 
                $sql .= " AND r.$colonna = ?"; 
                $parametriQuery[] = 1;         
            }
        }
        $tipologieSelezionate = [];
        foreach ($filtriTipologia as $tipo) {
            if (isset($params[$tipo])) {
            $tipologieSelezionate[] = ucfirst($tipo); 
            }
        }
        if (!empty($tipologieSelezionate)) {
        $placeholdersTipologia = implode(',', array_fill(0, count($tipologieSelezionate), '?'));
        $sql .= " AND r.tipologia IN ($placeholdersTipologia)";
        $parametriQuery = array_merge($parametriQuery, $tipologieSelezionate);
        }
        $ingredientiUtente = array_filter($params['ingredienti'] ?? [], function($val) {
            return !empty(trim($val));
        });
        if (!empty($ingredientiUtente)) {
            //purtroppo nel database gli ingredienti sono scritti con la prima lettere maisucola per questo c'è bisogno di questo paio di righe. trasformano pOmOdOrO in Pomodoro
            $ingredientiUtente = array_unique(array_map('ucfirst', array_map('strtolower', $ingredientiUtente)));
            $placeholders = implode(',', array_fill(0, count($ingredientiUtente), '?'));
            $sql .= " AND i.nome IN ($placeholders)";
            $parametriQuery = array_merge($parametriQuery, array_values($ingredientiUtente));
            $sql .= " GROUP BY r.id HAVING COUNT(DISTINCT i.nome) = ?";
            $parametriQuery[] = count($ingredientiUtente); 
        } else {
            $sql .= " GROUP BY r.id";
        }
        $stmt = $db->prepare($sql);
        $stmt->execute($parametriQuery); 
        $righe = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //se non abbiamo nessun risultato dopo aver interrogato il db mostro un messaggio e reindirizzo a ricette
        if (count($righe) === 0) {
        UIMessage::setError("Nessuna ricetta corrisponde ai filtri selezionati.");
        return $response->withHeader('Location', BASE_PATH . '/ricette')->withStatus(302);
        }else{
            $risultatiOggetti = $this->mappaRigheInOggetti($db, $righe);
            $this->assemblaPagina($page, $risultatiOggetti);
            return $response;
        } 
    }
}