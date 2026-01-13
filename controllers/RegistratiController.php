<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class RegistratiController extends Controller{
    
    function registrati(Request $request, Response $response, $args) {    

        $page = PageConfigurator::instance()->getPage(); //guarda index, avevi fatto setPage
        $page->setTitle("Registrati");

        $page->add("content", new PageElement("ui/register"));
    
        return $response;
    }

    function registrati_post(Request $request, Response $response, $args){
        $db = Database::getInstance()->getConnection();
        $dati_utente = $request->getParsedBody();
        $nome=$dati_utente['nome'];
        $email=$dati_utente['email'];
        $password=$dati_utente['password'];
        $esiste_email = "SELECT email FROM utenti WHERE email = '$email'";
        $stmt= $db->query($esiste_email)->fetchColumn();
        if($stmt){
            $esito_registrazione=false;
        }else{
            $sql = "INSERT INTO utenti(nome,email,password) VALUES ('$nome','$email','$password')";
            $db->query($sql);
            $esito_registrazione=true;
        }
        if($esito_registrazione){
            UIMessage::setSuccess("Registrazione effettuata con successo.");
            return $response->withHeader('Location', BASE_PATH.'/accedi')->withStatus(302);
        }else{
            UIMessage::setError("Email già presente.");
            return $response->withHeader('Location', BASE_PATH.'/registrati')->withStatus(302);
        }
    }      
}

