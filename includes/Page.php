<?php

class Page extends PageContainer{

    public function __construct($template="index.mst", $data= []){
        parent::__construct($template, $data);
        $this->data['title']="NoName";
    }

    public function setTitle($title){
        $this->title = $title;
        $this->data['title']=$title;
        return $this->data['title']; //serve per metodo chiamata in catena
    }

    public function getTitle(){
        return $this->title;
    }
}