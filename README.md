<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Drip Hub

Drip hub is a web shop admin tool made with laravel to make managing products and users easy! The admin page has support for adding, viewing, editing and removing products as well as users. 

### Products

Drip Hub specializes in the management of rings, allowing the user to specify a range of attributes varying from ring size, model, type and more!

### User Roles

There are currently 2 types of user roles, an admin and employee role. The admin role has access to both users and product management while the employee role only has access to the product management.

## Installation

To use this admin tool you need to run

```sh
npm install
```
as well as
```sh
composer install
```
to install all the necessary packages. When the packages have been installed you should be able to run `php artisan` commands.

Start by setting up the database by running
```sh
php artisan migrate
```

When the database is set up you need to insert a user. The database seeder RoleSeeder.php includes a pre made admin user that can be adjusted to fit desired login details. When your user is ready run
```sh
php artisan db:seed --class=RoleSeeder
```

When your user has been inserted run
```sh
php artisan serve
```
to start the server, then head on over to `localhost:8000` and login with the user email and password you assigned earlier to use the admin tool.
