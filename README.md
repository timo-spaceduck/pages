# Pages

A small library for creating static pages in laravel.


## Installation

You can add this library as a local, per-project dependency to your project using [Composer](https://getcomposer.org/):

    composer require spaceduck/pages
    
You can publish the migration with:

    php artisan vendor:publish --provider="Spaceduck\Pages\PagesServiceProvider" --tag="migrations"
    
After the migration has been published you can create the `pages` table by running the migrations:

    php artisan migrate

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.