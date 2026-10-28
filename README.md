# Luxury Wedding Planner

A web application to manage weddings in one place: clients, wedding details, guests, reception tables, service providers and planning.

Built with **Laravel** as an academic project.


## Features

- Secure login and registration
- Dashboard with an overview of the activity
- Manage clients
- Create and manage weddings (with a printable summary)
- Manage guests and their attendance
- Organize reception tables
- Manage service providers (prestataires)
- Wedding planning

## Tech stack

- PHP 8.2+ and Laravel 12
- MySQL
- Blade templates, Tailwind CSS, Alpine.js
- Vite
- Laravel Breeze (authentication)

## Installation

You need PHP 8.2+, Composer, Node.js and MySQL (for example with XAMPP).

```bash
git clone https://github.com/helisoamiary-create/luxury-wedding-planner.git
cd luxury-wedding-planner

composer install
npm install

cp .env.example .env
php artisan key:generate
```

Create an empty MySQL database named `wedding_planner`, check the `DB_` values in your `.env` file, then run:

```bash
php artisan migrate
npm run build
php artisan serve
```

Open http://127.0.0.1:8000 and create an account from the **Register** page.

## Author

Helisoa Miary Rakotonirina, web and software developer from Madagascar.