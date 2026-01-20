<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AccediController extends Controller{
    
    function accedi(Request $request, Response $response, $args) {    
        $page = PageConfigurator::instance()->getPage(); //guarda index, avevi fatto setPage
        $page->setTitle("Accedi");
        $page->add("content", new PageElement("ui/login"));
        $page->add("stile", new PageElement("css/login"));
        return $response;
        }

    function accedi_post(Request $request, Response $response, $args){
        $db = Database::getInstance()->getConnection();;
        $_SESSION['dati'] = $request->getParsedBody();
        $email_form = $_SESSION['dati']['email'];
        $password_form = $_SESSION['dati']['password'];
        $psw_db = $db->query("SELECT password FROM utenti WHERE utenti.email = '$email_form'")->fetchColumn();
        if($psw_db === $password_form){
            $_SESSION['utente-registrato'] = true;
            UIMessage::setSuccess("Hai effettuato l'accesso.");
            $utente_id = $db->query("SELECT id_utente FROM utenti WHERE email='$email_form'")->fetchColumn();
            $_SESSION['utente_id'] = $utente_id;
            return $response->withHeader('Location', BASE_PATH.'/ricette')->withStatus(302);
        }else{
            UIMessage::setError("Email e/o password errate");
            return $response->withHeader('Location', BASE_PATH.'/accedi')->withStatus(302);
        }
    }  
}

