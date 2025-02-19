<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Recette - Ramadan 2025</title>
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

        .hero-gradient {
            background: linear-gradient(45deg, rgba(10, 47, 31, 0.95) 0%, rgba(10, 47, 31, 0.8) 100%);
        }

        .text-gold {
            color: var(--primary-gold);
        }

        .border-gold {
            border-color: var(--primary-gold);
        }

        .bg-gold {
            background-color: var(--primary-gold);
        }

        .form-input:focus {
            border-color: var(--primary-gold);
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.2);
        }

        .step-container {
            position: relative;
        }

        .step-number {
            position: absolute;
            left: -40px;
            top: 0;
            width: 30px;
            height: 30px;
            background-color: var(--primary-gold);
            color: var(--dark-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .success-notification {
            transform: translateX(100%);
            transition: transform 0.5s ease-out;
        }

        .success-notification.show {
            transform: translateX(0);
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
                    <a href="/#accueil" class="text-white hover:text-gold transition">Accueil</a>
                    <a href="/#experiences" class="text-white hover:text-gold transition">Expériences</a>
                    <a href="/#recettes" class="text-gold hover:text-gold transition">Recettes</a>
                </div>
                @auth
                    <div class="relative inline-block text-left">
                        <button onclick="toggleDropdown()"
                            class="bg-gold text-dark-green px-6 py-2 rounded-full font-bold hover:bg-opacity-90 transition flex items-center">
                            {{ Auth::user()->name }} <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2"
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
                @else
                    <a href="/login"
                        class="bg-gold text-dark-green px-6 py-2 rounded-full font-bold hover:bg-opacity-90 transition">
                        Connexion
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Notification -->
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

    <!-- Main Content -->
    <main class="pt-24 pb-16">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div
                    class="bg-white bg-opacity-5 rounded-xl p-8 border border-gold border-opacity-30 animate__animated animate__fadeIn">
                    <h1 class="text-4xl font-bold text-gold mb-8 text-center">Ajouter une Recette</h1>

                    <form action="{{ route('add_recette') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <!-- Titre Field -->
                                <div class="mb-6">
                                    <label for="titre" class="block text-gold font-semibold mb-2">Titre de la
                                        recette</label>
                                    <input type="text" name="titre" id="titre" required
                                        class="w-full bg-white bg-opacity-10 text-white border border-gold border-opacity-30 rounded-lg px-4 py-3 focus:outline-none form-input"
                                        placeholder="Ex: Harira traditionnelle">
                                    <span id="titreError" class="text-red-400 text-sm hidden">Le titre est requis</span>
                                </div>

                                <!-- Description Field -->
                                <div class="mb-6">
                                    <label for="description"
                                        class="block text-gold font-semibold mb-2">Description</label>
                                    <textarea name="description" id="description" rows="3" required
                                        class="w-full bg-white bg-opacity-10 text-white border border-gold border-opacity-30 rounded-lg px-4 py-3 focus:outline-none form-input"
                                        placeholder="Une brève description de votre recette..."></textarea>
                                    <span id="descriptionError" class="text-red-400 text-sm hidden">La description est
                                        requise</span>
                                </div>

                                <!-- Category Field -->
                                <div class="mb-6">
                                    <label for="id_category"
                                        class="block text-gold font-semibold mb-2">Catégorie</label>
                                    <select id="id_category" name="id_category" required
                                        class="w-full bg-white bg-opacity-10 text-white border border-gold border-opacity-30 rounded-lg px-4 py-3 focus:outline-none form-input">
                                        <option value="">Sélectionnez une catégorie</option>
                                        <option value="1">any</option>

                                    </select>
                                    <span id="categoryError" class="text-red-400 text-sm hidden">La catégorie est
                                        requise</span>
                                </div>
                            </div>

                            <div>
                                <!-- Image Upload Field -->
                                <div class="mb-6">
                                    <label for="image_url" class="block text-gold font-semibold mb-2">URL de l'image du
                                        plat</label>
                                    <input type="url" name="image_url" id="image_url" required
                                        class="w-full bg-white bg-opacity-10 text-white border border-gold border-opacity-30 rounded-lg px-4 py-3 focus:outline-none form-input"
                                        placeholder="Ex: https://example.com/image.jpg">
                                    <span id="imageUrlError" class="text-red-400 text-sm hidden">L'URL est
                                        requise</span>
                                </div>
                            </div>
                        </div>

                        <!-- Ingredients Field -->
                        <div class="mb-6 mt-4">
                            <label for="ingredients" class="block text-gold font-semibold mb-2">Ingrédients</label>
                            <div class="flex mb-2">
                                <input type="text" name="ingredients" placeholder="Ajouter un ingrédient..."
                                    class="flex-grow bg-white bg-opacity-10 text-white border border-gold border-opacity-30 rounded-l-lg px-4 py-3 focus:outline-none form-input">
                            </div>
                        </div>

                        <!-- Étapes Field -->
                        <div class="mb-6">
                            <label for="etapes" class="block text-gold font-semibold mb-2">Étapes de préparation</label>
                            <div class="flex mb-2">
                                <textarea name="etapes" rows="2" placeholder="Décrivez une étape de préparation..."
                                    class="flex-grow bg-white bg-opacity-10 text-white border border-gold border-opacity-30 rounded-l-lg px-4 py-3 focus:outline-none form-input"></textarea>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-center mt-8">
                            <button type="submit"
                                class="bg-gold text-dark-green px-8 py-4 rounded-full font-bold hover:bg-opacity-90 transition transform hover:scale-105 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                Publier la recette
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark-green border-t border-gold border-opacity-20 py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-gold font-bold text-xl mb-4">À Propos</h3>
                    <p class="text-gray-300">Plateforme communautaire pour partager l'esprit du Ramadan 2025.</p>
                </div>
                <div>
                    <h3 class="text-gold font-bold text-xl mb-4">Liens Rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-gold">Accueil</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-gold">Expériences</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-gold">Recettes</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-gold">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-gold font-bold text-xl mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li class="text-gray-300">Email: contact@ramadan2025.com</li>
                        <li class="text-gray-300">Tel: +212 6XX XXX XXX</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-gold font-bold text-xl mb-4">Newsletter</h3>
                    <div class="flex">
                        <input type="email" placeholder="Votre email"
                            class="px-4 py-2 rounded-l-full bg-white bg-opacity-10 text-white border-gold border focus:outline-none" />
                        <button class="bg-gold text-dark-green px-4 py-2 rounded-r-full hover:bg-opacity-90">
                            →
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gold border-opacity-20 text-center text-gray-300">
                © 2025 Ramadan Code Shogun. Tous droits réservés.
            </div>
        </div>
    </footer>

    <script>
        // Dropdown toggle
        function toggleDropdown() {
            var dropdown = document.getElementById('dropdownMenu');
            dropdown.classList.toggle('hidden');
        }

        // Notification handling
        document.addEventListener('DOMContentLoaded', function () {
            const notification = document.getElementById('success-notification');
            if (notification) {
                setTimeout(function () {
                    notification.classList.remove('translate-x-full');
                }, 100);

                setTimeout(function () {
                    closeNotification();
                }, 5000);
            }
        });

        function closeNotification() {
            const notification = document.getElementById('success-notification');
            if (notification) {
                notification.classList.add('translate-x-full');

                setTimeout(function () {
                    notification.remove();
                }, 500);
            }
        }

    </script>

</body>

</html>