<?php
### TOPIC NAME: Control Structures ###

/*
    1. If statement                     Line = 23
    2. Else..if Statement               Line = 164
    3. Switch                           Line = 195
    4. Loops for Statement              Line = 250
    5. Loops while Statement            Line = 295
    6. Loops do...while Statement       Line = 330
    7. break Statement                  Line = 354
    8. Loops continue Statement         Line = 395
    9. Loops return Statement           Line = 418
    10. Include                         Line = 442
    11. Require                         Line = 448
    12. Include_once                    Line = 454
    13. Require_once                    Line = 459
    14. Goto                            Line = 464
    15. Exercixe 1

*/

// If-else statement
     /*
     * 1) Syntax of if and else condition
     * 2) Check if the inputs given by user is correct.
     * 3) if condition statement without braces.
     * 4) Check if Student is passed or failed.
     *
     */


//1) Syntax of if and else condition
//Please follow the coding style.

    $some_boolean_condition = FALSE;
    if ( $some_boolean_condition ) {
        echo 'This is a If Block' . PHP_EOL;
        echo 'This is a True Condition' . PHP_EOL;
    } else {
        echo 'This is a Else Block' . PHP_EOL;
        echo 'This is a False Condition' . PHP_EOL;
    }

    //Guess the output
    $one_more_boolean_condition = FALSE;
    if ( $some_boolean_condition && $one_more_boolean_condition) {
        echo 'This is a If Block' . PHP_EOL;
        echo 'This is a True Condition' . PHP_EOL;
    } else {
        echo 'This is a Else Block' . PHP_EOL;
        echo 'This is a False Condition' . PHP_EOL;
    }

?>

<!-- //php and html are mixed together with ifelse -->
<!doctype html>
<html>
<head>
    <title>
        if else Statements
    </title>
</head>
<body>

<?php if ($some_boolean_condition || true) { ?>

    <h1>This is a True Condition Block.</h1>

<?php } else { ?>

    <h1>This is a False Condition Block</h1>

<?php } ?>

</body>
</html>

<?php

    //Sample 2:
    // 2) Check if the inputs given by user is correct.
    $input1 = "Some Text from User"; //Comment this later and check
    //Show how to use the if condition to check different variations of checking nulls

    $input2 = 34;

    //Condition 1
    if( !is_null($input1)  ) {
        echo '$input1 is not empty';
    } else {
        echo '$input1 is empty value';
    }

    //Condition 2
    if( isset($input1) &&  !is_null($input1)  ) {
        echo '$input1 is not empty';
    } else {
        echo '$input1 is empty value';
    }

    //Condition 3
    if($input1 != ""  ) {
        echo '$input1 is not empty';
    } else {
        echo '$input1 is empty value';
    }

    //Best Way to check if field is empty
    if( !empty($input1) ) {
        echo '$input1 is not empty';
    } else {
        echo '$input1 is empty value';
    }

    if( $input2 >= 34 ){
        echo 'input2 is greater than 34';
    } else {
        echo 'input2 is less than 34';
    }


    //Sample 3
    //3) if condition statement without braces.

    $some_boolean_condition = FALSE;
    if( $some_boolean_condition )
        echo 'This is true' . PHP_EOL;
    else
        echo 'This is false' . PHP_EOL;

    /*
    if( $some_boolean_condition )
        echo 'This is true' . PHP_EOL;
        echo 'This is false' . PHP_EOL;
    else
        echo 'This is false' . PHP_EOL;
        echo 'This is true' . PHP_EOL;
    */

    //One Liner
    if( $some_boolean_condition ) echo 'This is true' . PHP_EOL; else echo 'This is false' . PHP_EOL;

    //Recommended Practice
    if( $some_boolean_condition ) {
        echo 'This is true' . PHP_EOL;
    } else {
        echo 'This is false' . PHP_EOL;
    }


    //Sample 4
    //4) Check if Student is passed or failed.
    //Proper Example..
    $result = "Passed";

    if( $result === "Passed") {
        echo "Student has Passed the Exam" . PHP_EOL;
    } else {
        echo "Student has Not Passed the Exam" . PHP_EOL;
    }

