<?php
require 'connexion.php';
include 'header.php';
if(isset($_POST['modifier']))
{
    $id = $_POST['id'];

    $description = htmlspecialchars($_POST['description']);
    $client = htmlspecialchars($_POST['client']);
    $telclient = htmlspecialchars($_POST['telclient']);
    $adresseclient = htmlspecialchars($_POST['adresseclient']);
    $statut = htmlspecialchars($_POST['statut']);
    $livreur_id = htmlspecialchars($_POST['livreur_id']);

    $q = $pdo->prepare("UPDATE commande SET description=?, client=?, telclient=?, adresseclient=?, statut=?, livreur_id=? WHERE id=?");
    $q->execute([$description, $client, $telclient,$adresseclient,$statut,$livreur_id,$id]);

    header("Location: cm_lire.php");
    exit();
}
?>