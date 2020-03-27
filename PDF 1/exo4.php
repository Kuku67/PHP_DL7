<?php

// SETTING MY SENTENCE
$maPhrase = 'Engage le jeu que je le gagne';
// LOWERING CHARS AND DELETE SPACES
$phraseFormatee = str_replace(' ', '', strtolower($maPhrase));

// IF THE REVERSE IS THE SAME THING AS THE FORMATED SENTENCE
if(strrev($phraseFormatee) == $phraseFormatee) {
    echo "La phrase « $maPhrase » est palindrome.";
} else {
    echo "La phrase « $maPhrase » n'est pas palindrome.";
}


