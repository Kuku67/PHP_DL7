<?php

$countries = [
    'France' => 'Paris',
    'Allemange' => 'Berlin',
    'USA' => 'Washington',
    'Italie' => 'Rome'
];

function showTableHTML($array) {
    $countryTable = "";
    ksort($array);
    $countryTable.= "<table>
                        <thead>
                            <tr><th>Pays</th><th>Capitales</th></tr>
                        </thead>
                        <tbody>";
    foreach ($array as $country => $capitale) {
        $countryTable.=     "<tr><td style='padding: 10px;'>".strtoupper($country)."</td><td>".$capitale."</td></tr>"; 
    }
    $countryTable.= "  </tbody>
                     </table>";

    return $countryTable;
}

echo showTableHTML($countries);