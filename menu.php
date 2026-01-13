<?php

$base = "/SVUOTAFRIGO"; 
$utenteregistrato = false;

$utente = $utenteregistrato ? "Andrea" : "SVUOTAFRIGO";

$menu = [
    'brand'=>['href'=> $base . "/", 'title'=>"Ciao ".$utente],
    'items'=> [
        ['href'=> $base . "/", 'title'=>"Ricette"],
        ['href'=> $base . "/crearicetta", 'title'=>"Crea Ricetta"],
        ['href'=> $base . "/preferite", 'title'=>"Preferite"]
    ]
];

if($utenteregistrato){
    $menu['items'][] = ['href'=> $base . "/esci", 'title'=>"Esci"];
}else{
    $menu['items'][] = ['href'=> $base . "/accedi", 'title'=>"Accedi"];
    $menu['items'][] = ['href'=> $base . "/registrati", 'title'=>"Registrati"];
}
