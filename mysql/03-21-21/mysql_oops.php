<?php
## Date: 21-03-21
### TOPIC NAME: PHP MySQLi Object Oriented ###

/*
	Remember: Always use three step to connection between php & database
	Step 1: Make a connection
	Step 2: Run the given query
	Step 3: Fetch the data
	Step 4: close the connection

	
	1. MySQLi Object-Oriented
		1.1 Make a connection
				$conn = new mysqli('host','user','password','database');

		1.2 Run the given query
				$result = $conn->query($sql);

		1.3 Fetch number of rows
				if($result->num_rows > 0) 

		1.4 Fetch the data
				$result->fetch_assoc();
				$result->fetch_array()
				$result->fetch_row()
				$result->fetch_all()
				$result->fetch_field()

		1.5 Error
			while use error function to know about any error always use die()
			Beacuse it stop the php file in that position and show the reseptive error
				$conn->connect_error()
				$conn->connect_errno()
				$conn->error()
				$conn->error_list()

		1.6 Close the connection
				$conn->close();
	2. MySQLi prepare() function
*/

// Example - 1
// 1.1 Make a connection
	# config-info
	$host = 'localhost';
	$database = 'e_store';
	$user = 'root';
	$password = '';

	# connect through function with return
	$conn = new mysqli($host,$user,$password,$database);

	if ($conn->connect_error) {
		# code...
		die("Connect Failed: {$conn->connect_error}");
	}

echo "<hr/>";

// 1.2 Run the given query
	// query
	$sql = 'select * from users';

	// Run the querry
	$result = $conn->query($sql);

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
	$conn->close();

echo "<hr/>";
// 2. MySQLi prepare() function
	/*
		We use prepare() method to run query instead of query() method
		Advantage: prepare() is more secure than query().
		Disadvantage: query() has attacked by SQL injection.

		prepare():
			syntax: prepare("SELECT * FROM table_name WHERE column_1=? AND column_2=?");
			? => it means place holder[ we can not bind any data for secure]
		bind_param(): To bind the place holder data
			syntax: $sql->bind_param('data type',column_1_value,column_2_value)
			Data_type: 	s - string
						i - integer
						d - Double
						b - Blob
		get_result()->fetch_all(MYSQLI_ASSOC): Fetch all data 
			syntax: $result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
		close():
			syntax: $sql->close();

	*/

# example - 2
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

		$sql = $conn->prepare("SELECT * FROM users WHERE name = ? AND password = ? ");
		
		$sql->bind_param("ss",$user,$pass);
		
		$sql->execute();

		$result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
		echo "<pre>";
		print_r($result);
		echo "<hr>";

		if (count($result) > 0) {
			# code...

			echo "<script> alert('You are logged in.'); </script>";
		}
	}

	$sql->close();
	$conn->close();