<?php

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "jour09";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);



if ($connexion->connect_error) {
    die("Connexion échouée: " . $connexion->connect_error);
}


$requete = "SELECT salles.nom AS nom_salle, etages.nom AS nom_etage FROM salles JOIN etages ON salles.id_etage = etages.id";
$resultat = $connexion->query($requete);

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nom de la Salle</th>";
echo "<th>Nom de l'Étage</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

if ($resultat->num_rows > 0) {
    while ($ligne = $resultat->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $ligne['nom_salle'] . "</td>";
        echo "<td>" . $ligne['nom_etage'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='2'>Aucune donnée trouvée</td></tr>";
}

echo "</tbody>";
echo "</table>";

$connexion->close();
?>