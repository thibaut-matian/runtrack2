<?php
function leetSpeak($str) {
    $result = "";
    $i = 0;
    while (isset($str[$i])) {
        $char = $str[$i];
        
        // Conversion selon les règles leet speak
        if ($char === 'A' || $char === 'a') {
            $result .= '4';
        } elseif ($char === 'B' || $char === 'b') {
            $result .= '8';
        } elseif ($char === 'E' || $char === 'e') {
            $result .= '3';
        } elseif ($char === 'G' || $char === 'g') {
            $result .= '6';
        } elseif ($char === 'L' || $char === 'l') {
            $result .= '1';
        } elseif ($char === 'S' || $char === 's') {
            $result .= '5';
        } elseif ($char === 'T' || $char === 't') {
            $result .= '7';
        } else {
            $result .= $char;
        }
        
        $i++;
    }
    return $result;
}

// Tests de la fonction
echo leetSpeak("Hello World") . "<br>";  
echo leetSpeak("LaPlateforme") . "<br>"; 
echo leetSpeak("BONJOUR LES GENS") . "<br>"; 
echo leetSpeak("Vive One Piece") . "<br>";
?>
