<?php 

class Menu extends PageElement{

    function __construct($template= "ui/menu", $data= []){
        if(count($data)==0){
            include __DIR__."/../menu.php";
            $data = $menu;
        }
        parent::__construct($template, $data);
    }
}