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
<th>Nomcomplet</th>
<th>Telephone</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php
$q = $pdo->prepare("SELECT * FROM livreur");
$q->execute();
while ($d = $q->fetch())
{
?>
<tr>
<td><?= $d['id'] ?></td>
<td><?= $d['nomcomplet'] ?></td>
<td><?= $d['telephone'] ?></td>
<td>
<div class="flex gap-2">
<form method="POST" action="li_modifier.php">
<input type="hidden" name="id" value="<?= $d['id'] ?>">
<input type="submit" value="Modifier" class="btn btn-warning text-white"/>
</form>
<form method="POST" action="li_delete.php" onsubmit="return confirm('Voulez
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