<?php
## Date: 21-03-21
### TOPIC NAME: PHP MySQLi PDO ###

/*
	Remember: Always use three step to connection between php & database
	Step 1: Make a connection
	Step 2: Run the given query
	Step 3: Fetch the data
	Step 4: close the connection

	1. PDO
		1.1 Make a connection
				$host = "mysql:host=localhost;dbname=e_store";
				$user = 'root';
				$password = '';
				$conn = new PDO($host,$user,$password);

		1.2 Run the given query
				$sql = $conn->prepare('select * from users');
				$sql->execute();
				while ($row = $sql->fetch())


		1.3 Fetch number of rows
				$sql->rowCount();
				
		1.4 Fetch the data
			$sql->fetch(PDO::FETCH_ASSOC)
				PDO::FETCH_ASSOC
				PDO::FETCH_NUM
				PDO::FETCH_BOTH
				PDO::FETCH_OBJ
			$sql->fetchAll(PDO::FETCH_ASSOC)

		1.5 Error Exception handling
			For database connection use PDOException
				catch(PDOException $e){
					echo $e->getMessage();
				}
			For SQL error errorInfo()
				$error = $sql->errorInfo();

			for all error in one exception
				try{
					$error = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];
					$conn = new PDO($servername,$username,$password,$error);
				}
				catch(Exception $e){
					echo "Error: {$e->getMessage()}";
				}

		1.6 Close the connection
				$conn = NULL;

	2. PDO prepare() function using binding data
		2.1 $sql = $conn->prepare("SELECT * FROM users WHERE name = ? AND password = ? ");
			$sql->bindparam('no of data',$user,data_type);
				data_type: 
					string - PDO::PARAM_STR
					int    - PDO::PARAM_INT
				blob-text  - PDO::PARAM_LOB
					boolean- PDO::PARAM_BOOL
					null   - PDO::PARAM_NULL
				example:
					$sql->bindparam(1,$user,PDO::PARAM_STR);
					$sql->bindparam(2,$pass,PDO::PARAM_STR);
			$sql->execute();
			$result = $sql->fetch_all(PDO::FETCH_ASSOC);

		2.2	another binding process with name and array in execute method:
			$sql = $conn->prepare("SELECT * FROM users WHERE name = :name AND password = :password ");
			$arr = array(':name'=>$user,':password'=>$pass);
			$sql->execute($arr);
			$result = $sql->fetch_all(PDO::FETCH_ASSOC);

	3. PDO Advance Fetch Styles
		PDO::FETCH_COLUMN
		PDO::FETCH_GROUP
		PDO::FETCH_UNIQUE
		PDO::FETCH_KEY_PAIR
		PDO::FETCH_CLASS

	4. PDO Methods
		rowCount()
		lastInsertId()
	
	5. PDO Transaction
		$conn->beginTransaction();
		$conn->commit();
		$conn->rollback();

	6. PDO Bind Methods
		bindParam()
		bindValue() 
		bindColumn()
*/

