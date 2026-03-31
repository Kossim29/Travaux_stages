<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
<?php include 'header.php'; ?>
<?php
require 'connexion.php';
?>
<table class="table table-bordered">
<thead>
<tr>
<th>id</th>
<th>description</th>
<th>client</th>
<th>telclient</th>
<th>adresseclient</th>
<th>statut</th>
<th>livreur_id</th>
</tr>
</thead>
<tbody>
<?php
$q = $pdo->prepare("SELECT * FROM commmande");
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
<form method="POST" action="cm_modifier.php">
<input type="hidden" name="id" value="<?= $d['id'] ?>">
<input type="submit" value="Modifier" class="btn btn-warning text-white"/>
</form>
<form method="POST" action="cm_delete.php" onsubmit="return confirm('Voulez
vous supprimer cette ligne ?')">
<input type="hidden" name="id" value="<?= $d['id'] ?>">
<input type="submit" name="supprimer" value="supprimer" class="btn btn-danger text-white"/>
</form>
</td></tr>
<?php
}
?>
</table>