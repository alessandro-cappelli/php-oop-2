<?php
class Sala2 
{
    private $numSala;
    private $numPosti;
    private $effect;

    public function __construct($_numSala, $_numPosti, $_effect){
        $this->numSala = $_numSala;
        $this->numPosti = $_numPosti;
        $this->effect = $_effect;
    }

    public function getNumPosti(){
        return $this->numPosti;
    }
};