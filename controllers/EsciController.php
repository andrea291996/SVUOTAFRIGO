<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class EsciController extends Controller{

    //get
    //questa funzione distrugge semplicemente la sessione e il sito non riconosce più l'utente
    function esci(Request $request, Response $response, $args) {    
        session_destroy();
        return $response->withHeader('Location', BASE_PATH . '/')->withStatus(302);
    }
}

