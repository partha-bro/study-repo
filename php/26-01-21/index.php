<?php
### TOPIC NAME: Expressions and Operators ###
/*
    1. Arithmatic op                Line = 34
    2. Conditional/ternary op       Line = 83
    3. increment/decrement op       Line = 191
    4. Logical op                   Line = 87
    5. Assignment op                Line = 163
    6. comparision op               No data
    7. Bitwise op                   Line = 208
    8. Execution op                 Line = 247
    9. Error control op             Line = 257
    10. Operator Precedence         Line = 268
*/

// what is expression?
    // Expressions are evaluated into a result value or final value or single value
    $message = 'this is an expression';

// what is operator?
    // Operators are used to perform some operation on the variables and they are represented with some symbol.

// Different type operator
    // Arithmatic op
    // Conditional/ternary op
    // increment/decrement op
    // Logical op
    // Assignment op
    // comparision op
    // Bitwise op
    // Execution op
    // Error control op

// Arithmatic op
/*
 * Addition = +
 * Subtraction = -
 * Multiplication = *
 * Division = /
 * Modulus = %
 * Exponentiation = **
 *
 */
    // 1) Calculate the Student Total Marks for 3 Subjects
        $php = 60;
        $python = 80;
        $sql = 50;
        $total_mark = $php + $python + $sql;
        echo $total_mark . PHP_EOL;     // PHP_EOL means php end on line is use for line breake in command prompt like <br> tag in website
        echo '<hr/>';
    // 2) Display the total without a $totalMarks Variable
        echo "Total mark: ". ($php + $python + $sql) . PHP_EOL;
        echo '<hr/>';
    // 3) Find the difference between marks achieved and total marks
        $sub_no = 3;
        $total = 100 * $sub_no;
        $diff = $total - $total_mark;
        echo "Difference between your mark and total mark: $diff".PHP_EOL; 
        echo '<hr/>';
    // 4) Calculate the area using length and breath
        $length = 50;
        $breath = 40;
        $area = $length * $breath;
        echo "total area: $area square foot" . PHP_EOL;
        echo '<hr/>';
    // 5) Calculate the Percentage of Overall Scored Marks
        $percentage = ($total_mark/300) * 100;
        echo "percentage $percentage%". PHP_EOL;
        echo '<hr/>';
    // 6) Check if the remainder is 0 or 1
        $rem = 4 % 2;
        echo "4 % 2 = $rem". PHP_EOL;
        $rem = 7 % 3;
        echo "7 % 3 = $rem". PHP_EOL;
        echo '<hr/>';
    // 7) Use Exponnesial Operator
        $pow = 12 ** 2;
        echo '12 ** 2 = '.$pow . PHP_EOL;
        $pow = pow(12,2);
        echo 'pow(12,2) = '.$pow . PHP_EOL;
        echo '<hr/>';

// Conditional / ternary operator
    $flag = ( true ) ? "correct" : "wrong";
    echo $flag.PHP_EOL;
    
// Logical op
/*
     *  AND - both should be true
     *  OR - any one can be true
     *  && - both should be true
     *  || - any one can be true
     *  ! - if not
     *
     */

    // 1) Greet Hello, Name if the user is logged in and has permission
        $userName = 'partha';
        $password = 123456;
        if( $userName == 'partha' AND $password == 123456){
            echo "Greet Hello".PHP_EOL;
        }else{
            echo "Faild Login!".PHP_EOL;
        }
        echo '<hr/>';
    // 2) Check if student passed any one exam
        $php = true;
        $python = false;
        $sql = false;
        if( $sql == true OR $python == true OR $php == true){
            echo "Cong, you are passed.".PHP_EOL;
        }else{
            echo "Sorry, you are failed.".PHP_EOL;
        }
        echo '<hr/>';
    // 3) Find the difference between and &&
        $result1 = true && false ;
        //$result1 = true && false;
        //$result1 = _______________;
        //false;
        //false is assign to result1

        $result2 = true AND false;
        //$result2 = true AND false;
        //_______________ AND false;
        //true AND false;
        //false but nothing to assign because of assign work is done

        echo ($result1) ? "true": "false"; // result: false
        echo PHP_EOL;
        echo ($result2)? "true": "false"; // result: true
        echo PHP_EOL;

        /*
            NOTE: && and AND op behaviors are same but 
            according to operator precedence/priority
            [=,&&] first work && op then assign = op
            [=,AND] first work assign = op then AND op
        */


        echo '<hr/>';
    // 4) Find the difference between or ||
        $result1 = false || true ;
        $result2 = false OR true;
        
        echo ($result1) ? "true": "false"; // result: false
        echo PHP_EOL;
        echo ($result2)? "true": "false"; // result: true
        echo PHP_EOL;

        echo '<hr/>';
    // 5) Check if student is not passed and print the results
        $math = 20;
        $passing = 30;
        if( !($math>$passing) ){
            echo "Not Passed.".PHP_EOL;
        }else{
            echo "Passed.".PHP_EOL;
        }
        echo '<hr/>';

