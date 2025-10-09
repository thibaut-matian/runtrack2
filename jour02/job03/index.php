<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i === 42) {
        echo "La Plateforme_<br />";
    } elseif ($i >= 0 && $i <= 20) {
        echo "<i>$i</i><br />";
    } elseif ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br />";
    } else {
        echo "$i<br />";
    }
}

echo "<hr>";


$zoneItalique = range(0, 20);
$zoneSouligne = range(25, 50);

foreach (range(0, 100) as $i) {
    if ($i === 42) {
        echo "La Plateforme_<br />";
    } elseif (in_array($i, $zoneItalique, true)) {
        echo "<i>$i</i><br />";
    } elseif (in_array($i, $zoneSouligne, true)) {
        echo "<u>$i</u><br />";
    } else {
        echo "$i<br />";
    }
}

?>