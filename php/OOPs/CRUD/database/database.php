<?php

/**
 * 
 */
class database
{
	// connection details
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
			} // end of try and catch block
			
		}

	}

	// insert data into database
	public function insert( $table,$param )
	{
		# step 1: it take two parameter one is table name and another is data array
		# step 2: check if table name is exist ibn database or not
		# step 3: convert array key to column name and array value to value of sql statement
		# step 4: execute the statement

		if ( $this->tableExists($table) ) {
			# code...
			$column_key = implode(',', array_keys($param));
			$column_value = implode("','", $param);
			// echo "$column_key - $column_value";
			try{
				$this->conn->beginTransaction();
				$sql_command = "INSERT INTO $table ($column_key) VALUES ('$column_value')";
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
			} // end of try and catch block
		}else{
			$this->conn->rollback();
			return "$table: table is not present in the database.<hr/>";
		} // end of tableExists condition


	}

	// update/modify data into database
	public function update( $table,$param,$where=null )
	{
		# code...
		if ($this->tableExists( $table )) {
			# code...
			try{
				$args = [];
				foreach ($param as $key => $value) {
					# code...
					$args[] = "$key = '$value'";
				}
				$str = implode(",", $args);

				$sql_command = "UPDATE $table SET $str";
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
			}catch( PDOException $e){
				echo "Insert-Error: ".$e->getLine()." = ".$e->getMessage();
			} // end of try and catch block
			
		}else{
			return "$table: table is not present in the database.<hr/>";
		} // end of tableExists condition
	}

	// delete data into database
	public function delete( $table, $where = null )
	{
		# code...
		if ($this->tableExists($table)) {
			# code...
			if (isset($where)) {
				# code...
				try{
					$sql_command = "DELETE FROM $table WHERE $where";
					$sql = $this->conn->prepare($sql_command);
					$sql->execute();

					if ( $sql->rowCount()) {
					# code...
						return $sql->rowCount()." No. of  Data is deleted.<hr/>";
					}else{
						return "No data is deleted.<hr/>";
					}
				}catch( PDOException $e){
					echo "Delete-Error: ".$e->getLine()." = ".$e->getMessage();
				} // end of try and catch block
				
			}else{
				return "Don't delete any data because you didn't give any condition.<hr/>";
			}
		}else{
			return "$table: table is not present in the database.<hr/>";
		} // end of tableExists condition
	}

	// select data into database
	public function select( $table, $rows="*", $join=null, $where=null, $order=null, $limit=null)
	{
		# code...
		if ($this->tableExists($table)) {
			# code...
			$sql_commad = "SELECT $rows FROM $table";

			if ($join != null) {
				# code... 
				$sql_commad .= " JOIN $join";
			}
			if ($where != null) {
				# code...
				$sql_commad .= " WHERE $where";
			}
			if ($order != null) {
				# code...
				$sql_commad .= " ORDER BY $order";
			}
			if ($limit != null) {
				# code...
				$sql_commad .= " LIMIT 0,$limit";
			}
			echo "<script> console.log(".$sql_commad."); </script>";
			return $this->sql($sql_commad);

		}else{
			return "$table: table is not present in the database.<hr/>";
		}
	}

	// Select sql with all data
	public function sql($sql_commad)
	{
		# code...
		try{
				$sql = $this->conn->prepare($sql_commad);
				$sql->execute();
				$result = $sql->fetchAll(PDO::FETCH_ASSOC);

				if ($sql->rowCount()) {
					# code...
					
					return print_r($result)."<hr/>";
				}else{
					return "0 Record.";
				}
			}catch( PDOException $e){
				echo "Select-Error: ".$e->getLine()." = ".$e->getMessage();
			} // end of try and catch block
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
		} // end of try and catch block
		
	} // end of tableExists function

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