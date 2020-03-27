<?php

function stringToUpperRed($string) {
    $string = '<p style="color: red;">'.mb_strtoupper($string).'</p>';
    return $string;
}

echo stringToUpperRed('Mon texte en paramètre');
