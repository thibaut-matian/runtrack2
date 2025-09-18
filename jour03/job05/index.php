<?php

$str = "On n'est pas le meilleur quand on le croit mais quand on le sait.";

$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

$i = 0;
while (isset($str[$i])) {
    $char = $str[$i];
    // Vérifier si c'est une lettre (sans fonction)
    if (
        ($char >= 'a' && $char <= 'z') ||
        ($char >= 'A' && $char <= 'Z')
    ) {
        // Vérifier si c'est une voyelle
        $isVoyelle = false;
        $j = 0;
        while (isset($voyelles[$j])) {
            if ($char == $voyelles[$j]) {
                $isVoyelle = true;
            }
            $j++;
        }
        if ($isVoyelle) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
    $i++;
}

echo "<table border='1'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>{$dic['voyelles']}</td><td>{$dic['consonnes']}</td></tr></tbody>";
echo "</table>";
?>