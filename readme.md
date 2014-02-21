# Laravel 4.1 Boilerplate

## What's included?

* Laravel 4.1
* Confide for login
* Controllers and views for plain website and an admin area with Bootstrap 3
* Setup to build assets with Grunt

## Installation

* Pull.
* Change to the project directory.
* Run `composer install`.
* Run `php artisan key:generate` to create a random key for the project.
* Edit `bootstrap/start.php` and insert your local hostname near `$env`.
* Edit `app/config/app.php` for global project settings.
* Create your own `app/config/local/app.php` for development settings.
* Create your own `app/config/local/database.php` for development settings.
* Run `php artisan migrate`.
* To create a first user in database (optional):
	* Check/edit `app/database/seeds/UsersTableSeeder.php` for credentials.
	* Run `php artisan db:seed`.
* Run `npm install` to install Grunt stuff.
* Run `grunt` to build development assets for the first time.


# Laravel PHP Framework

[![Latest Stable Version](https://poser.pugx.org/laravel/framework/version.png)](https://packagist.org/packages/laravel/framework) [![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.png)](https://packagist.org/packages/laravel/framework) [![Build Status](https://travis-ci.org/laravel/framework.png)](https://travis-ci.org/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
