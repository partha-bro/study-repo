<?php
	
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	
	require_once "../01.introduction/db_config.php";

	$db = new database;

	try{
		$sql = $db->conn->prepare("INSERT INTO personal (`name`,`age`,`gender`,`phone`,`city`) VALUES ('{$name}','{$age}','{$gender}','{$phone}',1);");

		$sql->execute();

		echo $db->conn->lastInsertId() . " : Data was successfully inserted.";

	}catch( Exception $e ){
		echo "Insert-Error: ".$e->getLine()." = ".$e->getMessage();
	}