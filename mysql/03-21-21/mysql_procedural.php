<?php
## Date: 21-03-21
### TOPIC NAME: PHP MySQLi Procedural ###

/*
	Remember: Always use three step to connection between php & database
	Step 1: Make a connection
	Step 2: Run the given query
	Step 3: Fetch the data
	Step 4: close the connection

	1. MySQLi Procedural
		1.1 Make a connection
				$conn = mysqli_connect('host','user','password','database');

		1.2 Run the given query
				mysqli_query($conn,$sql);

		1.3 Fetch number of rows
				mysqli_num_rows($result)

		1.4 Fetch the data
				mysqli_fetch_assoc()
				mysqli_fetch_array()
				mysqli_fetch_row()
				mysqli_fetch_all()
				mysqli_fetch_field()

		1.5 Error
			while use error function to know about any error always use die()
			Beacuse it stop the php file in that position and show the reseptive error
				mysqli_connect_error()
				mysqli_connect_errno()
				mysqli_error()
				mysqli_error_list()

		1.6 Close the connection
				mysqli_close($conn);
*/

// Example - 1
// 1.1 Make a connection
	# config-info
	$host = 'localhost';
	$database = 'e_store';
	$user = 'root';
	$password = '';

	# connect through function with return
	$conn = mysqli_connect($host,$user,$password,$database);
		if (mysqli_connect_error($conn)) {
			# code...
			die ("Error: ". mysqli_connect_error($conn));
		}

echo "<hr/>";

// 1.2 Run the given query
	// query
	$sql = 'select * from users';

	// Run the querry
	$result = mysqli_query($conn,$sql);

	// Check the data is present or not
	if (mysqli_num_rows($result) > 0) {
		# code...

		echo "<table border=1 cellpadding=5>";
		// fetch the data in row manner
		while ($row = mysqli_fetch_assoc($result)) {
			# code...
			// echo '$row: <pre>';
			// print_r($row);

			// display the data in array
			echo "<tr>";
			echo "<td> {$row['id']} </td>";
			echo "<td> {$row['name']} </td>";
			echo "<td> {$row['number']} </td>";
			echo "<td> {$row['email']} </td>";
			echo "<td> {$row['password']} </td>";
			echo "</tr>";
		}
		echo "</table>";
	}else{
		echo "0 result";
	}

	// close the connection
	mysqli_close($conn);

echo "<hr/>";

# example - 2 less secure, please input 'or''=' in password field to hack without knowing password.
	#Database Connection
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'e_store';

	$conn = new mysqli($host,$user,$password,$database);

	if ($conn->connect_error) {
		# code...
		die("Connection Failed: {$conn->connect_error}");
	}

?>
<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
	<input type="text" name="username">
	<input type="password" name="password">
	<input type="submit" name="submit" value="Log In">
</form>

<?php
	if (isset($_POST['submit'])) {
		# code...
		$user = $_POST['username'];
		$pass = $_POST['password'];

		$sql = "SELECT name FROM users WHERE `name`='{$user}' AND `password`='{$pass}'";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			# code...

			echo "<script> alert('You are logged in.'); </script>";
			if ($pass == "'or''='") {
				# code...
				echo "<script> alert('Your system is hacked, fuck you!'); </script>";
			}
		}
	}

	mysqli_close($conn);