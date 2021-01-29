<?php
### TOPIC NAME: Data Types ###
/*
    1. Integer                  Line = 33
    2. float/double             Line = 55
        2.1 round()
        2.2 abs()
    3. Bolean                   Line = 103
    4. String                   Line = 128
    5. Escape sequence          Line = 149
        [ \t,\n,\b,\\,\',\"]
    6. Null                     Line = 166
    7. Exercises                Line = 188
    8. Assignment button        Line = 311
*/
// What is Scalar data type?
// scalar are data types that has single value like:
// bolean 
// integer
// string
// float

/*
     * Integers are whole numbers
     * Integer values does not have decimals.
     * Integers could have + or - values
     * Integer Variable can hold Octal (base 8), Hexadecimal(base 16) and Binary (base 2) Values
     * Every Platform will have limited integer number to be defined.
     * Constant PHP_INT_SIZE can be used to find out the integer limit.
     *
     */

    //Define and Print Integer Variable
    $marks = 87;
    echo $marks . PHP_EOL;

    //Hexadecimal Variable
    //https://www.binaryhexconverter.com/decimal-to-hex-converter
    $marks = 0x19F2D7C1; //435345345
    echo $marks . PHP_EOL;

    //String to Integer Addition
    $marks = 10;
    $total = "1000" + $marks;
    echo $total . PHP_EOL;

    //Negative Integers
    $finalMarks = 5 - 10;
    echo $finalMarks . PHP_EOL;

    $finalMarks = -5 + 5;
    echo $finalMarks . PHP_EOL;

    //For Windows, depends on 32 bits or 64 bits.
    echo PHP_INT_MAX . PHP_EOL;

// Double or float data type
 /*
     * Decimals are real numbers
     * Decimals have decimal points
     * Use round() method with precision
     * round()  => for round your floating number to integer
     * abs()    => convert negative value to positive value
     */

    //Define and Print Decimal Variable
    $totalScore = 78.87;
    echo $totalScore . PHP_EOL;

    //Negative Decimals
    $temparature = -40.23;
    echo $temparature . PHP_EOL ;

    //Round a Double Value
    $price = 4.99;
    echo round($price) . PHP_EOL;

    //Compare two Double with Precision 0.1 = 1.87 ~ 1.97
    $price = 1.87;
    $bid = 1.97;
    echo ( abs($price - $bid) < 0.1 ) ? "Accepted" : "Rejected";

// bolean data type
    /*
     * true or false / TRUE OR FALSE can be used to assign a boolean variable
     * Boolean are literals are case insensitive - True or true or TRUE are same.
     * true = 1 and false = 0 when displayed with echo
     * Integer variable with value 0 is false and anything else is true
     * String variable with value "0" is false and anything else is true
     * Boolean is used in condition to check something.
     * Operators which results into boolean conditions
     */

    //Define and Use the Boolean Variable
    $flag1 = TRUE;
    $flag2 = FALSE;
    echo ($flag1) ? "True" : "False";
    echo PHP_EOL;

    //Print Boolean Variable
    echo "True: " . $flag1 . PHP_EOL;
    echo "False: " . $flag2 .PHP_EOL;


    //Use String as Boolean Condition
    $isLoggedIn = true;
    $userSessionName = "John, Smith";
    echo ( $isLoggedIn && $userSessionName ) ? "User Logged In" : "User Not Logged In";
    echo PHP_EOL;

    //Use String as Boolean Condition
    $isLoggedIn = true;
    $userSessionName = null;

    echo ( $isLoggedIn && $userSessionName ) ? "User Logged In" : "User Not Logged In";
    echo PHP_EOL;

    //Use Integer Variable as Boolean - Watchout for Negative Values
    $marks = 1;
    echo ( $marks ) ? "Marks has values" : "Marks does not have any value";
    echo PHP_EOL;


    //Operators results into Boolean condition
    $name = "John";
    echo ( $name === "John" ) ? "Yes John" : "Not John";
    echo PHP_EOL;


