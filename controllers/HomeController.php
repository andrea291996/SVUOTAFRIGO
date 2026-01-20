<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController extends Controller{
    
    function home(Request $request, Response $response, $args) {    
        $page = PageConfigurator::instance()->getPage(); //guarda index, avevi fatto setPage
        $page->setTitle("Home");
        $page->add("content", new PageElement("ui/home"));
        $page->add("stile", new PageElement("css/home"));
        return $response;
        }

}