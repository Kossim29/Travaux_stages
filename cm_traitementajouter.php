<?php
require 'connexion.php';

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    try {

        $description = htmlspecialchars($_POST['description']);
        $client = htmlspecialchars($_POST['client']);
        $telclient = htmlspecialchars($_POST['telclient']);
        $adresseclient = htmlspecialchars($_POST['adresseclient']);
        $statut = htmlspecialchars($_POST['statut']);
        $livreur_id = htmlspecialchars($_POST['livreur_id']);

        $q = $pdo->prepare("INSERT INTO commande(description, client, telclient, adresseclient, statut, livreur_id) VALUES(?,?,?,?,?,?)");

        $q->execute(array(
            $description,
            $client,
            $telclient,
            $adresseclient,
            $statut,
            $livreur_id
        ));

        header("Location: cm_lire.php");

    } catch (PDOException $e){
        die ("ERREUR LORS DE L'AJOUT : ".$e->getMessage());
    }
}
?>