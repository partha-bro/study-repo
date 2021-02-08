<?php
### TOPIC NAME: Functions ###

/*
    1. Functions                            Line = 22
    2. Passing inputs to Functions          Line = 34
        2.1 declare(strict_types = 1);
    3. Return Value from Functions          Line = 69
    4. Default and Optional Values          Line = 113
        using Function Inputs
    5. Dynamic Function Calling             Line = 150
    6. Anonymous Function or Closures       Line = 169
        6.1 use()
    7. Passing Argument as Reference        Line = 200
    8. Exercise 1                           Line = 227
    9. Exercise 2                           Line = 236
    10. Assignment                          Line = 278
*/
declare(strict_types=1);

echo "<pre>";
## Functions
    // Define a function
    function printName($name){
        return "My name is ".$name."<br/>";
    }

    // Calling a function
    echo printName('partha');
    echo printName('arjun');

echo "<hr/>";

## Passing inputs to Functions using strict rules
    /*
        declare(strict_types=1); --> this method is use for strict rule 
        apply to data type argument for better understand check below code
        1. always put declare function in 1st line of code, please check
        2. it does not auto conversion of data type
        3. all parameter is mandatory for calling function
    */

    

    function oddNumber(int $range, string $name, $skipnumber){
        for ($i=0; $i < $range; $i++) { 
            # code...
            if ($i == $skipnumber) {
                # code...
                echo "$name is a good programmer <br/>";
                continue;
            }
            if ($i%2 > 0) {
                # code...
                echo "Odd Number: $i <br/>";
            }
        }
    }

    oddNumber(10,"partha",3); // correct 
    //oddNumber("10","partha",3); // wrong
    //oddNumber(10,5,3); // wrong
    //oddNumber(10); // wrong
    //oddNumber(10,"partha"); // wrong
    //oddNumber(); // wrong

echo "<hr/>";

## Return Value from Functions
    /*
    Declare return data type means return type must be mentioned data type
    & this is use for better understand for others like
    
        syntax: function function_name( argument ): data type{
            # code ...
            return ;
        }
    */

    // declare a function with name evenNumber and has no retutn type array.
    function evenNumber( $range ){
        $array_num = [];
        for ($i=0; $i <= $range; $i++) { 
            # code...
            if ($i%2 == 0) {
                # code...
                $array_num[] = $i;
                //$array_num = $i;  this is thrown error because return type array but this statement return is int.
            }
        }
        return $array_num;
    }

    print_r(evenNumber( 10 ));

    // declare a function with name evenNumber and has retutn type array.
    function evenNumber_With_type( $range ): array{
        $array_num = [];
        for ($i=0; $i <= $range; $i++) { 
            # code...
            if ($i%2 == 0) {
                # code...
                $array_num[] = $i;
                //$array_num = $i;  this is thrown error because return type array but this statement return is int.
            }
        }
        return $array_num;
    }

    print_r(evenNumber_With_type( 10 ));
echo "<hr/>";

## Default and Optional Values using Function Inputs
    //Default parameter is always use in last parameter
    function evenNumberDefaultValue( $range = 10 ): array{
        $array_num = [];
        for ($i=0; $i <= $range; $i++) { 
            # code...
            if ($i%2 == 0) {
                # code...
                $array_num[] = $i;
                //$array_num = $i;  this is thrown error because return type array but this statement return is int.
            }
        }
        return $array_num;
    }

    print_r(evenNumberDefaultValue( 20 ));
    echo "no paramerter and use default parameter";
    print_r(evenNumberDefaultValue(  ));

    function oddNumberDeaultValue(int $range, string $name = "partha", $skipnumber = 3){
        for ($i=0; $i < $range; $i++) { 
            # code...
            if ($i == $skipnumber) {
                # code...
                echo "$name is a good programmer <br/>";
                continue;
            }
            if ($i%2 > 0) {
                # code...
                echo "Odd Number: $i <br/>";
            }
        }
    }

    oddNumberDeaultValue(10);
echo "<hr/>";

## Dynamic Function Calling
    /*
    dynamic function calling means function name is store by another 
    variable and that variable having some parameter to call that function
    */ 
    function add($a,$b): int{
        return $a + $b;
    }

    function sub($a,$b): int{
        return $a - $b;
    }
    $functionName = "add";
    echo "Result: ".$functionName(1,2)."<br/>";
    $functionName = "sub";
    echo "Result: ".$functionName(1,2);

echo "<hr/>";

## Anonymous Function or Closures
    /*
        it does not have a any name to function
        sysntax: $variable = function ( parameter ) use( $variable_of_outside_body ): return data type{
            #code...
            return ;
        };
        // calling function
        $variable( parameter );

        Note:   1. closer function does not have any name
                2. it has all properties like normal function
                3. always end closer function in semicolon [;] because it is a statement
                4. we can use use() for access value in closer function without passing in argument
    */
    $closerFunction = function($a,$b): int{
        return $a * $b;
    };

    echo "multiple result: ".$closerFunction(120,30)."<br/>";

    // access outside value in closer function
    $divided_no = 2;
    $closerFunction = function($a,$b) use($divided_no): int{
        return ($a * $b) / $divided_no;
    };

    echo "result: ".$closerFunction(120,30);

echo "<hr/>";

## Passing Argument as Reference
        /*
    $result = 0;
    function add($a, $b, $result = null) : int{

        $addition = $a + $b;
        return $addition;
    }

    echo $result . PHP_EOL;
    $result = add(1,2) ;
    echo $result . PHP_EOL;
    */


    $result = 0;
    function add_using_refernce($a, $b, &$result = null){

        $result = $a + $b;
    }

    echo $result . PHP_EOL;
    add_using_refernce(1,2, $result) ;
    echo $result . PHP_EOL;

echo "<hr/>";

## Exercise 1
    // 1) Write a Simple Function to Accept Parameters and Return Value
    // declare(strict_types=1);
    $name = function (string $n): string{
        return $n;
    };
    echo "Our country is ".$name('India');

echo "<hr/>";
## Exercise 2
    /*
        1) Write a function to accept two integer values and show add, sub, multiple and divide.
        2) Accept Optional parameter to perform specific operations
        3) Print the output from the function.
        4) declare(strict_types=1);
    */
    // declare(strict_types=1);  i am hide this statement beacuse this line always write 1st line of program
    $zero = 0;
    $add = function($a,$b){
        return $a + $b;
    };
    $sub = function($a,$b){
        if ($a < $b) {
            # code...
            return $b - $a;
        }else{
            return $a - $b;
        }
    };
    $mul = function($a,$b){
        return $a * $b;
    };
    $div = function($a,$b) use($zero){
        if ($b != $zero){
            return $a/$b;
        }else{
            echo "Zero is not divisible.";
        }
    };

    $num_1 = 4;
    $num_2 = 0;
    echo "Add Result : ".$add($num_1,$num_2)."<br/>";
    echo "Sub Result : ".$sub($num_1,$num_2)."<br/>";
    echo "Mul Result : ".$mul($num_1,$num_2)."<br/>";
    echo "Div Result : ".$div($num_1,$num_2)."<br/>";

    echo "<hr/>";
    echo "</pre>";
    ?>
        <hr/>
            <button><a href="assignment.php"> ASSIGNMENT </a></button>
        <hr/>