<?php

for ($i = 0; $i <= 1337; $i++) {
    if ($i === 42) {
        echo "<b><u>$i</u></b><br />";
    } else {
        echo "$i<br />";
    }
}

foreach (range(0, 1337) as $i) {
    echo ($i === 42) ? "<b><u>$i</u></b><br />" : "$i<br />";
}

?>