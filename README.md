# Testa demo application

This is a demo application for [Testa](https://github.com/numaxlab/testa), an opinionated, feature-rich solution
specifically designed for building advanced, content-driven online stores for bookshops.

This repository aims to showcase the capabilities of Testa in a practical setting, providing a comprehensive example of
how to leverage its features.

## Requirements

This is a Laravel application, so check
the [Laravel requirements](https://laravel.com/docs/12.x/deployment#server-requirements). On top of that, you need:

* PHP >= 8.4
* MySQL / MariaDB / PostgreSQL
* Redis
* Meilisearch
* Node >= 22

## Installation

This installation instructions apply to a local environment with Docker
and [Laravel Sail](https://laravel.com/docs/12.x/sail):

1. Clone this repository
2. Create .env file from .env.example
3. Execute `composer install`
4. Execute `sail build` (only the first time) and `sail up`
5. Execute `sail artisan key:generate`
6. Execute `sail artisan storage:link`
7. Execute `sail artisan lunar:geslib:install`
8. Execute `sail artisan lunar:testa:install`
9. Execute `npm install` && `npm run dev`

After this steps you can open `http://localhost` in your browser to see the application storefront and
`http://localhost/admin` to see the Lunar admin panel.
