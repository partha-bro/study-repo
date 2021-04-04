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
					return $last_id." Data is inserted.<hr/>";
				}else{
					return "Data is not inserted.<hr/>";
				}

			}catch( PDOException $e){
				echo "Insert-Error: ".$e->getLine()." = ".$e->getMessage();
			}
		}else{
			$this->conn->rollback();
			return "$db_name: table is not present in the database.<hr/>";
		}


	}

	// update/modify data into database
	public function update( $db_name,$param,$where=null )
	{
		# code...
		if ($this->tableExists( $db_name )) {
			# code...
			$args = [];
			foreach ($param as $key => $value) {
				# code...
				$args[] = "$key = '$value'";
			}
			$str = implode(",", $args);

			$sql_command = "UPDATE $db_name SET $str";
			if ($where != null) {
				# code...
				$sql_command .= " WHERE $where";
			}
			$sql = $this->conn->prepare($sql_command);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				# code...
				return $sql->rowCount()." No. of  Data is updated.<hr/>";
			}else{
				return "Duplicate value occurs, so don't update it.<hr/>";
			}
		}else{
			return "$db_name: table is not present in the database.<hr/>";
		}
	}

	// delete data into database
	public function delete( $db_name, $where )
	{
		# code...
		if ($this->tableExists($db_name)) {
			# code...
			if (isset($where)) {
				# code...
				$sql_command = "DELETE FROM $db_name WHERE $where";
				$sql = $this->conn->prepare($sql_command);
				$sql->execute();

				if ( $sql->rowCount()) {
				# code...
					return $sql->rowCount()." No. of  Data is deleted.<hr/>";
				}else{
					return "No data is deleted.<hr/>";
				}
			}
		}else{
			return "$db_name: table is not present in the database.<hr/>";
		}
	}

	// select data into database
	public function select( $db_name )
	{
		# code...
		if ($this->tableExists($db_name)) {
			# code...
			$sql = $this->conn->prepare("SELECT * FROM $db_name");
			$sql->execute();
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			if ($sql->rowCount()) {
				# code...
				$output = '';
				foreach ($result as $key => $value) {
					# code...
					$output .= "id :".$value['id']." - name: ".$value['student_name']."<br>";
				}
				return $output."<hr/>";
			}else{
				return "0 Record.";
			}
		}else{
			return "$db_name: table is not present in the database.<hr/>";
		}
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