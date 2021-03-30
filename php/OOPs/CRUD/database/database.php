<?php

/**
 * 
 */
class database
{
	private $hostname = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'testing';
	private $error = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

	private $servername;

	private $conn = null; //private because all opration is done in this class.
	// connection establish
	function __construct()
	{
		$this->servername = "mysql:host=".$this->hostname.";dbname=".$this->database."";
		# code...
		if ($this->conn == null) {
			# code...
			try{
				$this->conn = new PDO( $this->servername,$this->username,$this->password,$this->error);

			}catch( PDOException $e ){
				echo "Connection-Error: ".$e->getLine()." = ".$e->getMessage();
			}
			
		}

	}

	// insert data into database
	public function insert( $db_name,$param )
	{
		# step 1: it take two parameter one is table name and another is data array
		# step 2: check if table name is exist ibn database or not
		# step 3: convert array key to column name and array value to value of sql statement
		# step 4: execute the statement

		if ( $this->tableExists($db_name) ) {
			# code...
			$column_key = implode(',', array_keys($param));
			$column_value = implode("','", $param);
			// echo "$column_key - $column_value";
			try{
				$this->conn->beginTransaction();
				$sql_command = "INSERT INTO $db_name ($column_key) VALUES ('$column_value')";
				$sql = $this->conn->prepare( $sql_command );
				$sql->execute();
				$last_id = $this->conn->lastInsertId();
				if ( $sql->rowCount() ) {
					# code...
					$this->conn->commit();
					return $last_id." Data is inserted.";
				}else{
					return "Data is not inserted.";
				}

			}catch( PDOException $e){
				echo "Insert-Error: ".$e->getLine()." = ".$e->getMessage();
			}
		}else{
			$this->conn->rollback();
			return "$db_name: table is not present in the database.";
		}


	}

	// update/modify data into database
	public function update()
	{
		# code...
	}

	// delete data into database
	public function delete()
	{
		# code...
	}

	// select data into database
	public function select()
	{
		# code...
	}

	// verify the table in database
	private function tableExists( $table ){
		try{
			$sql_command = "SHOW TABLES FROM {$this->database} LIKE '{$table}'";
			$sql = $this->conn->prepare( $sql_command );
			$sql->execute();

			if ( $sql->rowCount() == 1 ) {
				# code...
				return true;
			}else{
				return false;
			}
		}catch( PDOException $e){
			echo "Table-Exist-Error: ".$e->getLine()." = ".$e->getMessage();
		}
		
	}

	// close the connection
	public function __destruct()
	{
		# code...
		if ($this->conn != null) {
			# code...
			$this->conn = null;
		}else{
			echo "Connection not close.";
		}
	}
} //class close