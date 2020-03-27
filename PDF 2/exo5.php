<?php

$inputArray = ['Nom', 'Prénom', 'Ville'];

function showInputs($array) {
    $inputList = "<form method='post'>";
    foreach($array as $input) {
        $inputList.= "<label for='name'>$input :</label><br>
                      <input type='text' id='$input' name='$input' required><br><br>";
    }
    $inputList.= "</form>";
    return $inputList;
}

echo showInputs($inputArray);