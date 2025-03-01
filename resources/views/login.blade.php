<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Ramadan 2025</title>
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
    </style>
</head>

<body class="bg-pattern min-h-screen flex items-center justify-center">

    @if (session('error'))
        <div id="error-notification"
            class="fixed top-24 right-0 transform translate-x-full bg-red-600 text-white px-6 py-4 rounded-l-lg shadow-lg border-l-4 border-red-800 flex items-center z-50 transition-transform duration-500 ease-out">
            <div class="text-red-800 mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
            <div>
                <p class="font-bold">Erreur!</p>
                <p>{{ session('error') }}</p>
            </div>
            <button onclick="closeNotification()" class="ml-6 text-white hover:text-red-800 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    @endif
    <div class="container mx-auto px-6">
        <div class="max-w-md mx-auto bg-white bg-opacity-5 rounded-xl p-8 border border-gold border-opacity-20">
            <h2 class="text-3xl font-bold text-gold text-center mb-8">Connexion</h2>
            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block text-gold mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-2 rounded-full bg-white bg-opacity-10 text-white border-gold border focus:outline-none">
                    <p id="email-error" class="mt-2 text-red-600 text-sm"></p>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gold mb-2">Mot de passe</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 rounded-full bg-white bg-opacity-10 text-white border-gold border focus:outline-none">
                    <p id="password-error" class="mt-2 text-red-600 text-sm"></p>
                </div>
                <button type="submit"
                    class="w-full bg-gold text-dark-green px-6 py-3 rounded-full font-bold hover:bg-opacity-90 transition">
                    Se connecter
                </button>
            </form>
            <div class="mt-4 text-center">
                <span class="text-gray-300">Pas encore de compte ?</span>
                <a href="/register" class="text-gold hover:underline ml-1">S'inscrire</a>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('form').addEventListener('submit', function (event) {
            let valid = true;
            const email = document.getElementById('email');
            const emailError = document.getElementById('email-error');
            const password = document.getElementById('password');
            const passwordError = document.getElementById('password-error');

            // Email validation
            if (!/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email.value)) {
                valid = false;
                emailError.textContent = 'Veuillez entrer un email valide.';
            } else {
                emailError.textContent = '';
            }

            // Password validation (example: at least 6 characters)
            if (password.value.length < 6) {
                valid = false;
                passwordError.textContent = 'Le mot de passe doit contenir au moins 6 caractères.';
            } else {
                passwordError.textContent = '';
            }

            if (!valid) {
                event.preventDefault();
            }
        });


        // Animation d'entrée depuis la droite
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                const notification = document.getElementById('error-notification');
                notification.classList.remove('translate-x-full');
            }, 100);

            // Fermeture automatique après 5 secondes
            setTimeout(function () {
                closeNotification();
            }, 5000);
        });

        function closeNotification() {
            const notification = document.getElementById('error-notification');
            notification.classList.add('translate-x-full');

            // Supprimer complètement après la transition
            setTimeout(function () {
                notification.remove();
            }, 500);
        }
    </script>
</body>

</html>