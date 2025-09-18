<?php
for ($i = 2; $i <= 1000; $i++) {
    $isFirst = true;
    $j = 2;
    while ($j * $j <= $i) { 
        if ($i % $j === 0) {
            $isFirst = false;
            break;
        }
        $j++;
    }
    if ($isFirst) {
        echo "$i<br />";
    }
}
?>