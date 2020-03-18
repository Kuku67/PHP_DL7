<?php

function showCase($number, $color) {
    $black = ["Tour", "Cavalier", "Fou", "Reine", "Roi", "Fou", "Cavalier", "Tour", "Pion", "Pion","Pion", "Pion","Pion", "Pion","Pion", "Pion"];
    $white = array_reverse($black, true);
    switch($color) {
        case 'CoteNoir' : $rep = $black[$number]." NOIR"; break;
        case 'CoteBlanc' : $rep = $white[$number]." BLANC"; break;
    }
    return $rep;
}

$classe = "blanc";

for($i = 1; $i <= 64; $i++) {
    $div = "<div class='case $classe'>";
    if($i <= 16) {
        $div.= showCase($i-1, "CoteNoir");
    }
    if($i > 48) {
        $div.= showCase(64-$i, "CoteBlanc");
    }
    $div.= "</div>";
    if($i % 8 != 0) {
        if($classe == 'blanc') {
            $classe = 'noir';
        } else {
            $classe = 'blanc';
        }
    }
    echo $div;
}




$tableau = ['Jean', 'Marc', 'Goulougoulou'];

foreach($tableau as $value) {
    echo maFonction($value);
    // La fonction va return un truc (exemple un bouton) qui sera construit en fonction de $value
}

function maFonction($value) {
    return "<p>$value</p>";
}









































