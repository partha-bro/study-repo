<?php
### TOPIC NAME: Handling Exceptions ###

/*
    1. Raise and Catch                      Line = 15
    2. Throw an Custom                      Line = 47
    3. Catch Multiple                       Line = 73
    4. Difference between try-catch block 
    and custom exception method             Line = 136
    4. Finally Block                        Line = 152
    5. Raise and Catch Errors               Line = 195
    6. Exercise 1                           Line = 209 
*/

## Raise and Catch an Exception
    /*
		Syntax: 
		

		try{
			throw new Exception('Error message')
		}catch(Exception $e){
			echo "err msg".$e->getMessage();
		}
    */
		function divideByZero($x,$y)
		{
			# code...
			if ($y == 0) {
				# code...
				throw new Exception("Divided by zero");
			}
			$result = $x/$y;
			return $result;
		}
		try{

			$result = divideByZero(2,0);
			echo "<br/>Result: ". $result;

		}catch(Exception $e){

			echo "Error: " . $e->getMessage().'<br/>';
		}
		echo "<hr/>";

// Throw an Custom Exception
	/*
		function customExceptionName($e){
			echo 'Error: '. $e->getMessage();
		}

		set_exception_handler('customExceptionName');
	*/
		function customExceptionName($e){
					echo 'Error_2: '. $e->getMessage().'<br/>';
				}

		set_exception_handler('customExceptionName');

		function divideByZero_2($x,$y){
			# code...
			if ($y == 0) {
				# code...
				throw new Exception("Divided by zero");
			}
			$result = $x/$y;
			return $result;
		}
		echo 'Result: '.divideByZero_2(2,2);
		echo "<hr/>";

// Catch Multiple Exception

	// using try catch Block
	function divideByZero_3($x,$y = 'empty')
	{
		try {
			if ($y == 'empty') {
				# code...
				throw new Exception("Divided by empty number!");
			}
		} catch (Exception $e) {
			throw new Exception("Specal Error: ".$e->getMessage());
		}
		if ($y < 0) {
			# code...
			throw new Exception("Divided by negative number!");
		}
		if ($y == 0) {
			# code...
			throw new Exception("Divided by zero number!");
		}
		$result = $x/$y;
		echo "Result: ".$result;
	}
	try{

		divideByZero_3(2,'0');

	}catch(Exception $e){

		echo "Error_3: " . $e->getMessage().'<br/>';
	}
	echo "<hr/>";

	// define custom exception
	function error_Custom_Exception($e){
		echo "Error_4: ".$e->getMessage().'<br/>';
	}
	set_exception_handler('error_Custom_Exception');

	function dividedByZero_4($x,$y = 'empty'){
		try {
			if ($y == 'empty') {
				# code...
				throw new Exception("Divided by empty number!");
			}
		} catch (Exception $e) {
			throw new Exception("Specal Error: ".$e->getMessage());
		}
		if ($y < 0) {
			# code...
			throw new Exception("Divided by negative number!");
		}
		if ($y == 0) {
			# code...
			throw new Exception("Divided by zero number!");
		}
		$result = $x/$y;
		echo "Result: ".$result;
	}
	dividedByZero_4(2,2);
	echo "<hr/>";

// Difference between try-catch block and custom exception method
	/*
	try/catch block:

		1. In runtime, if you can use try-catch block then code execute after the error message. [this is like include method]

		2. Finally block is run after the exception rise

	custom exception:

		1.In runtime,  if you can use custom exception block then code does not execute after the error message. [this is like require method]

		2. Finally block is run before the exception rise
		
	*/

// Finally Block
	/*
		Finally block is executed before exception is raised when set a custom exception

		Finally block is executed after exception is raised when using try catch block
	*/
	$x = 2;
	$y = 0;
	try {

		if ($y == 0) {
			# code...
			throw new Exception("Divided by zero");
		}
		$result = $x/$y;
	} catch (Exception $e) {
		echo $e->getMessage();
	} Finally{
		echo "Error: ";
	}
	echo "<hr/>";

	// custom exception
	function errorFunction($e){
		echo $e->getMessage();
	}

	set_exception_handler('errorFunction');
	$x = 2;
	$y = 3;
	try {

		if ($y == 0) {
			# code...
			throw new Exception("Divided by zero");
		}
		$result = $x/$y;
	} Finally{
		echo "Error: ";
	}
	echo "<hr/>";

// Raise and Catch Errors
	/*
		
	*/
		function errorFunction_1($errno,$errmsg)
		{
			# code...
			echo $errno." : ".$errmsg;
		}

		set_error_handler('errorFunction_1');
		$result=5/0;
		echo $result;
echo "<hr/>";

// Exercise 1
	/*
		Raise an Exception if value is not an integer
	*/
	function findInteger($value)
	{
		# code...
		if ($value%2 != 0) {
			# code...
			throw new Exception("Value is not an integer!");
		}
		if ($value%2 == 0) {
			# code...
			echo "integer : $value";
		}
	}
	try {
		findInteger(2);
		findInteger(3);	// rise error
		findInteger(4); // not run because of out of try block 
	} catch (Exception $e) {
		echo "Error : ".$e->getMessage();
	}
echo "<hr/>";
