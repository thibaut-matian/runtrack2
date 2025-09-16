<?php
$boolVar = true;
$intVar = 42;
$stringVar = "LaPlateforme";
$floatVar = 3.14;


$variables = [
    ['type' => 'boolean', 'nom' => 'boolVar', 'valeur' => $boolVar ? 'true' : 'false'],
    ['type' => 'entier', 'nom' => 'intVar', 'valeur' => $intVar],
    ['type' => 'chaîne', 'nom' => 'stringVar', 'valeur' => $stringVar],
    ['type' => 'flottant', 'nom' => 'floatVar', 'valeur' => $floatVar]
];


echo "<table border='1'>";
echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>";
echo "<tbody>";
foreach ($variables as $var) {
    echo "<tr>";
    echo "<td>{$var['type']}</td>";
    echo "<td>{$var['nom']}</td>";
    echo "<td>{$var['valeur']}</td>";
    echo "</tr>";
}
echo "</tbody></table>";
?>