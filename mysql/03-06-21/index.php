<?php
### TOPIC NAME: PHP Development ###

/*
    1. PHP Form Output and Validation                               Line = 19
    	1.1 htmlspcialchars()
    	1.2 trim()
    	1.3 striplashes()
    	1.4 preg_match()
    2. Regular Expression
    	2.1 preg_match()
    	2.1 preg_match_all()
	                                                    
*/  

// 1. PHP Form Output and Validation
/*
	Validation:
		1. Pass all variables through PHPs htmlspcialchars() functions to make sure data is 
			transmitted securely.
		2. Use the trim() function to strip any unnecessary chars such as extra space, tabs,
			or breaks inserted into the input fields.
		3. Use the striplashes() function to remove any backslashes from user input data. 
			This helps add an additional layer of security and protects data integrity.
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get" action="<?php $_SERVER['PHP_SELF'] ?>">
		<input type="text" name="name" placeholder="Type your name:" value="<?= @$_GET['name'] ?>">
		<input type="text" name="email" placeholder="Type your text:" value="<?= @$_GET['email'] ?>">
		<input type="submit" name="submit">
		<input type="reset" name="reset">
	</form>
</body>
</html>
<?php
	// from basic validation of php
	function val($data) {
			# code...
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

	if (isset($_GET['submit'])) {
		# code...
		$name = val($_GET['name']);
		if (preg_match("/^[a-zA-Z ]*$/", $_GET['email'])) {
			# code...
			$email = $_GET['email'];
		}else{
			$email = '<b style="color:red">Wrong input format</b>';
		}
		echo "Name: ".$name." and Email: ".$email;
	}

echo "<hr/>";

// 2. Regular Expression
	/*
		systax:
		pattern : /pattern/modifiers

			preg_match(pattern, string)
			preg_match_all(pattern, string, array)
	*/
	$string = "PHP is the web scripting php language of choice.";

	$exp = preg_match("/PHP/", $string); 						// case sensitive
	$exp_1 = preg_match("/php/i", $string); 					// non case sensitive
	$exp_2 = preg_match_all("/php/i", $string, $arr); 			// non case sensitive with all data
	$exp_3 = preg_match_all("/php|web|the/i", $string, $arr); 	// more than one data 
	$exp_3 = preg_match_all("/p|w|t/i", $string, $arr); 		// more than one char
	$exp_3 = preg_match_all("/[pwt]/i", $string, $arr); 		// more than one char without using |
	$exp_3 = preg_match_all("/[^pwt]/i", $string, $arr); 		// print all char except p,w,t char
	$exp_3 = preg_match_all("/[a-d]/i", $string, $arr); 		// print a to d chars 
	$exp_3 = preg_match_all("/[a-zA-Z0-9]/i", $string, $arr); 		// print a to z chars and A to Z and 0 to 9 

	if ($exp_3) {
		# code...
		echo "A match was found.";
	}else{
		echo "A match was not found.";
	}

	echo "<pre>";
	print_r($arr);