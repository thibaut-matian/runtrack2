<?php
session_start();

// Vérifier si le bouton reset a été cliqué
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

// Initialiser, incrémenter le compteur de visites
if (isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites']++;
} else {
    $_SESSION['nbvisites'] = 1;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Compteur de visites</h1>
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>
    
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>