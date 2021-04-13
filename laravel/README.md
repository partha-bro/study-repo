# LARAVEL - V 8

## What is Laravel?

	1. PHP Framework
	2. For developing web app and API
	3. free of cost
	4. Mordern framework and easy to use
	5. The most used framework in php

## History and Version

	First Relese			: June 2011
	Current Version			: 8.0
	Developer name 			: Taylor Otwell
	Written in 				: PHP

## Why use Laravel

	1. Strong command line support
	2. Large community
	3. Regular updates
	4. Fast & Simple

## What is Composer?

	Composer is A Dependency Manager for PHP.
	It can add needed extra packge for project and download the all dependency.
	All the package details store in composer.json and file in vender directory.

	Add package and install command:
		composer require package/name
		example:
			$ composer require laravel/ui

## How to install laravel? 

	For laravel 8 requirements
		php version > 7.3
		composer

	Step 1: For First time we install "laravel installer"

		$ composer global require laravel/installer

	Step 2: Now create a project

		$ laravel new project_name 

## How to start laravel php server?

	We can also use xamppp/wamp for server, but laravel has inbuld server.

	$ php artisan serve

## Folder and file structure
	
	1. app
		Console					// custom command file
		Exceptions				// fetch error using this file
		Http
			Controllers			// connection between html and database
			Middleware			// filter user to access our website
			kernel.php 			// register the middleware and conttroller
		Models					// database connection
		Providers				// service provider like authorization, route service

	2. bootstrap 		        //	load the html file with default style
	3. config					// configuration of project
	4. database					// opration of database like migrate, seeding, dummy data entry for test
		factories
		migrations
		seeders
	5. public					// all file to first run in browser
	6. resource					// uncompiled public files
		css
		js
		lang 
		views					// html file with blade.php extenstion
	7. routes					// route the file how we can present in browser
	8. storage					// upload external file
	9. tests					// write testcase for phpunit check valid the testcases
	10. vendor					// all dependency package stores here

## How to create a file or moddify existing file?

	1. moddify existing file
			Goto the resources/views/
			and open the welcome.blade.php and make changes.

	2. Create another file
			Goto the resources/views/
			and create the new_file.blade.php and write html code.

## How to chages which file is run first to view in browser?
	
	Goto the routes folder
		and open web.php and make changes.

