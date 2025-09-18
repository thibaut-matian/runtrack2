<?php

$str = "Dans l'espace, personne ne vous entend crier.";

$nbCaracters = 0;
$i = 0;
while (isset($str[$i])) {
    $nbCaracters++;
    $i++;
}

echo "Le nombre de caracteres dans la chaîne est de : $nbCaracters ";
?>