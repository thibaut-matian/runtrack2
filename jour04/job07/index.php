<form method="get">
    Largeur : <input type="text" name="largeur" placeholder="largeur">
    Hauteur : <input type="text" name="hauteur" placeholder="hauteur">
    <input type="submit" value="Afficher la maison">
</form>

<?php
$Space = '&nbsp;&nbsp;';
$LeftChar = '/';
$RightChar = '\\';

if (isset($_GET['largeur']) && isset($_GET['hauteur']) && $_GET['largeur'] > 2 && $_GET['hauteur'] > 1) {
    $Height = $_GET['hauteur'];
    $Largeur = $_GET['largeur'];

    // Triangle
    $innerSpace = '';
    $CountA = 0;
    while ($CountA < $Height) {
        $outerSpace = '';
        $countOuterSpaces = 0;
        while ($countOuterSpaces < ($Height - 1 - $CountA)) {
            $outerSpace .= $Space;
            $countOuterSpaces++;
        }
        echo $outerSpace . $LeftChar . $innerSpace . $RightChar . "<br />";
        $innerSpace .= $Space . $Space;
        $CountA++;
    }

    // Base du triangle
    $foot = '';
    $CountB = 0;
    while ($CountB < $Largeur) {
        $foot .= '_';
        $CountB++;
    }
    echo $foot . "<br />";

    // Rectangle
    $CountC = 0;
    while ($CountC < $Height) {
        echo "|" ;
        $CountD = 0;
        while ($CountD < $Largeur - 2) {
            echo $Space;
            $CountD++;
        }
        echo "|" . "<br />";
        $CountC++;
    }

    // Base du rectangle
    echo "|";
    $CountE = 0;
    while ($CountE < $Largeur - 2) {
        echo "_";
        $CountE++;
    }
    echo "|<br />";
}
?>