# Product Management Software

Repository developed to explore knowledge of PHP language development using the Laravel framework.

## Software purpose

Software developed with authentication and ability to manage products (perform CRUD operations - create, read, update, delete) with database connection.

![](/docs/images/products.png)


## Repository organization

* Source code => [pasta src](src).
* Images [pasta doc](docs).

## Technologies and Frameworks

* PHP 8.0.2
* Laravel 4.2.0
* Xamp 3.2.4
* Apache
* MySQL (MariaDB 10.4.17)
* Composer 2.0.11
* PHP Artisan
* HTML5 + CSS3

## User interface
[Software interface](docs/interface.md)

## How to run the application:
* run Apache and MySQL
* create database MySQL
* open the command line in the project folder
* command line: composer install
* command line: npm install
* create file .env (cp .env. example .env)
* configure your database variables in .env
* command line in src: php migrate
* command line in src: php artisan serve 

