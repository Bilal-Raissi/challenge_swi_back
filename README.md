# API de Gestion des Contrats de Travail

Cette API RESTful, basée sur Laravel, est conçue pour gérer les clauses des contrats de travail. Elle permet la création, la récupération, la modification et la suppression des articles de contrat, et elle s’intègre avec une application frontend Vue.js.

## Fonctionnalités

- **Gestion des Articles de Contrat** : Définir, récupérer, mettre à jour et supprimer des clauses de contrat.
- **Points de Terminaison RESTful** : Suivi des principes REST pour une intégration facile avec les applications frontales.

## Prérequis

- PHP 8.x
- Composer
- MySQL
- Laravel 9.x

## Installation

1. **Cloner le dépôt :**
   ```bash
   git clone <url-du-dépôt>
   cd repertoire-backend

2. **Installer les dépendances :**
   composer install

3. **Générer la clé de l’application :**
   php artisan key:generate

4. **Base de données :**
   Création d'une base de données sous le nom "challenge_db"

5. **Exécuter les migrations :**
   php artisan migrate

## Lancer l’application

php artisan serve

## API

   GET    :   /api/contract-articles	   =>  Récupérer la liste des articles de contrat
   #
   POST   :   /api/contract-articles	   =>  Ajouter un nouvel article de contrat
   #
   PUT    :   /api/contract-articles/{id} =>  Modifier un article de contrat existant
   #
   DELETE :   /api/contract-articles/{id} =>  Supprimer un article de contrat

