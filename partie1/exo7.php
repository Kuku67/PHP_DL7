<?php

echo "Méthode 1 : <br><br>";

$age = 5;
$default = '';

if($age > 12) {
    $category = 'Cadet.';
} else if($age > 10) {
    $category = 'Minime.';
} else if($age > 8) {
    $category = 'Pupille.';
} else if ($age > 6) {
    $category = 'Poussin.';
} else {
    $default = 'Catégorie non gérée.';
}

if($default) {
    echo $default;
} else {
    echo "La catégorie de l'individu est : $category";
}


echo "<br><br>Méthode 2 : <br><br>";

$lowerRange = range(0, 6);
$higherRange = range(18, 99);
$poussin = range(7, 8);
$pupille = range(9, 10);
$minime = range(11, 12);
$cadet = range(13, 18);

$age = 9;

switch(true) {
    case in_array($age, $lowerRange) :
        $answer = "L'âge est trop bas pour avoir une catégorie !";
    break;
    case in_array($age, $higherRange) :
        $answer = "L'âge est trop haut pour appartenir à une catégorie";
    break;
    case in_array($age, $poussin) :
        $answer = "La catégorie est poussin !";
    break;
    case in_array($age, $pupille) :
        $answer = "La catégorie est pupille !";
    break;
    case in_array($age, $minime) :
        $answer = "La catégorie est minime !";
    break;
    case in_array($age, $cadet) :
        $answer = "La catégorie est cadet !";
    break;
    default :
        $answer = "Catégorie non gérée !";
    break;
}

echo $answer;

echo "<br><br>Méthode 3 : <br><br>";

$age = 5;
$cat = "";
switch(true){
    case $age >= 12: $cat = "Cadet"; break;
    case $age >= 10: $cat = "Minime"; break;
    case $age >= 8 : $cat = "Pupille"; break;
    case $age >= 6 : $cat = "Poussin"; break;
    default : $cat = "Non gérée";
}
echo "L'enfant qui a $age ans appartient à la catégorie : $cat";
