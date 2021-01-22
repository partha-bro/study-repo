<?php

#  single line comment
// single line comment
/*
    multiple 
    line 
    comment
*/

//print message
echo "Hello world!<br/>";
print "Hello world!<br/>";
print_r($_SERVER);
echo '<hr>';

# variabale = "value";
$name = "partha";
echo $name ."<br/>";
echo '<hr>';

# add two value
$no_1 = "10"; #string
$no_2 = 20;
echo $no_1 + $no_2 . "<br/>";

$no_1 = "abc"; #string
$no_2 = 20;
echo $no_1 . $no_2 . "<br/>"; # string and integer can not be added but concatenate is possible
echo '<hr>';

# function with local value
function call_local_val(){
    $a = "function called local variable!";
    return $a;
}
echo call_local_val() .'<br/>';
echo '<hr>';

# function with global value
global $a; // Declare the global variable
$a = "function called global variable!"; // assign the global value
// $GLOBALS['a'] = "function called global variable!";
function call_global_val(){
    $a = "funcion local variable";
    return $GLOBALS['a'];  // golbal variable
}
echo call_global_val() .'<br/>';
echo '<hr>';

// Not Static variable
$count = 0;
while($count <= 1){
    $count = 1;
    $count++;
    echo "Not static var: ".$count.", <br/>";
}

// Static variable
$count = 0;
while($count <= 10){
    static $count = 2;
    $count++;
    echo "Static var: ".$count.", <br/>";
}
echo '<hr>';

/*
    Superglobal variables -> there are build-in variable that
    are akways available in all scopes.
*/
// $GLOBALS
// $_GET
// $_POST
// $_REQUEST
// $_COOKIE
// $_SESSION
// $_SERVER
// $_ENV
// $_FILES

// Examples - $GLOBALS
$GLOBALS['b'] = 'global value';
function call_global_val_print(){
    echo $GLOBALS['b'] . '<br/>';
}
call_global_val_print();
echo '<hr>';

// Examples - $_GET
// we can access data from submit form using get method
@$get = $_GET['path']; // data fetch from url - less security
echo '<hr>';

// Examples - $_POST
// we can access data from submit form using post method
@$get = $_POST['path']; // data fetch from after submit - more security
echo '<hr>';

// Examples - $_REQUEST
// we can access data from submit form using get/post method
@$get = $_REQUEST['path']; // data fetch after submit
echo '<hr>';

// Examples - $_COOKIE
// An associative array of variables passed to the current script via HTTP Cookies. 
// set a cookie for remember browser any data of certain time
$value = 'Set cookie in browser';

// setcookie("key", "value", "expire time"); // set cookie
setCookie("TestCookie", $value);  /* expire in 1 hour(60 * 60) 
                                                    sec * min * hour * day = 60 * 60 * 24 * 10 (for 10 days)*/

echo $_COOKIE["TestCookie"]; //  access the cookie

// setCookie("TestCookie", "", 1); // delete the cookie
echo '<hr>';

