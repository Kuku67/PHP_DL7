<?php

$users = [
    'Mickaël' => 'FRA',
    'Virgile' => 'ESP',
    'Marie-Claire' => 'ENG'
];

echo 'Méthode 1 :<br><br>';
function sayHello($table) {
    foreach($table as $user => $language) {
        switch($language) {
            case 'FRA' :
                echo "Bonjour $user !<br>";
            break;

            case 'ESP' :
                echo "Hola $user !<br>";
            break;

            case 'ENG' :
                echo "Hello $user !<br>";
            break;
        }
    }
}

echo sayHello($users) . '<br><br>';


$users = [
    'Mickaël' => 'FRA',
    'Virgile' => 'ESP',
    'Marie-Claire' => 'ENG'
];

$languages = [
    'FRA' => 'Bonjour ',
    'ESP' => 'Hola ',
    'ENG' => 'Hello '
];

echo 'Méthode 2 : (avec 2 tableaux associatifs)<br><br>';
function sayHello2($table, $languages) {
    foreach($table as $user => $language) {
        foreach($languages as $languageType => $answer) {
            switch($language) {
                case $languageType :
                    $result = $answer;
            }
        }

        echo "$result $user<br>";
    }
}

echo sayHello2($users, $languages);