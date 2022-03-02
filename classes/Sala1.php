<?php
class Sala1
{
    private $numSala;
    private $numPosti;

    public function __construct($_numSala, $_numPosti){
        $this->numSala = $_numSala;
        $this->numPosti = $_numPosti;
    }

    public function getNumPosti(){
        return $this->numPosti;
    }
};