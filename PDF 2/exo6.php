<?php

$statutsArray = ['Madame', 'Monsieur', 'Mademoiselle'];

function showSelectList($array) {
    $selectList = "<form method='post'>";
    $selectList.=   "<label for='select'>Civilité :</label><br><br>
                        <select id='select'>";
    foreach($array as $statut) {
        $choice = strtolower($statut);
        $selectList.= "<option value='$choice'>$statut</option>";
    }
    $selectList.=     "</select>
                  </form>";
    
    return $selectList;
}

echo showSelectList($statutsArray);