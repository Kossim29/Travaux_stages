<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <?php include 'header.php'; ?>

    <h2 class="text-2xl font-bold text-center text-gray-700 mt-8 mb-6">
        Ajouter un livreur
    </h2>

    <form method="POST" action="li_traitementajouter.php" class="w-1/2 mx-auto space-y-4">

        <input 
            type="text" 
            name="nomcomplet" 
            placeholder="Nom complet" 
            class="w-full px-4 py-2 border rounded"
            required
        >

        <input 
            type="tel" 
            name="telephone" 
            placeholder="Téléphone" 
            class="w-full px-4 py-2 border rounded"
            required
        >

        <button 
            type="submit" 
            name="ajouter"
            class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600"
        >
            Ajouter
        </button>

    </form>
</body>