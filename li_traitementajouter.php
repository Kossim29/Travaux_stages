<?php
include 'header.php';
require 'connexion.php';
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    try {
        $nomcomplet = htmlspecialchars($_POST['nomcomplet']);
$telephone = htmlspecialchars($_POST['telephone']);
//$email = htmlspecialchars($_POST['email']);
$q = $pdo->prepare("INSERT INTO livreur(nomcomplet,telephone) VALUES(?,?)");
$q->execute(array($nomcomplet,$telephone));
header("Location:li_lire.php");
    } catch (PDOException $e){
        die ("ERREUR LORS DE L'AJOUT".$e->getMessage());
    }
}
?>