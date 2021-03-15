<?php
### TOPIC NAME: MySQL Database ###
/*
	1. Connect to Database
		1.1 connect through function with return
		1.2 connect through class
	2. Display all data
	3. DISTINCT data
	4. WHERE clause data
*/
// Connect to Database
	/*
	NOTE: Don't chage parameter position, if you are change it then give error.
		Syntax: 
			mysqli_connect('host','user','password','database');
		in class:
			new mysqli('host','user','password','database');

	*/
# config-info
	$host = 'localhost';
	$database = 'e_store';
	$user = 'root';
	$password = '';

# connect through function with return
	$conn = mysqli_connect($host,$user,$password,$database);
	if ($conn) {
		# code...
		echo "Connect Successfully... through function with return <br/>";
	}else{
		echo "Wrong Configuration.<br/>";
	}

# connect through class
	$conn = new mysqli($host,$user,$password,$database);
	echo "<pre>";
	print_r($conn);
	if ($conn->connect_error) {
		# code...
		die('Wrong Configuration.<br/>');
	}else{
		echo "Connect Successfully... through class with object<br/>";
	}

echo "<hr/>";

# Display all data
	/*
		Q. How to data fetch in database and ddisplay in website
		A. 	Step 1: Firstly connect the database using host, username & password.
			Step 2: Write a query using object->query('query') method
			Step 3: check num_rows for data is present or not
					return_array->num_rows > 0
			Step 4: Run loop for fetch data in row manner
					$row = return_array->fecth_assoc() method
	*/
// Display all data through class
	// query
	$sql = 'select * from users';

	// Run the querry
	$result = $conn->query($sql);
	echo '$result: <pre>';
	print_r($result);

	// Check the data is present or not
	if ($result->num_rows > 0) {
		# code...

		echo "<table border=1 cellpadding=5>";
		// fetch the data in row manner
		while ($row = $result->fetch_assoc()) {
			# code...
			// echo '$row: <pre>';
			// print_r($row);

			// display the data in array
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['number']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['password']."</td>";
			echo "</tr>";
		}
		echo "</table>";
	}else{
		echo "0 result";
	}

	// close the connection
	// $conn->close();

echo "<hr/>";

# DISTINCT data
	/*
		DISTINCT means no duplicate data
	*/
	$sql = 'SELECT DISTINCT name from users';
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		# code...
		while ($row = $result->fetch_assoc()) {
			# code...
			echo "Name: ".$row['name']."<br/>";
		}
	}

echo "<hr/>";

# WHERE clause data
	$sql = 'select * from users WHERE password = 123456';
	$no = $conn->query($sql);

	if ($no->num_rows > 0) {
		# code...
		while ($row = $no->fetch_assoc()) {
			# code...
			echo "name : ".$row['name']. ", number: ".$row['number']. ", password: ".$row['password']."<br/>";
		}
	}else{
		echo "0 result";
	}

echo "<hr/>";

