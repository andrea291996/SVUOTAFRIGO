<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class RicetteController extends Controller {

    //get funzione di aiuto 
    private function assemblaPagina($page, $ricette){
        $page->add("content", new PageElement("ricette/filtri"));
        $page->add("js", new PageElement("js/ricettefiltri"));
        $page->add("content", new PageElement("ricette/elenco", ["lista" => $ricette]));
    }

    //get 
    function mostraRicette(Request $request, Response $response, $args) {    
        $page = PageConfigurator::instance()->getPage();
        $page->setTitle("Le ricette");
        //connessione al database
        $db = Database::getInstance()->getConnection();
        //dammi ricette random
        if(isset($_SESSION['utente-registrato'])){
            $email =$_SESSION['dati']['email'];
            $sql = "SELECT id_utente FROM utenti WHERE email='$email'";
            $id_utente = $db->query($sql)->fetchColumn();
            $stmt = $db->query("SELECT * FROM ricette WHERE id_utente IS NULL OR id_utente='$id_utente' ORDER BY RAND() LIMIT 5");
        }else{
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
        $_SESSION['filtri_ricerca'] = $request->getParsedBody();
        return $response->withHeader('Location', BASE_PATH.'/ricette/risultati')->withStatus(302);
    }

    //post
    function mostraRisultati(Request $request, Response $response, $args) { 
        if (session_status() === PHP_SESSION_NONE) session_start();
        $idUtente = $_SESSION['utente-id'] ?? null;
        $page = PageConfigurator::instance()->getPage();
        $page->setTitle("Risultati Ricerca");
        $params = $_SESSION['filtri_ricerca'] ?? [];
        if (empty($params)) {
            UIMessage::setError("Seleziona almeno un parametro.");
            return $response->withHeader('Location', BASE_PATH . '/ricette')->withStatus(302);
        }
        $db = Database::getInstance()->getConnection();
        if($idUtente){
            $email =$_SESSION['dati']['email'];
            $sql = "SELECT id_utente FROM utenti WHERE email='$email'";
        }
        $sql = "SELECT id_utente FROM utenti";
        $id_utente = $db->query($sql)->fetchColumn();
        $parametriQuery = []; 
        if($id_utente) {
            $parametriQuery[] = $id_utente;
        } 
        //inizio della query
        $sql = "SELECT r.* FROM ricette r
                JOIN ricette_ingredienti ri ON r.id = ri.id_ricetta
                JOIN ingredienti i ON ri.id_ingrediente = i.id
                WHERE (r.id_utente IS NULL" . ($id_utente ? " OR r.id_utente = ?" : "") . ")";
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