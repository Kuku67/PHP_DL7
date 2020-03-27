<?php

$price = 9.99;
$quantity = 5;
$VAT = 0.2;
$finalPrice = ($price * $quantity) * (1 + $VAT);
echo "Prix unitaire de l\'article : $price €.<br>
      Quantité : $quantity<br>
      Taux de TVA : $VAT<br>
      Le montant de la facture à régler est de : $finalPrice €.";