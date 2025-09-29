<?php

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "jour09";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);


if ($connexion->connect_error) {
    die("Connexion échouée: " . $connexion->connect_error);
}

$requete = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";
$resultat = $connexion->query($requete);

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Prenom</th>";
echo "<th>Nom</th>";
echo "<th>Naissance</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

if ($resultat->num_rows > 0) {
    while ($ligne = $resultat->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $ligne['prenom'] . "</td>";
        echo "<td>" . $ligne['nom'] . "</td>";
        echo "<td>" . $ligne['naissance'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>Aucune salle trouvée</td></tr>";
}

echo "</tbody>";
echo "</table>";

$connexion->close();
?>