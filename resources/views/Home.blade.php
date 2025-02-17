<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan 2025 - Code Shogun</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
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
                    <a href="#accueil" class="text-gold hover:text-gold transition">Accueil</a>
                    <a href="#experiences" class="text-white hover:text-gold transition">Expériences</a>
                    <a href="#recettes" class="text-white hover:text-gold transition">Recettes</a>
                </div>
                <a href="/login"
                    class="bg-gold text-dark-green px-6 py-2 rounded-full font-bold hover:bg-opacity-90 transition">
                    Connexion
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="accueil" class="min-h-screen flex items-center justify-center hero-gradient">
        <div class="container mx-auto px-6 py-24 text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-gold mb-8 animate__animated animate__fadeInDown">
                Ramadan 2025
            </h1>
            <p class="text-xl text-white mb-12 max-w-2xl mx-auto animate__animated animate__fadeInUp">
                Rejoignez notre communauté pour partager vos expériences spirituelles
                et découvrir des recettes traditionnelles pendant ce mois sacré
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-4 animate__animated animate__fadeInUp">
                <a href="/Experiences"
                    class="bg-gold text-dark-green px-8 py-4 rounded-full font-bold hover:bg-opacity-90 transition">
                    Partager votre expérience
                </a>
                <a href="/Recettes"
                    class="border-2 border-gold text-gold px-8 py-4 rounded-full font-bold hover:bg-gold hover:text-dark-green transition">
                    Explorer les recettes
                </a>
            </div>
        </div>
    </section>

    <!-- Experiences Section -->
    <section id="experiences" class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-gold text-center mb-16">Expériences Partagées</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Experience Card 1 -->
                <div class="bg-white bg-opacity-5 rounded-xl p-6 card-hover border border-gold border-opacity-20">
                    <div class="text-gold text-4xl mb-4">📝</div>
                    <h3 class="text-gold text-xl font-bold mb-4">Premier Jour de Ramadan</h3>
                    <p class="text-gray-300">Une expérience spirituelle unique partagée par Ahmed...</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-gold text-sm">Il y a 2 jours</span>
                        <a href="/ExDetails" class="text-gold hover:underline">Lire plus</a>
                    </div>
                </div>

                <!-- Experience Card 2 -->
                <div class="bg-white bg-opacity-5 rounded-xl p-6 card-hover border border-gold border-opacity-20">
                    <div class="text-gold text-4xl mb-4">🌙</div>
                    <h3 class="text-gold text-xl font-bold mb-4">Nuit du Destin</h3>
                    <p class="text-gray-300">Témoignage spirituel sur la Laylat al-Qadr...</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-gold text-sm">Il y a 3 jours</span>
                        <button class="text-gold hover:underline">Lire plus</button>
                    </div>
                </div>

                <!-- Experience Card 3 -->
                <div class="bg-white bg-opacity-5 rounded-xl p-6 card-hover border border-gold border-opacity-20">
                    <div class="text-gold text-4xl mb-4">🕌</div>
                    <h3 class="text-gold text-xl font-bold mb-4">Prière en Communauté</h3>
                    <p class="text-gray-300">L'importance des prières de Tarawih...</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-gold text-sm">Il y a 4 jours</span>
                        <button class="text-gold hover:underline">Lire plus</button>
                    </div>
                </div>
            </div>
            <div class="text-center mt-16">
                <a href="/Experiences"
                    class="bg-gold text-dark-green px-8 py-4 rounded-full font-bold hover:bg-opacity-90 transition">Voir
                    toutes les expériences</a>
            </div>
        </div>
    </section>

    <!-- Recipes Section -->
    <section id="recettes" class="py-20 bg-white bg-opacity-5">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-gold text-center mb-16">Recettes Populaires</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Recipe Card 1 -->
                <div class="rounded-xl overflow-hidden card-hover">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Harira_vegetarisch.jpg/420px-Harira_vegetarisch.jpg"
                        alt="Harira" class="w-full h-48 object-cover" />
                    <div class="p-6 bg-white bg-opacity-5 border border-gold border-opacity-20">
                        <h3 class="text-gold text-xl font-bold mb-2">Harira Traditionnelle</h3>
                        <p class="text-gray-300 mb-4">Soupe traditionnelle marocaine pour l'iftar...</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gold">⏱️ 45 mins</span>
                            <button class="text-gold hover:underline">Voir la recette</button>
                        </div>
                    </div>
                </div>

                <!-- Recipe Card 2 -->
                <div class="rounded-xl overflow-hidden card-hover">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Harira_vegetarisch.jpg/420px-Harira_vegetarisch.jpg"
                        alt="Dates" class="w-full h-48 object-cover" />
                    <div class="p-6 bg-white bg-opacity-5 border border-gold border-opacity-20">
                        <h3 class="text-gold text-xl font-bold mb-2">Dattes Farcies</h3>
                        <p class="text-gray-300 mb-4">Dattes délicieuses pour le suhoor...</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gold">⏱️ 20 mins</span>
                            <button class="text-gold hover:underline">Voir la recette</button>
                        </div>
                    </div>
                </div>

                <!-- Recipe Card 3 -->
                <div class="rounded-xl overflow-hidden card-hover">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Harira_vegetarisch.jpg/420px-Harira_vegetarisch.jpg"
                        alt="Chorba" class="w-full h-48 object-cover" />
                    <div class="p-6 bg-white bg-opacity-5 border border-gold border-opacity-20">
                        <h3 class="text-gold text-xl font-bold mb-2">Chorba Ftour</h3>
                        <p class="text-gray-300 mb-4">Soupe traditionnelle algérienne...</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gold">⏱️ 60 mins</span>
                            <button class="text-gold hover:underline">Voir la recette</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-16">
                <a href="/Recettes"
                    class="bg-gold text-dark-green px-8 py-4 rounded-full font-bold hover:bg-opacity-90 transition">Voir
                    toutes les recettes</a>
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
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
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
    </script>
</body>

</html>