// Assignment op
    /*
     *  = - Assignment Operator used to assign values
     *  .= - concatenation assignment operator
     *  += - Add Assignment Operator - .=
     *  -= - Subtract Assignment Operator
     *  *= - Multiple Assignment Operator
     *  /= - Divide Assignment Operator
     *  %= - Modulus Assignment Operator
     *
     */

    // 1) Assign value 50 to variable $marks and Use += operator
        $mark = 50;
        $mark += 10;
        echo "Mark + 10 = $mark <br/>".PHP_EOL;
       
    // 2) Learn How to Use -= and Use *= Operators
        $mark -= 20;
        echo "Mark - 20 = $mark <br/>".PHP_EOL;
        $mark *= 2;
        echo "Mark * 2 = $mark <br/>".PHP_EOL;
    // 3) Learn to Use /= and Use %=
        $mark /= 5;
        echo "Mark / 5 = $mark <br/>".PHP_EOL;
        $mark %= 5;
        echo "Mark % 5 = $mark <br/>".PHP_EOL;
        echo "<hr/>";
// increment/Decrement op
 /*
     * ++ = Incremental by 1
     * -- = Decremental by 1
     *  pre increment/decrement means first operation then assign
     * post increment/decrement means first assign then operation
     */
    // 1) Use ++ Increment and Use -- Decrement
    $num = 5;
    echo "num + 1 in pre increment: ".++$num.PHP_EOL."<br/>";
    $num = 5;
    echo "num + 1 in post increment: ".$num++.PHP_EOL."<br/>";
    $num = 5;
    echo "num - 1 in pre decrement: ".--$num.PHP_EOL."<br/>";
    $num = 5;
    echo "num - 1 in post decrement: ".$num--.PHP_EOL."<br/>";
    echo"<hr/>";
// Bitwise Operators
    /*
     * & - AND
     * | - OR
     * ^ - XOR
     * ~ - NOT - Works on one operator like ++ and -- - Unary Operator
     *
     */

    //How Bits work
    // 0 - bits - 0000
    // 1 - bits - 0001
    // 2 - bits - 0010
    // 3 - bits - 0011
    // 4 - bits - 0100
    // 5 - bits - 0101

    $first = true; //1
    $second = false; //0
    $result = ($first & $second) ? 'true' : 'false';
    echo "true & false = $result".PHP_EOL."<br/>";
    $result = ($first | $second) ? 'true' : 'false';
    echo "true | false = $result".PHP_EOL."<br/>";
    $result = (!$first) ? 'true' : 'false';
    echo "!true = $result".PHP_EOL."<br/>";
    $result = ($first ^ $second) ? 'true' : 'false';
    echo "true ^ false = $result".PHP_EOL."<br/>";
    //XOR
    echo "XOR <br/>";
    $result = (true ^ true) ? 'true' : 'false';
    echo "true ^ true = $result".PHP_EOL."<br/>";
    $result = (true ^ false) ? 'true' : 'false';
    echo "true ^ false = $result".PHP_EOL."<br/>";
    $result = (false ^ true) ? 'true' : 'false';
    echo "false ^ true = $result".PHP_EOL."<br/>";
    $result = (false ^ false) ? 'true' : 'false';
    echo "false ^ false = $result".PHP_EOL."<br/>";
    echo "<hr/>";

// Execution Operators
//backtick `` - left side to number 1 on keyboard.

    //Windows
    $dir_info = `dir *.php`;
    echo "Dir Info: <pre>$dir_info</pre>";
    echo "<hr/>";
    $host_info = `hostname`;
    echo "HostName: <pre>$host_info</pre>";

// Error Control Operators
    // @ use for error Suppress it, means not showing in webpage in run time 
    // you can use error_get_last() function for know the error 

    // 1) Raise an Error and Suppress it

    @$value = 1/0; //This line is a error and will not proceed further.
    $error = error_get_last();
    print_r ($error);
    echo "Error: ".$error['message'].PHP_EOL.'<br/>';
    echo "<hr/>";
// Operator Precedence
    /*
     * Brakets 
     * Unary - !, ++, --
     * Multiplication - * / %
     * Add/Subtract - +, -
     * Relational - <, >, <=, >=
     * Equality - ==, !=
     * Logical AND - &&
     * Logical OR - ||
     * Conditional - ?:
     * Assignment - =, +=, -=, *=, /=, %=.
     *
    */

    $total = 5 * (2 + 6) / 3 - 2;
    echo $total;