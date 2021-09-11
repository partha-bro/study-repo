<?php
	
	// Aceess Cookie
echo "<pre>";
	print_r($_COOKIE);
echo "<hr/>";
	if (!isset($_COOKIE["TestCookie"])) {
	    # code...
	    echo "Cookie is not set.";
	}else{
	    echo "Cookie value : ". $_COOKIE["TestCookie"]. "<br/>"; //  access the cookie
	}
echo "<hr/>";
	// Aceess Session
	session_start();
	print_r($_SESSION);
echo "<hr/>";
	if (!isset($_SESSION["Rollnumber"])) {
	    # code...
	    echo "Session is not set.";
	}else{
	    echo 'Session value : The Roll number of the student is :' . $_SESSION["Rollnumber"] . '<br>';  //  access the session
	}
echo "<hr/>";
?>