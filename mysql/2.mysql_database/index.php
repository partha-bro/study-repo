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
		NOT NULL
		UNIQUE
		DEFAULT
		CHECK
		FOREIGN KEY
		PRIMARY KEY
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
	10. ORDER BY
	11. DISTINCT
	12. IS NULL & IS NOT NULL
	13. LIMIT & OFFSET
	14. Aggregate function
			COUNT()
			MAX()
			MIN()
			SUM()
			AVG()
	15. Update data
	16. Delete
	17. Commit & Rollback
	18. Primary key
	19. Foreign key
	20. JOINS
			INNER JOIN
			LEFT JOIN
			RIGHT JOIN
			CROSS JOIN
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
// 10. ORDER BY
	/*
		ORDER BY age ASC
		ORDER BY age DESC
	*/
	$sql = $conn->prepare('SELECT * FROM personal ORDER BY age ASC');
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount()> 0) {
		# code...
		foreach ($result as $key => $value) {
			# code...
			echo "Id - {$value['id']} | Name - {$value['name']} | Age - {$value['age']} | Gender - {$value['gender']} | Phone - {$value['phone']} | City - {$value['city']} <br/>";
		}

	}
echo "===============================<br/>";
	$sql = $conn->prepare('SELECT * FROM personal WHERE gender="M" ORDER BY age DESC');
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount()> 0) {
		# code...
		foreach ($result as $key => $value) {
			# code...
			echo "Id - {$value['id']} | Name - {$value['name']} | Age - {$value['age']} | Gender - {$value['gender']} | Phone - {$value['phone']} | City - {$value['city']} <br/>";
		}

	}
echo "<hr/>";

// 11. DISTINCT
	/*
		It means no duplicate value of perticular column.
	*/
	$sql = $conn->prepare('SELECT DISTINCT city FROM personal');
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount()> 0) {
		# code...
		foreach ($result as $key => $value) {
			# code...
			echo " City - {$value['city']} <br/>";
		}

	}
echo "<hr/>";

// 12. IS NULL & IS NOT NULL
	/*
		IS : it is a oprator.
		NULL : it is null/empty value.
	*/
	$sql = $conn->prepare('SELECT * FROM personal WHERE phone IS NULL');
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount()> 0) {
		# code...
		foreach ($result as $key => $value) {
			# code...
			echo "Id - {$value['id']} | Name - {$value['name']} | Age - {$value['age']} | Gender - {$value['gender']} | Phone - {$value['phone']} | City - {$value['city']} <br/>";
		}

	}
echo "===============================<br/>";
	$sql = $conn->prepare('SELECT * FROM personal WHERE phone IS NOT NULL');
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount()> 0) {
		# code...
		foreach ($result as $key => $value) {
			# code...
			echo "Id - {$value['id']} | Name - {$value['name']} | Age - {$value['age']} | Gender - {$value['gender']} | Phone - {$value['phone']} | City - {$value['city']} <br/>";
		}

	}
echo "<hr/>";

// 13. LIMIT & OFFSET
	/*
		LIMIT use for limit data we can access	
		OFFSET is use for starting number and number to haw many records.
	*/
	$sql = $conn->prepare('SELECT * FROM personal WHERE city="puri" LIMIT 2');
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount()> 0) {
		# code...
		foreach ($result as $key => $value) {
			# code...
			echo "Id - {$value['id']} | Name - {$value['name']} | Age - {$value['age']} | Gender - {$value['gender']} | Phone - {$value['phone']} | City - {$value['city']} <br/>";
		}

	}
echo "===============================<br/>";
	$sql = $conn->prepare('SELECT * FROM personal WHERE city="puri" LIMIT 2,2');
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount()> 0) {
		# code...
		foreach ($result as $key => $value) {
			# code...
			echo "Id - {$value['id']} | Name - {$value['name']} | Age - {$value['age']} | Gender - {$value['gender']} | Phone - {$value['phone']} | City - {$value['city']} <br/>";
		}

	}
echo "<hr/>";

