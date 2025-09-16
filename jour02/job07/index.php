<?php
$hauteur = 5;

echo "<pre>";
for ($i = 1; $i <= $hauteur; $i++) {

    echo str_repeat(" ", $hauteur - $i);
    
    echo "/";
    
    if ($i == $hauteur) {
        echo str_repeat("_", 2 * $i - 2);
    } else {
        echo str_repeat(" ", 2 * $i - 2);
    }
   
    echo "\\";
    echo "\n";
}
echo "</pre>";
?>