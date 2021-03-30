# Syllabus

## Date: 15-03-21
### TOPIC NAME: PHP Development ###

	1. PHP Form Output and Validation                           
    	1.1 htmlspcialchars()
    	1.2 trim()
    	1.3 striplashes()
    	1.4 preg_match()
    2. Regular Expression							
    	2.1 preg_match()
    	2.1 preg_match_all()
	3. Change password of mysql in phpmyadmin

## Date: 15-03-21
### TOPIC NAME: MySQL Database ###

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

## Date: 17-03-21
### TOPIC NAME: MySQL Database Part-2 ###

	0. How to redirect another page
	1. How to Fetch data from database?
	2. How to Insert data from database?
	3. How to Delete data from database?
	4. How to Update data from database?
	5. How to get last id of insert data from database?
	6. How to executed multiple statement in one query?

## Date: 21-03-21
### TOPIC NAME: PHP MySQLi Procedural ###

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

## Date: 21-03-21
### TOPIC NAME: PHP MySQLi Object Oriented ###

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

## Date: 21-03-21
### TOPIC NAME: PHP MySQLi PDO ###

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

## Date: 18-03-21	
### TOPIC NAME: Project ###

	1. Basic Code
		1.1 Pass Value from Form on Same Page and Other Page
		1.2 PHP Condition with Using Form
		1.3 Use Square and SUM Function with Form
		1.4 Get value from links in PHP
		1.5 Work with PHP Form
	2. PHP - One Click Password Generator 
	3. Registration - Sign up Sing In Sign out --> i am not able to understand it.
		3.1 use class
		3.2 use try catch block
		3.3 use pdo class
		3.4 use session
		3.5 use mysql