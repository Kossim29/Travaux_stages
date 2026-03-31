<?php
require 'connexion.php';
include 'header.php';
if(isset($_POST['modifier']))
{
    $id = $_POST['id'];
    $nom = htmlspecialchars($_POST['nomcomplet']);
    $telephone = htmlspecialchars($_POST['telephone']);

    $q = $pdo->prepare("UPDATE livreur SET nomcomplet=?, telephone=? WHERE id=?");
    $q->execute([$nom, $telephone, $id]);

    header("Location: li_lire.php");
    exit();
}
?>