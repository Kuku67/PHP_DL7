<?php

$imgURL = "http://my.mobirise.com/data/userpic/764.jpg";

function showImg($url) {
    return str_repeat("<img src='$url'>", 4);
}

echo showImg($imgURL);




