<?php
class Movies
{
    private $titolo;
    private $genere;
    private $durata;

    public function __construct($_titolo, $_genere, $_durata){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->durata = $_durata;
    }
};