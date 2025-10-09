<?php
for ($i = 0; $i <= 1337; $i++) {
    // Vérification 
    if (
        $i == 26 ||
        $i == 37 ||
        $i == 88 ||
        $i == 1111 ||
        $i == 3233
    ) {
        continue;
    }
    echo "$i<br />";
}


$test = [26, 37, 88, 1111, 3233];

for ($i = 0; $i <= 1337; $i++) {
    if (in_array($i, $test, true)) {
        continue;
    }
    echo "$i<br />";
}
?>

?>