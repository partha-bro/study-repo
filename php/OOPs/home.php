<?php

## Date: 23-03-21
### TOPIC NAME: PHP OOPs ###

/*
	1. Traits
	2. Traits - Method Overriding
	3. Type Hinting
	4. Namespace
	5. Method Chaining
	6. Magic Method
	7. __destruct()
	8. autoload method
	9. __get() method
	10. __set() method
	11. __call() method
	12. __callStatic() method
	13. __isset() method
	14. __unset() method
	15. __toString() method
	16. __sleep() method
	17. __wakeup() method
	18. __clone() method
	19. __invoke() method
	20. Magic constant
	21. conditional function of oops
	22. get functions in oops
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
	//wow($b);
echo "<hr/>";

// 4. Namespace
?>
    <hr/>
    <button><a href="../05.Namespaces/index.php"> Namespace </a></button>
    <hr/>
<?php
echo "<hr/>";

// 5. Method Chaining
	/*
		Method chaining is a fluent interface design pattern used to 
		simplyify your code. If you've used frameworks like Zend or 
		jQuery, you probably have some experience with chaining. 
		Essentially your objects return themselves, allowing you to 
		"chain" multiple actions together.
	*/	

	class Abc{

		public function first()
		{
			# code...
			echo "This is first function of Abc class. <br/>";

			return $this;
		}

		public function second()
		{
			# code...
			echo "This is second function of Abc class. <br/>";

			return $this;
		}

		public function third()
		{
			# code...
			echo "This is third function of Abc class. <br/>";

			return $this;
		}
		
	}

$obj = new Abc;
// method chaining
$obj->first()->second()->third();
echo "<hr/>";

// 6. Magic Method
	/*
		Magic methods are special methods which override PHP's default's 
		action when certain actions are performed on an object. Caution. 
		All methods names starting with __ are reserved by PHP. 
		Therefore, it is not recommended to use such method names unless 
		overriding PHP's behavior.

		Magic methods
		__construct
		__destruct
		__get()
		__set()
		__isset()
		__unset()
		__autoload()
		__clone()
		__sleep()
		__wakeup()
		__call()
		__callstatic()
		__tostring()
		__invoke()

	*/

// 7. __destruct()
	/*
		A destructor is called when the object is destructed or the 
		script is stopped or exited. If you create a __destruct() 
		function, PHP will automatically call this function at the end of 
		the script.

		Error-Event: this method call autometically in last work of class's object 

		NOTE: this method always call end of the class.
	*/
	class MyDb{

		public $conn;

		public function __construct()
		{
			# code...
			$servername = "mysql:host=localhost;dbname=mydb";
			$username = 'root';
			$password = '';
			$error = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];
			try{
				$this->conn = new PDO($servername,$username,$password,$error);

				echo "Coneection Successfully...";
			}catch( PDOException $e){
				echo "Connect-Error: ".$e->getLine()." # ".$e->getMesssage();
			}
			
		}

		// public function __destruct()
		// {
		// 	# code...
		// 	$this->conn = NULL;
		// 	echo "Connection Close <br/>";
		// }
	}

$obj = new MyDb;
echo "<hr/>";

echo "<hr/>";
// 8. autoload method
	/*
		Autoloading in the “Olden Days” PHP 5 introduced the magic 
		function __autoload() which is automatically called when your 
		code references a class or interface that hasn't been loaded yet. 
		This provides the runtime one last chance to load the definition 
		before PHP fails with an error.
		
		Error-Event: if we can attach more than one file in same dir location

		NOTE:
			1. calss name is same as file name.
			2. when a object is created then autoload magic method is automatically call and attach the file.
			3. autoload method have one parameter
	*/

	function __autoload($class='')
	{
		# code...
		require "classes/".$class.".php";
	}

	$f = new first();
	$s = new second();
echo "<hr/>";

// 9. __get() method
	/*
		In PHP, special functions can be defined in such a way that they 
		can be called automatically and does not require any function 
		call to execute the code inside these functions. This feature is 
		available in a special method known as magic methods.

		Error-Event: if we can print/access private properties outside class

		NOTE: if any error happens to class like 
				1. unathentic private property access outside body
				2. if we can access a property that is not define then 
				get method autometically call.
				3. get method have one parameter ( property )
	*/
	class Abcde{
		private $name;
		public $age = 25;

		public function __get($value)
		{
			# code...
			echo "You are trying to access Non Existing or private property: {$value} <br/>";
		}
	}

	$test = new Abcde;
	echo "Private properties: ".$test->name."<br/>";
	echo "public properties: ".$test->age."<br/>";
	echo "Undefined properties: ".$test->unknown_variable."<br/>";
