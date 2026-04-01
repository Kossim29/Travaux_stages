<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php include 'header.php'; ?>

<h2 class="text-2xl font-bold text-gray-700 text-center mt-8 mb-6">
    Ajouter une commande
</h2>

<form method="POST" action="cm_traitementajouter.php" class="w-1/2 mx-auto space-y-4">

    <input 
        type="text" 
        name="description" 
        placeholder="Description"
        class="w-full px-4 py-2 border rounded"
        required
    >

    <input 
        type="text" 
        name="client" 
        placeholder="Nom du client"
        class="w-full px-4 py-2 border rounded"
        required
    >

    <input 
        type="text" 
        name="telclient" 
        placeholder="Téléphone du client"
        class="w-full px-4 py-2 border rounded"
        required
    >

    <input 
        type="text" 
        name="adresseclient" 
        placeholder="Adresse du client"
        class="w-full px-4 py-2 border rounded"
        required
    >

    <select name="statut" class="w-full px-4 py-2 border rounded">
        <option value="en préparation">En préparation</option>
        <option value="en cours de livraison">En cours de livraison</option>
        <option value="livré">Livré</option>
    </select>

    <select name="livreur_id" class="w-full px-4 py-2 border rounded" required>
        <option value="">Choisir un livreur</option>

        <?php
        require 'connexion.php';
        $req = $pdo->query("SELECT * FROM livreur");

        while($l = $req->fetch()){
            echo "<option value='".$l['id']."'>".$l['nomcomplet']."</option>";
        }
        ?>
    </select>

    <input 
        type="submit" 
        name="ajouter" 
        value="Ajouter"
        class="bg-green-500 text-white px-6 py-2 rounded cursor-pointer hover:bg-green-600"
    >
</form>