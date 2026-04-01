<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETECH EXPRESS</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
       body {
    background-color: #f8f9fa;
    color: #111;
}
    </style>
</head>

<body>

<nav class="bg-gray-900 border-b border-gray-700 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 py-3 flex flex-col md:flex-row md:justify-between md:items-center">

        <!-- LOGO -->
        <a href="index.php" class="mb-3 md:mb-0">
            <h1 class="text-2xl font-extrabold   text-white">
                GETECH EXPRESS
            </h1>
        </a>
        <div class="flex flex-wrap gap-3">

            <a href="cm_lire.php" 
                class="px-4 py-2 rounded-lg bg-white text-black border border-gray-300 hover:bg-gray-100 transition">
                Accueil
            </a>

            <a href="li_lire.php"
               class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-500 transition">
                 Livreurs
            </a>

            <a href="li_ajouter.php"
               class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-500 transition">
                 Ajouter livreur
            </a>

            <a href="cm_lire.php"
               class="px-4 py-2 rounded-lg bg-orange-300 hover:bg-orange-400 transition">
                 Commandes
            </a>

            <a href="cm_ajouter.php"
               class="px-4 py-2 rounded-lg bg-orange-300 hover:bg-orange-400 transition">
                 Nouvelle commande
            </a>

        </div>
    </div>
</nav>