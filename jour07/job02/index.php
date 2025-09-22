<?php
function bonjour($jour) {
    if ($jour === true) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Test de la fonction
bonjour(true);  // Affiche "Bonjour"
echo "<br>";
bonjour(false); // Affiche "Bonsoir"
?>