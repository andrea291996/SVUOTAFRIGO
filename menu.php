<?php

$base = "/SVUOTAFRIGO"; 
$utenteregistrato=false;
$utente = "Patatini";
if(isset($_SESSION['utente-registrato'])){
    $db = Database::getInstance()->getConnection();
    $email =$_SESSION['dati']['email'];
    $sql = "SELECT nome FROM utenti WHERE email='$email'";
    $stmt = $db->query($sql);
    $utente = $stmt->fetchColumn();
    $utenteregistrato=true;
}

$menu = [
    'brand'=>['href'=> $base . "/", 'title'=>"Ciao ".$utente],
    'items'=> [
        ['href'=> $base . "/", 'title'=>"Ricette"],
        ['href'=> $base . "/assistenza", 'title'=>"Assistenza"]  
    ]
];

if($utenteregistrato){
    $menu['items'][] = ['href'=> $base . "/crearicetta", 'title'=>"Crea Ricetta"];
    $menu['items'][] = ['href'=> $base . "/lemiericette", 'title'=>"Le Mie Ricette"];
    $menu['items'][] = ['href'=> $base . "/esci", 'title'=>"Esci"];
}else{
    
    $menu['items'][] = ['href'=> $base . "/accedi", 'title'=>"Accedi"];
    $menu['items'][] = ['href'=> $base . "/registrati", 'title'=>"Registrati"];
}
