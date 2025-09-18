<?php 

if (!empty($_POST)) {
    echo "<table border='1'>";
    echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
    echo "<tbody>";
    foreach ($_POST as $arg => $val) {
        echo "<tr><td>$arg</td><td>$val</td></tr>";
    }
    echo "</tbody></table>";
}
?>

<form method="post">
    <input type="text" name="prenom" placeholder="Prénom">
    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="ville" placeholder="Ville">
    <input type="submit" value="Envoyer">
</form>