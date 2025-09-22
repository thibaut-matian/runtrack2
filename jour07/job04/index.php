<?php
function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Erreur : division par zéro";
            }
        case '%':
            if ($b != 0) {
                return $a % $b;
            } else {
                return "Erreur : modulo par zéro";
            }
        default:
            return "Erreur : opération non reconnue";
    }
}

// Tests de la fonction
echo calcule(10, '+', 5) . "<br>";  
echo calcule(10, '-', 5) . "<br>";  
echo calcule(10, '*', 5) . "<br>";  
echo calcule(10, '/', 5) . "<br>";  
echo calcule(10, '%', 3) . "<br>";  
?>
