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
		2.1 fetch data with condition
			$sql = $conn->prepare("SELECT * FROM users WHERE name = ? AND password = ? ");
			$sql->bind_param("ss",$user,$pass);
			$sql->execute();
			$result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

		2.2 fetch all data
			$sql = $conn->prepare("SELECT * FROM users ");
			$sql->execute();
			$result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

		2.3 insert data
			$sql = $conn->prepare("INSERT INTO users (name,password) values ( ?,? )");
			$sql->bind_param("ss",$user,$pass);
			$result = $sql->execute();
			echo "{$conn->insert_id}";
	
	3. Fetch functions with prepare() statement
		3.1 fetch_assoc(): // fetch data in associative array
		3.2 fetch_row(): // fetch data in indexing array
		3.3 fetch_object(): // fetch data in object
		3.4 fetch_all():

	4. get_result() vs bind_result()
		$sql->bind_result($id,$name);
		while ($sql->fetch()) 


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
	# Database Connection
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

	// $sql->close();
	// $conn->close();

echo "<hr/>";

# example - 3
	# Fetch all data
	$sql = $conn->prepare("SELECT * FROM users ");
		
		$sql->execute();

		$result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

		if (count($result) > 0) {
			# code...
			foreach ($result as $key => $value) {
				# code...
				echo "name: {$value['name']}, number: {$value['number']} <br/>";
			}
			
		}

	// $sql->close();
	// $conn->close();
echo "<hr/>";

# example - 4
	# Insert data
?>
	<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
		<input type="text" name="username_1">
		<input type="password" name="password_1">
		<input type="submit" name="submit_1" value="Insert">
	</form>

<?php
	if (isset($_POST['submit_1'])) {
		# code...
		$user = $_POST['username_1'];
		$pass = $_POST['password_1'];

		$sql = $conn->prepare("INSERT INTO users (name,password) values ( ?,? )");
		
		$sql->bind_param("ss",$user,$pass);
		
		$result = $sql->execute();

		if ($result) {
			# code...
			echo "{$conn->insert_id}";
			echo "<script> alert('Data inserted seccessfully'); </script>";
		}
	}

	// $sql->close();
	// $conn->close();

echo "<hr/>";
// Fetch functions with prepare() statement
/*
	fetch_assoc(): // fetch data in associative array
		$rows = $result->fetch_assoc();
		echo "{$rows['name']} ---- {$rows['number']} <br/>";

	fetch_row(): // fetch data in indexing array
		$rows = $result->fetch_row();
		echo "{$rows[1]} ---- {$rows[3]} <br/>";

	fetch_object(): // fetch data in object
		$rows = $result->fetch_object();
		echo "{$rows->name} ---- {$rows->number} <br/>";

		// convert object data to array data
		$arr = get_odject_vars($rows); 
		echo "{$arr['name']} ---- {$arr['number']} <br/>";
	
	fetch_all():
		$result = $sql->get_result()->fetch_all();	// it gives multi-dimension array
		$result = $sql->get_result()->fetch_all(MYSQLI_ASSOC); // it gives associaive array
*/

	$sql = $conn->prepare("SELECT * FROM users ");
		
		$sql->execute();

		$result = $sql;
		echo '<pre> $sql:<br/>';
		print_r($result);

		$result = $sql->get_result();
		echo '<pre> $sql->get_result():<br/>';
		print_r($result);

		if ($result->num_rows > 0) {
			# code...
			echo '$result->fetch_assoc():';
			while ($rows = $result->fetch_assoc()) {
				# code...

				echo "{$rows['name']} ---- {$rows['number']} <br/>";
			}
		}

	// $sql->close();
	// $conn->close();
echo "<hr/>";

// 4. get_result() vs bind_result()
/*
	bind_result() is use for fetch few rows from table
		$sql->bind_result($id,$name);
		while ($sql->fetch())
	get_result() is use for fetch all rows from table
*/
	 $name = 'partha';
	 $sql = $conn->prepare("SELECT id,name FROM users WHERE name LIKE ?");

		$sql->bind_param('s',$name);
		$sql->execute();

		$sql->bind_result($id,$name);

		while ($sql->fetch()) {
			# code...

			echo "{$id} ---- {$name} <br/>";
		}

	// $sql->close();
	// $conn->close();
echo "<hr/>";