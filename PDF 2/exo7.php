<?php

$checkboxArray = [
    'Choix 1' => false,
    'Choix 2' => true,
    'Choix 3' => false
];

function showCheckboxes($array) {
    $checkbox = "<p>Choisissez :</p>";
    foreach($array as $choice => $value) {
        switch($value) {
            case true : $value = ' checked'; break;
            case false : $value = ''; break;
        }
    $choiceValue = strtolower($choice);
    // EACH DIV IS ADDED NEXT TO THE PREVIOUS, NEEDED TO RETURN ONLY 1 VALUE AS COMPLETE HTML
    $checkbox.= "<form method='post'>
                    <div>
                        <input type='checkbox' id='$choiceValue' name='$choiceValue' $value>
                        <label for='$choiceValue'>$choice</label>
                    </div>
                </form>";
    }
    return $checkbox;
}

echo showCheckboxes($checkboxArray);