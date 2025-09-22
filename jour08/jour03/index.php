<?php
session_start();

// Initialiser le tableau des prénoms s'il n'existe pas
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Vérifier si le bouton reset a été cliqué
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}

// Vérifier si un prénom a été soumis
if (isset($_POST['prenom']) && $_POST['prenom'] !== '') {
    $_SESSION['prenoms'][] = $_POST['prenom'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des prénoms</title>
</head>
<body>
    <h1>Ajout de prénoms</h1>
    
    <form method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" placeholder="Entrez un prénom">
        <button type="submit">Ajouter</button>
    </form>
    
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
    
    <h2>Liste des prénoms :</h2>
    <?php
    if (isset($_SESSION['prenoms']) && count($_SESSION['prenoms']) > 0) {
        echo "<ul>";
        $i = 0;
        while (isset($_SESSION['prenoms'][$i])) {
            echo "<li>" . $_SESSION['prenoms'][$i] . "</li>";
            $i++;
        }
        echo "</ul>";
    } else {
        echo "<p>Aucun prénom enregistré.</p>";
    }
    ?>
</body>
</html>