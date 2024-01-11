# Projet Backend avec Symfony

Ce projet Backend utilise Symfony et API Platform pour gérer les données relatives aux joueurs, clubs, offres et agents.

## Entités

### Joueurs

Cette entité contient des attributs tels que le nom, la date de naissance, le club actuel et l'agent du joueur. La relation entre les joueurs et les clubs est une relation "one-to-many". De plus, il existe une relation "one-to-many" entre les joueurs et les offres. L'entité Joueurs gère les dates de naissance des joueurs.

### Clubs

Cette entité comprend des attributs tels que le nom, le pays et le logo du club. La relation entre les clubs et les joueurs est une relation "one-to-many".

### Offres

Cette entité représente les offres de transfert reçues pour les joueurs. Elle contient des attributs tels que le joueur concerné, le club proposant le transfert et le montant de l'offre. La relation entre les offres et les joueurs est une relation "many-to-one".

### Agent

Cette entité représente les agents des joueurs. Elle comprend des attributs tels que le nom de l'agent et son email. La relation entre les agents et les joueurs peut être une relation "many-to-one".

## Fonctionnalités

- Gestion efficace des joueurs, clubs, offres et agents.
- Transformation des dates de naissance au format français dans l'application Vue.js.
- Mise en place d'une API sécurisée à l'aide d'API Platform.

## Base de données

- Système de gestion de base de données : MySQL.
- Sauvegarde : Exportation au format .dump avec la fonctionnalité d'exportation de MySQL.
- Restauration : Utilisation du fichier de sauvegarde pour restaurer la base de données.

## Utilisation

1. Clonez le projet.
2. Installez les dépendances avec `composer install`.
3. Configurez la base de données dans le fichier `.env`.
4. Exécutez les migrations avec `php bin/console doctrine:migrations:migrate`.
5. Lancez le serveur Symfony avec `symfony server:start`.

---

**Auteur :** Rayan Kichou
