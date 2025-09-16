<?php

$str = "On n'est pas le meilleur quand on le croit mais quand on le sait.";

$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

for ($i = 0, $i < strlen($str); $i++) {

    $char = $str[$i];
    (ctype_alpha($char)){
        if (in_array($char,$voyelles)){
            $dic ["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

