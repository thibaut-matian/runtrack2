<?php

$str = "Les choses que l'on possède finissent par nous possèder.";

for ($i = mb_strlen($str, 'UTF-8') - 1; $i >= 0; $i--) {
    echo mb_substr($str, $i, 1, 'UTF-8');
}
?>
