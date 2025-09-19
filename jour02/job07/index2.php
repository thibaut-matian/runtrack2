<?php
$hauteur = 5; 

for ($i = 1; $i <= $hauteur; $i++) {
    // Espaces à gauche pour centrer le triangle
    for ($j = 1; $j <= $hauteur - $i; $j++) {
        echo "  ";
    }

    // Côté gauche "/"
    if ($i < $hauteur) {
        echo "/";
    } else {
        echo "/";
    }

    // Intérieur du triangle
    if ($i == $hauteur) {
        // Base remplie avec "_"
        for ($k = 1; $k <= (2 * $i - 2); $k++) {
            echo "_";
        }
    } else {
        // Sinon espaces à l’intérieur
        for ($k = 1; $k <= (2 * $i - 2); $k++) {
            echo "  ";
        }
    }

    // Côté droit "\"
    echo "\\";  

    // Retour à la ligne
    echo "<br />";
}
?>