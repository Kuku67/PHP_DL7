<?php

$valuesTable = array(true, 'texte', 10, 25.369, array("valeur1", "valeur2"));

foreach($valuesTable as $value) {
    echo var_dump($value)."<br>";
}