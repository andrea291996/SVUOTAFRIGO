<?php 

abstract class Controller{
    protected $app;
    
    function __construct(){
        $this->app = Application::instance();
    }

    protected function getIngredientiPerRicetta($db, $idRicetta) {
        $stmt = $db->prepare("SELECT i.nome FROM ingredienti i JOIN ricette_ingredienti ri ON i.id = ri.id_ingrediente WHERE ri.id_ricetta = ?");
        $stmt->execute([$idRicetta]);
        return $stmt->fetchAll(PDO::FETCH_COLUMN); 
    }

    protected function mappaRigheInOggetti($db, $righe) {
        $oggetti = [];
        //ciclo: per ogni riga (chiamata $r) di $righe
        foreach ($righe as $r) {
            $ingredientiNomi = $this->getIngredientiPerRicetta($db, $r['id']);
            $etichetteDieta = [];
            //se nella colonna vegetariana è vera (c'è 1) allora $etichettaDieta diventa "Vegetariana"
            if($r['vegetariana']) $etichetteDieta[] = "Vegetariana";
            if($r['vegana']) $etichetteDieta[] = "Vegana";
            if($r['dieta_musulmana']) $etichetteDieta[] = "Halal";
            if($r['dieta_ebraica']) $etichetteDieta[] = "Kosher";
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
}