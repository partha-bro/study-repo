<?php
	function sum($a, $b){
		$c = $a + $b;

		return $c;
	}

	if (isset($_POST['submit_sum'])) {
		# code...
		if (!empty($_POST['num1']) AND !empty($_POST['num2'])) {
			# code...
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$call = sum($num1,$num2);
		}else{
			echo "<script> alert('Please enter your number.'); </script>";
			header('location: index.php');
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>My First PHP Program</title>
		<link href="style.css" rel="stylesheet" type="text/css">

	</head>
	<body>

		<div id="main">

		<h1>PHP Code Output </h1>

		<p><?php

				// code here

				if(isset($_POST['num3'])){

					$num3 = $_POST['num3'];
					$num4 = $_POST['num4'];

					$call = sum($num3,$num4);

				}
				echo "Your SUM: ".$call;

		?></p>
		<form method="post" action="sum.php">
			<input type="text" name="num3" placeholder="Number">
			<input type="text" name="num4" placeholder="Number">

			<input type="submit" value="SQUARE" class="button">

		</form>
		</div>

	</body>
</html>