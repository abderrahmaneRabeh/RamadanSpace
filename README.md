# 🌙 Plateforme de Partage Ramadan 2025

## 📝 Description du projet
Une plateforme en ligne dédiée au Ramadan 2025, permettant aux utilisateurs de partager leurs expériences, recettes et conseils spirituels dans un espace communautaire interactif.

## 🎯 Objectif
Créer un espace simple et interactif où chacun peut contribuer et découvrir du contenu inspirant autour du mois sacré du Ramadan.


## 📷 Aperçu du Projet

Voici quelques images illustrant notre plateforme de partage Ramadan 2025 :

![Aperçu 1](./public/1.png)

![Aperçu 2](./public/2.png)

![Aperçu 3](./public/3.png)


## 🚀 Fonctionnalités principales

### 📿 Partage d'Expériences
- Les utilisateurs peuvent publier leurs témoignages sur le Ramadan
- Support pour texte et images (de préférence)
- Interface intuitive de publication

### 🍽️ Recettes Iftar et Suhoor
- Espace dédié au partage de recettes
- Classification par catégories (entrées, plats, desserts)
- Système de filtrage avancé par catégorie

### 💬 Commentaires
- Possibilité de commenter les publications
- Interactions entre les membres de la communauté
- Notifications de nouveaux commentaires

### 📊 Statistiques
- Affichage du nombre total de publications
- Classement des recettes les plus populaires
- Métriques d'engagement communautaire

## ⭐ Fonctionnalités bonus

### 🔐 Authentification & Profils
- Système d'inscription et de connexion sécurisé
- Profils personnalisables pour les utilisateurs
- Gestion des publications personnelles

### 🌟 Conseils du Jour
- Publication quotidienne de conseils par les administrateurs
- Réflexions inspirantes liées au Ramadan
- Archives des conseils précédents

### 📜 Exportation en PDF
- Possibilité de sauvegarder les publications en PDF
- Fonctionnalité de partage facile des documents générés
- Format optimisé pour l'impression

## 💻 Technologies utilisées

- **Backend**: Laravel
- **Frontend**: HTML, CSS, JavaScript
- **Template Engine**: Blade
- **Base de données**: PostgreSQL

## 🛠️ Installation

```bash
# Cloner le dépôt
git clone https://github.com/votre-username/ramadan-sharing-platform.git

# Accéder au répertoire du projet
cd ramadan-sharing-platform

# Installer les dépendances
composer install
npm install

# Exécuter les migrations
php artisan migrate

# Démarrer le serveur
php artisan serve
```

## 📊 Structure du projet
```
ramadan-platform/
├── app/                    # Logique principale de l'application
├── config/                 # Fichiers de configuration
├── database/               # Migrations et seeds
├── public/                 # Assets publics (CSS, JS, images)
├── resources/              # Vues, assets non compilés
│   ├── views/              # Templates Blade
│   │   ├── experiences/    # Vues pour le partage d'expériences
│   │   ├── recipes/        # Vues pour les recettes
│   │   ├── profiles/       # Vues pour les profils utilisateurs
│   │   └── admin/          # Interface d'administration
├── routes/                 # Définition des routes
└── tests/                  # Tests automatisés
```

## 🔮 Roadmap
- **Phase 1**: Développement des fonctionnalités principales
- **Phase 2**: Implémentation des fonctionnalités bonus
- **Phase 3**: Tests utilisateurs et optimisations

