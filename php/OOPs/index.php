<?php

## Date: 23-03-21
### TOPIC NAME: PHP OOPs ###

/*
	1. What is OOP  
	2. What is Class
	3. How to Define a Class
	4. What is Property and Methods
	5. What is Objects
	6. How to Define Objects
	7. Constructor
	8. Inheritance
	9. Access Modifiers
	10. Overriding Methods & Properties
	11. Abstract Class
	12. Interfaces
	13. Static Members
	14. Late Static Binding
*/

// 1. What is OOP        
    /*
        1. OOP stands for Object Oriented Programming.
        2. OOP is a programming pattern or style using which you can create small
            code group based on real life objects. Objects like: Car, Users, Bank,
            Cat, Dog .....
        3.The main purpose of OOP is to create reusable code.

        PROCEDURAL VS OOP
        PROCEDURAL
            1. Define Variables
            2. Define Functions
            3. Define Logical Flow of Program
            4. Sequence Flow
        OOP
            1. Think of Component
            2. Define Component
            3. What Variables and Function can be in that component.
            4. Then reuse the component.
    */         
echo "<hr/>";     

// 2. What is Class   
    /*
        1. CLASS is a blueprint of Object.
        2. Class is a logical grouping of code with properties and methods 
            specific to that Object.
        Example:
            Car                 -> Object
            Car Specification   -> Class
    */                 
echo "<hr/>";     

// 3. How to Define a Class 
    /*
        1. Class Name first letter starts with capital letters.
        2. Filename should match with Class Name. Easy to follow.
        3. One file should have one class. you can have multiple.
        4. 'class' is the keyword user to define a class
        5. class is opened and closed with {} like functions.
    */
        class Bike{
            public $name;
            public $color;

            public function getDetails(){
                echo "My Bike name is KTM and color is Yellow White";
            }
        }

        $bike = new bike();
        $bike->getDetails();
echo "<hr/>";

// 4. What is Property and Methods  
    # class name                                  
    class Car{
            // Properties of this class
            public $name;
            public $color;

            // Methods of this class
            public function getDetails(){
                echo "My car name is Ferrari and color is Red <br/>";
            }

            public function customDetails($n, $c)
            {
                # code...
                echo "My car name is ".$n." and color is ".$c."<br/>";
            }
        }

        // Object of this class
        $car_bmw = new Car();
        $car_bmw->getDetails();
echo "<hr/>";

// 5. What is Objects
    /*
        1. Objects are used to access properties and methods of class.
        2. Objects are also called as INSTANCE OF CLASS.
        3. You can create unlimited objects for a class.
        4. Each object properties are unique to that specific instance of class.
    */
        $car_1 = new Car();
echo "<hr/>";      

// 6. How to Define Objects
    /*
        object_name = new class_name();
    */
    $car_1->name = "BMW";
    $car_1->color = "Dark Blue";
    echo "My car name is ".$car_1->name." and color is ".$car_1->color."<br/>";
    $car_1->customDetails('Audi','White');
echo "<hr/>";

// 7. Constructor
	/*
		What is Constructor?
			A constructor allows you to initialize an object's properties upon creation of
			the object. If you create a __construct() function, PHP will automatically call
			this function when you create an object from a class.
	*/
	class Bank{
		public function __construct($value='No Bank Name',$location = 'Nowhere')
		{
			# code...
			echo "Bank name is {$value} and Location is {$location} <br/>";
		}
	}

	$c1 = new Bank('HDFC', 'Sector 1');
	$c2 = new Bank();
	$c3 = new Bank('SBI', 'Sector 2');
echo "<hr/>";

