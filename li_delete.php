<?php
require 'connexion.php';
if(isset($_POST['supprimer']))
{
$id = $_POST['id'] ?? 0 ;
$q = $pdo->prepare("DELETE FROM livreur WHERE id=?");
$q->execute([$id]);
header("Location:li_lire.php");
}
?>