// 14. Aggregate function
	/*
		It means predefined function to perforn certurn task and fetch records.
			COUNT()
			MAX()
			MIN()
			SUM()
			AVG()
	*/
	$sql = $conn->prepare('SELECT COUNT(age) as no FROM personal');
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount()> 0) {
		# code...
		foreach ($result as $key => $value) {
			# code...
			echo "No of student - {$value['no']} <br/>";
		}

	}
	echo "===============================<br/>";
	$sql = $conn->prepare('SELECT MAX(age) as no FROM personal');
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount()> 0) {
		# code...
		foreach ($result as $key => $value) {
			# code...
			echo "Maximum age of student - {$value['no']} <br/>";
		}

	}
	echo "===============================<br/>";
	$sql = $conn->prepare('SELECT MIN(age) as no FROM personal');
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount()> 0) {
		# code...
		foreach ($result as $key => $value) {
			# code...
			echo "Minimum age of student - {$value['no']} <br/>";
		}

	}
	echo "===============================<br/>";
	$sql = $conn->prepare('SELECT SUM(age) as no FROM personal');
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount()> 0) {
		# code...
		foreach ($result as $key => $value) {
			# code...
			echo "SUM age of student - {$value['no']} <br/>";
		}

	}
	echo "===============================<br/>";
	$sql = $conn->prepare('SELECT AVG(age) as no FROM personal');
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount()> 0) {
		# code...
		foreach ($result as $key => $value) {
			# code...
			echo "Avrage age of student - {$value['no']} <br/>";
		}

	}
echo "<hr/>";

// 15. Update data
	/*
	syntax: Single data
				UPDATE table_namw SET column_1=value_1,column_2=value_2,column_3=value_3
				WHERE column = value
			Multi data
				UPDATE table_namw SET column_1=value_1,column_2=value_2,column_3=value_3
				WHERE column IN (start row,end row)

	*/
try{
	$age = 15;
	$sql = $conn->prepare('UPDATE personal SET age=? WHERE id=1');
	// $sql->execute(['15']);

	if ($sql->execute([$age])) {
		# code...
		echo "Data update successfully. <br/>";
	}else{
		echo "Data not update successfully. <br/>";
	}

}catch( PDOException $e){
	echo "UPDATE-ERROR: ".$e->getLine()." = ".$e->getMessage();
}
	
echo "<hr/>";

// 16. DELETE
	/*
	syntax: Single data
				DELETE FROM table_name WHERE column = value;
			Multi data
				DELETE FROM table_name;

	*/
// 17. COMMIT & ROLLBACK
	/*
		COMMIT for save the sql command.
		ROLLBACK for auto backup/reverse sql command before COMMIT

		these are use only in 3 sql command like
										INSERT
										UPDATE
										DELETE
	*/
	try{
		$conn->beginTransaction();

	$sql_command = 'DELETE FROM personal WHERE id=34 ;';
	$sql_command .= 'UPDATE personal SET age=65 WHERE id=1 ;';
	$sql = $conn->prepare($sql_command);
	// $sql->execute(['15']);

	if ($sql->execute()) {
		# code...
		echo "Data update successfully with rollback PDO function. <br/>";
	}else{
		echo "Data not update successfully with rollback PDO function. <br/>";
	}

		$conn->rollback();

}catch( PDOException $e ){
	echo "UPDATE-ERROR: ".$e->getLine()." = ".$e->getMessage();
}
	
echo "<hr/>";

// 18. Primary key
	/*
		1. Primary key always has unique data.
		2. A primary key cannot have null value
		3. A table can contain only one primary key constraint.

		syntax: CREATE TABLE personal(
					id INT AUTO_INCREMENT PRIMARY KEY,
					name VARCHAR(50) NOT NULL,
					age int NOT NULL CHECK(age>17),
					phone VARCHAR(50) DEFAULT NULL,
					city VARCHAR(50) DEFAULT 'Puri'
				);

				CREATE TABLE personal(
					id INT AUTO_INCREMENT,
					name VARCHAR(50) NOT NULL,
					age int NOT NULL,
					phone VARCHAR(50) DEFAULT NULL,
					city VARCHAR(50) DEFAULT 'Puri',
					PRIMARY KEY(id)
				);
	*/
