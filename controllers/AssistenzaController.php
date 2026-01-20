<?php 

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AssistenzaController extends Controller {
    
    //get
    //carica la pagina, template di assistenza
    public function assistenza(Request $request, Response $response, $args){
        $page = PageConfigurator::instance()->getPage(); 
        $page->setTitle("Assistenza");
        $page->add("content", new PageElement("ui/assistenza"));
        return $response;
    }
}