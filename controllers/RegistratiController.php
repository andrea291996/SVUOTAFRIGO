<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class RegistratiController extends Controller{
    
    //get
    //carica la pagina, template di register, stile di registrati
    function registrati(Request $request, Response $response, $args) {    
        $page = PageConfigurator::instance()->getPage();
        $page->setTitle("Registrati");
        $page->add("content", new PageElement("ui/register"));
        $page->add("stile", new PageElement("css/registrati"));
        return $response;
    }

    //post
    function registrati_post(Request $request, Response $response, $args){
        //connessione al db
        $db = Database::getInstance()->getConnection();
        //prendo i dati inseriti dall'utente nel form di registrazione
        $dati_utente = $request->getParsedBody();
        //metto i dati dell'utente in altre variabili più leggibili
        $nome=$dati_utente['nome'];
        $email=$dati_utente['email'];
        $password=$dati_utente['password'];
        //controllo se esiste già la mail inserita dall'utente
        $esiste_email = "SELECT email FROM utenti WHERE email = '$email'";
        $stmt= $db->query($esiste_email)->fetchColumn();
        //se $esiste_mail è true, imposto $esito_registrazione su false
        if($stmt){
            $esito_registrazione=false;
        }else{
            //se $esiste_mail è false, inserisco il nuovo utente e imposto $esito_registrazione su true
            $sql = "INSERT INTO utenti(nome,email,password) VALUES ('$nome','$email','$password')";
            $db->query($sql);
            $esito_registrazione=true;
        }
        //gestione messaggi all'utente: successo o fallimento(email già presente)
        if($esito_registrazione){
            UIMessage::setSuccess("Registrazione effettuata con successo.");
            return $response->withHeader('Location', BASE_PATH.'/accedi')->withStatus(302);
        }else{
            UIMessage::setError("Email già presente.");
            return $response->withHeader('Location', BASE_PATH.'/registrati')->withStatus(302);
        }
    }      
}