// 8. Inheritance
	/*
		What is Inheritance? 
			Inheritance in OOP = When a class derives from another class. The child class 
			will inherit all the public and protected properties and methods from the 
			parent class. In addition, it can have its own properties and methods. An 
			inherited class is defined by using the extends keyword.
	*/
	class Employee{
		public $name,$age,$salary;

		function __construct($n,$a,$s){
			echo "<h2>Employee Constructor</h2>";
			$this->name = $n;
			$this->age = $a;
			$this->salary = $s;
		}

		public function info()
		{
			# code...
			echo "<h4>Employee profile</h4>";
			echo "Employee name: {$this->name} <br/>";
			echo "Employee age: {$this->age} <br/>";
			echo "Employee salary: {$this->salary} <br/>";
		}
	}

	class Manager extends Employee{
		public $ta = 1000;
		public $phone = 3000;
		public $totalSalary;
		public function __construct($n,$a,$s)
		{
			# code...
			echo "<h2>Manager Constructor<h2>";
			$this->name = $n;
			$this->age = $a;
			$this->salary = $s;
		}

		public function info()
		{
			$this->totalSalary = $this->salary + $this->ta + $this->phone;
			# code...
			echo "<h4>Manager profile</h4>";
			echo "Employee name: {$this->name} <br/>";
			echo "Employee age: {$this->age} <br/>";
			echo "Employee salary: {$this->totalSalary} <br/>";
		}
	}

	$e1 = new Employee('Ram',25,20000);
	$e1->info();

	$m1 = new Manager('Hari',26,25000);
	$m1->info();
echo "<hr/>";

// 9. Access Modifiers
	/*
		Properties and methods can have access modifiers which control where they can be accessed.

		There are three access modifiers:

		public - the property or method can be accessed from everywhere. This is default
		protected - the property or method can be accessed within the class and by classes
				 	derived from that class
		private - the property or method can ONLY be accessed within the class
	*/
	class EmpDetail{
		public $name;
		protected $age;
		private $salary;

		public function __construct($n = '')
		{
			# code...
			// public properties access
			$this->name = $n;
		}

		public function assignSalary($s='')
		{
			# code...
			// private properties access
			$this->salary = $s;
		}

		public function showDetail()
		{
			# code...
			echo "<h4>EmpDetails profile</h4>";
			echo "Employee name: {$this->name} <br/>";
			echo "Employee age: {$this->age} <br/>";
			echo "Employee salary: {$this->salary} <br/>";
		}
	}

	/**
	 * 
	 */
	class EmpSalary extends EmpDetail
	{
		
		public function assignAge($a='')
		{
			# code...
			// protected properties access
			$this->age = $a;
		}

	}

	$e1 = new EmpSalary('Subrat');		// through derived construction

	//$e1->age = 28;					// Error occure access protected
	//$e1->salary = 29000;				// Error occure access private

	$e1->assignAge(27);					// access protected
	$e1->assignSalary(25000);			// access private

	$e1->showDetail();

echo "<hr/>";

// 10. Overriding Methods & Properties
	/*
		When your class has some method and another class(derived class) want the same 
		method with different behavior then using overriding you can completely change the 
		behavior of base class(or parent class). The two methods with the same name and 
		same parameter is called overriding
	*/
	class Base{
		public $name = "Parent Class";

		public function calc($a='', $b='')
		{
			# code...
			return $a * $b;
		}
	}

	/**
	 * 
	 */
	class Derived extends Base
	{
		public $name = "Child Class";

		public function calc($a='', $b='')
		{
			# code...
			return $a + $b;
		}
	}

	$b1 = new Base();
	echo "Base Name is {$b1->name} <br/>";
	echo "Base class calculation is {$b1->calc(3,2)} <br/>";
	$d1 = new Derived();
	echo "Child Name is {$d1->name} <br/>";
	echo "child class calculation is {$d1->calc(3,2)} <br/>";

echo "<hr/>";

// 11. Abstract Class
	/*
		1. Abstract classes and methods are when the parent class has a named method, but need 
		its child class(es) to fill out the tasks. An abstract class is a class that 
		contains at least one abstract method. An abstract method is a method that is 
		declared, but not implemented in the code.
		2. Abstract class has no object.
		3. Abstract class has no need of construct function. 

	*/
	
	abstract class ParentClass
	{
		public function __construct()
		{
			# code...
			echo "call the parent class";
		}
		public $name;

		abstract public function calc($a,$b);
	}

	/**
	 * 
	 */
	class ChildClass extends ParentClass
	{
		public function __construct()
		{
			# code...
			echo "call the child class";
		}
		
		public function calc($a,$b){
			$c = $a + $b;
			echo "addition: { $a + $b = $c }";
		}
	}

	$c1 = new ChildClass();
	$c1->calc(3,2);

