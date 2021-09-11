<!--
	TOPIC: PHP Condition with Using Form
-->

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
			<p><?= @$_GET['msg'] ?></p>
				<form method="post" action="index.php">
				<input type="text" name="pass" placeholder="Check Password">
				<input type="submit" name='submit' class="button">
			</form>
		</div>
	</body>
</html>

<?php
	
	if (isset($_POST['submit'])) {
		# code...
		if ($_POST['pass'] == '123456') {
			# code...
			header('location: index.php?msg=Password is Correct.');
			// $message = "Password is Correct.";
		}else{
			header('location: index.php?msg=Password is Not Correct.');
			// $message = "Password is not Correct.";
		}
	}