<?php

	/**
	  * 
	  */
	 class Database
	 {
	 	private $hosting = 'mysql';
	 	private $hostname = 'localhost';
	 	private $username = 'root';
	 	private $password = '';
	 	private $database = 'testing';
	 	private $error = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

	 	private $servername;
	 	public $conn = null;
	 	
	 	function __construct()
	 	{
	 		# code...
	 		try {
	 			
	 			$this->servername = $this->hosting.":host=".$this->hostname.";dbname=".$this->database;

	 			$this->conn = new PDO($this->servername,$this->username,$this->password,$this->error);
	 		} catch (Exception $e) {
	 			echo "Connection-Error: ".$e->getLine() ." :: ".$e->getMessage();
	 		}
	 	}
	 } 