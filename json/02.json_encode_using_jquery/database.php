<?php

/**
 * 
 */
class Database
{
	private $hostname = 'localhost';
	private $database = 'testing';
	private $username = 'root';
	private $password = '';
	private $error = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

	private $servername = '';

	public $conn = null;

	function __construct()
	{
		# code...
		$this->servername = "mysql:host=".$this->hostname.";dbname=".$this->database.";";

		if ($this->conn == null) {
			# code...
			try{
				$this->conn = new PDO($this->servername,$this->username,$this->password,$this->error);
			}catch( Exception $e ){
				echo "Connection-Error: ".$e->getMessage();
			}
			

		}else{
			echo "Connection is exists.";
		}
	}

	public function __destruct()
	{
		# code...
		if ($this->conn != null) {
			# code...
			$this->conn = null;
		}else{
			echo "Connection is exists.";
		}
	}
}