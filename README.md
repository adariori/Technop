# Technop

Site vitrine développé avec Laravel 12 pour l'entreprise Technop, présentant ses services, son équipe et ses coordonnées.

## Stack technique

- PHP 8.2 / Laravel 12
- Tailwind CSS 4 + Vite
- Pest 3 (tests)
- Laravel Pint (style de code)

## Pages

| Route        | Contrôleur                       | Description                       |
|--------------|-----------------------------------|------------------------------------|
| `/`          | redirige vers `/accueil`          | Page d'accueil                     |
| `/accueil`   | `EntrepriseController@accueil`    | Présentation de l'entreprise       |
| `/services`  | `EntrepriseController@services`   | Liste des services proposés        |
| `/personnel` | `EntrepriseController@personnel`  | Présentation de l'équipe           |
| `/contact`   | `EntrepriseController@contact`    | Coordonnées et statut d'ouverture  |

## Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
```

## Développement

```bash
composer run dev
```

Cette commande lance en parallèle le serveur PHP, la file d'attente (`queue:listen`) et Vite en mode watch.

## Tests

```bash
php artisan test
```

## Style de code

```bash
vendor/bin/pint --format agent
```
