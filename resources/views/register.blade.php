<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Ramadan 2025</title>
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
            @if (session('success'))
                <h1 style="color: rgb(255, 255, 255);">{{ session('success') }}</h1>
            @endif
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color: red;">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <h2 class="text-3xl font-bold text-gold text-center mb-8">Inscription</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block text-gold mb-2">Nom complet</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-4 py-2 rounded-full bg-white bg-opacity-10 text-white border-gold border focus:outline-none">
                    <p id="name-error" class="mt-2 text-red-600 text-sm"></p>
                </div>
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
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gold mb-2">Confirmer le mot de passe</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        class="w-full px-4 py-2 rounded-full bg-white bg-opacity-10 text-white border-gold border focus:outline-none">
                    <p id="password_confirmation-error" class="mt-2 text-red-600 text-sm"></p>
                </div>
                <button type="submit"
                    class="w-full bg-gold text-dark-green px-6 py-3 rounded-full font-bold hover:bg-opacity-90 transition">
                    S'inscrire
                </button>
            </form>
            <div class="mt-6 text-center">
                <span class="text-gray-300">Déjà inscrit ?</span>
                <a href="/login" class="text-gold hover:underline ml-1">Se connecter</a>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('input', () => {
                if (input.name === 'name') {
                    if (!input.value.match(/^[a-zA-Z\s]+$/)) {
                        document.querySelector('#name-error').textContent =
                            'Le nom ne doit contenir que des lettres et des espaces';
                    } else {
                        document.querySelector('#name-error').textContent = '';
                    }
                }

                if (input.name === 'email') {
                    if (!input.value.match(
                            /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/)) {
                        document.querySelector('#email-error').textContent =
                            'L\'email est invalide';
                    } else {
                        document.querySelector('#email-error').textContent = '';
                    }
                }

                if (input.name === 'password') {
                    if (input.value.length < 8) {
                        document.querySelector('#password-error').textContent =
                            'Le mot de passe doit contenir au moins 8 caractères';
                    } else {
                        document.querySelector('#password-error').textContent = '';
                    }
                }

                if (input.name === 'password_confirmation') {
                    if (input.value != document.querySelector('input[name=password]')
                        .value) {
                        document.querySelector('#password_confirmation-error').textContent =
                            'Les mots de passe ne correspondent pas';
                    } else {
                        document.querySelector('#password_confirmation-error').textContent = '';
                    }
                }
            });
        });
    </script>
</body>

</html>
