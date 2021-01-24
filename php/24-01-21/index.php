<?php

    // variable of variables
    $male = 'Arjun bro';
    
    $gender = 'male';
    
    $partha = 'gender';
    echo $partha.",";
    echo $$partha.",";
    echo $$$partha.",";

    echo '<hr/>';
    //predefind variables
    // https://www.php.net/manual/en/reserved.variables.php
    /*
        Superglobals — Superglobals are built-in variables that are always available in all scopes
        $GLOBALS — References all variables available in global scope
        $_SERVER — Server and execution environment information
        $_GET — HTTP GET variables
        $_POST — HTTP POST variables
        $_FILES — HTTP File Upload variables
        $_REQUEST — HTTP Request variables
        $_SESSION — Session variables
        $_ENV — Environment variables
        $_COOKIE — HTTP Cookies
        $php_errormsg — The previous error message
        $http_response_header — HTTP response headers
        $argc — The number of arguments passed to script
        $argv — Array of arguments passed to script
    */
    @$val = 1/0;
    print_r(error_get_last ( )); //this method use insted of $php_errormsg, because of discontinued [source above link]

    echo '<hr/>';

    //isset function : set value or not
    // NOTE: isset() is not use in constant variable, it throws error
     /*
     * 1) No need to use $ to use the constant
     * 2) Constant are defined only via the define method not assignemnt operator.
     * 2) Value can be assigned only once.
     * 3) Constant has Global Scope. Can access anywhere.
     * 4) constant method can be used to access the constants.
     * One Advise use constants always CAPS and variables as lowercase.
     */
    $name = 'partha';
    $age;
    if(isset($name))
        echo 'name is set.';
    if(!isset($age))
        echo 'age is not set';
    echo '<hr/>';

    //Define constant
    const PIE = 2; 
    $r = 4;
    $circle = PIE * pow($r,2);
    echo "$circle ";
    echo "PIE ";
    echo PIE;
    define('PIE',3); // const PIE = 3;
    echo "<hr/>";