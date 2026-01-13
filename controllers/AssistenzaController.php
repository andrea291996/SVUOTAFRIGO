<?php 

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ContattiController extends Controller {

    public function assistenza(Request $request, Response $response, $args){
        $page = PageConfigurator::instance()->getPage(); 
        $page->setTitle("Assistenza");
        $page->add("content", new PageElement());

        return $response;
    }
}