// 1. PDO
// 		1.1 Make a connection
	
		# config-info
	try{
		$host = "mysql:host=localhost;dbname=e_store";
		$user = 'root';
		$password = '';

		# connect through function with return
		$conn = new PDO($host,$user,$password);
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	

	// if ($conn->connect_error) {
	// 	# code...
	// 	die("Connect Failed: {$conn->connect_error}");
	// }

echo "<hr/>";
// 1.2 Run the given query
	// query
	$sql = $conn->prepare('select * from users');
	$sql->execute();

	echo "<table border=1 cellpadding=5>";
		// fetch the data in row manner
		while ($row = $sql->fetch()) {
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
	
	// close the connection
	// $conn = null;

echo "<hr/>";

// 1.4 Fetch the data
	$sql = $conn->prepare('select * from users');
	$sql->execute();

		// fetch the data in row manner
		while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
			# code...
			// echo '$row: <pre>';
			// print_r($row);

			echo "{$row->id} ---- {$row->name} ---- {$row->number} ---- {$row->email} <br/>";
			
		}

	echo "<fieldset>";
		echo "<legend> fetchAll(PDO::FETCH_OBJ) </legend>";
		$sql_1 = $conn->prepare('select * from users');
		$sql_1->execute();
		$result = $sql_1->fetchAll(PDO::FETCH_OBJ);

		if (count($result) > 0) {
			# code...
			foreach ($result as $key => $row) {
				# code...
				echo "{$row->id} ---- {$row->name} ---- {$row->number} ---- {$row->email} <br/>";
			}
		}
	echo "</fieldset>";


	
	// close the connection
	// $conn = null;

echo "<hr/>";
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

		$sql = $conn->prepare("SELECT * FROM users WHERE name = :n AND password = :p ");
		
		// $sql->bindparam(':n',$user,PDO::PARAM_STR);
		// $sql->bindparam(':p',$pass,PDO::PARAM_STR);

		// Without using bindparam() method bind the data through execute() method
		$arr = array(':n' => $user, ':p' => $pass);
		$sql->execute($arr);

		$result = $sql->fetchAll(PDO::FETCH_OBJ);
		// echo "<pre>";
		// print_r($result);

		if (count($result) > 0) {
			# code...
			foreach ($result as $row) {
				# code...
				echo "{$row->id} ---- {$row->name} ---- {$row->password} ---- {$row->email} <br/>";
				echo "<script> alert('You are logged in.'); </script>";
			}
			
			
		}
	}

	// close the connection
	// $conn = null;

echo "<hr/>";
// 3. PDO Advance Fetch Styles
	/*
		PDO::FETCH_COLUMN
		PDO::FETCH_GROUP
		PDO::FETCH_UNIQUE
		PDO::FETCH_KEY_PAIR
		PDO::FETCH_CLASS
	*/

	// 3.1 PDO::FETCH_COLUMN
		/*
			fetch the entire column of index number
			in users table 0 means id
							1 means name
					$result = $sql->fetchAll(PDO::FETCH_COLUMN,0);	
					$result = $sql->fetchAll(PDO::FETCH_COLUMN,1);	
		*/
	$sql = $conn->prepare('select * from users WHERE id < 12');
	$sql->execute();

	$result = $sql->fetchAll(PDO::FETCH_COLUMN,1);

		echo '$result: <pre>';
		print_r($result);
	
	// close the connection
	// $conn = null;

echo "<hr/>";
	// 3.1 PDO::FETCH_GROUP
		/*
			fetch the entire data by grouping sql statement of 1st given column like number is in below sql statement
				$sql = $conn->prepare('select number,id,name,email from users WHERE id < 12');
				$sql->execute();

				$result = $sql->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);
					use pipe | symbol for FETCH_GROUP data furthure filter to FETCH_ASSOC
		*/
	$sql = $conn->prepare('select number,id,name,email from users WHERE id < 12');
	$sql->execute();

	$result = $sql->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);

		echo '$result: <pre>';
		print_r($result);
	
	// close the connection
	// $conn = null;

echo "<hr/>";
// 3.1 PDO::FETCH_UNIQUE
		/*
			fetch the unique data by sql statement of 1st given column like number is in below sql statement
				$sql = $conn->prepare('select number,id,name,email from users WHERE id < 12');
				$sql->execute();

				$result = $sql->fetchAll(PDO::FETCH_UNIQUE | PDO::FETCH_ASSOC);
					use pipe | symbol for FETCH_UNIQUE data furthure filter to FETCH_ASSOC
		*/
	$sql = $conn->prepare('select number,id,name,email from users WHERE id < 12');
	$sql->execute();

	$result = $sql->fetchAll(PDO::FETCH_UNIQUE | PDO::FETCH_ASSOC);

		echo '$result: <pre>';
		print_r($result);
	
	// close the connection
	// $conn = null;

echo "<hr/>";
// 3.1 PDO::FETCH_KEY_PAIR
		/*
			fetch the data of key value pair by sql statement of 1st given column is key and 2nd given column is value 
			like 1st=name and 2nd=number are in below sql statement
				$sql = $conn->prepare('select name,number from users WHERE id < 12');
				$sql->execute();

				$result = $sql->fetchAll(PDO::FETCH_KEY_PAIR);
					
		*/
	$sql = $conn->prepare('select name,number from users WHERE id < 12');
	$sql->execute();

	$result = $sql->fetchAll(PDO::FETCH_KEY_PAIR);

		echo '$result: <pre>';
		print_r($result);
	
	// close the connection
	// $conn = null;

