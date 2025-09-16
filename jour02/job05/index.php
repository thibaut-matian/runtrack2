<?php
for ($i = 2; $i <= 1000; $i++) {
    $isFirst = true;
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j === 0) {
            $isFirst = false;
            break;
        }
    }
    if ($isFirst) {
        echo "$i<br />";
    }
}
?>