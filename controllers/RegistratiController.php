<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class RegistratiController extends Controller{
    
    function registrati(Request $request, Response $response, $args) {    

        $page = PageConfigurator::instance()->getPage(); //guarda index, avevi fatto setPage
        $page->setTitle("Accedi");

        $page->add("content", new PageElement("ui/register"));
    
        return $response;
        }
        
}

