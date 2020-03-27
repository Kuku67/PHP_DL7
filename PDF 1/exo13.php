<?php

$results = [10, 12, 8, 19, 3, 16, 11, 13, 9];

echo "Notes obtenues par l'élève :".implode(" ", $results);

echo "<br><br> La moyenne de cet élève est : ".round(array_sum($results)/count($results), 2)." à 2 décimales près.";