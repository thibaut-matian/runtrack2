<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$result = "";
$i = 0;

// Compter la longueur sans fonction
while (isset($str[$i])) {
    $i++;
}
$len = $i;

$i = 0;
while ($i < $len) {
    if ($i == $len - 1) {
        $result .= $str[0];
    } else {
        $result .= $str[$i + 1];
    }
    $i++;
}

echo $result;
?>