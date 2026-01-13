<?php

use Slim\Factory\AppFactory;

class Application{
    protected $app;
    static protected $instance = null;
    
    function __construct(){
        $this->app = AppFactory::create();  // metodo che genera l'istanza dell'app
        }
    //questo è il design del singleton vedi templateengine.php
    static function instance(){   // per gli attributi statici non si usa $this, ma self
        if(!self::$instance)
            self::$instance = new Application();
        return self::$instance;
    }

    function __call($method, $args){ //metodo magico per girare le chiamate alla classe di slim
        if(method_exists($this->app, $method)){
            return call_user_func_Array([$this->app, $method],$args);
        }
        return null;
    }
}