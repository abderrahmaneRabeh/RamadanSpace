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
    <div class="container mx-auto px-6">
        <div class="max-w-md mx-auto bg-white bg-opacity-5 rounded-xl p-8 border border-gold border-opacity-20">
            <h2 class="text-3xl font-bold text-gold text-center mb-8">Connexion</h2>
            <form>
                <div class="mb-6">
                    <label for="email" class="block text-gold mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-2 rounded-full bg-white bg-opacity-10 text-white border-gold border focus:outline-none">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gold mb-2">Mot de passe</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 rounded-full bg-white bg-opacity-10 text-white border-gold border focus:outline-none">
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
        // You can add form validation and submission logic here
    </script>
</body>

</html>
