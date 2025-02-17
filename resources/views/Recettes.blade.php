<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes Ramadan 2025</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link rel="icon" href="https://static.thenounproject.com/png/3188217-512.png">
    <style>
        :root {
            --primary-gold: #D4AF37;
            --secondary-gold: #FFD700;
            --dark-green: #0A2F1F;
        }

        ::-webkit-scrollbar {
            width: 10px;
            background-color: var(--primary-gold);
        }

        ::-webkit-scrollbar-thumb {
            background-color: var(--secondary-gold);
            border-radius: 10px;
        }

        .bg-pattern {
            background-color: var(--dark-green);
            background-image: url('data:image/svg+xml,<svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"><path d="M25 0l25 25-25 25L0 25z" fill="%23D4AF37" fill-opacity="0.05"/></svg>');
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
        }

        .category-btn.active {
            background-color: var(--primary-gold);
            color: var(--dark-green);
        }

        .text-gold {
            color: var(--primary-gold);
        }

        .bg-gold {
            background-color: var(--primary-gold);
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
                    <a href="/Experiences" class="text-white transition">Expériences</a>
                    <a href="/Recettes" class="text-gold hover:text-gold transition">Recettes</a>
                </div>
                @auth
                    <a href="/profile"
                        class="bg-gold text-dark-green px-6 py-2 rounded-full font-bold hover:bg-opacity-90 transition">
                        {{ Auth::user()->name }}
                    </a>
                @else
                    <a href="/login"
                        class="bg-gold text-dark-green px-6 py-2 rounded-full font-bold hover:bg-opacity-90 transition">
                        Connexion
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <header class="container mx-auto px-6 py-12 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 mt-20">Recettes du Ramadan</h1>
        <p class="text-gray-300 max-w-2xl mx-auto mb-8">
            Découvrez nos délicieuses recettes traditionnelles pour le Ramadan,
            des entrées aux desserts, parfaites pour l'Iftar et le Suhoor.
        </p>
        <!-- Search Bar -->
        <div class="max-w-xl mx-auto">
            <div class="relative">
                <input type="text" placeholder="Rechercher une recette..."
                    class="w-full px-6 py-3 rounded-full bg-white bg-opacity-10 text-white border border-gold focus:outline-none" />
                <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gold">
                    🔍
                </button>
            </div>
        </div>
    </header>

    <!-- Filters Section -->
    <section class="container mx-auto px-6 py-8">
        <!-- Categories -->
        <div class="flex flex-wrap gap-4 mb-8">
            <a href="#"
                class="category-btn active px-6 py-2 rounded-full border border-gold text-gold hover:bg-gold hover:text-[#0A2F1F]">
                Tous
            </a>
            <a href="#"
                class="category-btn px-6 py-2 rounded-full border border-gold text-gold hover:bg-gold hover:text-[#0A2F1F]">
                Entrées
            </a>
            <a href="#"
                class="category-btn px-6 py-2 rounded-full border border-gold text-gold hover:bg-gold hover:text-[#0A2F1F]">
                Plats Principaux
            </a>
            <a href="#"
                class="category-btn px-6 py-2 rounded-full border border-gold text-gold hover:bg-gold hover:text-[#0A2F1F]">
                Desserts
            </a>
            <a href="#"
                class="category-btn px-6 py-2 rounded-full border border-gold text-gold hover:bg-gold hover:text-[#0A2F1F]">
                Boissons
            </a>
        </div>

        <!-- Recipe Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
            <!-- Recipe Card 1 -->
            <div class="bg-white bg-opacity-5 rounded-xl overflow-hidden card-hover">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Harira_vegetarisch.jpg/420px-Harira_vegetarisch.jpg"
                    alt="Harira" class="w-full h-48 object-cover" />
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-gold text-xl font-bold">Harira Traditionnelle</h3>
                        <span class="bg-gold text-[#0A2F1F] px-3 py-1 rounded-full text-sm">Soupe</span>
                    </div>
                    <p class="text-gray-300 mb-4">Soupe traditionnelle marocaine parfaite pour l'iftar...</p>
                    <div class="flex items-center justify-between text-sm text-gray-300">
                        <div class="flex items-center space-x-4">
                            <span>⏱️ 45 mins</span>

                        </div>
                    </div>
                    <button class="w-full mt-4 py-2 bg-gold text-[#0A2F1F] rounded-full font-bold hover:bg-opacity-90">
                        Voir la recette
                    </button>
                </div>
            </div>

            <!-- Recipe Card 2 -->
            <div class="bg-white bg-opacity-5 rounded-xl overflow-hidden card-hover">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Harira_vegetarisch.jpg/420px-Harira_vegetarisch.jpg"
                    alt="Chebakia" class="w-full h-48 object-cover" />
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-gold text-xl font-bold">Chebakia</h3>
                        <span class="bg-gold text-[#0A2F1F] px-3 py-1 rounded-full text-sm">Dessert</span>
                    </div>
                    <p class="text-gray-300 mb-4">Pâtisserie marocaine en forme de fleur, parfumée au miel...</p>
                    <div class="flex items-center justify-between text-sm text-gray-300">
                        <div class="flex items-center space-x-4">
                            <span>⏱️ 120 mins</span>

                        </div>
                    </div>
                    <button class="w-full mt-4 py-2 bg-gold text-[#0A2F1F] rounded-full font-bold hover:bg-opacity-90">
                        Voir la recette
                    </button>
                </div>
            </div>

            <!-- Recipe Card 3 -->
            <div class="bg-white bg-opacity-5 rounded-xl overflow-hidden card-hover">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Harira_vegetarisch.jpg/420px-Harira_vegetarisch.jpg"
                    alt="Jus de Dates" class="w-full h-48 object-cover" />
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-gold text-xl font-bold">Jus de Dates</h3>
                        <span class="bg-gold text-[#0A2F1F] px-3 py-1 rounded-full text-sm">Boisson</span>
                    </div>
                    <p class="text-gray-300 mb-4">Boisson rafraîchissante et énergisante pour l'iftar...</p>
                    <div class="flex items-center justify-between text-sm text-gray-300">
                        <div class="flex items-center space-x-4">
                            <span>⏱️ 15 mins</span>

                        </div>
                    </div>
                    <button class="w-full mt-4 py-2 bg-gold text-[#0A2F1F] rounded-full font-bold hover:bg-opacity-90">
                        Voir la recette
                    </button>
                </div>
            </div>
        </div>
    </section>
</body>

</html>