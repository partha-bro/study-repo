<?php
	
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'e_store';

	$conn = new mysqli($hostname,$username,$password,$database);

	if ($conn->connect_error) {
		# code...
		die('Connection Error!');
	}

	echo "<script> console.log('Connection Successful...') </script>";