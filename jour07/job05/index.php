<?php
function occurrences($str, $char) {
    $count = 0;
    $i = 0;
    while (isset($str[$i])) {
        if ($str[$i] === $char) {
            $count++;
        }
        $i++;
    }
    return $count;
}

// Test de la fonction
$str = "Bonjour";
$char = "o";
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . occurrences($str, $char) . "<br>";

// Autres tests
echo "Le nombre d'occurrences de 'n' dans 'Bonjour' est : " . occurrences("Bonjour", "n") . "<br>";
echo "Le nombre d'occurrences de 'r' dans 'Bonjour' est : " . occurrences("Bonjour", "r") . "<br>";
?>
