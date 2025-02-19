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
                    <div class="relative inline-block text-left">
                        <button onclick="toggleDropdown()"
                            class="bg-gold text-dark-green px-6 py-2 rounded-full font-bold hover:bg-opacity-90 transition flex items-center">
                            {{ Auth::user()->name }} <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="dropdownMenu"
                            class="hidden absolute right-0 mt-2 w-56 origin-top-right rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                            <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                <a href="/profile" class="block px-4 py-2 text-sm text-dark-green hover:bg-gray-100"
                                    role="menuitem">Profile</a>
                                <a href="/logout" class="block px-4 py-2 text-sm text-dark-green hover:bg-gray-100"
                                    role="menuitem">Logout</a>
                            </div>
                        </div>
                    </div>
                    <script>
                        function toggleDropdown() {
                            var dropdown = document.getElementById('dropdownMenu');
                            dropdown.classList.toggle('hidden');
                        }
                    </script>
                @else
                    <a href="/login"
                        class="bg-gold text-dark-green px-6 py-2 rounded-full font-bold hover:bg-opacity-90 transition">
                        Connexion
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    @if (session('success'))
        <div id="success-notification"
            class="fixed top-24 right-0 transform translate-x-full bg-green-600 text-white px-6 py-4 rounded-l-lg shadow-lg border-l-4 border-gold flex items-center z-50 transition-transform duration-500 ease-out">
            <div class="text-gold mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <div>
                <p class="font-bold">Succès!</p>
                <p>{{ session('success') }}</p>
            </div>
            <button onclick="closeNotification()" class="ml-6 text-white hover:text-gold focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    @endif

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
        <div class="flex justify-between mb-8">
            <div class="flex flex-wrap gap-4">
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
            <div class="flex items-center">
                @auth
                    <a href="{{ route('add_recette') }}"
                        class="bg-gold text-[#0A2F1F] px-6 py-2 rounded-full font-bold hover:bg-opacity-90 transition">
                        Ajouter une recette
                    </a>
                @else
                    <a href="/login"
                        class="bg-gold text-[#0A2F1F] px-6 py-2 rounded-full font-bold hover:bg-opacity-90 transition">
                        Se connecter pour ajouter une recette
                    </a>
                @endauth
            </div>
        </div>

        <!-- Recipe Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
            <!-- Recipe Card 1 -->

            @foreach ($recettes as $recette)

                <div class="bg-white bg-opacity-5 rounded-xl overflow-hidden card-hover">
                    <img src="{{ $recette->image_url }}" alt="Harira" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-gold text-xl font-bold">{{ $recette->titre }}</h3>
                            <span
                                class="bg-gold text-[#0A2F1F] px-3 py-1 rounded-full text-sm">{{ $recette->categorie->nom_categorie }}</span>
                        </div>
                        <p class="text-gray-300 mb-4">{{ Str::limit($recette->description, 50) }}</p>
                        <div class="flex items-center justify-between text-sm text-gray-300">
                            <div class="flex items-center space-x-4">
                                <span class="font-bold text-gold">{{ $recette->user->name }}</span>

                            </div>
                        </div>
                        <a href="/recettes/details/{{ $recette->id_recettes }}">
                            <button
                                class="w-full mt-4 py-2 bg-gold text-[#0A2F1F] rounded-full font-bold hover:bg-opacity-90">
                                Voir la recette
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach

            <!-- Pagination -->



        </div>
        <div class="mt-12 flex justify-center">
            {{ $recettes->links('vendor.pagination.custom') }}
        </div>
    </section>

    <script>
        // Animation d'entrée depuis la droite
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                const notification = document.getElementById('success-notification');
                notification.classList.remove('translate-x-full');
            }, 100);

            // Fermeture automatique après 5 secondes
            setTimeout(function () {
                closeNotification();
            }, 5000);
        });

        function closeNotification() {
            const notification = document.getElementById('success-notification');
            notification.classList.add('translate-x-full');

            // Supprimer complètement après la transition
            setTimeout(function () {
                notification.remove();
            }, 500);
        }
    </script>
</body>

</html>