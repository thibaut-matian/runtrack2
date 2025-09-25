<?php

$str = "Dans l'espace, personne ne vous entend crier.";

$nbCaracters = 0;
$parcourir  = 0;
while (isset($str[$parcourir])) {
    $nbCaracters++;
    $parcourir++;
}

echo "Le nombre de caracteres dans la chaîne est de : $nbCaracters ";
?>