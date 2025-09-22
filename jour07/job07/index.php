<?php
function gras($str) {
    $result = "";
    $i = 0;
    $debutMot = true;
    
    while (isset($str[$i])) {
        $char = $str[$i];
        
        if ($char === ' ') {
            $result .= $char;
            $debutMot = true;
        } elseif ($debutMot && (($char >= 'A' && $char <= 'Z'))) {
            // Début d'un mot avec majuscule, on commence le gras
            $result .= '<b>' . $char;
            $debutMot = false;
            
            // On continue jusqu'à la fin du mot
            $j = $i + 1;
            while (isset($str[$j]) && $str[$j] !== ' ') {
                $result .= $str[$j];
                $j++;
            }
            $result .= '</b>';
            $i = $j - 1; // -1 car on va incrémenter à la fin
        } else {
            $result .= $char;
            $debutMot = false;
        }
        
        $i++;
    }
    return $result;
}

function cesar($str, $decalage = 2) {
    $result = "";
    $i = 0;
    $alphabet_min = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $alphabet_maj = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    
    while (isset($str[$i])) {
        $char = $str[$i];
        $trouve = false;
        
        // Vérifier minuscules
        $j = 0;
        while ($j < 26 && !$trouve) {
            if ($alphabet_min[$j] === $char) {
                $nouvellePos = ($j + $decalage) % 26;
                $result .= $alphabet_maj[$nouvellePos];
                $trouve = true;
            }
            $j++;
        }
        
        // Vérifier majuscules
        if (!$trouve) {
            $j = 0;
            while ($j < 26 && !$trouve) {
                if ($alphabet_maj[$j] === $char) {
                    $nouvellePos = ($j + $decalage) % 26;
                    $result .= $alphabet_maj[$nouvellePos];
                    $trouve = true;
                }
                $j++;
            }
        }
        
        // Si pas trouvé, garder le caractère original
        if (!$trouve) {
            $result .= $char;
        }
        
        $i++;
    }
    return $result;
}

function plateforme($str) {
    $result = "";
    $i = 0;
    
    while (isset($str[$i])) {
        if ($str[$i] === ' ' || !isset($str[$i + 1])) {
            // Fin de mot, vérifier si se termine par "me"
            $motActuel = "";
            $j = $i;
            
            // Remonter pour récupérer le mot
            while ($j >= 0 && $str[$j] !== ' ') {
                $motActuel = $str[$j] . $motActuel;
                $j--;
            }
            
            // Vérifier si se termine par "me"
            $longueurMot = 0;
            $k = 0;
            while (isset($motActuel[$k])) {
                $longueurMot++;
                $k++;
            }
            
            if ($longueurMot >= 2 && $motActuel[$longueurMot - 2] === 'm' && $motActuel[$longueurMot - 1] === 'e') {
                $result .= "_";
            }
        }
        
        $result .= $str[$i];
        $i++;
    }
    return $result;
}

// Traitement du formulaire
if (isset($_POST['str']) && isset($_POST['fonction'])) {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];
    
    if ($fonction === 'gras') {
        echo gras($str);
    } elseif ($fonction === 'cesar') {
        echo cesar($str);
    } elseif ($fonction === 'plateforme') {
        echo plateforme($str);
    }
    echo "<br><br>";
}
?>

<form method="post">
    <label for="str">Texte :</label>
    <input type="text" name="str" id="str" placeholder="Entrez votre texte">
    <br><br>
    
    <label for="fonction">Fonction :</label>
    <select name="fonction" id="fonction">
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select>
    <br><br>
    
    <button type="submit">Transformer</button>
</form>
