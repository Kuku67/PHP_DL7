<?php

$black = ["Tour", "Cavalier", "Fou", "Reine", "Roi", "Fou", "Cavalier", "Tour", "Pion", "Pion","Pion", "Pion","Pion", "Pion","Pion", "Pion"];
$white = array_reverse($black);

function showChessboard ($black, $white) {
    $i = 0;
    $delimiter = 8;
    echo "<table>
            <thead>
            </thead>
            <tbody>
                <tr>";
                for($i = 0; $i < $delimiter; $i++) {
                    if($i % 2 == 0) {
                        echo "<td>$black[$i] NOIR</td>";
                    } else {
                        echo "<td class='black'>$black[$i] NOIR</td>";
                    }
                }
                array_splice($black, 0, $delimiter);
    echo       "</tr>";
    echo       "<tr>";
                for($i = 0; $i < $delimiter; $i++) {
                    if($i % 2 != 0) {
                        echo "<td>$black[$i] NOIR</td>";
                    } else {
                        echo "<td class='black'>$black[$i] NOIR</td>";
                    }
                }
    echo       "</tr>";
    // FIN PARTIE DU HAUT
    echo        "<tr>";
                for($i = 0; $i < $delimiter; $i++) {
                    if($i % 2 == 0) {
                        echo "<td></td>";
                    } else {
                        echo "<td class='black'></td>";
                    }
                }
    echo        "</tr>";
    echo        "<tr>";
                for($i = 0; $i < $delimiter; $i++) {
                    if($i % 2 != 0) {
                        echo "<td></td>";
                    } else {
                        echo "<td class='black'></td>";
                    }
                }
    echo        "</tr>";
    echo        "<tr>";
                for($i = 0; $i < $delimiter; $i++) {
                    if($i % 2 == 0) {
                        echo "<td></td>";
                    } else {
                        echo "<td class='black'></td>";
                    }
                }
    echo        "</tr>";
    echo        "<tr>";
                for($i = 0; $i < $delimiter; $i++) {
                    if($i % 2 != 0) {
                        echo "<td></td>";
                    } else {
                        echo "<td class='black'></td>";
                    }
                }
    echo        "</tr>";
    // DEBUT PARTIE DU BAS
    echo        "<tr>";
                for($i = 0; $i < $delimiter; $i++) {
                    if($i % 2 == 0) {
                        echo "<td>$white[$i] BLANC</td>";
                    } else {
                        echo "<td class='black'>$white[$i] BLANC</td>";
                    }
                }
                array_splice($white, 0, $delimiter);
    echo        "</tr>";
    echo        "<tr>";
                for($i = $delimiter-1; $i >= 0; $i--) {
                    if($i % 2 == 0) {
                        echo "<td>$white[$i] BLANC</td>";
                    } else {
                        echo "<td class='black'>$white[$i] BLANC</td>";
                    }
                }
    echo        "</tr>
            </tbody>
         </table>";
}

showChessboard($black, $white);

?>