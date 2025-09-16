<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$result = "";
$len = mb_strlen($str, 'UTF-8');

for ($i = 0; $i < $len; $i++) {
    if ($i == $len - 1) {
        $result .= mb_substr($str, 0, 1, 'UTF-8');
    } else {
        $result .= mb_substr($str, $i + 1, 1, 'UTF-8');
    }
}

echo $result;
?>