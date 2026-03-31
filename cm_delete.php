<?php
require 'connexion.php';
if(isset($_POST['supprimer']))
{
$id = $_POST['id'] ?? 0 ;
$q = $pdo->prepare("DELETE FROM commande WHERE id=?");
$q->execute([$id]);
header("Location:cm_lire.php");
}
?>