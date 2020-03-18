<?php

$inputArray = ['Nom', 'Prénom', 'Ville'];

function showInputs($array) {
    $inputList = "";
    foreach($array as $input) {
        $inputList.= "<label for='name'>$input :</label><br>
              <input type='text' id='$input' name='$input' required><br><br>";
    }
    return $inputList;
}

echo showInputs($inputArray);