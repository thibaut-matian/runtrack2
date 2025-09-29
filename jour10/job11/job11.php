<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "jour09";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Connexion échouée: " . $connexion->connect_error);
}

// Requête SQL pour récupérer la capacité moyenne
$requete_moyenne = "SELECT AVG(capacite) AS capacite_moyenne FROM salles";
$resultat_moyenne = $connexion->query($requete_moyenne);

// Requête SQL pour récupérer toutes les informations des salles
$requete_salles = "SELECT * FROM salles";
$resultat_salles = $connexion->query($requete_salles);

// Affichage de la capacité moyenne
echo "<h3>Capacité Moyenne des Salles</h3>";
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Capacité Moyenne</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

if ($resultat_moyenne->num_rows > 0) {
    while ($ligne = $resultat_moyenne->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . round($ligne['capacite_moyenne'], 2) . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td>Aucune donnée trouvée</td></tr>";
}

echo "</tbody>";
echo "</table>";

// Affichage des informations des salles
echo "<h3>Informations des Salles</h3>";
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nom</th>";
echo "<th>ID Etage</th>";
echo "<th>Capacité</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

if ($resultat_salles->num_rows > 0) {
    while ($ligne = $resultat_salles->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $ligne['id'] . "</td>";
        echo "<td>" . $ligne['nom'] . "</td>";
        echo "<td>" . $ligne['id_etage'] . "</td>";
        echo "<td>" . $ligne['capacite'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>Aucune salle trouvée</td></tr>";
}

echo "</tbody>";
echo "</table>";

$connexion->close();
?>