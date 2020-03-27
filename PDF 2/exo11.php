<?php

$date = '2018-02-23';

function dateToFrench($date) {
    setlocale(LC_TIME, 'fr_FR', 'french', 'French_France.1252', 'fr_FR.ISO8859-1', 'fra');
    return ucfirst(utf8_encode(strftime("%A %d %B %G", strtotime($date))));
}

echo dateToFrench($date);