echo "<hr/>";
// 3.1 PDO::FETCH_CLASS
		/*
		PDO::FETCH_CLASS is same as PDO::FETCH_OBJ	
			fetch the data of calss object manner
				$sql = $conn->prepare('select name,number from users WHERE id < 12');
				$sql->execute();

				$result = $sql->fetchAll(PDO::FETCH_CLASS);
					
		*/
	$sql = $conn->prepare('select name,number from users WHERE id < 12');
	$sql->execute();

	$result = $sql->fetchAll(PDO::FETCH_CLASS);

		echo '$result: <pre>';
		print_r($result);
	
	// close the connection
	// $conn = null;

echo "<hr/>";

// 4. PDO Methods
	/*
		rowCount()
			$sql->rowCount();

		lastInsertId()
			$conn->lastInsertId();
	*/

	$sql = $conn->prepare('select * from users WHERE id < 12');
	$sql->execute();

	echo $sql->rowCount();
	$result = $sql->fetchAll(PDO::FETCH_CLASS);

		// echo '$result: <pre>';
		// print_r($result);
	
	// close the connection
	// $conn = null;

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

		try{
			$sql = $conn->prepare("INSERT1 INTO users (name,password) values ( ?,? )");
		
			$arr = array($user,$pass);
			
			$sql->execute($arr);

			// for sql statement error
			$error = $sql->errorInfo();
			if ($error[1]) {
				# code...
				echo "Error: {$error[2]}";
			}else{
				$last_id = $conn->lastInsertId();

				if ($sql->rowCount() > 0) {
					# code...
					echo "{$last_id}";
					echo "<script> alert('Data inserted seccessfully'); </script>";
				}
			}

			
		}catch(PDOException $e){
			// for database error 
			echo "Error: {$e->getMessage()} line: {$e->getLine()}";
		}
		
	}

	// $sql->close();
	// $conn->close();

echo "<hr/>";

// 5. PDO Transaction
	/*
		It means you can rollback or commit your query from database.
		status: beginTransaction(): To open the feature, because database has auto save feature and we can not rollback it
				commit(): if every query run successfully, then save permanetly.
				rollback(): if every query is not run properly and have some issue then rollback that opration.

		Syntax:
				try{
					$conn = new PDO($db_name, Username, password);
					$conn->beginTransaction();
					INSERT COMMAND
					UPDATE COMMAND

					$conn->commit();
				}catch(PDOException $e){
					$conn->rollback();
					echo $e->getMessage();
				}
	*/
	try{
		$servername = 'mysql:host=localhost;dbname=e_store;';
		$username = 'root';
		$password = '';
		$error = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

		$conn = new PDO($servername,$username,$password,$error);

		$conn->beginTransaction();

		$sql1 = $conn->prepare("INSERT INTO users (name,number,email) values (?,?,?)");
		$sql2 = $conn->prepare("UPDATE1 users set password = ? WHERE name = 'sipu' ");

		$sql1->execute(['sipu',123456,'sipu@gmail.com']);
		$sql2->execute(['password']);

		$conn->commit();
	}
	catch(Exception $e){
		$conn->rollback();
		echo "Error: {$e->getMessage()}";
	}
echo "<hr/>";

// 6. PDO Bind Methods
	/*
		bindParam()
		bindValue() 
			both are used for bind data to place holder of sql statement.

		bindColumn() 
			it is use to bind our output data from sql statement. 
	*/
	try{
		$servername = 'mysql:host=localhost;dbname=e_store;';
		$username = 'root';
		$password = '';
		$error = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

		$conn = new PDO($servername,$username,$password,$error);

		$conn->beginTransaction();

		$sql = $conn->prepare("SELECT name,number FROM users");

		$sql->execute();
		$sql->bindColumn('name', $name);
		$sql->bindColumn('number', $number);

		while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			# code...
			echo "Name: {$name} ---- Number: {$number} <br/>";
		}

		$conn->commit();
	}
	catch(Exception $e){
		$conn->rollback();
		echo "Error: {$e->getMessage()}";
	}
echo "<hr/>";