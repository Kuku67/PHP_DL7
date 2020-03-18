<?php

$toPay = 152;
$givenMoney = 200;

$moneyBack = $givenMoney - $toPay;

$tenBanknote = 0;
$fiveBanknote = 0;
$twoCoin = 0;
$oneCoin = 0;

echo "Montant à régler : $toPay €<br>
Montant versé : $givenMoney €<br>
Reste à payé : $moneyBack €<br><br>";

echo 'Méthode 1 : (boucles)<br><br>';
while($moneyBack >= 10) {
    $moneyBack -= 10;
    $tenBanknote++;
}

while($moneyBack >= 5) {
    $moneyBack -= 5;
    $fiveBanknote++;
}

while($moneyBack >= 2) {
    $moneyBack -= 2;
    $twoCoin++;
}

while($moneyBack >= 1) {
    $moneyBack -= 1;
    $oneCoin++;
}

echo 'Rendu de Monnaie : <br><br>';
echo "$tenBanknote billet(s) de 10 euros.<br>
      $fiveBanknote billet(s) de 5 euros.<br>
      $twoCoin pièce(s) de 2 euros.<br>
      $oneCoin pièce(s) de 1 euro.<br>";


echo '<br>Méthode 2 : (divisions brutes)<br><br>';
$toPay = 152;
$givenMoney = 200;

$moneyBack = $givenMoney - $toPay;

$tenBanknote = 0;
$fiveBanknote = 0;
$twoCoin = 0;
$oneCoin = 0;

$tenBanknote = floor($moneyBack / 10);
$moneyBack -= $tenBanknote * 10;
$fiveBanknote = floor($moneyBack / 5);
$moneyBack -= $fiveBanknote * 5;
$twoCoin = floor($moneyBack / 2);
$moneyBack -= $twoCoin * 2;
$oneCoin = floor($moneyBack / 1);
$moneyBack -= $oneCoin * 1;

echo 'Rendu de Monnaie : <br><br>';
echo "$tenBanknote billet(s) de 10 euros.<br>
      $fiveBanknote billet(s) de 5 euros.<br>
      $twoCoin pièce(s) de 2 euros.<br>
      $oneCoin pièce(s) de 1 euro.<br>";