echo "<hr/>";
echo "<hr/>";
// another example of get method
	class Abcdef{
		private $data = [ 'name' => 'Arjun', 'course' => 'PHP', 'fee' => 2000];

		public function __get($key)
		{
			# code...
			if (array_key_exists($key, $this->data)) {
				# code...
				return $this->data[$key];
			}else{
				echo "You are trying to Undefined properties. <br/>";
			}
		}
	}

	$test = new Abcdef;
	echo "Name= ".$test->name."<br/>";
	echo "Course= ".$test->course."<br/>";
	echo "Age= ".$test->age."<br/>";
echo "<hr/>";

// 10. __set() method
	/*
		Magic methods in PHP are special methods that are aimed to 
		perform certain tasks. These methods are named with double 
		underscore (__) as prefix. All these function names are reserved 
		and can't be used for any purpose other than associated magical 
		functionality. Magical method in a class must be declared public

		Error-Event: if we can assign a value to private properties outside class

		NOTE: if any error happens to class like 
				1. unathentic private property set value in outside body
				2. if we can set value a property that is not define then 
				set method autometically call.
				3. set method have two parameter( property, value )

		property_exists(class, property): this method is verify property is exist in the class.
		In same class we can use $this keyword.
	*/

	class Student{

		private $name = 'Partha';

		public function __construct()
			{
				# code...
				echo "Student object is created <br/>";
			}

		public function __get( $property )
			{
				# code...
				// 
				if (property_exists($this, $property)) {
					# code...
					echo "Value of {$property} is {$this->$property} <br/>";
				}else{
					echo "Property does not exist. <br/>";
				}
			}

		public function __set( $property, $value )
			{
				# code...
				if (property_exists($this, $property)) {
					# code...
					//Here we can not write 'property' because 'property' is not actual variable of class, so we use '$property'
					$this->$property = $value;
				}else{
					echo "Property does not exist. <br/>";
				}
			}	

			public function show()
			{
				# code...
				echo "Value is {$this->name}  <br/>";
			}
	}

	$obj = new student;

	// for avoid error call get method
	echo $obj->name;

	// for avoid error call set method
	$obj->name = 'arjun';

	$obj->show();
echo "<hr/>";

// 11. __call() method
	/*
	In PHP, special functions can be defined in such a way that they can 
	be called automatically and does not require any function call to 
	execute the code inside these functions. This feature is available in 
	a special method known as magic methods.

	Error-Event: if we can access private method outside class

	NOTE: if any error happens to class like 
				1. unathentic private method access in outside body
				2. if we can call method that is not define then 
				call method autometically call.
				3. call method have two parameter( method, parameters in array )

		method_exists(object, method): this method is verify method is
				exist in the class.
				In same class we can use $this keyword.

		call_user_func_array( function, param_arr)
			function: it has array of object and method
			param_arr: it has prameter of member
	*/
	class Student_1{

		private $first_name;
		private $last_name;

		private function setName($fname, $lname)
		{
			# code...
			$this->first_name = $fname;
			$this->last_name = $lname;
		}

		public function __call( $method, $param )
		{
			# code...
			if ( method_exists($this, $method) ) {
				# code...
				call_user_func_array([ $this, $method ], $param);
			}else{
				echo "{$method} member does not exists.<br/>";
			}
		}

		public function show()
		{
			# code...
			echo "Your full name is : {$this->first_name} {$this->last_name}";
		}
	}

	$obj = new Student_1;

	$obj->setName('Arjun','bro');

	$obj->show();
echo "<hr/>";

// 12. __callStatic method
	/*
	Magic Methods ¶ Magic methods are special methods which override 
	PHP's default's action when certain actions are performed on an 
	object. Caution. All methods names starting with __ are reserved by 
	PHP. Therefore, it is not recommended to use such method names unless 
	overriding PHP's behavior.

	Error-Event: if we can access private static method outside class

		NOTE: if any error happens to class like 
				1. unathentic private static method access in outside body
				2. if we can call method that is not define then 
				callStatic method autometically call.
				3. callStaic method have two parameter( method, parameters in array )

		method_exists(object, method): this method is verify method is
				exist in the class.
				In same class we can not use $this keyword because of static method.
				instead of $this keyword we can use magic constant 
				__CLASS__
	*/
	class Student_2{

		private static function hello()
		{
			# code...
			echo "This is private static method. <br/>";
		}

		public static function __callStatic( $method, $param )
		{
			# code...
			if (method_exists(__CLASS__, $method)) {
				# code...
				call_user_func_array([ __CLASS__, $method ], $param);

			}else{
				echo "{$method}() : This static method does not exists in ".__CLASS__." class";
			}
		}

	}

	Student_2::hello();

	Student_2::bye();
