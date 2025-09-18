<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";

$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

$i = 0;
while (isset($str[$i])) {
    $isVoyelle = false;
    $j = 0;
    while (isset($voyelles[$j])) {
        if ($str[$i] == $voyelles[$j]) {
            $isVoyelle = true;
        }
        $j++;
    }
    if ($isVoyelle) {
        echo $str[$i];
    }
    $i++;
}
?>

