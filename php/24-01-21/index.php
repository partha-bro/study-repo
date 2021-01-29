<?php
### TOPIC NAME: Variable and Constants ###

/*
    1. Variable of variables    Line = 14
    2. Predefind variables      Line = 25
    3. isset() function         Line = 48
    4. Define constant          Line = 66
    5. Magical constant         Line = 76
    6. Exercises                Line = 93
    7. Assignment button        Line = 130
*/

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
    $php_errormsg — The previous error message # use error_get_last ( )
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

# magical cconstant
# magical constant like predefind constant use anywhere for respective porpose
/*
    __LINE__ 	        ==> The current line number of the file.
    __FILE__ 	        ==> The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.
    __DIR__ 	        ==> The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root directory.
    __FUNCTION__ 	    ==> The function name, or {closure} for anonymous functions.
    __CLASS__ 	        ==> The class name. The class name includes the namespace it was declared in (e.g. Foo\Bar). When used in a trait method, __CLASS__ is the name of the class the trait is used in.
    __TRAIT__ 	        ==> The trait name. The trait name includes the namespace it was declared in (e.g. Foo\Bar).
    __METHOD__ 	        ==> The class method name.
    __NAMESPACE__ 	    ==> The name of the current namespace.
    ClassName::class 	==> The fully qualified class name. 
*/
    echo __LINE__." __LINE__ <br/>";
    echo __DIR__. " __DIR__ <br/>";
    echo '<hr/>';

### EXERCISE 1
# String variables:
    $name = 'partha';

# Integer variables
    $age = '25';

# Print variable from function
    function localVal(){
        $localVal = "local value <br/>";
        echo $localVal;
    }
    localVal();

# Static value
    function staticVal(){
        static $count = 1;
        echo $count . " static value <br/>";
        $count++;
    }
    staticVal();
    staticVal();
    staticVal();

# Global variable using superglobal
    $GLOBALS['gender'] = 'male';
    function globalVal(){
        echo $GLOBALS['gender'] . " <br/>";
    }
    globalVal();

# Variable of variables
    $amuri = 'parida';
    $village = 'amuri';
    echo $$village . " title of my name <br/>";
?>
    <hr/>
    <button><a href="assingment.php"> ASSIGNMENT </a></button>
    <hr/>