<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class MieRicetteController extends Controller {

   
    function miericette(Request $request, Response $response, $args) {    
        $page = PageConfigurator::instance()->getPage();
        $page->setTitle("Le Mie Ricette");
        //connessione al database
        $db = Database::getInstance()->getConnection();
        //dammi ricette random
        $email =$_SESSION['dati']['email'];
        $sql = "SELECT id_utente FROM utenti WHERE email='$email'";
        $id_utente = $db->query($sql)->fetchColumn();
        $stmt = $db->query("SELECT * FROM ricette WHERE id_utente = $id_utente");
        //quando faccio fetchAll mette tutti i dati in un array associativo
        $righe = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($righe);
        //exit;
        //echo "<pre>";
        //print_r($righe);
        //echo "</pre>";
        //die();
        $ricette = $this->mappaRigheInOggetti($db, $righe);
        $page->add("content", new PageElement("ricette/elenco", ["lista" => $ricette]));
        return $response;
    }
   

    private function mappaRigheInOggetti($db, $righe) {
        $oggetti = [];
        //ciclo: per ogni riga (chiamata $r) di $righe
        foreach ($righe as $r) {
            $ingredientiNomi = $this->getIngredientiPerRicetta($db, $r['id']);
            $etichetteDieta = [];
            //se nella colonna vegetariana è vera (c'è 1) allora $etichettaDieta diventa "Vegetariana"
            if($r['vegetariana']) $etichetteDieta[] = "Vegetariana";
            if($r['vegana']) $etichetteDieta[] = "Vegana";
            if($r['senza_glutine']) $etichetteDieta[] = "Senza Glutine";
            if($r['senza_lattosio']) $etichetteDieta[] = "Senza Lattosio";
            if($r['senza_crostacei']) $etichetteDieta[] = "Senza Crostacei";
            if($r['senza_frutta_secca']) $etichetteDieta[] = "Senza Frutta Secca";
            //se ci sono più etichiette di diete li unisce (con implode) con la virgola, altrimenti scrive standard
            $testoDieta = !empty($etichetteDieta) ? implode(', ', $etichetteDieta) : "Standard";
            $oggetti[] = new Ricetta($r['titolo'], $r['procedimento'], $ingredientiNomi, $testoDieta, $r['tipologia']);
        }
        return $oggetti;
    }

    private function getIngredientiPerRicetta($db, $idRicetta) {
        $stmt = $db->prepare("SELECT i.nome FROM ingredienti i JOIN ricette_ingredienti ri ON i.id = ri.id_ingrediente WHERE ri.id_ricetta = ?");
        $stmt->execute([$idRicetta]);
        return $stmt->fetchAll(PDO::FETCH_COLUMN); 
    }
}
