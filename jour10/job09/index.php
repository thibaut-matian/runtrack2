<?php

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "jour09";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);


if ($connexion->connect_error) {
    die("Connexion échouée: " . $connexion->connect_error);
}

$requete = "SELECT *, (SELECT AVG(capacite) FROM salles) AS capacite_moyenne FROM salles";
$resultat = $connexion->query($requete);

echo "<h3>Informations des Salles et Capacité Moyenne</h3>";
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nom</th>";
echo "<th>ID Etage</th>";
echo "<th>Capacité</th>";
echo "<th>Capacité Moyenne</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

if ($resultat->num_rows > 0) {
    while ($ligne = $resultat->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $ligne['id'] . "</td>";
        echo "<td>" . $ligne['nom'] . "</td>";
        echo "<td>" . $ligne['id_etage'] . "</td>";
        echo "<td>" . $ligne['capacite'] . "</td>";
        echo "<td>" . round($ligne['capacite_moyenne'], 2) . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>Aucune salle trouvée</td></tr>";
}

echo "</tbody>";
echo "</table>";

$connexion->close();
?>