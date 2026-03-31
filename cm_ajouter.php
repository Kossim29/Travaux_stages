<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php include 'header.php'; ?>
<h2>Ajouter une commande</h2>
<form method="POST" action="cm_traitementajouter.php" class="form">
<input type="text" name="description" placeholder="description" class="form-control"
required>
<input type="client" name="client" placeholder="client" class="form-control"
required>
<input type="telclient" name="telclient" placeholder="telclient" class="form-control"
required>
<input type="adresseclient" name="adresseclient" placeholder="adresseclient" class="form-control"
required>
<input type="statut" name="statut" placeholder="statut" class="form-control"
required>
<input type="livreur_id" name="livreur_id" placeholder="livreur_id" class="form-control"
required>
<input type="submit" name="ajouter" value="Ajouter" class="btn btn-success"
/>
</form>