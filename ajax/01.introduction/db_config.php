<?php

	/**
	 * 
	 */
	class database
	{
		
		private $hostname = 'localhost';
		private $username = 'root';
		private $password = '';
		private $database = 'student';
		private $error = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

		private $servername;

		public $conn = null;
		public function __construct()
		{
			# code...
			$this->servername = "mysql:host=".$this->hostname.";dbname=".$this->database.";";
			if ($this->conn == null) {
				# code...
				
				try{
					$this->conn = new PDO($this->servername,$this->username,$this->password,$this->error);
					// echo "Connection successfully";
				}catch( PDOException $e ){
					echo "Connection-Error: ".$e->getLine()." = ".$e->getMessage();
				}
				
			}
		}

		public function __destruct()
		{
			# code...
			if ($this->conn) {
				# code...
				$this->conn = null;
			}
		}
	}