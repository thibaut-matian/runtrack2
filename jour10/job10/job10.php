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
// Requête SQL pour récupérer tous les étudiants
$requete = "SELECT * FROM  salles ORDER BY capacite ASC";
$resultat = $connexion->query($requete);


echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nom</th>";
echo "<th>ID Etages</th>";
echo "<th>Capacité</th>";
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
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>Aucun étudiant trouvé</td></tr>";
}

echo "</tbody>";
echo "</table>";

?>