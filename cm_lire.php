<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
<?php include 'header.php'; ?>
<?php
require 'connexion.php';
?>
<table class="table table-bordered">
<thead>
<tr>
<th>Id</th>
<th>Description</th>
<th>Client</th>
<th>Telclient</th>
<th>Adresseclient</th>
<th>Statut</th>
<th>Livreur_id</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php
$q = $pdo->prepare(" SELECT commande.*, livreur.nomcomplet
FROM commande
JOIN livreur ON commande.livreur_id = livreur.id");
$q->execute();
while ($d = $q->fetch())
{
?>
<tr>
<td><?= $d['id'] ?></td>
<td><?= $d['description'] ?></td>
<td><?= $d['client'] ?></td>
<td><?= $d['telclient'] ?></td>
<td><?= $d['adresseclient'] ?></td>
<td><?= $d['statut'] ?></td>
<td><?= $d['livreur_id'] ?></td>
<td>
<div class="flex gap-2">
<form method="POST" action="cm_modifier.php">
<input type="hidden" name="id" value="<?= $d['id'] ?>">
<input type="submit" value="Modifier" class="btn btn-warning text-white"/>
</form>
<form method="POST" action="cm_delete.php" onsubmit="return confirm('Voulez
vous supprimer cette ligne ?')">
<input type="hidden" name="id" value="<?= $d['id'] ?>">
<input type="submit" name="supprimer" value="supprimer" class="btn btn-danger text-white"/>
</form>
</div>
</td></tr>
<?php
}
?>
</table>