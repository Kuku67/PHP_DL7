<?php

$statutsArray = ['Madame', 'Monsieur', 'Mademoiselle'];

function showRadioList($array) {
    $radioList = "";
    $radioList.= "<p>Sélectionnez un choix :</p>";
    foreach($array as $statut) {
        $statutValue = strtolower($statut);
        $radioList.= "<div>
                        <input type='radio' id='$statutValue' name='button'>
                        <label for='$statutValue'>$statut</label>
                      </div>";
    }
    return $radioList;
}

echo showRadioList($statutsArray);