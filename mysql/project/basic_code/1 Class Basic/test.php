<?php
	if (isset($_POST['submit'])) {
		# code...
		$name = $_POST['name'];
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
			<p><?= $name ?></p>
		</div>
	</body>
</html>
