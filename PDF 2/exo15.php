<?php

$adress = "elan@elan-formation.fr";
$adress2 = "contact@elan";

function verifEmail($adress) {
    $cond = filter_var($adress, FILTER_VALIDATE_EMAIL);

    switch(true) {
        case $cond : $rep = "Format d'email valide.<br>"; break;
        default : $rep = "Format d'email invalide.<br>"; break;
    }
    return $rep;
}

echo verifEmail($adress);
echo verifEmail($adress2);