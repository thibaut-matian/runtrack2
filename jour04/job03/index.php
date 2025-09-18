<?php

echo "Le nombre d'argument POST envoyé est : " . count($_POST);

?>

<form method="post">
    <input type="text" name="champ1" placeholder="Champ 1">
    <input type="text" name="champ2" placeholder="Champ 2">
    <input type="text" name="champ3" placeholder="Champ 3">
    <input type="submit" value="Envoyer">
</form>