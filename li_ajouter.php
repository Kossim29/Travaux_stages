<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php include 'header.php'; ?>
<h2>Ajouter un livreur</h2>
<form method="POST" action="li_traitementajouter.php" class="form">
<input type="text" name="nomcomplet" placeholder="nomcomplet" class="form-control"
required>
<input type="telephone" name="telephone" placeholder="telephone" class="form-control"
required>
<input type="submit" name="ajouter" value="Ajouter" class="btn btn-success"
/>
</form>
<!--<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="m-0">Ajouter un livreur</h3>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="li_traitementajouter.php">
                        <div class="mb-3">
                            <label class="form-label">Nom complet</label>
                            <input type="text" 
                                   name="nomcomplet" 
                                   placeholder="Entrez le nom complet"
                                   class="form-control"
                                   required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Téléphone</label>
                            <input type="tel" 
                                   name="telephone" 
                                   placeholder="Entrez le numéro"
                                   class="form-control"
                                   required>
                        </div>
                        <div class="d-grid">
                            <input type="submit" 
                                   name="ajouter" 
                                   value="Ajouter" 
                                   class="btn btn-success btn-lg">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>-->