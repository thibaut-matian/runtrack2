<form method="get">
    <input type="text" name="nombre" placeholder="nombre">
    <input type="submit" value="Envoyer">
</form>

<?php
if (isset($_GET['nombre']) && $_GET['nombre'] !== "") {
    $nombre = $_GET['nombre'];
    // Vérification sans fonction
    if ($nombre >= 0 || $nombre < 0) {
        if ($nombre % 2 == 0) {
            echo "Le nombre est pair";
        } else {
            echo "Le nombre est impair";
        }
    } else {
        echo "Veuillez entrer un nombre valide";
    }
}
?>