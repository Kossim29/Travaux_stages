<?php
include 'header.php';
require 'connexion.php';
$id = $_POST['id'] ?? 0 ;
$q = $pdo->prepare("SELECT * FROM commande WHERE id=?");
$q->execute([$id]);
$d = $q->fetch();
?>
<form method="POST" action="cm_traitementmodifier.php" >
<input type="hidden" name="id" value="<?= $d['id'] ?>">
<input type="text" name="description" value="<?= $d['description'] ?>" required>
<input type="text" name="client" value="<?= $d['client'] ?>">
<input type="text" name="telclient" value="<?= $d['telclient'] ?>">
<input type="text" name="adresseclient" value="<?= $d['adresseclient'] ?>">
<input type="text" name="statut" value="<?= $d['statut'] ?>">
<input type="text" name="livreur_id" value="<?= $d['livreur_id'] ?>">
<input type="submit" name="modifier" value="Modifier" />
</form>