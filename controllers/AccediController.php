<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AccediController extends Controller{
    
    //get commento
    //carica la pagina, template di login, stile di login
    function accedi(Request $request, Response $response, $args) {    
        $page = PageConfigurator::instance()->getPage(); 
        $page->setTitle("Accedi");
        $page->add("content", new PageElement("ui/login"));
        $page->add("stile", new PageElement("css/login"));
        return $response;
        }

    //post
    //controllo delle credenziali salvate nel db
    function accedi_post(Request $request, Response $response, $args){
        //connessione al db
        $db = Database::getInstance()->getConnection();
        //salvo i dati passati dall'utente tramite il form in $_SESSION
        $_SESSION['dati'] = $request->getParsedBody();
        $email_form = $_SESSION['dati']['email'];
        $password_form = $_SESSION['dati']['password'];
        //query al db per vedere se email e password coincidono
        $psw_db = $db->query("SELECT password FROM utenti WHERE utenti.email = '$email_form'")->fetchColumn();
        if($psw_db === $password_form){
            //email e password coincidono: il sito ora riconosce l'utente
            $_SESSION['utente-registrato'] = true;
            UIMessage::setSuccess("Hai effettuato l'accesso.");
            $utente_id = $db->query("SELECT id_utente FROM utenti WHERE email='$email_form'")->fetchColumn();
            $_SESSION['utente_id'] = $utente_id;
            return $response->withHeader('Location', BASE_PATH.'/ricette')->withStatus(302);
        }else{
            //email e password non coincidono: errore e reindirizzamento alla pagina accedi
            UIMessage::setError("Email e/o password errate");
            return $response->withHeader('Location', BASE_PATH.'/accedi')->withStatus(302);
        }
    }  
}

