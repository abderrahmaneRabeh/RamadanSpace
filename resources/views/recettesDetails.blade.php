<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harira Traditionnelle - Recette</title>
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

        .ingredient-item {
            transition: all 0.2s ease;
        }

        .ingredient-item:hover {
            transform: translateX(5px);
        }

        .step-number {
            background-color: var(--primary-gold);
            color: var(--dark-green);
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: bold;
        }

        .print-button:hover .print-icon {
            transform: translateY(-2px);
        }

        .print-icon {
            transition: transform 0.2s ease;
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
                    <a href="/Recettes" class="text-gold hover:text-gold transition">Recettes</a>
                </div>
                <div class="relative inline-block text-left">
                    <button onclick="toggleDropdown()"
                        class="bg-gold text-dark-green px-6 py-2 rounded-full font-bold hover:bg-opacity-90 transition flex items-center">
                        Sarah Benali <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
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
            </div>
        </div>
    </nav>

    <!-- Notification de succès (si présent) -->
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
            <p>Recette ajoutée à vos favoris</p>
        </div>
        <button onclick="closeNotification()" class="ml-6 text-white hover:text-gold focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <!-- Contenu Principal -->
    <main class="container mx-auto px-6 py-8">
        <div class="max-w-4xl mx-auto mt-32">
            <!-- En-tête de la recette -->
            <div class="mb-8">
                <div class="flex flex-wrap justify-between items-start gap-4 mb-6">
                    <div>
                        <h1 class="text-4xl font-bold text-gold mb-2">{{ $recette->titre }}</h1>
                        <div class="flex items-center space-x-4 text-gray-300">
                            <span
                                class="bg-gold text-black px-3 py-1 rounded-full text-sm">{{ $recette->categorie->nom_categorie }}</span>
                            <div class="flex items-center">
                                <span class="text-sm">Par {{ $recette->user->name }}</span>
                            </div>
                            <span>•</span>
                            <span class="text-sm">{{ $recette->created_at->formatLocalized('%A %d %B %Y') }}</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button
                            class="px-4 py-2 bg-white bg-opacity-5 rounded-full flex items-center text-gold border border-gold border-opacity-30 hover:bg-gold hover:text-dark-green transition">
                            <span class="mr-2">❤️</span>
                            <span>Favoris</span>
                        </button>
                        <button
                            class="px-4 py-2 bg-white bg-opacity-5 rounded-full flex items-center text-gold border border-gold border-opacity-30 hover:bg-gold hover:text-dark-green transition print-button">
                            <span class="mr-2 print-icon">🖨️</span>
                            <span>Imprimer</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Image de la recette -->
            <div class="mb-8 rounded-xl overflow-hidden shadow-lg">
                <img src="{{ $recette->image_url }}" alt="Harira Traditionnelle" class="w-full h-auto" />
            </div>

            <!-- Statistiques -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12">
                <div class="bg-white bg-opacity-5 rounded-xl p-4 text-center border border-gold border-opacity-20">
                    <p class="text-sm text-gray-300">Préparation</p>
                    <p class="text-xl text-gold font-bold">30 min</p>
                </div>
                <div class="bg-white bg-opacity-5 rounded-xl p-4 text-center border border-gold border-opacity-20">
                    <p class="text-sm text-gray-300">Cuisson</p>
                    <p class="text-xl text-gold font-bold">45 min</p>
                </div>
                <div class="bg-white bg-opacity-5 rounded-xl p-4 text-center border border-gold border-opacity-20">
                    <p class="text-sm text-gray-300">Portions</p>
                    <p class="text-xl text-gold font-bold">6</p>
                </div>
                <div class="bg-white bg-opacity-5 rounded-xl p-4 text-center border border-gold border-opacity-20">
                    <p class="text-sm text-gray-300">Difficulté</p>
                    <p class="text-xl text-gold font-bold">Moyenne</p>
                </div>
            </div>

            <!-- Description -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gold mb-4">Description</h2>
                <div class="bg-white bg-opacity-5 rounded-xl p-6 border border-gold border-opacity-20">
                    <p class="text-gray-300 leading-relaxed">
                        {{ $recette->description }}
                    </p>
                </div>
            </div>

            <!-- Contenu principal en 2 colonnes -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Ingrédients -->
                <div class="md:col-span-1">
                    <h2 class="text-2xl font-bold text-gold mb-4">Ingrédients</h2>
                    <div class="bg-white bg-opacity-5 rounded-xl p-6 border border-gold border-opacity-20">
                        <ul class="space-y-3">
                            <li class="flex items-center ingredient-item">
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full border border-gold mr-3 text-gold text-xs">✓</span>
                                <span class="text-gray-300">300g de viande d'agneau coupée en cubes</span>
                            </li>
                            <li class="flex items-center ingredient-item">
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full border border-gold mr-3 text-gold text-xs">✓</span>
                                <span class="text-gray-300">150g de pois chiches (trempés une nuit)</span>
                            </li>
                            <li class="flex items-center ingredient-item">
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full border border-gold mr-3 text-gold text-xs">✓</span>
                                <span class="text-gray-300">100g de lentilles</span>
                            </li>
                            <li class="flex items-center ingredient-item">
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full border border-gold mr-3 text-gold text-xs">✓</span>
                                <span class="text-gray-300">2 oignons moyens (hachés)</span>
                            </li>
                            <li class="flex items-center ingredient-item">
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full border border-gold mr-3 text-gold text-xs">✓</span>
                                <span class="text-gray-300">3 tomates (pelées et hachées)</span>
                            </li>
                            <li class="flex items-center ingredient-item">
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full border border-gold mr-3 text-gold text-xs">✓</span>
                                <span class="text-gray-300">1 bouquet de coriandre fraîche</span>
                            </li>
                            <li class="flex items-center ingredient-item">
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full border border-gold mr-3 text-gold text-xs">✓</span>
                                <span class="text-gray-300">2 branches de céleri</span>
                            </li>
                            <li class="flex items-center ingredient-item">
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full border border-gold mr-3 text-gold text-xs">✓</span>
                                <span class="text-gray-300">2 c. à soupe d'huile d'olive</span>
                            </li>
                            <li class="flex items-center ingredient-item">
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full border border-gold mr-3 text-gold text-xs">✓</span>
                                <span class="text-gray-300">1 c. à café de cumin moulu</span>
                            </li>
                            <li class="flex items-center ingredient-item">
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full border border-gold mr-3 text-gold text-xs">✓</span>
                                <span class="text-gray-300">1 c. à café de gingembre moulu</span>
                            </li>
                            <li class="flex items-center ingredient-item">
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full border border-gold mr-3 text-gold text-xs">✓</span>
                                <span class="text-gray-300">1/2 c. à café de cannelle</span>
                            </li>
                            <li class="flex items-center ingredient-item">
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full border border-gold mr-3 text-gold text-xs">✓</span>
                                <span class="text-gray-300">1/4 c. à café de safran</span>
                            </li>
                            <li class="flex items-center ingredient-item">
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full border border-gold mr-3 text-gold text-xs">✓</span>
                                <span class="text-gray-300">Sel et poivre noir</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Étapes de préparation -->
                <div class="md:col-span-2">
                    <h2 class="text-2xl font-bold text-gold mb-4">Préparation</h2>
                    <div class="bg-white bg-opacity-5 rounded-xl p-6 border border-gold border-opacity-20">
                        <div class="space-y-8">
                            <div class="flex">
                                <div class="mr-4 flex-shrink-0">
                                    <div class="step-number">1</div>
                                </div>
                                <div>
                                    <p class="text-gray-300 leading-relaxed">
                                        Dans une grande marmite, faites chauffer l'huile d'olive à feu moyen. Ajoutez
                                        les oignons hachés et faites-les revenir jusqu'à ce qu'ils deviennent
                                        translucides (environ 3-4 minutes).
                                    </p>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="mr-4 flex-shrink-0">
                                    <div class="step-number">2</div>
                                </div>
                                <div>
                                    <p class="text-gray-300 leading-relaxed">
                                        Ajoutez la viande d'agneau coupée en cubes et faites-la dorer de tous les côtés
                                        pendant environ 5 minutes.
                                    </p>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="mr-4 flex-shrink-0">
                                    <div class="step-number">3</div>
                                </div>
                                <div>
                                    <p class="text-gray-300 leading-relaxed">
                                        Incorporez le cumin, le gingembre, la cannelle, le safran, le sel et le poivre.
                                        Mélangez bien pour enrober la viande et les oignons des épices.
                                    </p>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="mr-4 flex-shrink-0">
                                    <div class="step-number">4</div>
                                </div>
                                <div>
                                    <p class="text-gray-300 leading-relaxed">
                                        Ajoutez les tomates hachées et le céleri coupé en petits morceaux. Laissez
                                        mijoter pendant environ 5 minutes, en remuant occasionnellement.
                                    </p>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="mr-4 flex-shrink-0">
                                    <div class="step-number">5</div>
                                </div>
                                <div>
                                    <p class="text-gray-300 leading-relaxed">
                                        Versez 2 litres d'eau dans la marmite et portez à ébullition. Ajoutez les pois
                                        chiches préalablement trempés et laissez cuire à feu moyen pendant 30 minutes.
                                    </p>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="mr-4 flex-shrink-0">
                                    <div class="step-number">6</div>
                                </div>
                                <div>
                                    <p class="text-gray-300 leading-relaxed">
                                        Ajoutez les lentilles et continuez la cuisson pendant encore 20 minutes, ou
                                        jusqu'à ce que tous les ingrédients soient tendres.
                                    </p>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="mr-4 flex-shrink-0">
                                    <div class="step-number">7</div>
                                </div>
                                <div>
                                    <p class="text-gray-300 leading-relaxed">
                                        Quelques minutes avant la fin de la cuisson, ajoutez la coriandre fraîche hachée
                                        et ajustez l'assaisonnement selon votre goût.
                                    </p>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="mr-4 flex-shrink-0">
                                    <div class="step-number">8</div>
                                </div>
                                <div>
                                    <p class="text-gray-300 leading-relaxed">
                                        Servez chaud, accompagné de tranches de citron frais et de dattes pour un iftar
                                        traditionnel marocain.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conseils et astuces -->
            <div class="mt-12 mb-12">
                <h2 class="text-2xl font-bold text-gold mb-4">Conseils et astuces</h2>
                <div class="bg-white bg-opacity-5 rounded-xl p-6 border border-gold border-opacity-20">
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <span class="text-gold mr-2 text-xl">✧</span>
                            <p class="text-gray-300">Pour gagner du temps, vous pouvez utiliser des pois chiches en
                                conserve, mais le goût sera légèrement différent.</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-gold mr-2 text-xl">✧</span>
                            <p class="text-gray-300">La Harira se bonifie avec le temps : n'hésitez pas à la préparer la
                                veille pour le lendemain.</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-gold mr-2 text-xl">✧</span>
                            <p class="text-gray-300">Traditionnellement, on ajoute un mélange de farine et d'eau en fin
                                de cuisson pour épaissir la soupe.</p>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </main>

    <script>
        // Toggle dropdown menu
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdownMenu');
            dropdown.classList.toggle('hidden');
        }

        // Notification
        document.addEventListener('DOMContentLoaded', function () {
            // Hide notification initially
            const notification = document.getElementById('success-notification');
            notification.classList.add('translate-x-full');

            // For demo purposes - show notification on button click
            const favButton = document.querySelector('.text-gold .mr-2');
            if (favButton) {
                favButton.addEventListener('click', function () {
                    notification.classList.remove('translate-x-full');
                    setTimeout(closeNotification, 5000);
                });
            }
        });

        function closeNotification() {
            const notification = document.getElementById('success-notification');
            notification.classList.add('translate-x-full');
        }

    </script>



</body>

</html>