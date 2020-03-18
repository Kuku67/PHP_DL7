<?php

$countries = [
    'France' => 'Paris',
    'Allemange' => 'Berlin',
    'USA' => 'Washington',
    'Italie' => 'Rome'
];

function showTableHTML($array) {
    $countryTable = "";
    $countryTable.= "<table>
            <tr><th>Pays</th><th>Capitales</th><th>Lien Wiki</th></tr>";
    foreach ($array as $country => $capitale) {
        $countryTable.= "<tr><td style='padding: 10px;'>".strtoupper($country)."</td><td>".$capitale."</td><td><a href='https://fr.wikipedia.org/wiki/".$capitale."' target='_blank'>Lien</a></td></tr>"; 
    }
    $countryTable.= "</table>";
    return $countryTable;
}

echo showTableHTML($countries);