<?php

$number = 8;

echo 'Boucle 1 : "for"<br><br>';
for($i = 0; $i < 10; $i++) {
    echo "$i x $number = ".$i*$number."<br>";
}

echo '<br>Boucle 2 : "while"<br><br>';
$i = 0;
while($i < 10) {
    echo "$i x $number = ".$i*$number."<br>";
    $i++;
}
