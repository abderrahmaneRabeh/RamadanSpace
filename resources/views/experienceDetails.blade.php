<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier jour de Ramadan - Expérience</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
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
    <!-- Navbar (similaire à la page d'accueil) -->
    <nav class="fixed w-full bg-opacity-90 bg-dark-green z-50 border-b border-gold border-opacity-20">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="text-2xl text-white font-bold">Ramadan<span class="text-gold">Space</span></a>
                <div class="hidden md:flex space-x-8">
                    <a href="#accueil" class="text-white hover:text-gold transition">Accueil</a>
                    <a href="/Experiences" class="text-gold hover:text-gold transition">Expériences</a>
                    <a href="/Recettes" class="text-white hover:text-gold transition">Recettes</a>
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

    <!-- Contenu Principal -->
    <main class="container mx-auto px-6 py-8">
        <!-- En-tête de l'article -->
        <div class="max-w-4xl mx-auto mt-32">
            <div class="mb-8">
                <h1 class="text-4xl font-bold text-gold mb-4">{{ $publication->title_pub }}</h1>
                <div class="flex items-center space-x-4 text-gray-300 mb-6">
                    <div class="flex items-center">
                        <span>{{ $publication->user->name }}</span>
                    </div>
                    <span>•</span>
                    <span>{{ $publication->created_at->format('d M Y') }}</span>
                </div>
            </div>

            <!-- Image (si présente) -->
            <div class="mb-8 rounded-xl overflow-hidden">
                @if (!empty($publication->image_url))
                    <img src="{{ $publication->image_url }}" alt="Mosquée au coucher du soleil" class="w-full h-auto" />
                @endif
            </div>

            <!-- Contenu de l'article -->
            <article class="prose prose-lg max-w-none">
                <div class="text-gray-300 space-y-6">
                    <p class="leading-relaxed">{{ $publication->description }}</p>
                </div>
            </article>

            <!-- Tags -->
            <div class="flex flex-wrap gap-2 mt-8">
                <span class="px-3 py-1 bg-gold bg-opacity-10 text-white rounded-full text-sm">#Ramadan2025</span>
                <span class="px-3 py-1 bg-gold bg-opacity-10 text-white rounded-full text-sm">#PremierJour</span>
                <span class="px-3 py-1 bg-gold bg-opacity-10 text-white rounded-full text-sm">#Spiritualité</span>
            </div>

            <!-- Actions -->
            <div class="flex justify-between items-center border-t border-b border-gold border-opacity-20 py-6 mt-8">
                <div class="flex items-center space-x-4">
                    <button class="flex items-center space-x-2 text-gold">
                        <span>💬</span>
                        <span>2 commentaires</span>
                    </button>
                </div>
                <button class="flex items-center space-x-2 text-gold">
                    <span>📤</span>
                    <span>Partager</span>
                </button>
            </div>

            <!-- Section Commentaires -->
            <section class="mt-12">

                <!-- Formulaire de commentaire -->
                <div class="mb-8">
                    <div class="flex items-start space-x-4">
                        <div class="flex-1">
                            <textarea
                                class="w-full p-4 rounded-xl bg-white bg-opacity-5 border border-gold border-opacity-20 text-white focus:outline-none focus:border-gold"
                                placeholder="Partagez votre réaction..." rows="3"></textarea>
                            <button
                                class="mt-2 px-6 py-2 bg-gold text-dark-green rounded-full font-medium hover:bg-opacity-90">
                                Commenter
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Liste des commentaires -->
                <div class="space-y-6">
                    <!-- Commentaire 1 -->
                    <div class="flex space-x-4">
                        <div class="flex-1">
                            <div class="bg-white bg-opacity-5 rounded-xl p-4 border border-gold border-opacity-20">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="font-bold text-gold">Karim</h4>
                                    <span class="text-sm text-gray-400">Il y a 2 heures</span>
                                </div>
                                <p class="text-gray-300">Merci pour ce beau partage ! J'ai vécu exactement les mêmes
                                    émotions lors de mon premier jour...</p>
                                <div class="mt-2 flex items-center space-x-4 text-sm text-gold">
                                    <button class="hover:underline">Répondre</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Commentaire 2 -->
                    <div class="flex space-x-4">
                        <div class="flex-1 bg-white bg-opacity-5 rounded-xl p-4 border border-gold border-opacity-20">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="font-bold text-gold">Amina</h4>
                                <span class="text-sm text-gray-400">Il y a 3 heures</span>
                            </div>
                            <p class="text-gray-300">Très belle description de ce moment spirituel. J'apprécie
                                particulièrement la partie sur la préparation...</p>
                            <div class="mt-2 flex items-center space-x-4 text-sm text-gold">
                                <button class="hover:underline">Répondre</button>
                                <button class="hover:underline">❤️ 8</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>