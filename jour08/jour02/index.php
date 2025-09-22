<?php
// Vérifier si le bouton reset a été cliqué
if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() + 3600 * 24 * 30); // 30 jours
    $_COOKIE['nbvisites'] = 0;
}

// Initialiser ou incrémenter le compteur de visites
if (isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    $nbvisites = 1;
}

// Mettre à jour le cookie
setcookie('nbvisites', $nbvisites, time() + 3600 * 24 * 30); // 30 jours
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites avec cookie</title>
</head>
<body>
    <h1>Compteur de visites</h1>
    <p>Nombre de visites : <?php echo $nbvisites; ?></p>
    
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
