<?php
### TOPIC NAME: PHP OOP Basics ###

/*
    1. What is OOP                                                      Line = 
    2. What is Class                                                    Line = 
    3. How to Define a Class                                            Line = 
    4. What is Property and Methods                                     Line = 
    5. What is Objects                                                  Line = 
    6. How to Define Objects                                            Line = 
    7. Define Methods with Parameters and Return Value                  Line = 
    8. Use case of Users with Class and Objects                         Line = 
    9. Project Calculate Employee Salary                                Line = 
    10. Exercise 1 Create a Bank Class, Object, Property and Methods    Line = 
    11. Exercise 2 Create a Files Class, Object, Property and Methods   Line = 
    12. Assignment                                                      Line = 
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
// 2. What is Class   
    /*
        1. CLASS is a blueprint of Object.
        2. Class is a logical grouping of code with properties and methods 
            specific to that Object.
        Example:
            Car                 -> Object
            Car Specification   -> Class
    */                                
// 3. How to Define a Class 
    /*
        1. Class Name first letter starts with capital letters.
        2. Filename should match with Class Name. Easy to follw.
        3. One file should have one class. you can have multiple.
        4. 'class' is the keyword user to define a class
        5. class is opened and closed with {} like functions.
    */
        class bike{
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
        

// 6. How to Define Objects
    /*
        object_name = new class_name();
    */
    $car_1->name = "BMW";
    $car_1->color = "Dark Blue";
    echo "My car name is ".$car_1->name." and color is ".$car_1->color."<br/>";
    $car_1->customDetails('Audi','White');
    echo "<hr/>";

// 7. Define Methods with Parameters and Return Value  
    /**
     * 
     */
    class FileName
    {
        
        function __construct()
        {
            # code...
            echo "Accessing the file! <br/>";
        }

        public function readFile($value)
        {
            # code...
            $content = file_get_contents($value);
            echo "Content: ".$content;
        }
    }

    $file = new FileName();
    $file->readFile('../03-01-21/testfolder/config.ini');
    echo "<hr/>"; 

// 8. Use case of Users with Class and Objects                         
// 9. Project Calculate Employee Salary                               
// 10. Exercise 1 Create a Bank Class, Object, Property and Methods    
// 11. Exercise 2 Create a Files Class, Object, Property and Methods   
// 12. Assignment                                                     