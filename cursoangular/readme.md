## Laravel API RESTFULL

-------------------------------

- creamos api rest con laravel

		laravel new cursoangular
- modificar el archivo Homestead.yaml, añadiendo la ruta de la nueva cursoangular.app


- reaprovisionar la maquina virtual

		vagrant provision

- Activar el nuevo dominio, conversion del proyecto a formato unix

		serve cursoangular.app /home/vagrant/Code/cursoangular/public


- bbdd de mysql desde homestead para larabel

		mysql -u homestead -p

pass --> secret

CREATE DATABASE cursoangular;

show databases;

- crear tablas

		php artisan make:model Image -m

- generar las tablas en bbdd

		php artisan migrate


		php artisan make:model Ticket


- usar faker para poblar la bbdd

		php artisan make:seeder ImagesTableSeeder

		php artisan db:seed

- crear api endpoint

	crear respuesta restfull en routes/php.api

- crear controller	
 
		php artisan make:controller ImagesController --resource

- revisar la lista de endpoints restfull

		php artisan route:list


- habilitar cors
- crear middleware personalizado

		php artisan make:middleware Cors

- modificar bug de cors

- modificar funcion store de imageController

- public/index.php y app/http/middleware/cors.php añadir cabeceras para permitir cors




[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