echo "<hr/>";

// 13. __isset() method
	/*
		Error-Event: if we can check private properties has some value or not

		NOTE: if any error happens to class like 
				1. private properties check in outside body, variable set or not
				2. if we can check private properties that is not define then 
				isset method autometically call.
				3. isset method have one parameter( property )
				4. __isset() is autometically by isset() or empty() outside the body.
	*/
	class Student_3{

		public $course;
		private $first_name,$last_name;

		public function setName($fname='',$lname='')
		{
			# code...
			$this->first_name = $fname;
			$this->last_name = $lname;
		}

		public function __isset( $property )
		{
			# code...
			echo "check: ".isset( $this->$property )."<br/>";
		}
	}

	$obj = new Student_3;

	$obj->course = 'PHP';

	$obj->setName('Arjun','Bro');

	echo isset($obj->course);

	echo isset($obj->first_name);

	echo empty($obj->last_name);
echo "<hr/>";

// 14. __unset() method
	/*
		Error-Event: if we can unset private properties

		NOTE: if any error happens to class like 
				1. private properties unset in outside body
				2. if we can unset private properties that is not define then 
				unset method autometically call.
				3. unset method have one parameter( property )
				
	*/
	class Student_4{

		public $course;
		private $first_name,$last_name;

		public function setName($fname='',$lname='')
		{
			# code...
			$this->first_name = $fname;
			$this->last_name = $lname;
		}

		public function __unset( $property )
		{
			# code...
			unset( $this->$property );
			echo "{$property} : unset this private variable.";
		}
	}

	$obj = new Student_4;

	$obj->course = 'PHP';

	$obj->setName('Arjun','Bro');

	unset($obj->course);

	unset($obj->first_name);
echo "<hr/>";

// 15. __toString() method
	/*
		Error-Event: Print a class of object into string 

		NOTE: if any error happens to class like 
				1. print a class of object into string
				2. if we can print a class of object into string then 
				toString method autometically call.
				3. toString method have no parameter(), but it has return statement.
	*/
	class Abc_1{

		public function __toString()
		{
			# code...
			return __CLASS__.": Can't print object as a string";
		}
	}

	$obj = new Abc_1;

	echo $obj;
echo "<hr/>";

// 16. __sleep() method
	/*
		Error-Event: When serialize( object ) function call then automatically sleep method call
			When we can try to convert custom property of object to string

		if we can store value of object in session or file then we can use serialize( object ) function to convert object to string

		NOTE: if any error happens to class like 
				1. Custom property convert to string then  
				sleep() method autometically call.
				2. sleep method have no parameter( )
				3. this function has return of custom property name of an array without dollar symbol.
				
	*/
	class Student_5{

		public $course;
		private $first_name,$last_name;

		public function setName($fname='',$lname='')
		{
			# code...
			$this->first_name = $fname;
			$this->last_name = $lname;
		}

		public function __sleep()
		{
			# code...
			return array("first_name","last_name");
		}
	}

	$obj = new Student_5;

	$obj->course = 'PHP';

	$obj->setName('Arjun','Bro');

	$object_to_string = serialize($obj);

	echo $object_to_string;
echo "<hr/>";

// 17. __wakeup() method
	/*
		wakeup() is reverse work of sleep() method

		Error-Event: When unserialize( string ) function call then automatically wakeup method call
			When we can try to convert custom property of string to object

		use unserialize( serialize of string ) function to convert string to object

		NOTE: if any error happens to class like 
				1. Custom property convert to object then  
				wakeup() method autometically call.
				2. wakeup method have no parameter( )
				
				
	*/
	class Student_6{

		public $course;
		private $first_name,$last_name;

		public function setName($fname='',$lname='')
		{
			# code...
			$this->first_name = $fname;
			$this->last_name = $lname;
		}

		public function __wakeup()
		{
			# code...
			echo "This is wakeup method call when unserialize() call <br/>";
		}

	}

	$obj = new Student_6;

	$obj->course = 'PHP';

	$obj->setName('Arjun','Bro');

	$object_to_string = serialize($obj);

	$string_to_object = unserialize($object_to_string);
	
	echo "<pre>";
	print_r($string_to_object);
	echo "</pre>";
