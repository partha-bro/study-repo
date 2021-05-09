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

	{{}} : this is denotes as <?php ?> we can write php code in blade template. 

## Component

### What is Component in laravel?

	Components are a reusable group of elements. Like you may want to create a Navbar to be used in almost all of your web-app pages. So you build your Navbar as a Component and tell laravel to grab it whenever you need it, and for many times as you like.

### How to make component in laravel?
	
	In terminal, we can make component, 
	Command:
		$ php artisan make:component component_name

		This command make two files.
			1. header.blade.php : 
					This is html viewer of component_name file.
					Location: resources/views/components/component_name.blade.php

			2. header.php
					This is logic code of component_name file.
					Location: app/View/Components/component_name.php

### How to use component?

	Step 1: Make changes and write some common html code/view in component_name.blade.php

	Step 2: Create some view file for attach common file of comonent_name
			In view File, we can use a tag for include component file <x-conmponent_name />

	Step 3: We can call that view from routes.
	
### How to pass data in component?
	
	Step 1: Make changes and write some common html code/view in component_name.blade.php

	Step 2: Create some view file for attach common file of comonent_name
			In view File, we can use a tag for include component file <x-conmponent_name />

	Step 3: we can pass some value blade file to header.blade file then

			1. tag with any name of attribute with value
					<x-header name='User'/>
			2. we can fetch that data from component controller and assign in cunstruct method
					public $title;		// any name
				    public function __construct($name)
				    {
				        //
				        $this->title = $name;
				    }

	Step 4: Now we put that $title(any) variable in component view file
					<h1>{{$title}} of Header file</h1>

	Step 5: We can call that view from routes.

## Blade Template

### What is blade template?

	Blade is the simple, yet powerful templating engine that is included with Laravel. Unlike some PHP templating engines, Blade does not restrict you from using plain PHP code in your templates.

### Blade Template Expression
	
	{{}} : this is denotes as <?php ?> we can write php code in blade template. 

### Conditions
	
	@if(condition)
		html ccode
	@elseif(condition)
		html code
	@else
		html code
	@endif

### For and Foreach Loop

	@for($i=0;$i<=10;$i++)
		html code
	@endfor

	@foreach(array_variable as any_variable)
		html code
	@endforeach

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

#### What is Middleware
	
	Middleware acts as a bridge between a request and a response. It is a type of filtering mechanism. ... Laravel includes a middleware that verifies whether the user of the application is authenticated or not.

#### Middleware Types

	There are three types of midddleware:
		1. Global Middleware
		2. Route Middleware
		3. Route Middleware Group

#### Make Middleware
	
	$ php artisan make:middleware middleware_name

	location: goto the app/Http/Middleware/middleware_name.php

#### Apply Middleware
	
	Lets see we can apply this middleware on global, so
		Step 1: open Kernel.php  [ Path: app/Http/Kernel.php ]
		Step 2: Now inside the kernel class look at a property 
				protected $middleware 
		Step 3: Define the middileware class like
				\App\Http\Middleware\middleware_name::class

## Group Middleware

	Maybe the API group gets a different auth middleware, and it might get an API-specific rate limiter or something else. ... Laravel 5.2 has introduced something called middleware groups, which are essentially a shortcut to applying a larger group of middleware, using a single key.
	
#### Make Middleware
	
	$ php artisan make:middleware middleware_name

	location: goto the app/Http/Middleware/middleware_name.php

#### Register it

	Lets see we can apply this middleware on group, so
		Step 1: open Kernel.php  [ Path: app/Http/Kernel.php ]
		Step 2: Now inside the kernel class look at a property 
				protected $middlewareGroups
		Step 3: Inside this middleware property, we can create a another custom key for apply group
				And that key contain array of n no of middleware

		Step 4: Define the middileware class in that value of key like
				'agecheck' => [
		            \App\Http\Middleware\ageCheck::class,
		        ],

#### Apply Middleware
	
	Apply it in route web.php

	group is a static member function that carry two parameters,
	1st = a array of middleware kay and value
			['middleware'=>'agecheck']
	2nd = a anonymous function that take routing


	Route::group(['middleware'=>'agecheck'],function(){
		Route::view('login','user');
	});

## Route middleware
	
#### Make Middleware
	
	$ php artisan make:middleware middleware_name

	location: goto the app/Http/Middleware/middleware_name.php

#### Register it

	Lets see we can apply this middleware on indivisual route, so
		Step 1: open Kernel.php  [ Path: app/Http/Kernel.php ]
		Step 2: Now inside the kernel class look at a property 
				protected $routeMiddleware
		Step 3: Inside this middleware property, we can create a another custom key for apply indivisual route

		Step 3: Define the middileware class in that value of key like
				'agecheck' => \App\Http\Middleware\middleware_name::class,

#### Apply Middleware
	
	Apply it in route web.php

	group is a static member function that carry two parameters,
	1st = a array of middleware kay and value
			['middleware'=>'agecheck']
	2nd = a anonymous function that take routing


	Route::group(['middleware'=>'agecheck'],function(){
		Route::view('login','user');
	});

## Connect with Database without model

#### Config database
	Goto the .env file and config your connection 
		DB_CONNECTION=mysql
		DB_HOST=127.0.0.1
		DB_PORT=3306
		DB_DATABASE=testing
		DB_USERNAME=root
		DB_PASSWORD=

#### Import db class
	use Illuminate\Support\Facades\DB;

#### Fetch data from database
	DB::select("select * from student");

	NOTE: use return statement to display array element to json

