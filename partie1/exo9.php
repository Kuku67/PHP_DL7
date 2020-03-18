<?php

echo "Méthode 1 : (toute moche)<br><br>";

$sexe = 'Femme';
$age = 17;

if($sexe == 'Femme') {
    if($age > 17 && $age < 35) {
        echo 'Cette femme est imposable.<br>';
    } else {
        echo 'Cette femme n\'est pas imposable.<br>';
    }
} else {
    if($age > 20) {
        echo 'Cet homme est imposable.<br>';
    } else {
        echo 'Cet homme n\'est pas imposable.<br>';
    }
}

echo "<br>Méthode 2 : (moins moche)<br><br>";

$sexe = 'Femme';
$age = 34;

$conditionHomme = $age > 20;
$conditionFemme = $age > 20 && $age < 35;

if($sexe == 'Femme') {
    switch($conditionFemme) {
        case true : $rep = "Cette femme est imposable"; break;
        case false : $rep = "Cette femme n'est pas imposable"; break;
    }
} else {
    switch($conditionHomme) {
        case true : $rep = "Cet homme est imposable"; break;
        case false : $rep = "Cet homme n'est pas imposable"; break;
    }
}

echo $rep . "<br><br>";

echo "Méthode 3 : (Ah ! Bien mieux)<br><br>";

$sexe = 'Femme';
$age = 32;

$conditionFemme = $sexe == 'Femme' && $age > 20 && $age < 35;
$conditionHomme = $sexe == 'Homme' && $age > 20;

switch(true) {
    case $conditionFemme || $conditionHomme : $rep = "Cette personne est imposable"; break;
    default : $rep = "Cette personne n'est pas imposable"; break;
}

echo $rep;
