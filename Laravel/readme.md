## Laravel PHP Framework

		composer create-project laravel/laravel LaravelDeComposer

		composer global require laravel/installer

		vim ~/.bashrc

		PATH=$PATH:~/.config/composer/vendor/bin

		source ~/.bashrc


		laravel new laravel

		composer create-project laravel/laravel LaravelLTS 5.1.x

- Propagar cambios en la vdi de Vagrant

		vagrant provision

- dentro de la maquina virtual (vagrant ssh). Crear controlador.

		php artisan make:controller PagesController

- bbdd de homestead desde larabel

		mysql -u homestead -p

pass --> secret

CREATE DATABASE mi_basedatos;

show databases;

- Uso de artisan para las migraciones de bbdd.

https://laravel.com/docs/5.4/artisan

- listar todos los comandos de artisan

		php artisan list

- creamos una tabla en /Code/Laravel

		php artisan make:migration create_tickets_table

		php artisan make:migration create_tickets_table --create=tickets
		composer dump-autoload -o

		php artisan migrate


		php artisan make:model Ticket

- eloquent, ORM de laravel
	- crea la migracion Tickets
	
		php artisan make:model Ticket -m


- crear controlador con artisan

		php artisan make:controller TicketsController --resource

- Crear request

		php artisan make:request TicketFormRequest

		composer update


- nuevas paginas

	modificacion de fichero de rutas web.php
	crear la vista asociada
	modificar el controlador para usar esa vista

- gestionamos la creacion de una nueva tabla comments

		php artisan make:migration create_comments_table --create=comments

- creamos la tabla

		php artisan migrate

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
