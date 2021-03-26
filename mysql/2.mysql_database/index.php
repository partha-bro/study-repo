<?php
### TOPIC NAME: MySQL Database Part-1 ###
/*
	1. Connect to Database
		1.1 connect through function with return
		1.2 connect through class
	2. show tables from database
	3. Create Table with auto increment using primary key
	4. Insert data
	5. Constraints
	6. Insert data using constraint
	7. Display data
	8. Conditional base
		=  				
		>				
		<			
		>=			
		<=			
		<> or !=	
		BETWEEN 	
		LIKE 			
		IN 
	9. Regular Expression 
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
		echo "Connection-Error: "."Line: ".$e->getLine()." ".$e->getMessage();
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
		echo "Show-tables-Error: "."Line: ".$e->getLine()." ".$e->getMessage();
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
			echo "Error: "."Line: ".$e->getLine()." ".$e->getMessage();
		}
	*/
echo "<hr/>";

// 4. Insert data
	/*
		syntax: single data insert
					INSERT INTO users (`name`,`email`,`phone`)
						values ("Arjun","Arjun@hotmail.com","7298315486");
				multiple data insert
					INSERT INTO users (`name`,`email`,`phone`)
						values 	("Arjun","Arjun@hotmail.com","7298315486"),
								("Ram","ram@hotmail.com","7298315486"),
								("Sita","sita@hotmail.com","7298315486"),
								("Hari","hari@hotmail.com","7298315486");
	
	*/
	try{

		$conn->beginTransaction();
		$sql = $conn->prepare('INSERT INTO users (`name`,`email`,`phone`)
											values ("Arjun","Arjun@hotmail.com","7298315486")
								');
		if($sql->execute()){
			echo "Data is inserted successfully";
		}else{
			echo "Data is not inserted successfully";
		}
		$conn->rollback();
	}catch( PDOException $e ){
		echo "Insert-Error: "."Line: ".$e->getLine()." ".$e->getMessage();
	}
echo "<hr/>";

// 5. Constraints
	/*	
		It means the restriction of input data from database.
		List of Constraints
			NOT NULL: The data of column is not empty.
			UNIQUE: Don't have duplicate value
			DEFAULT: If developer can not input data then autometically insert default value
			CHECK: check the condition using this constraints
			FOREIGN KEY: another table of primary key
			PRIMARY KEY
	*/

	try{
		$sql = $conn->prepare('CREATE TABLE personal 
					(id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
					name VARCHAR(50) NOT NULL,
					age int NOT NULL CHECK (age>=18),
					gender VARCHAR(1) NOT NULL,
					phone VARCHAR(10) NOT NULL UNIQUE,
					city VARCHAR(50) NOT NULL DEFAULT "puri")
					');
		if($sql->execute()){
			echo 'personal table created.';
		}else{
			echo 'personal table is not created.';
		}

		
	}catch( PDOException $e){
		echo "Use-Constraints-Error: "."Line: ".$e->getLine()." ".$e->getMessage();
	}	
echo "<hr/>";

// 6. Insert data using constraint
	try{
		$sql = $conn->prepare(
						'INSERT INTO personal ( `name`,`age`,`gender`,`phone` )
								values  ( "Ram",11,"M","1478523699" ),
										( "Sita",18,"F","9632587412" ),
										( "Hari",19,"M","1596324785" )
						');

		if($sql->execute()){
			echo 'personal data is inserted.';
		}else{
			echo 'personal data is not inserted.';
		}

	}catch( PDOException $e){
		echo "Insert-Constraints-Error: "."Line: ".$e->getLine()." ".$e->getMessage();
	}	
echo "<hr/>";

// 7. Display data
	/*
		SELECT:
				All data:   	SELECT * FROM personal;
				Custom data:	SELECT name,city FROM personal;
		
	*/

	try{
		$sql = $conn->prepare('SELECT * FROM personal');

		$sql->execute();

		if ($sql->rowCount()) {
			# code...
			echo "Personal Table Data: <br/>";
			while ($value = $sql->fetch(PDO::FETCH_ASSOC)) {
				# code...

				echo "Id - {$value['id']} | Name - {$value['name']} | Age - {$value['age']} | Gender - {$value['gender']} | Phone - {$value['phone']} | City - {$value['city']} <br/>";
			}
		}

	}catch( PDOException $e){
		echo "Select-Error: "."Line: ".$e->getLine()." => ".$e->getMessage();
	}	
echo "<hr/>";

// 8. Conditional base
/*
		Conditional base in below:
				=  				Equal
				>				Greater than
				<				Less than
				>=				Greater than equal to
				<=				Less than equal to
				<> or !=		Not equal to
				BETWEEN 		range
				LIKE 			Search for a pattern
				IN 				To specify multiple possible values for a column
		WHERE:
				SELECT * FROM personal WHERE age>=18;
		AND:
				SELECT * FROM personal WHERE age>17 AND age<25 AND gender='M';
		OR:
				SELECT * FROM personal WHERE age=18 OR age=20;
				SELECT * FROM personal WHERE (age=18 OR age=20) AND gender='F';
		BETWEEN:
				SELECT * FROM personal WHERE age BETWEEN 11 AND 18;
				SELECT * FROM personal WHERE age NOT BETWEEN 11 AND 18;
		LIKE:
				SELECT * FROM personal WHERE phone LIKE '%85_3%';
				SELECT * FROM personal WHERE phone NOT LIKE '%85_3%';

			WildCard pattern:

					LIKE 'a%'	-	start with 'a'
					LIKE '%a'	-	end with 'a'
					LIKE '%am%' -	have 'am' in any position
					LIKE 'a%m'	-	start with 'a' and ends with 'm'
					LIKE '_a%'	-	'a' in the second position
					LIKE '__a%' -	'a' in the third position
					LIKE '_oy'  -	'o' in the second and 'y' in the third position
		IN:
				SELECT * FROM personal WHERE age IN (11,19); - those student age have 11 or 19
				SELECT * FROM personal WHERE age NOT IN (11,19);
	*/
// 9. Regular Expression 
	/*
		^			'^ra'						Beginning of string
		$			'an$'						End of string 
		[...]		'[rms]'						Any char listed between the square brackets
		^[...]		'[rms]'						begins with any char listed between the square brackets
		[a-z]		'[a-h]e'					Match with in the range
		p1|p2|p3 	'tom|harry|stephen'			match any of the patterns

		syntax:
			SELECT * FROM personal WHERE name REGEXP '^R|i$';
			SELECT * FROM personal WHERE name REGEXP '[it]';
			SELECT * FROM personal WHERE name REGEXP '[s-z]';

	*/