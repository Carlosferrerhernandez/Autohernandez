# AutoHernandez 
This repo is implementaions of AutoHernandez de la Costa (Barranquilla).

## Requerimientos
* PHP >= 7.1.3
* Laravel >= 5.5.39
* Composer
* Git
* MySQL

### Installation ###

* `git clone https://github.com/Carlosferrerhernandez/Autohernandez.git projectname`
* `cd projectname`
* `composer install`
* `composer require softon/sweetalert`
* `cp .env.example .env`
* `php artisan key:generate`
* Add your database info in *.env*
* `php artisan migrate:refresh --seed` to create and populate tables
* `php artisan serve` to start the app one http:localhost:8000/

## Credits 
* Taylor Otwell (Creator of Laravel)
* Carlos Ferrer
* AUTOHERNANDEZ DE LA COSTA (https://www.autohernandezdelacosta.com.co/)
* SENNOVA



## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
