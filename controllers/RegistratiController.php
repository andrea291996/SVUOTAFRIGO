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
        $esito_registrazione=true;
        if($esito_registrazione){
            UIMessage::setSuccess("Registrazione effettuata con successo.");
            return $response->withHeader('Location', BASE_PATH.'/accedi')->withStatus(302);
        }else{
            UIMessage::setError("Email già presente.");
            return $response->withHeader('Location', BASE_PATH.'/registrati')->withStatus(302);
        }
    }      
}

