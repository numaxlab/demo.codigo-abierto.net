# Testa Demo Application

This is a demonstration application for [Testa](https://github.com/numaxlab/testa), an opinionated, feature-rich
solution specifically designed for building advanced, content-driven online stores for bookshops.

This repository **showcases** the capabilities of Testa in a practical setting, providing a **comprehensive example** of
how to leverage its features.

---

## 🛠️ Requirements

This is a Laravel application. Therefore, please check
the [Laravel requirements](https://laravel.com/docs/12.x/deployment#server-requirements). In addition to those, you will
need:

* PHP >= 8.4
* MySQL / MariaDB / PostgreSQL
* Redis
* Meilisearch
* Node >= 22

---

## ⚙️ Installation

These installation instructions apply to a local environment using Docker
and [Laravel Sail](https://laravel.com/docs/12.x/sail):

1. Clone this repository.
2. Create your `.env` file from `.env.example`.
3. Execute `composer install`.
4. Execute `sail build` (only the first time) and then `sail up`.
5. Execute `sail artisan key:generate`.
6. Execute `sail artisan storage:link`.
7. Execute `sail artisan lunar:geslib:install`.
8. Execute `sail artisan lunar:testa:install`.
9. Execute `npm install` and `npm run dev`.

After these steps, you can open `http://localhost` in your browser to view the application storefront and
`http://localhost/admin` to access the Lunar admin panel.
