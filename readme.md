<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Aviacion 
This repo is implementaions of SENNOVA Regional Altántico (SENA).

## Requerimientos
* PHP >= 7.1.3
* Laravel >= 5.5
* Composer
* Git
* MySQL

### Installation ###

* `git clone https://github.com/Carlosferrerhernandez/Aviacion.git projectname`
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
* SENA (http://www.sena.edu.co/es-co/Paginas/default.aspx)
* SENNOVA



## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
