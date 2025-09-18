<?php

$str = "Les choses que l'on possède finissent par nous possèder.";

$i = 0;
while (isset($str[$i])) {
    $i++;
}

$i--;
while ($i >= 0) {
    echo $str[$i];
    $i--;
}
?>
