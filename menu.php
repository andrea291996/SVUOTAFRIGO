<?php

$base = "/SVUOTAFRIGO"; 
$utenteregistrato = false;

$utente = $utenteregistrato ? "Andrea" : "SVUOTAFRIGO";

$menu = [
    'brand'=>['href'=> $base . "/", 'title'=>"Ciao ".$utente],
    'items'=> [
        ['href'=> $base . "/", 'title'=>"Ricette"]
    ]
];

if($utenteregistrato){
    $menu['items'][] = ['href'=> $base . "/esci", 'title'=>"Esci"];
    $menu['items'][] = ['href'=> $base . "/crearicetta", 'title'=>"Crea Ricetta"];
    $menu['items'][] = ['href'=> $base . "/miericette", 'title'=>"Le Mie Ricette"];
}else{
    
    $menu['items'][] = ['href'=> $base . "/accedi", 'title'=>"Accedi"];
    $menu['items'][] = ['href'=> $base . "/registrati", 'title'=>"Registrati"];
}
