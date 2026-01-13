<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class EsciController extends Controller{
    
    function esci(Request $request, Response $response, $args) {    
        session_destroy();
        return $response->withHeader('Location', BASE_PATH . '/accedi')->withStatus(302);
    }
}

