<?php

class HomeView extends PageContainer{
    public function __construct($template= "ui/home", $data= []){
        parent::__construct($template, $data);
        $carousel = new Carousel();
        $carousel->addImage("img/img1.jpg", "Prima foto", "active");
        $carousel->addImage("img/img2.jpg", "Seconda foto");
        $carousel->addImage("img/img3.jpg", "Terza foto");
        $this->add('carousel', $carousel);
    }
}