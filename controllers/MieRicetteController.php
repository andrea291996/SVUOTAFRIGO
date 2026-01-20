<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class MieRicetteController extends Controller {

    //get
    //carica la pagina, template di ricette
    //mostra le sole ricette inserite dall'utente se ci sono, altrimenti rimanda alla pagina per creare una ricetta 
    function miericette(Request $request, Response $response, $args) {    
        $page = PageConfigurator::instance()->getPage();
        $page->setTitle("Le Mie Ricette");
        //connsessione al db
        $db = Database::getInstance()->getConnection();
        //il sito riconosce l'utente
        $email =$_SESSION['dati']['email'];
        //prendo id dell'utente registrato
        $sql = "SELECT id_utente FROM utenti WHERE email='$email'";
        $id_utente = $db->query($sql)->fetchColumn();
        //prendo ricette dell'utente loggato
        $stmt = $db->query("SELECT * FROM ricette WHERE id_utente = $id_utente");
        $righe = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //se l'utente non ha nessuna ricetta messaggio di errore e indirizzamento alla pagina crearicette
        if(empty($righe)){
            UIMessage::setError("Non hai inserito nessuna tua ricetta.");
            return $response->withHeader('Location', BASE_PATH . '/crearicetta')->withStatus(302);
        }
        //se l'utente ha delle sue ricette gliele mostro con il template solito
        $ricette = $this->mappaRigheInOggetti($db, $righe);
        foreach($ricette as $ricetta){
            $ricetta->modificabile = true;
        }
        $page->add("content", new PageElement("ricette/elenco", ["lista" => $ricette]));
        return $response;
    }
   

}