echo "<hr/>";

// 18. __clone() method
	/*
		clone() method is clone the property of class by call by value.
		because class is default call by reference.



		Error-Event: When clone keyword is call then automatically clone  method call

		NOTE: if any error happens to class like 
				1. clone keyword clone the every property of class but it can not copy of another class use in that class
				2. clone method have no parameter( )
						
	*/
	class Student_7{

		public $course;
		public $first_name;

		public function __construct($fname)
		{
			# code...
			$this->first_name = $fname;
		}

		public function setCourse(Course $course_obj) // type hinting
		{
			# code...
			$this->course = $course_obj;
		}

		public function __clone()
		{
			# code...
			$this->course = clone $this->course;
		}

	}

	class Course
	{
		public $course_name;
		function __construct($cname)
		{
			# code...
			$this->course_name = $cname;
		}
	}

	$s_1 = new Student_7('Arjun Bro');
	$c_1 = new Course('PHP');

	$s_1->setCourse($c_1);

	//copy by reference
	// $s_2 = $s_1;
	// $s_2->name = 'Partha';
	// $s_2->course = 'python';   // here the error is occure if i am set s_2 course is python then autometicaaly change course of s_1

	$s_3 = clone $s_1;
	$s_3->first_name = 'Ram Kumar';
	$s_3->course->course_name = 'laravel';

	echo 'Object $s_1=> <pre>';
	print_r($s_1);
	// echo 'Call by Refeence $s_2=> <pre>';
	// print_r($s_2);
	echo 'Call by value $s_3=> <pre>';
	print_r($s_3);
	
echo "<hr/>";

// 19. __invoke() method
	/*
		invoke() method is call by when we can call a method of name is object like $obj()

		NOTE: 1. if invoke() method has one or more prameters then object name of function has param.
			2. if invoke() method has no prameters then object name of function has no param also.
	*/

	class Calculation{
		public $a,$b;

		public function __construct($a='',$b='')
		{
			# code...
			$this->a = $a;
			$this->b = $b;
		}

		public function sum()
		{
			# code...
			return $this->a + $this->b;
		}

		public function __invoke($a, $b )
		{
			# code...
			return $a + $b;
		}

	}

	$obj = new Calculation(10,20);

	echo ' $obj->sum() Result of sum is '.$obj->sum()."<br/>";
	echo ' $obj(20,20) Result of sum is '.$obj( 20, 20);
echo "<hr/>";

// 20. Magic constant
?>
    <hr/>
    <button><a href="../02.Variable_and_Constants/index.php"> Magic Method </a></button>
    <hr/>
<?php

// 21. conditional function of oops
	/*
		List of conditional function in oops
			class_exists('class name')
			interface_exists('interface name')
			trait_exists('trait name')
			method_exists(object,'method')
			property_exists(class,'property')
			is_a(object,'class name')
			is_subclass_of(object,'parent class name')
	*/
// class_exists('class name')
	class Myclass{

	}

	if (class_exists('Myclass')) {
		# code...
		echo "Class is exist";
	}else{
		echo "Class is not exist";
	}
echo "<hr/>";
// interface_exists('interface name')
	interface Myinterface{

	}

	if (interface_exists('Myinterface')) {
		# code...
		echo "Interface is exist";
	}else{
		echo "Interface is not exist";
	}
echo "<hr/>";
// trait_exists('trait name')
	trait Mytrait{

	}

	if (trait_exists('Mytrait')) {
		# code...
		echo "Trait is exist";
	}else{
		echo "Trait is not exist";
	}
echo "<hr/>";
// method_exists(object,'class name')
	class Myclass_1{

		public function myMethod($value='')
		{
			# code...
		}
	}
	$obj = new Myclass_1;
	if (method_exists($obj,'myMethod')) {
		# code...
		echo "Method is exist in class";
	}else{
		echo "Method is not exist in class";
	}
echo "<hr/>";
// property_exists(class,'class name')
class Myclass_2{

		public $name;
	}
	if (property_exists('Myclass_2','name')) {
		# code...
		echo "Propery is exist in class";
	}else{
		echo "Property is not exist in class";
	}
echo "<hr/>";
// is_a(object,'class name')
class Myclass_3{

		public function myMethod($value='')
		{
			# code...
		}
	}
	$obj = new Myclass_3;
	if (is_a($obj,'Myclass_3')) {
		# code...
		echo "Object is exist in class";
	}else{
		echo "Object is not exist in class";
	}