## Model 

#### What is Model?

	Model is a class that represents the logical structure and relationship of underlying data table. In Laravel, each of the database table has a corresponding “Model” that allow us to interact with that table. Models gives you the way to retrieve, insert, and update information into your data table.

	Eg.
		database = testing, table = students then our model is 'student'.

#### Make Model

	location: app/Models

	php artisan make:model model_name
		NOTE: model_name must be singular form of table_name

		We can not use model without controller so make a controller with a model

#### Fetch data from Model

	Step 1: Import model in controller name
	Step 2: Student::all(); fetch all data in array, if you return the array data then it shows json.
	Step 3: Set a route for controller

## HTTP Client

#### What is Http Client
	Laravel provides an expressive, minimal API around the Guzzle HTTP client, allowing you to quickly make outgoing HTTP requests to communicate with other web applications. Laravel's wrapper around Guzzle is focused on its most common use cases and a wonderful developer experience.

#### How to use http client
	use Illuminate\Support\Facades\Http;  http service

	$data = Http::get('https://reqres.in/api/users?page=2');  api data or json file 

#### Send Data to View
	
	return view('api',['collection'=>$data['data']]);

#### Show Data in HTML Table
	
	@foreach($collection as $item)
			<tr>
				<td>{{$item['id']}}</td>
				<td>{{$item['first_name']}}</td>
				<td>{{$item['email']}}</td>
				<td><img src="{{$item['avatar']}}"></td>
			</tr>
		@endforeach

## HTTP Request Form

#### What is Http request?

	An HTTP request is an action to be performed on a resource identified by a given Request-URL. Request methods are case-sensitive, and should always be noted in upper case. There are various HTTP request methods, but each one is assigned a specific purpose.

#### Http request method
	
	GET
	POST
	PUT
	DELETE
	HEAD
	PATCH
	OPTIONS

#### make html form on view
	
	<form action="submit" method="post">			// action value is, for define route pages
		@Csrf 										// need this token for form submit for authentication
		{{method_field('DELETE')}}					// make a hidden http request method field and form method always POST untill it GET method
		<input type="text" name="username" placeholder="Enter your name" > <br><br>
		<input type="password" name="password" placeholder="Enter your password" > <br><br>
		<button>Login</button>
	</form>	

#### route method for request

	In web.php route:
		Route::view('login','http_response');
		Route::get('submit',[Http_responeController::class,'index']);
		Route::post('submit',[Http_responeController::class,'index']);
		Route::put('submit',[Http_responeController::class,'index']);
		Route::delete('submit',[Http_responeController::class,'index']);

#### Is possible that, all htttp request method is call by one route method? 

	Yes, it is possible to call all http request in ahy method of route

	ex. Route::any('submit',[Http_responeController::class,'index']);

## Session

#### Make a login form

	<form action="session_2" method="post">
		@csrf
		<input type="text" name="username" placeholder="Enter your name" > <br><br>
		<input type="password" name="password" placeholder="Enter your password" > <br><br>
		<button>Login</button>
	</form>

#### Store data in session
	
	$username = $req->input('username');
	$req->session()->put('user',$username);				// put('key','value');

#### Get data from session
	
	{{ session('user') }}								// session('key')

#### Delete data from session
	
	session->pull('user',null);							// pull('key',null); for delete the value

#### How to know the session data is present or not
	
	session()->has('user')								// has('key')  to verify the key value is present

## Flash session

#### What is flash session
	
	You know how to pass flash messages in sessions in Laravel. ... In the blade template we will display it by calling the session as {{ Session::get('message') }}. If you are making use of the bootstrap alert classes you should flash two variables into the session ie. the message and the class of your alert

#### store data in flash session
	
	$req->session()->flash('key','value');

#### get data from flash session
	
	use in blade engine/page
	@if(session('message'))
		<h4>{{ session('message') }}</h4>
	@endif

#### delete data from flash sesssion

	it autometically delete after refresh.

## Upload file

#### Make view
	
	make a view file in resources/views/upload.blade.php

#### Make html form
	
	<form action='upload' method="post" enctype="multipart/form-data">
		@csrf
		<input type="file" name="file" ><br><br>
		<button>Upload file</button>
	</form>

#### Make controller
	
	php artisan make:controller UploadController

#### Code for upload file
	
	return $req->file('file')->store('img');

	$req is a Request variable that take all data from view file
	file('file_name') => this method is use only for take file
	store('folder_name') => this method is store the file in respected folder
	img folder locaton: storage/app/img

#### How to set custom file name while upload file

	Use storeAs() instead of store() to set a custom name

	return $req->file('file')->storeAs('img', time().'.jpg');
	
## Laravel Localization

#### What is Localization
	
	Localization in Laravel in it's simplest term means changing the application's default language to the language preferred by the user. ... We'll implement an app that supports four languages namely, German, Chinese, French and English language with English as the default language.	

#### How to define localization
	
	1. Locale means language, so we can create more than one language in 'resourses/lang/'.
	2. default folder is en for english. and  we can make different folder like hi for hindi/ od for odia

	3. now make a php file in that with same name.  like lang.php

	4. in that page we can return an associated array of key and different language of value

	5. in view page we can call that language value in using {{ __('filename.key') }}

#### Set default locale
	
	1. goto the config folder
	2. open the app.php then find locale key and set the value of laguage folder name


#### Set local with route

	Route::get('lang/{lang}',function($lang){

		App::setlocale($lang);

		return view('language');
	});

	App is a class and setlocale a static method of language set 

##
####
####
####
####