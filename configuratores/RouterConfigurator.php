<?php

class RouterConfigurator {
    protected $app;

    function __construct($app){
        $this->app = $app;
    }

    function bootstrap(){
        $method = strtoupper($_SERVER['REQUEST_METHOD']);
        //in teoria dovrei fare il controllo if file exist ma va bhe
        include_once __DIR__."/../routes.php";
        //queste variabili sono quelle del file routes.php
        foreach($routes[$method] as $route){
            $this->app->map([$method], $route['pattern'], $route['callable']);
        }
    }
}