// else..if Statement
    //1) Check for Odd or Even Numbers and Print it.
    // Using 'else if'
    $input_number = 10;
    $result = $input_number % 2;
    if( $result ){
        echo 'Odd Number' . PHP_EOL;
    }else if ( !$result ) {
        echo 'Even Number' . PHP_EOL;
    }

    /*
        if(condition1){
            // Code to be executed if condition1 is true
        } elseif(condition2){
            // Code to be executed if the condition1 is false and condition2 is true
        } else{
            // Code to be executed if both condition1 and condition2 are false
        }
    */

    //Check if input_number is greater than 10
    //Recommended 'elseif'
    if( $input_number  > 10 ){
        echo 'Number greater than 10' . PHP_EOL;
    } elseif ( $input_number  == 10 ){
        echo 'Number equal than 10' . PHP_EOL;
    } else {
        echo 'Number less than 10' . PHP_EOL;
    }

// Switch
     //1) Check for Odd or Even Numbers and Print it.
    // Using 'else if'
    $input_number = 10;
    $result = $input_number % 2;
    if( $result ) {
        echo 'Odd Number' . PHP_EOL;
    }else if ( !$result ) {
        echo 'Even Number' . PHP_EOL;
    }

    switch($result) {
        case 1:
            echo 'Odd Number' . PHP_EOL;
            break;
        case 0:
            echo 'Even Number' . PHP_EOL;
            break;
    }

    //Check if input_number is greater than 10
    //Recommended 'elseif'
    if( $input_number  > 10 ) {
        echo 'Number greater than 10' . PHP_EOL;
    } elseif ( $input_number  == 10 ){
        echo 'Number equal than 10' . PHP_EOL;
    } else {
        echo 'Number less than 10' . PHP_EOL;
    }

    //Recommeded to use if for conditional
    switch(true) {
        case $input_number > 10:
            echo 'Number greater than 10' . PHP_EOL;
            break;
        case $input_number  == 10:
            echo 'Number equal than 10' . PHP_EOL;
            break;
        default:
            echo 'Number less than 10' . PHP_EOL;
    }

    //String based switch condition
    $weekday = "Fri";
    switch($weekday) {
        case "Mon":
            echo 'Monday' . PHP_EOL;
            break;
        case "Fri":
            echo 'Friday' . PHP_EOL;
            break;
        default:
            echo 'Others' . PHP_EOL;
    }

// For loop
     //Print Odd Numbers from 1 to 10.
    /*
        for(initialization; condition; increment){
            // Code to be executed
        }
    */


    //Sample 1 - Recommended Way
    for( $value = 1 ; $value <= 10 ; $value++ ) {
        $result = $value%2;
        if( $result > 0 ){
            echo 'Odd Number: ' . $value . PHP_EOL;
        }
    }

    //Sample 2
    $value = 1;
    for(  ; $value <= 10 ; $value++ ) {
        $result = $value%2;
        if( $result > 0 ){
            echo 'Odd Number: ' . $value . PHP_EOL;
        }
    }

    //Sample 3
    $value = 0;
    for(  ; $value <= 10 ; ++$value ) {
        $result = $value%2;
        if( $result > 0 ){
            echo 'Odd Number: ' . $value . PHP_EOL;
        }
    }

    //Sample 4
    $value = 0;
    for(  ; $value <= 10 ; ) {
        $result = $value%2;
        if( $result > 0 ){
            echo 'Odd Number: ' . $value . PHP_EOL;
        }
        $value++;
    }

// Loops while Statement
    //Print Even Numbers from 1 to 10.
    /*
        while(condition){
            // Code to be executed
        }
    */

    //Sample 1 - Recommended Way
    /*
    $value = 1;
    while( $value <= 10 ){

        $value++;
    }
    */

    /*
    for( $value = 1 ; $value <= 10 ; $value++ ) {
        $result = $value%2;
        if( $result > 0 ){
            echo 'Odd Number: ' . $value . PHP_EOL;
        }
    }
    */

    $value = 1;
    while( $value <= 10 ){
        $result = $value%2;
        if( $result == 0 ){
            echo 'Even Number: ' . $value . PHP_EOL;
        }
        $value++;
    }

// Loops do...while Statement

/*
    do{
        // Code to be executed
    }
    while(condition);
*/