// string data type
    /*
     * Strings are defined in Double quotes and Single Quotes.
     * Double Quotes string will interpolate variables values and single quote does not.
     * No limited to how much string variable holds but limited with system memory.
     * Use Escape Character to escape double quotes inside double quotes and other characters.
     * String methods are available to work with string manipulation
     *
     */


    //Define String and use Strings
    $name1 = "John, Smith";
    $name2 = 'John, Smith';
    echo "$name1 and $name2" . PHP_EOL;
    echo '$name1 and $name2' . PHP_EOL;

    //Combine Strings
    $name3 = $name1 . " - " . $name2;
    echo $name3 . PHP_EOL;

    //Use back slach to escape the characters
    $name4 = "This is a \"Special\" String";
    echo $name4 . PHP_EOL;

    $name4 = "\t\tThis is a \"Special\" String";
    echo $name4 . PHP_EOL;

    $name4 = "\T\h\i\s is a \"Special\" String";
    echo $name4 . PHP_EOL;

    $name4 = '\t\h\i\s is a \"Special\" String';
    echo $name4 . PHP_EOL;

    echo strlen( $name4 ) .PHP_EOL;

    //How to Search the Manual https://www.php.net/ for String Methods.

// null data type
    /*
     * NULL is case insensitive. null / NULL are same
     * null is used to initialize a variable with empty value.
     * unset() and is_null() methods
     * Most common use case is to check if the variable has a value or empty
     */

    //Define and Check Null
    $name = null;
    echo $name . PHP_EOL;
    echo ($name) ? "Has Value" : "Empty" . PHP_EOL;

    //Check if the Variable is Null or not
    $name = "0";
    echo ( $name ) ? "Has Value" : "Empty" . PHP_EOL;
    echo ( !is_null($name) ) ? "Not Null" : "Empty" . PHP_EOL;

    //Remove the Variable from the Program and Memory
    unset($name);
    echo ( !is_null($name) ) ? "Not Null" : "Empty" . PHP_EOL;
?>
<!-- ### EXCERCISE 1 ### -->
    <h1>Exercise 1: Use All Data Types</h1>

    <h2>Calculate the area using Length and breath using Integer:</h2>
    <?php
        $length = 10;
        $breath = 20;
        $area = $length * $breath;
        echo $area . PHP_EOL;
    ?>
    
    <h2>Calculate Student Exact Marks Percentage with Double:</h2>
    <?php
    
        $maths = 45;
        $science = 35;
        $total = $maths + $science;
        $totalMarks = 200;
        $percentage = $total / $totalMarks;
        echo $percentage;
    
    ?>
    
    <h2>Check if the user has admin roles:</h2>
    <?php
    
        $userName = "John, Smith";
        $hasRoles = null;
        $adminRoles = "Admin";
        $userRoles = "Admin";
    
        $hasRoles = ( $userRoles === $adminRoles );
        echo ($hasRoles) ? "$userName has Admin Role" : "$userName has not Admin Role";
    
    ?>
    
    
    <h2>Define and Display a User Name using Strings:</h2>
    
    <?php
    
        $firstName = "John";
        $lastName = "Smith";
        $fullName = $firstName . ", " . $lastName;
        echo $fullName;
    
    ?>
    
    <h2>Check if the variable is null or not:</h2>
    <?php
    
        $inputValue = "This is a test Value";
        $hasValue = is_null($inputValue);
        //Check if not null
        echo ( !$hasValue ) ? "Input has Value" : "Input is Empty";
    

    ### EXERCISE 2 ###
?>
<h1>Exercise 1: Print Student Details</h1>

<?php

    $studentName = "Alex";
    $classSection = "5C";
    $age = 10;
    $sex = "Male";
    $contact = "+123456789";

    //Initiate the Variables
    $maths = 0;
    $science = 0;
    $total = 0;
    $totalMarks = 200;
    $percentage =  0;
    $passed = null;

?>


<h2>Student Information:</h2>

<table border="1">
    <tr>
        <td>Name</td>
        <td>Class</td>
        <td>Age</td>
        <td>Sex</td>
        <td>Contact</td>
    </tr>
    <tr>
        <td><?= $studentName ?></td>
        <td><?= $classSection ?></td>
        <td><?= $age ?></td>
        <td><?= $sex ?></td>
        <td><?= $contact ?></td>
    </tr>
</table>

<h2>Exams Attended:</h2>
<?php
    $maths = 56;
    $science = 78;
    $total = $maths + $science;
    $examAttended = ($total > 0) ? true : false;
?>

Exam Attended : <?= ($examAttended) ? "Yes Attended" : "Not Attended"; ?> <br>

<h2>Final Marks:</h2>
Total Marks : <?= $total ?>

<h2>Percentage:</h2>

<?php
    $percentage = ( $total / $totalMarks) * 100;
?>
Percentage : <?= $percentage ?>

<h2>Result:</h2>
Final Result <?= ($percentage >= 60)  ? "Passed" : "Failed"; 
?>
<hr/>
<button><a href="assingment.php"> ASSIGNMENT </a></button>
<hr/>