echo "<hr/>";
// is_subclass_of(object,'parent class name')
class Parentclass{

		public function myMethod($value='')
		{
			# code...
		}
	}
/**
 * 
 */
class ChildClass extends Parentclass
{
	
}
	$obj = new ChildClass;
	if (is_subclass_of($obj,'Parentclass')) {
		# code...
		echo "Object is exist of sub class of parent class";
	}else{
		echo "Object is not exist of sub class of parent class";
	}
echo "<hr/>";

// 22. get functions in oops
	/*
		List of get function in oops
 			get_class( object )
 			get_parent_class( 'child class name'/child object )
 			get_class_meyhods( 'class_name'/object ) : array retun
 			get_class_vars( 'class_name' ) : array retun
 			get_object_vars( object ) : array retun
 			get_called_class()
			get_declared_classes() : array retun
			get_declared_interfaces() : array retun
			get_declared_traits() : array retun
			class_alias( 'class_name', 'short_name_of_class')
		*/

// get_class( object )
	class getFun{
		public function __construct()
		{
			# code...
			echo "Class name is inside call: ".get_class($this)."<br/>";
		}
	}
	$obj = new getFun;
	echo "Class name is : ".get_class($obj);
echo "<hr/>";

// get_parent_class( 'child class name'/child object )
	class getFun_parent{

	}
	class getFun_child extends getFun_parent{
		public function __construct()
		{
			# code...
			echo "Parent Class name is inside call: ".get_parent_class($this)."<br/>";
		}
	}
	$obj = new getFun_child;
	echo "Parent Class name is in object param: ".get_parent_class($obj)."<br/>";
	echo "Parent Class name is in class name param: ".get_parent_class('getFun_child')."<br/>";
echo "<hr/>";

// get_class_meyhods( 'class_name'/object ) : array retun
	class getFun_1{
		public function __construct()
		{
			# code...
			echo "Inside the class: all methods<pre>";
			print_r(get_class_methods($this));
		}
		public function fun1()
		{
			# code...
			
		}
		public function fun2()
		{
			# code...
			
		}
		private function fun3()
		{
			# code...
			
		}
	}
	$obj = new getFun_1;
	echo "Outside the class: No private method <pre>";
	print_r(get_class_methods($obj));
echo "<hr/>";

// get_class_vars( 'class_name' ) : array retun
class getFun_2{
	public $var_1;
	public $var_2;
	public $var_3;
	private $var_4;
		public function __construct()
		{
			# code...
			echo "Inside the class: all properties <pre>";
			print_r(get_class_vars(__CLASS__));
		}
		
	}
	$obj = new getFun_2;
	echo "Outside the class: No private property <pre>";
	print_r(get_class_vars(get_class($obj)));
echo "<hr/>";

// get_object_vars( object ) : array retun
class getFun_3{
	public $var_1;
	public $var_2;
	public $var_3;
	private $var_4;
		public function __construct()
		{
			# code...
			echo "Inside the class: all properties <pre>";
			print_r(get_object_vars($this));
		}
		
	}
	$obj = new getFun_3;
	echo "Outside the class: No private property <pre>";
	print_r(get_object_vars($obj));
echo "<hr/>";

// get_called_class()
/**
 * 
 */
class getFun_4
{
	
	function __construct()
	{
		# code...
		echo "Called by below class <pre>";
		var_dump(get_called_class());
	}
}
	class getFun_5 extends getFun_4{
	
		public function __construct()
		{
			# code...
			echo "Called by below class <pre>";
			var_dump(get_called_class());
		}
		
	}
	$obj_4 = new getFun_4;
	$obj_5 = new getFun_5;

echo "<hr/>";

// get_declared_classes() : array retun
	echo "<pre>";
	print_r(get_declared_classes());
echo "<hr/>";

// get_declared_interfaces() : array retun
	echo "<pre>";
	print_r(get_declared_interfaces());
echo "<hr/>";

// get_declared_traits() : array retun
	echo "<pre>";
	print_r(get_declared_traits());
echo "<hr/>";

// class_alias( 'class_name', 'short_name_of_class')

/**
 * 
 */
class ClassName
{
	
	public function FunctionName()
	{
		# code...
		echo "this is call using class alias also <br/>";
	}
}

class_alias('ClassName','cn');

$obj = new ClassName;
$obj->FunctionName();

$obj_new = new cn;
$obj_new->FunctionName();
echo "<hr/>";