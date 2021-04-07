<?php

	/**
	 * 
	 */
	class Database
	{
		private $webhost = 'mysql';
		private $hostname = 'localhost';
		private $username = 'root';
		private $password = '';
		private $database = 'testing';

		private $error = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];
		private $servername = '';

		public $conn = null;

		function __construct()
		{
			# code...
			$this->servername = $this->webhost.":host=".$this->hostname.";dbname=".$this->database.";";
			// echo $this->servername;

			try{
				if ($this->conn == null) {
					# code...
					$this->conn = new PDO($this->servername,$this->username,$this->password,$this->error);
				}else{
					echo "Connection is exists.";
				}
				
			}catch( Exception $e ){
				echo "Connection-error: ".$e->getLine()."=>".$e->getMessage();
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