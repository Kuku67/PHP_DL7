<?php

$cars = ['Peugeot', 'Renault', 'BMW', 'Mercedes'];

// FIRST WAY
echo 'Méthode 1 : "foreach"<br><br>';
foreach($cars as $car) {
    echo "<li>$car</li>";
}

// SECOND WAY
echo '<br>Méthode 2 : "for"<br><br>';
for($i = 0; $i < count($cars); $i++) {
    echo "<li>$cars[$i]</li>";
}