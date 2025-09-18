<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === "John" && $password === "Rambo") {
        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
?>
<form method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="text" name="password" placeholder="password" required />
    <input type="submit" value="Envoyer">
</form>
