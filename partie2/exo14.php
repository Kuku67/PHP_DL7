<?php

class Voiture {

    // 2 VARIABLES NON IMMUABLES
    protected $marque;
    protected $modele;

    public function __construct($marque, $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function __get($propriete) {
        return $this->$propriete;
    }

    public function __set($propriete, $valeur) {
        $this->$propriete = $valeur;
    }

    public function getInfos() {
        return "Marque : {$this->marque}<br>Modèle : {$this->modele}<br>";
    }
}

class VoitureElec extends Voiture {
    
    protected $autonomie;

    public function __construct($marque, $modele, $autonomie) {
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }

    public function getInfos() {
        parent::getInfos();
        return "Autonomie : {$this->autonomie}<br>";
    }
}


$voiture1 = new Voiture("Peugeot", "408");
$voitureElec1 = new VoitureElec("BMW", "I3", 100);

echo $voiture1->getInfos();
echo "<br>";
echo $voitureElec1->getInfos();