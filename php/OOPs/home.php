<?php

## Date: 23-03-21
### TOPIC NAME: PHP OOPs ###

/*
	1. Traits
	2. Traits - Method Overriding
	3. Type Hinting
*/ 

// 1. Traits
	/*
		PHP only supports single inheritance: a child class can inherit 
		only from one single parent.

		So, what if a class needs to inherit multiple behaviors? OOP 
		traits solve this problem.

		Traits are used to declare methods that can be used in multiple 
		classes. Traits can have methods and abstract methods that can be 
		used in multiple classes, and the methods can have any access 
		modifier (public, private, or protected).

		Syntax:
			trait trait_name{
				public function sayHello(){
					# code...
				}
				public function sayHello_2(){
					# code...
				}
				public function sayHello_3(){
					# code...
				}
			}
			trait trait_name_2{
				public function sayHello(){
					# code...
				}
			}

			class A{
				use trait_name,trait_name_2;
			}
			class B{
				use trait_name;
			}

			$obj = new A;
			$obj->sayHello();
	*/
	trait hello{
		public function sayHello(){
			echo "Hello Everyone";
		}
	}
	trait bye{
		public function sayBye(){
			echo "Bye Bye";
		}
	}

	class Base{
		use hello,bye;
		function __construct()
		{
			# code...
			echo "<h2> Base class oject created.</h2>";
		}

	}
	/**
	 * 
	 */
	class Base2 extends Base
	{
		
		function __construct()
		{
			# code...
			echo "<h2> Base 2 class oject created.</h2>";
		}
	}

	/**
	 * 
	 */
	class child
	{
		use hello,bye;
		function __construct()
		{
			# code...
			echo "<h2> child class oject created.</h2>";
		}
		
	}

	$test = new Base;
	$test->sayHello();

	$test2 = new Base2;
	$test2->sayHello();
	$test2->sayBye();

	$test3 = new child;
	$test3->sayHello();
	$test2->sayBye();
echo "<hr/>";

// 2. Traits - Method Overriding
	/*	
	Note: trait_name_1::method_name instedof trait_name_2     it means we can use trait_name 1 method
		  trait_name_2::method_name as method_name_2          it means we can rename of method_name to method_name_2
		  trait_name_3::method_name as public method_name_3   it means we can change access modifier and rename it

	
	Situation 1:	Same function name is avaliable in trait , parent class , child class so use 
				method in their priorites.

		trait bye{
		public function sayBye(){
			echo "Bye Bye";
		}
	}

	class Base{
		
		public function sayBye(){
			echo "Bye Bye";
		}

	}
	class Base2 extends Base
	{
		use bye;
		public function sayBye(){
			echo "Bye Bye";
		}
	}

	$obj = new Base2;
	$obj->sayBye();

	NOTE: now child class object can call sayBye method bye here is same 
		name of method availabe, this situation is called method overriding so call method in their priorities like
			1st priority : method is in same calss of object
			2nd priority : method is in traits
			3rd priority : method in in parent calss of object

	Situation 2: If Same method is present in two or more traits then how can we use it without conflict them

		trait hello{
			public function sayHello(){
				echo "Hello Everyone from hello trait";
			}
		}
		trait hi{
			public function sayHello(){
				echo "Hello Everyone from hi trait";
			}
		}

		class Base{
			use hello,hi;
			function __construct()
			{
				# code...
				echo "<h2> Base class oject created.</h2>";
			}

		}

		$obj = new Base;
		$obj->sayHello(); // it gives error becuse php does not solve 
							conflict issue of same function name

		so we can change our code like below in class:
			class Base{

				use hello,hi{
					hello::sayHello insteadof hi;
					hi::sayHello as newHello;
				}

			function __construct()
			{
				# code...
				echo "<h2> Base class oject created.</h2>";
			}

		}

		$obj = new Base;
		$obj->sayHello();
		$obj->NewHello();

	Situation 3: If method of trait is private access modifier then we can not access 
				in any class/object of class but we can modify their access modifier like below

		trait trait_name{
			private function pvtHello(){
				echo "Hello Everyone from hi trait of private access modifier<br/>";
			}
		}

		class Base_1{
			use trait_name{

				// public is access modiffier // pbcHello is rename of pvtHello
				trait_name::pvtHello as public pbcHello;	
													
			}
		}

		$obj_1 = new Base_1;
		$obj_1->pbcHello();
	*/	
	trait hello_1{
		public function sayHello(){
			echo "Hello Everyone from hello trait <br/>";
		}
	}
	trait hi_1{
		public function sayHello(){
			echo "Hello Everyone from hi trait <br/>";
		}

		private function pvtHello(){
			echo "Hello Everyone from hi trait of private access modifier<br/>";
		}
	}

	class Base_1{
		use hi_1{
			hi_1::pvtHello as public pbcHello;	// public is access modiffier
												// pbcHello is rename of pvtHello
		}
		function __construct()
		{
			# code...
			echo "<h2> Base_1 class oject created.</h2>";
		}

	}

	$obj_1 = new Base_1;
	$obj_1->pbcHello();
	//$obj_1->sayHello(); // it gives error becuse php does not solve 
						//conflict issue of same function name

	//so we can change our code like below in class:
		class Base_2{

			use hello_1,hi_1{
				hello_1::sayHello insteadof hi_1;
				hi_1::sayHello as newHello;
			}

		function __construct()
		{
			# code...
			echo "<h2> Base_2 class oject created.</h2>";
		}

	}

	$obj_2 = new Base_2;
	$obj_2->sayHello();
	$obj_2->newHello();
echo "<hr/>";

// 3. Type Hinting
	/*
		In simple word, type hinting means providing hints to function to only accept 
		the given data type. In technical word we can say that Type Hinting is method 
		by which we can force function to accept the desired data type. 
		In PHP, we can use type hinting for Object, Array and callable data type.

		Types:
			int
			float
			string
			bool
			array
			class/interface name
			object
	*/
	function sum(int $v ){
		$r = $v+1;
		echo "Sum: {$r} <br/>";
	}

	sum(2);
	// sum('hi');

	/**
	 * 
	 */
	class Fruit
	{
		
		function __construct(array $a)
		{
			# code...
			foreach ($a as $key => $value) {
				# code...
				echo "Frits: {$key} => {$value} <br/>";
			}
		}
	}

	$arr = array('Apple', 'Mango', 'Banana', 'Grapes');
	$s = new Fruit($arr);

	class hello_2{
		public function sayHello()
		{
			# code...
			echo "Hello everyone from hello class <br/>";
		}
	}
	class bye_2{
		public function sayHello()
		{
			# code...
			echo "Bye Bye everyone from bye class <br/>";
		}
	}

	function wow(hello_2 $obj)
	{
		# code...
		$obj->sayHello();
	}

	$h = new hello_2;
	// $b = new bye_2;     # error occure because hello_2 data type hinting

	wow($h);
	wow($b);
echo "<hr/>";