<?php
session_start();

$message = "";

if (isset($_POST['password'])) {
    $password = $_POST['password'];

    if ($password === "getech") {
        $_SESSION['connecte'] = true;
        header("Location: li_lire.php");
        exit();
    } else {
        $message = "Mot de passe incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> Page De Connexion</title>
</head>
<body>

<h2> Page de Connexion</h2>

<form method="POST">
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit">Se connecter</button>
</form>

<p style="color:red;">
    <?php echo $message; ?>
</p>

</body>
</html>