echo "<hr/>";

// 12. Interfaces
	/*
		What are Interfaces? 
		1. Interfaces allow you to specify what methods a class should implement. Interfaces 
		make it easy to use a variety of different classes in the same way. When one or 
		more classes use the same interface, it is referred to as "polymorphism".

		2. One clss inherit to derived class is called Inheritance.

		3. More than one clss inherit to derived class is called Interfaces.

		4. Can't make properties created in Interface.

		5. Can't make object of interface.

		6. Methods can be declare but not implement.

		7. There are no access modifier in methods.
	*/
	interface Add{
		function add($a,$b);
	}

	interface Sub{
		function sub($c,$d);
	}

	/**
	 * 
	 */
	class Number implements Add,Sub
	{
		
		function __construct()
		{
			# code...
			echo "Created number object <br/>";
		}
		public function add($a='',$b='')
		{
			# code...
			return $a + $b;
		}
		public function sub($c='',$d='')
		{
			# code...
			return $c - $d;
		}
	}

	$num = new Number();
	echo "Addition: {$num->add(3,2)} <br/>";
	echo "Subtraction: {$num->sub(3,2)} <br/>";
echo "<hr/>";

// 13. Static Members
	/*
		For situations where you would like to associate some data with an entire class of 
		objects, but the data is not fixed (in other words, constant), you can create 
		member variables that are global to the entire class, not just specific instances. 
		In PHP, these are called static member variables.

		A static class contains all static member variables and static member methods.

		syntax:
			class class_name{
				public static $name;

				public static function functionName(){
					self::$name;
				}
			}
			
			class child_class_name extends class_name{
				public function functionName2(){
					parent::$name;
				}
			}
			class_name::functionName();

			:: => it means scope resolution oprator.
	*/
	/**
	 * 
	 */
	class ParentStaticClass
	{
		public static $name = 'Arjun Bro';

		public function __construct()
		{
			# code...
			self::show();
		}

		public static function show()
		{
			# code...
			echo "In outside body call by class::, static value is: ".self::$name."<br/>";
		}
		public function showDetail()
		{
			# code...
			echo "In showDetail() call by object, static value is: ".self::$name."<br/>";
		}
	}
	/**
	 * 
	 */
	class ChildStaticClass extends ParentStaticClass
	{
		
		public function showChild()
		{
			# code...
			echo "In outside body, static value is: ".parent::$name."<br/>";
		}
	}

	echo "In outside body, static value is: ".ParentStaticClass::$name."<br/>";
	ParentStaticClass::show();
	$c1 = new ChildStaticClass();
	$c1->showChild();
	$c1->showDetail();
echo "<hr/>";

// 14. Late Static Binding
	/*
		Overriding a property in child class and creating the instance of the child class, 
		so to get the overridden output, the late static binding concept is used by writing 
		static keyword before using the property. Whenever a PHP interpreter gets the 
		request to compile a function. If it sees any static property, then it leaves the 
		property pending for run time and the property gets its value during runtime from 
		the function it is being called. This is called late static binding.

	*/
	/**
	 * 
	 */
	class Late_static_class 
	{
		public static $name = 'Late_static_class';

		public function showStaticValue()
		{
			# code...
			echo "Parent Static value: ".self::$name."<br/>";
		}

		public function showStaticChildValue()
		{
			# code...
			echo "Parent Static value: ".static::$name."<br/>";
		}
	}

	/**
	 * 
	 */
	class Late_static_child_class extends Late_static_class
	{
		public static $name = 'Late_static_child_class';
	}
	// parent class
	$p1 = new Late_static_class();
	$p1->showStaticValue();
	$p1->showStaticChildValue();

	// child class
	$c1 = new Late_static_child_class();
	$c1->showStaticValue();
	$c1->showStaticChildValue();
echo "<hr/>";

?>

<hr/>
    <button><a href="Home.php"> Next Page </a></button>
<hr/>