//Semicolon after the while.
$max_value = 100;
$value1 = 2;
do{
    echo "Square: " . $value1 . PHP_EOL;
    $value1 *= 2;
}while($value1 <= $max_value);

/*
    //Infinite Loop
    do{
        //This will never end.
    }while(true);
*/

// break Statement
      //Break an Infinite Loop
    //Print 1 to 10 using Infinite Loop
    $value = 1;
    do{
        echo $value . PHP_EOL;
        if( $value >= 10){
            break;
        }
        $value++;
    }while(true);


    //Break multiple loops
    $loop1 = 1;
    $loop2 = 1;
    $loop3 = 1;
    for( ; $loop1 <= 10; $loop1++) {

        while( $loop2 <= 10){

            do{
                if ( $loop3 == 5) {
                    break 1;
                }
                echo "Loop 3: $loop3" . PHP_EOL;
                $loop3++;
            }while( $loop3 <= 10);


            if ( $loop2 == 6) {
                break 1;
            }
            echo "Loop 2: $loop2" . PHP_EOL;
            $loop2++;
        }
        if ( $loop1 == 7) {
            break 1;
        }
        echo "Loop 1: $loop1" . PHP_EOL;
    }

// Loops continue Statement
         //continue will skip the next line and go to next loop
    //1) Print Even Numbers using While Infinite Loop and Break after 10 numbers.
    $value = 1;
    while(true) {

        $result = $value % 2;


        if($result == 1) {
            $value++;
            continue;
        }

        if($value > 10){
            break;
        }

        echo "Even Number: " . $value . PHP_EOL;
        $value++;
    }

// Loops return Statement
        //1) Write a function. Return empty if input parameters are empty.
        function checkUserRoles($userRoles) {
            if( empty($userRoles) ){
                echo "Roles cannot be empty" . PHP_EOL;
                return;
            }
    
            switch ($userRoles){
                case "Admin":
                    echo "Hello Admin" . PHP_EOL;
                    break;
                case "Editor":
                    echo "Hello Editor" . PHP_EOL;
                    break;
                default:
                    break;
            }
        }
    
        checkUserRoles("Admin");
        checkUserRoles("");
        checkUserRoles("Editor");

// include
    // incude "" is use for include the other file logic in this file
    // if file is not found then it gives warning error and run rest of the code
    include '../02-01-21/sub_namespace/sub1.php';
    sub_namespace\sub1\find_namespace();

// require
    // require "" is use for include the other file logic in this file
    // if file is not found then it gives Fetal error and don't run rest of the code
    require '../02-01-21/sub_namespace/sub2.php';
    sub_namespace\sub2\find_namespace();

// include_once
    // incude_once "" is use for include the other file logic in this file for once
    include_once '../02-01-21/sub_namespace/sub1.php';
    sub_namespace\sub1\find_namespace();

// require_once
    // require_once "" is use for include the other file logic in this file for once
    require_once '../02-01-21/sub_namespace/sub1.php';
    sub_namespace\sub1\find_namespace();

// goto statement
    
    $inputvalue1 = "John, Smith";
    $inputvalue2 = 0;

    if( $inputvalue2 <= 0 ){
        goto error_block;
    }
    echo 'InputValue2 is greater than 0' . PHP_EOL;

    error_block:
            echo "This is a error block will execute anyway." . PHP_EOL;
    

    
    $inputvalue1 = "John, Smith";
    $inputvalue2 = 0;

    if( $inputvalue2 <= 0 ){
        goto error_block1;
    }
    echo 'InputValue2 is greater than 0' . PHP_EOL;
    exit();

    error_block1:
         echo "This is a error block will execute anyway." . PHP_EOL;
    

    
    //Breaks the loop and jump out.
    for($count = 0; $count <= 10; $count++){
        if($count == 2){
            goto loop2;
        }
    }


    loop2:
        echo "Counter value is $count" . PHP_EOL;
    

    /*
    //Cannot jump to goto label inside the loop
    goto loop2;
    for($count = 0; $count <= 10; $count++){
        if($count == 2){
            loop2:
                echo "Counter value is $count" . PHP_EOL;
        }
    }
    */
?>
<!-- Exercise 1 -->
    <hr/>
    <button><a href="assingment_1.php"> ASSIGNMENT_1 </a></button>
    <hr/>