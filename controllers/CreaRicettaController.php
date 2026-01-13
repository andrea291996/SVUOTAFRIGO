<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CreaRicettaController extends Controller{
    
    function crearicetta(Request $request, Response $response, $args) {    
        $page = PageConfigurator::instance()->getPage(); //guarda index, avevi fatto setPage
        $page->setTitle("Crea Ricetta");
        $page->add("js", new PageElement("js/ricettefiltri"));
        $page->add("content", new PageElement("ricette/crea_ricetta"));
        return $response;
    }

    function crearicetta_post(Request $request, Response $response, $args){
        $db = Database::getInstance()->getConnection();
        $dati_ricetta = $request->getParsedBody();
        $nome=$dati_ricetta['nome'];
        $email=$dati_ricetta['tipologia'];
        $password=$dati_ricetta['dieta'];
        $esiste_ricetta = "SELECT nome FROM ricette WHERE nome = '$nome'";
        $stmt= $db->query($esiste_ricetta)->fetchColumn();
        if($stmt){
            $esito_inserimento_ricetta=false;
        }else{
            $sql = "INSERT INTO ricette() VALUES ()";
            $db->query($sql);
            $esito_inserimento_ricetta=true;
        }
        if($esito_inserimento_ricetta){
            UIMessage::setSuccess("Inserimento ricetta effettuato con successo.");
            return $response->withHeader('Location', BASE_PATH.'/accedi')->withStatus(302);
        }else{
            UIMessage::setError("Ricetta con lo stesso nome già presente. Per favore modifica il nome.");
            return $response->withHeader('Location', BASE_PATH.'/registrati')->withStatus(302);
        }
    }      
}

