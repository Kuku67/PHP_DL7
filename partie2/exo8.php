<?php

$imgURL = "http://my.mobirise.com/data/userpic/764.jpg";

function showImg($url, $number) {
    $images = "";
    for($i = 0; $i < $number; $i++) {
        $images.= "<img src='$url'>";
    }
    return $images;
}

echo showImg($imgURL, 4);