// 19. Foreign key
	/*
		1. A foreign key is a key used to link two tables together.
		2. A foreign key in one table used to point Primary key in another table.
		
	When create foreign key for 1st time
		CREATE TABLE personal(
					id INT AUTO_INCREMENT,
					name VARCHAR(50) NOT NULL,
					age int NOT NULL,
					phone VARCHAR(50) DEFAULT NULL,
					city INT NOT NULL,
					PRIMARY KEY(id),
					FOREIGN KEY (city) REFERENCES City (cid)
				);
		HERE: city is foreign key of personal table
				City is another table having cid primary key

		When create foreign key for already created table.
			ALTER TABLE table_name ADD FOREIGN KEY (city) REFERENCES City (cid);
	*/
try{
	// $conn->beginTransaction();

	$sql_command = 'SELECT * from personal 
					INNER JOIN city ON personal.city = city.cid';
	$sql = $conn->prepare($sql_command);
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount()) {
		foreach ($result as $key => $value) {
			# code...
			echo "Id - {$value['id']} | Name - {$value['name']} | Age - {$value['age']} | Gender - {$value['gender']} | Phone - {$value['phone']} | City - {$value['city']} | City_name - {$value['cname']} <br/>";
		}
	}
		// $conn->rollback();

}catch( PDOException $e ){
	echo "UPDATE-ERROR: ".$e->getLine()." = ".$e->getMessage();
}
echo "<hr/>";

// 20. JOINS
	/*
		Types of joins in mysql
			INNER JOIN
			LEFT JOIN
			RIGHT JOIN
			CROSS JOIN
	*/
// INNER JOIN
	/*
		it fetch all data that is common in 2 tables.
		syntax:  SELECT * from personal p
					INNER JOIN city c ON p.city = c.cid
	*/
try{
	$sql_command = 'SELECT * from personal p
					INNER JOIN city c ON p.city = c.cid';
	$sql = $conn->prepare($sql_command);
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount()) {
		foreach ($result as $key => $value) {
			# code...
			echo "Id - {$value['id']} | Name - {$value['name']} | Age - {$value['age']} | Gender - {$value['gender']} | Phone - {$value['phone']} | City_name - {$value['cname']} <br/>";
		}
	}

}catch( PDOException $e ){
	echo "innerjoin-ERROR: ".$e->getLine()." = ".$e->getMessage();
}
echo "<hr/>";

// LEFT JOIN & RIGHT JOIN
	/*
		it fetch all data of left table and right table data common in 2 tables.
		syntax:  SELECT * from personal p
					LEFT JOIN city c ON p.city = c.cid

		it fetch all data of right table and left table data common in 2 tables.
				SELECT * from personal p
					RIGHT JOIN city c ON p.city = c.cid
	*/
try{
	$sql_command = 'SELECT * from personal p
					RIGHT JOIN city c ON p.city = c.cid';
	$sql = $conn->prepare($sql_command);
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount()) {
		foreach ($result as $key => $value) {
			# code...
			echo "Id - {$value['id']} | Name - {$value['name']} | Age - {$value['age']} | Gender - {$value['gender']} | Phone - {$value['phone']} | City_name - {$value['cname']} <br/>";
		}
	}

}catch( PDOException $e ){
	echo "innerjoin-ERROR: ".$e->getLine()." = ".$e->getMessage();
}
echo "<hr/>";

// CROSS JOIN
	/*
		it fetch all data of left table and right table data. like 
		1st row of left data join to 1st row of right data,
		1st row of left data join to 2nd row of right data,
		2nd row of left data join to 1st row of right data, etc.

		[4 row of left data] cross join  [4 row of right data] = 4X4 = 16 combination of total data 

		syntax:  SELECT * from personal p
					CROSS JOIN city c ON p.city = c.cid
	*/
try{
	$sql_command = 'SELECT * from personal p
					CROSS JOIN city';
	$sql = $conn->prepare($sql_command);
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount()) {
		foreach ($result as $key => $value) {
			# code...
			echo "Id - {$value['id']} | Name - {$value['name']} | Age - {$value['age']} | Gender - {$value['gender']} | Phone - {$value['phone']} | City_name - {$value['cname']} <br/>";
		}
	}

}catch( PDOException $e ){
	echo "innerjoin-ERROR: ".$e->getLine()." = ".$e->getMessage();
}
echo "<hr/>";