<?php

$date = date_create("2018-05-21");
$birthday = date_create("1985-01-17");

$age = date_diff($birthday, $date);

echo $age->format("L'individu a : %Y ans, %m mois et %d jours.<br>");