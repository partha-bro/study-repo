<?php
### TOPIC NAME: MySQL Database Part-1 ###
/*
	1. Connect to Database
		1.1 connect through function with return
		1.2 connect through class
	2. show tables from database
	3. Create Table with auto increment using primary key
	4. Insert data

*/
// 1. Connect to Database
	/*
	NOTE: Don't chage parameter position, if you are change it then give error.
		Syntax: 
			mysqli_connect('host','user','password','database');
		in class:
			new mysqli('host','user','password','database');

	*/
# config-info
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'student';

	try{
		$servername = "mysql:host=".$hostname.";dbname=".$database.";";

		$error = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION );

		$conn = new PDO($servername,$username,$password,$error);

	}catch( PDOException $e){
		echo "Connection-Error: ".$e->getMessage();
	}
echo "<hr/>";
// 2. show tables from database
	try{
		$sql = $conn->prepare('show tables');
		$sql->execute();

		$result = $sql->fetchAll(PDO::FETCH_ASSOC);

		if ($sql->rowCount() > 0) {
					# code...
			foreach ($result as $key => $value) {
				# code...
				echo "<pre>";
				print_r($value);
			}
		}else{
			echo "0 Results";
		}		
	}catch( PDOException $e){
		echo "Show-tables-Error: ".$e->getMessage();
	}
echo "<hr/>";

// 3. Create Table with auto increment using primary key
	/*
	Syntax:
		try{
			$sql = $conn->prepare('CREATE TABLE users(
								id int(5) AUTO_INCREMENT PRIMARY KEY,
								name varchar(50),
								email varchar(50),
								phone int(12),
								date timestamp DEFAULT CURRENT_TIMESTAMP
							)');
			// $sql->execute();

			if ($sql->execute()) {
				# code...
				echo 'users table created.';
			}else{
				echo 'If exists, users table notcreated.';
			}
		}catch(PDOException $e){
			echo "Error: ".$e->getMessage();
		}
	*/
echo "<hr/>";

// 4. Insert data
	
	try{
		$sql = $conn->prepare('INSERT INTO users (`name`,`email`,`phone`)
											values ("Arjun","Arjun@hotmail.com","7298315486")
								');
		if($sql->execute()){
			echo "Data is inserted successfully";
		}else{
			echo "Data is not inserted successfully";
		}

	}catch( PDOException $e ){
		echo "Insert-Error: ".$e->getMessage();
	}
echo "<hr/>";

