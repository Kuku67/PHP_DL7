<?php

class Voiture {

    // 3 VARIABLES VIA LE CONSTRUCTEUR, 2 VARIABLES AUTOMATIQUES
    protected $marque;
    protected $modele;
    protected $nbPortes;
    protected $vitesseActuelle = 0;
    protected $statut = false;

    public function __construct($marque, $modele, $nbPortes) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
    }

    public function __set($parametre, $valeur) {
        $this->$parametre = $valeur;
    }

    public function __get($parametre) {
        return $this->$parametre;
    }

    // RETOURNERA LES INFOS PRINCIPALES POUR ALLEGER LE CODE
    public function getInfos() {
        return $this->marque} {$this->modele;
    }

    public function __toString() {
        switch($this->statut) {
            case true : $statut = "démarré"; break;
            case false : $statut = "éteint"; break;
        }
        return "Infos du véhicule :<br>
                **********************<br>
                Nom et modèle du véhicule : {$this->getInfos()}<br>
                Nombre de portes : {$this->nbPortes}<br>
                Le véhicule est : {$statut}<br>
                Sa vitesse actuelle est de : {$this->vitesseActuelle} Km/h<br><br><br>";
    }

    // FONCTION PERMETTANT DE DEMARRER LE VEHICULE, AVEC VERIFICATION DU STATUT
    public function demarrer() {
        if($this->statut) {
            $return = "Véhicule {$this->getInfos()} déjà démarré, impossible de démarrer.<br>";
        } else {
            $this->statut = true;
            $return = "Le véhicule {$this->getInfos()} démarre...<br>";
        }
        return $return;
    }

    // FONCTION PERMETTANT D'ACCELERER EN ATTRIBUANT UNE VALEUR, AVEC VERIFICATION DU STATUT
    public function accelerer($valeur) {
        if($this->statut) {
            $this->vitesseActuelle += $valeur;
            $return = "Le véhicule {$this->getInfos()} accélère...<br>
                       Sa vitesse est maintenant de : {$this->vitesseActuelle} Km/h.<br>";

        } else {
            $return = "Attention, le véhicule {$this->getInfos()} doit d'abord démarrer avant de pouvoir accélérer.<br>";
        }
        return $return;
    }

    // FONCTION PERMETTANT DE STOPPER LE VEHICULE, EN VERIFIANT SON STATUT, PUIS SA VITESSE
    public function stopper() {
        if($this->statut) {
            if($this->vitesseActuelle != 0) {
                $return = "Le véhicule {$this->getInfos()} doit d'abord ralentir à 0 Km/h avant de couper de contact.<br>";
            } else {
                $this->statut = false;
                $return = "Le véhicule {$this->getInfos()} coupe le contact.<br>";
            }
        } else {
            $return = "Le contact du véhicule {$this->getInfos()} est déjà coupé.<br>";
        }

        return $return;
    }

    // FONCTION PERMETTANT DE RALENTIR, EN VERIFIANT LE STATUT, PUIS SA VITESSE
    public function ralentir($valeur) {
        if($this->statut) {
            if($this->vitesseActuelle > 0) {
                $this->vitesseActuelle -= $valeur;
                $return = "Le véhicule {$this->getInfos()} ralentit... Sa vitesse est maintenant de : {$this->vitesseActuelle} Km/h.<br>";
            } else {
                $return = "La vitesse du véhicule {$this->getInfos()} est déjà de 0 Km/h, impossible de ralentir.<br>";
            }
        } else {
            $return = "Le contact du véhicule {$this->getInfos()} est coupé, impossible de ralentir.<br>";
        }
        return $return;
    }

    // FONCTION QUI PERMET D'OBTENIR UN BREF TOPO SUR LA VITESSE D'UN VEHICULE AVEC LES INFOS
    public function getVitesse() {
        return "La vitesse du véhicule {$this->getInfos()} est de : {$this->vitesseActuelle} Km/h.<br>";
    }

}

// ON INSTANCIE LES 2 VEHICULES, AVEC 3 PARAMETRES POUR LE CONSTRUCTEUR
$voiture1 = new Voiture("Peugeot", "408", 5);
$voiture2 = new Voiture("Citroën", "C4", 3);

echo $voiture1;
echo $voiture2;

echo $voiture1->demarrer();
echo $voiture1->accelerer(50);
echo $voiture2->demarrer();
echo $voiture2->stopper();
echo $voiture2->accelerer(20);
echo $voiture1->getVitesse();
echo $voiture2->getVitesse();