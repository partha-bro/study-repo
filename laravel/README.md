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

## What is php artisan?

	PHP 		: it is a php compiler php.exe.
	Artisan		: Artisan is the name of the command-line interface included with Laravel. It provides a number of helpful commands for your use while developing your application. It is driven by the powerful Symfony Console component.

### How to test our laravel code

	For Link: https://www.youtube.com/watch?v=c3SWoQxGj58

	There are two methods:
		1. vendor/bin/phpunit
		2. php artisan test

### Folder and file structure
	
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

### How to create a file or moddify existing file?

	1. moddify existing file
			Goto the resources/views/
			and open the welcome.blade.php and make changes.

	2. Create another file
			Goto the resources/views/
			and create the new_file.blade.php and write html code.

### How to chages which file is run first to view in browser?
	
	Goto the routes folder
		and open web.php and make changes.

## Controller:


#### What is Controller?
	
	The Controller is responsible for controlling the application logic and acts as the coordinator between the View and the Model. The Controller receives an input from the users via the View, then processes the user's data with the help of Model and passes the results back to the View.

#### How to make a controller in command line?

	$ php artisan make:controller NameController

	NOTE: name of control is equal to name of class so the writing style is eg. UserController

#### Where controller is exists?

	Goto the app/http/Controllers folder.

#### Make function in Controller?

	Simple create a normal function insde the class

#### How to call controller from routing for view?

	Step 1: Goto the routes/web.php and open

	Step 2: Now attach the controller file using 'use' keyword.

	Step 3: Make a route function like-
				Route::get('path',array [NameController::class,'method_name'] );

				NOTE: Method_name must not contain brackets and use as a string with quotation

	Step 4: If we want to input some data from user using URL
				Route::get('path/{var_name}',array [NameController::class,'method_name'] );

				that var_name use as controller method parameter.

## View

#### What is view?

	In MVC framework, the letter “V” stands for Views. It separates the application logic and the presentation logic. Views are stored in 'resources/views' directory. Generally, the view contains the HTML which will be served by the application.

#### Make a view file?

	Step 1: Goto the resources/views folder

	Step 2: Create a file and name that file is name.blade.php

	NOTE: blade is template engine of laravel for view files.

#### how to call view pages?

	There are two methods to call a view page:
		
		1. From route

			Again there are two method of route to call a view

				1. get() method

					Route::get('path',function(){
								return view('view_name');
						});

				2. view() method

					Route::view('path','view_name');

		2. From controller

			in controller page, we can define a user-define function and inside that we can simply return view('view_name').

#### How to pass a value to view page?

	NOTE: When we can pass the value using associated array.
	
	There are two methods to pass vlaue a view page:
		
		1. From route

				1. get() method

					Route::get('user2/{name}',function($name,$file = 'get method from Route'){
						return view('user',['name'=>$name,'file'=>$file]);
					});

		2. From controller

			in web.php file
				Route::get('user/{name}',[UserController::class,'loadpage']);

			In controller file
				public function loadPage($name='Not provided.',$file = 'Controller')
			    {
			    	# code...
			    	return view('user',['name'=>$name,'file'=>$file]);
			    }	

#### How to retrive value from pass variale?

	use {{variable_name}} to read the value. 

#### include View in View

	using include() function

	In view page, @include('another_view_name')

#### Php in Js

	Using php variable in js using @json(array)

	<script>
		var data= @json($users);
		console.log(data[0])
	</script>

#### What is Csrf token and why is use?
	
	A CSRF token is a unique, secret, unpredictable value that is generated by the server-side application and transmitted to the client in such a way that it is included in a subsequent HTTP request made by the client.

	Csrf token is use for security reason. and use it inside the form tag.

	command: @csrf

### How to we include external jquery or bootstrap file in laravel?

	The right way is this one:

		<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>

	Here I have a js directory in the laravel's public folder. There I have a jquery.js file. The function URL::asset() produces the necessary url for you. Same for the css:

		<link rel="stylesheet" href="{{ URL::asset('css/somestylesheet.css') }}" />

## Laravel HTML Form

#### Make Html Form
#### Make controller
#### Route get and post
#### get form data

	Step 1: Make a controller for user form data
	Step 2: make a method for manupulate input data
	Step 3: Create a view file which 
					1. we can write form code
					2. inside form code we define @csrf token
					3. in form tag, action='contriller path' and method='post'
	Step 4: Connect route to that controller
					1. use namespace of that controller
					2. connect using Route::post(path, array of file"controller::class,method")
						because we can use post in method attribute of form

	Step 5: Logic of controller method
					1. we take a type hint Request data type of variable and work with that variable

							 public function getData(Request $rst)
							    {
							    	# code...
							    	return $rst->input();
							    }

## Middleware

#### What is Group Middleware
#### Make Middleware
#### Register It
#### Apply Middleware