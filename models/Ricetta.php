<?php

class Ricetta {
    protected $titolo;
    protected $procedimento;
    protected $ingredienti = []; 
    protected $testoDieta;
    protected $tipologia;
    protected $template;

    function __construct($titolo, $procedimento, $ingredienti, $testoDieta, $tipologia, $template = "ricette/ricetta"){
        $this->titolo = $titolo;
        $this->procedimento = $procedimento;
        $this->ingredienti = $ingredienti;
        $this->testoDieta = $testoDieta;
        $this->tipologia = $tipologia;
    }

    public function getTitolo() { return $this->titolo; }
    public function getProcedimento() { return $this->procedimento; }
    public function getIngredienti() { return $this->ingredienti; }
    public function getTestoDieta() { return $this->testoDieta; }
    public function getTipologia() { return $this->tipologia; }
}