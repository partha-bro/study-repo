<?php

### TOPIC NAME: PHP Language Basics ###
/*
    1. Single line and multi line comment   Line = 17
    2. Echo vs prit                         Line = 25
    3. use {} to read value of variable     Line = 31
    4. Variable declaration                 Line = 36
    5. Add two value [integer and string]   Line = 41
    6. Function with local value            Line = 51
    7. Function with global value           Line = 59
    8. Static value                         Line = 78
    9. Superglobal value                    Line = 88
    10. die() & exit()                      Line = 216
*/

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

// use {} to read value of variable
$name = "partha";
echo "{$name} <br/>";
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
// $_FILES
// $_SERVER
// $_ENV


// Examples - $GLOBALS ========>
$GLOBALS['b'] = 'global value';
function call_global_val_print(){
    echo $GLOBALS['b'] . '<br/>';
}
call_global_val_print();
echo '<hr>';

// Examples - $_GET ========>
// we can access data from submit form using get method
@$get = $_GET['path']; // data fetch from url - less security
echo '<hr>';

// Examples - $_POST ========>
// we can access data from submit form using post method
@$get = $_POST['path']; // data fetch from after submit - more security
echo '<hr>';

## What is the difference between get and post.
    /*
        GET-
            1. The GET method passes our array variables through the URL parameters.
            2. Should be used only for sending non-sensitive data.
            3. Never send passwords through the GET method.
            4. All variables are displayed openly in the URL.
            5. The GET method has limits on how much information can be sent.
            6. The current limit is 2000 characters
        POST-
            1. The POST method passes variables using the HTTP post method.
            2. The POST method is much more secure because variables are not displayed in the URL.
            3. Information is invisible to others because it is embedded within the body of the HTTP request.
            4. It has no limits as to the amount of information we can send.
            5. This method is preferred by developers.
    */
            
// Examples - $_REQUEST ========>
// we can access data from submit form using get/post method
@$get = $_REQUEST['path']; // data fetch after submit
echo '<hr>';

// Examples - $_COOKIE ========>
// An associative array of variables passed to the current script via HTTP Cookies. 
// set a cookie for remember browser any data of certain time
// We can access the cookie in any pages before expire.
    /*
        syntax:
            setcookie("key", "value", "expire time",path,domain,secure,httponly); // set cookie

        key = name of cookie value
        value = value of cookie 
        expire time = expire time in sec
        path = where to access cookie
        domain = which domain to access cookie
        secure = secure page or not, if http protocol then type false
                                        if https protocol then type true
        httponly = developer can access the cookie in client side( javascript ) of server side( php/python ).
    */
$value = 'Set cookie in browser';

// setcookie("key", "value", "expire time in sec",path,domain,secure,httponly); // set cookie
setCookie("TestCookie", $value);  /* expire in 1 hour(60 * 60) 
                                    sec * min * hour * day = 60 * 60 * 24 * 10 (for 10 days)*/
    echo "Cookie is set.";
?>
<hr/>
    <button><a href="cookie_session_value.php"> Cookie Retrive </a></button>
<hr/>
<?php
// setCookie("TestCookie", "", 1); // delete the cookie
echo '<hr>';

// Examples - $_SESSION ========>
/*
    session refers to a frame of communication between two medium. A PHP session is used to store data on a server 
    rather than the computer of the user. Session identifiers or SID is a unique number which is used to identify 
    every user in a session based environment. The SID is used to link the user with his information on the server 
    like posts, emails etc.
*/
session_start();  //start up a session.

$_SESSION["Rollnumber"] = "11";   //Storing Session Data

// Accessing Session Data: [ firstly calling session_start() and then by passing ]
// session_start(); // hide this code, because already stated above.
echo 'Session is set <br>'; 
// session_unset($_SESSION["Rollnumber"]); // Delete Certain Session value
// session_destroy();                       // Destroying Certain Session
?>
<hr/>
    <button><a href="cookie_session_value.php"> Session Retrive </a></button>
<hr/>
<?php


// $_FILES Array (HTTP File Upload variables)
/*
    $_FILES is a two dimensional associative global array of items which are being uploaded by via HTTP POST 
    method and holds the attributes of files such as:

    [name] 	Name of file which is uploading
    [size] 	Size of the file
    [type] 	Type of the file (like .pdf, .zip, .jpeg…..etc)
    [tmp_name] 	A temporary address where the file is located before processing the upload request
    [error] 	Types of error occurred when the file is uploading

    move_uploaded_file(file, destination) to upload file
*/
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <label>Please upload your file:</label>
    <input type='file' name='files' />
    <input type='submit' name='upload' />
</form>
<?php
    if(isset($_POST['upload'])){
        echo "<pre>";
        print_r($_FILES['files']);
    }
echo '<hr/>';
// Examples - $_SERVER ========>
/*
    It is a PHP super global variable that stores the information about headers, paths and script locations like,
                HTTP connection
                SERVER connection
                HOST connection
                URL connection
*/
echo $_SERVER['PHP_SELF']; 
echo "<br>"; 
echo $_SERVER['SERVER_NAME']; 
echo "<br>"; 
echo $_SERVER['HTTP_HOST']; 
echo "<br>"; 
echo $_SERVER['HTTP_USER_AGENT']; 
echo "<br>"; 
echo $_SERVER['SCRIPT_NAME']; 
echo "<br>";
echo '<hr>';
echo "<pre>";
print_r($_SERVER);

// 10. die() & exit()
    /*
        Both functions are the same tto exit the code right here.[ when use die(); or exit(); ]
    */
    echo "1. some message <br/>";
    echo "2. some message <br/>";
    echo "3. some message <br/>";
    die('After this not run code.');
    echo "4. some message <br/>";
    echo "5. some message <br/>";