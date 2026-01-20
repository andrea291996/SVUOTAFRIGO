<?php

class Ricetta {
    protected $titolo;
    protected $procedimento;
    protected $ingredienti = []; 
    protected $testoDieta;
    protected $tipologia;
    protected $template;
    protected $idRicetta;

    function __construct($titolo, $procedimento, $ingredienti, $testoDieta, $tipologia, $idRicetta, $template = "ricette/ricetta"){
        $this->titolo = $titolo;
        $this->procedimento = $procedimento;
        $this->ingredienti = $ingredienti;
        $this->testoDieta = $testoDieta;
        $this->tipologia = $tipologia;
        $this->idRicetta = $idRicetta;
    }

    public function getTitolo() { return $this->titolo; }
    public function getProcedimento() { return $this->procedimento; }
    public function getIngredienti() { return $this->ingredienti; }
    public function getTestoDieta() { return $this->testoDieta; }
    public function getTipologia() { return $this->tipologia; }
    public function getIdRicetta() { return $this->idRicetta; }
}