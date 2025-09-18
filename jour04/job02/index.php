<?php

if (isset($_GET['prenom']) || isset($_GET['nom']) || isset($_GET['ville'])) {
    echo "<table border='1'>";
    echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
    echo "<tbody>";

    // Affichage sans fonction, juste isset et accès direct
    if (isset($_GET['prenom'])) {
        echo "<tr><td>prenom</td><td>" . $_GET['prenom'] . "</td></tr>";
    }
    if (isset($_GET['nom'])) {
        echo "<tr><td>nom</td><td>" . $_GET['nom'] . "</td></tr>";
    }
    if (isset($_GET['ville'])) {
        echo "<tr><td>ville</td><td>" . $_GET['ville'] . "</td></tr>";
    }

    echo "</tbody></table>";
}
?>
<form method="get">
    <input type="text" name="prenom" placeholder="Prénom">
    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="ville" placeholder="Ville">
    <input type="submit" value="Envoyer">
</form>