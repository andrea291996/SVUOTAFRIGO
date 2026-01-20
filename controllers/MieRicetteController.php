<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class MieRicetteController extends Controller {

    //get
    function miericette(Request $request, Response $response, $args) {    
        $page = PageConfigurator::instance()->getPage();
        $page->setTitle("Le Mie Ricette");
        $db = Database::getInstance()->getConnection();
        $email =$_SESSION['dati']['email'];
        //sql
        $sql = "SELECT id_utente FROM utenti WHERE email='$email'";
        $id_utente = $db->query($sql)->fetchColumn();
        $stmt = $db->query("SELECT * FROM ricette WHERE id_utente = $id_utente");
        $righe = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(empty($righe)){
            UIMessage::setError("Non hai inserito nessuna tua ricetta.");
            return $response->withHeader('Location', BASE_PATH . '/crearicetta')->withStatus(302);
        }
        $ricette = $this->mappaRigheInOggetti($db, $righe);
        $page->add("content", new PageElement("ricette/elenco", ["lista" => $ricette]));
        return $response;
    }
   

}
