<?php

class PageContainer extends PageElement{
    public function __construct($template, $data= []){
        parent::__construct($template, $data);
    }

    public function add($key, $content):PageContainer{
        $this->data[$key][] = $content; // elenco, le chiavi diventano le variabili template
        return $this; //serve per metodo chiamata in catena
    }

    public function clean($key) {
    $this->data[$key] = [];
    return $this;
    }
    
}