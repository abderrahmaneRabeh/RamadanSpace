<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - RamadanSpace</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-gold: #D4AF37;
            --secondary-gold: #FFD700;
            --dark-green: #0A2F1F;
        }

        .bg-pattern {
            background-color: var(--dark-green);
            background-image: url('data:image/svg+xml,<svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"><path d="M25 0l25 25-25 25L0 25z" fill="%23D4AF37" fill-opacity="0.05"/></svg>');
        }

        ::-webkit-scrollbar {
            width: 10px;
            background-color: var(--primary-gold);
        }

        ::-webkit-scrollbar-thumb {
            background-color: var(--secondary-gold);
            border-radius: 10px;
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
        }

        .text-gold {
            color: var(--primary-gold);
        }

        .bg-gold {
            background-color: var(--primary-gold);
        }

        .border-gold {
            border-color: var(--primary-gold);
        }
    </style>
</head>

<body class="bg-pattern min-h-screen">
    <!-- Navbar -->
    <nav class="fixed w-full bg-opacity-90 bg-dark-green z-50 border-b border-gold border-opacity-20">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="text-2xl text-white font-bold">Ramadan<span class="text-gold">Space</span></a>
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="text-white hover:text-gold transition">Accueil</a>
                    <a href="/Experiences" class="text-white hover:text-gold transition">Expériences</a>
                    <a href="/Recettes" class="text-white hover:text-gold transition">Recettes</a>
                </div>
                <button class="bg-gold text-dark-green px-6 py-2 rounded-full font-bold hover:bg-opacity-90 transition">
                    Déconnexion
                </button>
            </div>
        </div>
    </nav>

    <!-- Profile Header -->
    <div class="container mx-auto px-6 pt-32">
        <div class="bg-white bg-opacity-5 rounded-xl p-8">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="w-32 h-32 rounded-full bg-gold overflow-hidden">
                    <img src="/api/placeholder/128/128" alt="Profile" class="w-full h-full object-cover" />
                </div>
                <div class="flex-1">
                    <h1 class="text-3xl font-bold text-gold mb-2">Sarah Benali</h1>
                    <p class="text-gray-300 mb-4">Passionnée de cuisine traditionnelle marocaine</p>
                    <div class="flex flex-wrap gap-4">
                        <div class="bg-white bg-opacity-10 px-4 py-2 rounded-full">
                            <span class="text-gold">15</span>
                            <span class="text-gray-300 ml-1">Recettes</span>
                        </div>
                        <div class="bg-white bg-opacity-10 px-4 py-2 rounded-full">
                            <span class="text-gold">203</span>
                            <span class="text-gray-300 ml-1">Abonnés</span>
                        </div>
                        <div class="bg-white bg-opacity-10 px-4 py-2 rounded-full">
                            <span class="text-gold">45</span>
                            <span class="text-gray-300 ml-1">Abonnements</span>
                        </div>
                    </div>
                </div>
                <button class="bg-gold text-dark-green px-6 py-2 rounded-full font-bold hover:bg-opacity-90 transition">
                    Modifier le profil
                </button>
            </div>
        </div>
    </div>

    <!-- Profile Content -->
    <div class="container mx-auto px-6 py-8">
        <!-- Tabs -->
        <div class="flex gap-4 mb-8 border-b border-gold border-opacity-20 pb-4">
            <button class="text-gold font-bold pb-2 border-b-2 border-gold">Mes Recettes</button>
            <button class="text-gray-300 hover:text-gold pb-2">Mes Publications</button>
            <button class="text-gray-300 hover:text-gold pb-2">Favoris</button>
        </div>

        <!-- Recipe Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Recipe Card -->
            <div class="bg-white bg-opacity-5 rounded-xl overflow-hidden card-hover">
                <img src="/api/placeholder/400/200" alt="Harira" class="w-full h-48 object-cover" />
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-gold text-xl font-bold">Harira aux Légumes</h3>
                        <span class="bg-gold text-dark-green px-3 py-1 rounded-full text-sm">Soupe</span>
                    </div>
                    <p class="text-gray-300 mb-4">Ma version personnelle de la Harira traditionnelle...</p>
                    <div class="flex items-center justify-between text-sm text-gray-300">
                        <span>⏱️ 45 mins</span>
                        <span>❤️ 123 likes</span>
                    </div>
                    <div class="flex gap-2 mt-4">
                        <button class="flex-1 py-2 bg-gold text-dark-green rounded-full font-bold hover:bg-opacity-90">
                            Modifier
                        </button>
                        <button
                            class="flex-1 py-2 border border-gold text-gold rounded-full font-bold hover:bg-gold hover:text-dark-green">
                            Supprimer
                        </button>
                    </div>
                </div>
            </div>

            <!-- Add Recipe Card -->
            <div
                class="bg-white bg-opacity-5 rounded-xl overflow-hidden card-hover border-2 border-dashed border-gold border-opacity-30 flex items-center justify-center h-[400px] cursor-pointer hover:border-opacity-50">
                <div class="text-center">
                    <span class="text-gold text-4xl block mb-2">+</span>
                    <span class="text-gold font-bold">Ajouter une recette</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>