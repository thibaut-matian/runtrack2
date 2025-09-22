<?php
// Vérifier si le bouton déconnexion a été cliqué
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); // Supprimer le cookie
    unset($_COOKIE['prenom']);
}

// Vérifier si le formulaire de connexion a été soumis
if (isset($_POST['connexion']) && isset($_POST['prenom']) && $_POST['prenom'] !== '') {
    setcookie('prenom', $_POST['prenom'], time() + 3600 * 24 * 30); // 30 jours
    $_COOKIE['prenom'] = $_POST['prenom']; // Pour affichage immédiat
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion utilisateur</title>
</head>
<body>
    <h1>Système de connexion</h1>
    
    <?php
    // Vérifier si l'utilisateur est connecté
    if (isset($_COOKIE['prenom']) && $_COOKIE['prenom'] !== '') {
        // Utilisateur connecté
        echo "<h2>Bonjour " . $_COOKIE['prenom'] . " !</h2>";
        echo '<form method="post">';
        echo '<button type="submit" name="deco">Déconnexion</button>';
        echo '</form>';
    } else {
        // Afficher le formulaire de connexion
        echo '<form method="post">';
        echo '<label for="prenom">Prénom :</label>';
        echo '<input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" required>';
        echo '<button type="submit" name="connexion">Connexion</button>';
        echo '</form>';
    }
    ?>
</body>
</html>
