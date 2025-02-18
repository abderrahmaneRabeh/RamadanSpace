<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expériences Ramadan 2025 - Code Shogun</title>
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

        .border-gold {
            border-color: var(--primary-gold);
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
                    <a href="/Experiences" class="text-gold transition">Expériences</a>
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

    <!-- Hero Section -->
    <section class="pt-24 pb-12 hero-gradient">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-gold mb-4">Expériences Ramadan</h1>
            <p class="text-xl text-white mb-8 max-w-2xl mx-auto">
                Découvrez et partagez des moments inspirants du Ramadan 2025
            </p>
        </div>
    </section>

    <!-- Experiences Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Experience Card 1 -->
                <div class="bg-white bg-opacity-5 rounded-xl p-6 card-hover border border-gold border-opacity-20">
                    <div class="text-gold text-4xl mb-4">📝</div>
                    <h3 class="text-gold text-xl font-bold mb-4">Premier Jour de Ramadan</h3>
                    <p class="text-gray-300 mb-4">Une expérience spirituelle unique partagée par Ahmed. Le premier jour
                        du Ramadan est toujours spécial, rempli d'anticipation et de renouveau spirituel...</p>
                    <div class="flex justify-between items-center">
                        <span class="text-gold text-sm">Il y a 2 jours</span>
                        <a href="#" class="text-gold hover:underline">Lire plus</a>
                    </div>
                </div>

                <!-- Experience Card 2 -->
                <div class="bg-white bg-opacity-5 rounded-xl p-6 card-hover border border-gold border-opacity-20">
                    <div class="text-gold text-4xl mb-4">🌙</div>
                    <h3 class="text-gold text-xl font-bold mb-4">Nuit du Destin</h3>
                    <p class="text-gray-300 mb-4">Témoignage spirituel sur la Laylat al-Qadr. Cette nuit sacrée est
                        considérée comme la plus importante du Ramadan, où les prières sont particulièrement
                        puissantes...</p>
                    <div class="flex justify-between items-center">
                        <span class="text-gold text-sm">Il y a 3 jours</span>
                        <a href="#" class="text-gold hover:underline">Lire plus</a>
                    </div>
                </div>

                <!-- Experience Card 3 -->
                <div class="bg-white bg-opacity-5 rounded-xl p-6 card-hover border border-gold border-opacity-20">
                    <div class="text-gold text-4xl mb-4">🕌</div>
                    <h3 class="text-gold text-xl font-bold mb-4">Prière en Communauté</h3>
                    <p class="text-gray-300 mb-4">L'importance des prières de Tarawih. Ces prières nocturnes spéciales
                        pendant le Ramadan renforcent le sens de la communauté et approfondissent la connexion
                        spirituelle...</p>
                    <div class="flex justify-between items-center">
                        <span class="text-gold text-sm">Il y a 4 jours</span>
                        <a href="#" class="text-gold hover:underline">Lire plus</a>
                    </div>
                </div>

                <!-- Experience Card 4 -->
                <div class="bg-white bg-opacity-5 rounded-xl p-6 card-hover border border-gold border-opacity-20">
                    <div class="text-gold text-4xl mb-4">🍽️</div>
                    <h3 class="text-gold text-xl font-bold mb-4">Iftar en Famille</h3>
                    <p class="text-gray-300 mb-4">Le moment précieux de la rupture du jeûne en famille. L'iftar est un
                        moment de joie, de partage et de gratitude, renforçant les liens familiaux...</p>
                    <div class="flex justify-between items-center">
                        <span class="text-gold text-sm">Il y a 5 jours</span>
                        <a href="#" class="text-gold hover:underline">Lire plus</a>
                    </div>
                </div>

                <!-- Experience Card 5 -->
                <div class="bg-white bg-opacity-5 rounded-xl p-6 card-hover border border-gold border-opacity-20">
                    <div class="text-gold text-4xl mb-4">🤲</div>
                    <h3 class="text-gold text-xl font-bold mb-4">Actes de Charité</h3>
                    <p class="text-gray-300 mb-4">L'importance de la générosité pendant le Ramadan. De nombreux
                        musulmans intensifient leurs actes de charité pendant ce mois sacré, aidant ceux dans le
                        besoin...</p>
                    <div class="flex justify-between items-center">
                        <span class="text-gold text-sm">Il y a 6 jours</span>
                        <a href="#" class="text-gold hover:underline">Lire plus</a>
                    </div>
                </div>

                <!-- Experience Card 6 -->
                <div class="bg-white bg-opacity-5 rounded-xl p-6 card-hover border border-gold border-opacity-20">
                    <div class="text-gold text-4xl mb-4">📖</div>
                    <h3 class="text-gold text-xl font-bold mb-4">Lecture du Coran</h3>
                    <p class="text-gray-300 mb-4">L'expérience enrichissante de la lecture quotidienne du Coran.
                        Beaucoup cherchent à compléter la lecture de l'intégralité du Coran pendant le Ramadan...</p>
                    <div class="flex justify-between items-center">
                        <span class="text-gold text-sm">Il y a 7 jours</span>
                        <a href="#" class="text-gold hover:underline">Lire plus</a>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <nav class="inline-flex rounded-md shadow">
                    <a href="#"
                        class="px-4 py-2 text-sm font-medium text-gold bg-white bg-opacity-10 rounded-l-md hover:bg-opacity-20">
                        Précédent
                    </a>
                    <a href="#" class="px-4 py-2 text-sm font-medium text-gold bg-white bg-opacity-20">
                        1
                    </a>
                    <a href="#"
                        class="px-4 py-2 text-sm font-medium text-gold bg-white bg-opacity-10 hover:bg-opacity-20">
                        2
                    </a>
                    <a href="#"
                        class="px-4 py-2 text-sm font-medium text-gold bg-white bg-opacity-10 hover:bg-opacity-20">
                        3
                    </a>
                    <a href="#"
                        class="px-4 py-2 text-sm font-medium text-gold bg-white bg-opacity-10 rounded-r-md hover:bg-opacity-20">
                        Suivant
                    </a>
                </nav>
            </div>
        </div>
    </section>

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
                        <li><a href="/" class="text-gray-300 hover:text-gold">Accueil</a></li>
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
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Scroll animation for cards
        const cards = document.querySelectorAll('.card-hover');
        const animateOnScroll = () => {
            cards.forEach(card => {
                const cardTop = card.getBoundingClientRect().top;
                if (cardTop < window.innerHeight - 100) {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }
            });
        };
        window.addEventListener('scroll', animateOnScroll);
        animateOnScroll(); // Initial check on page load
    </script>
</body>

</html>