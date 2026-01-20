<?php

$base = "/SVUOTAFRIGO"; 
$utenteregistrato=false;

if(isset($_SESSION['utente-registrato'])){
    $db = Database::getInstance()->getConnection();
    $email =$_SESSION['dati']['email'];
    $sql = "SELECT nome FROM utenti WHERE email='$email'";
    $stmt = $db->query($sql);
    $utente = $stmt->fetchColumn();
    $utenteregistrato=true;
}

if($utenteregistrato){
    $menu = ['brand'=>['href'=> $base . "/", 'title'=>"Ciao ".$utente]];
    $menu['items'][] = ['href'=> $base . "/home", 'title'=>"Home"];
    $menu['items'][] = ['href'=> $base . "/ricette", 'title'=>"Ricette"];
    $menu['items'][] = ['href'=> $base . "/assistenza", 'title'=>"Assistenza"];
    $menu['items'][] = ['href'=> $base . "/crearicetta", 'title'=>"Crea Ricetta"];
    $menu['items'][] = ['href'=> $base . "/lemiericette", 'title'=>"Le Mie Ricette"];
    $menu['items-right'][] = ['href'=> $base . "/esci", 'title'=>"Esci"];
    
}else{
    $menu = ['brand'=>['href'=> $base . "/", 'title'=>"SVUOTAFRIGO v.2"]];
    $menu['items'][] = ['href'=> $base . "/home", 'title'=>"Home"];
    $menu['items'][] = ['href'=> $base . "/ricette", 'title'=>"Ricette"];
    $menu['items'][] = ['href'=> $base . "/assistenza", 'title'=>"Assistenza"];
    $menu['items-right'][] = ['href'=> $base . "/accedi", 'title'=>"Accedi"];
    $menu['items-right'][] = ['href'=> $base . "/registrati", 'title'=>"Registrati"];
}
