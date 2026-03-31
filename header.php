<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodExpress - Gestion des Commandes</title>

    <!-- Bootstrap -->
    

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background: linear-gradient(135deg, #0f172a, #020617);
            color: white;
        }
    </style>
</head>

<body>

<nav class="shadow-lg border-b border-gray-700 bg-gradient-to-r from-gray-900 to-gray-800 p-4">
    <div class="container flex flex-col md:flex-row md:justify-between md:items-center">

        <!-- Logo -->
        <a href="index.php" class="no-underline">
            <h1 class="text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500">
                GETECH EXPRESS
            </h1>
        </a>

        <!-- Menu -->
        <ul class="flex flex-col md:flex-row gap-4 mt-4 md:mt-0">

            <!-- ACCUEIL -->
            <li>
                <a href="li_lire.php"
                   class="px-5 py-2 rounded-full font-semibold text-white 
                          bg-gradient-to-r from-blue-500 to-indigo-600
                          shadow-md hover:scale-105 hover:shadow-xl 
                          transition duration-300 inline-block">
                    ACCUEIL
                </a>
            </li>

            <!-- AJOUT -->
            <li>
                <a href="li_ajouter.php"
                   class="px-5 py-2 rounded-full font-semibold text-white
                          bg-gradient-to-r from-green-500 to-emerald-600
                          shadow-md hover:scale-105 hover:shadow-xl
                          transition duration-300 inline-block">
                    AJOUT
                </a>
            </li>

        </ul>
    </div>
</nav>