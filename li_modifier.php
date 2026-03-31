<?php
include 'header.php';
require 'connexion.php';
$id = $_POST['id'] ?? 0 ;
$q = $pdo->prepare("SELECT * FROM livreur WHERE id=?");
$q->execute([$id]);
$d = $q->fetch();
?>
<form method="POST" action="li_traitementmodifier.php" >
<input type="hidden" name="id" value="<?= $d['id'] ?>">
<input type="text" name="nomcomplet" value="<?= $d['nomcomplet'] ?>" required>
<input type="text" name="telephone" value="<?= $d['telephone'] ?>">
<input type="submit" name="modifier" value="Modifier" />
</form>