<?php
	
	$id = $_POST['number'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	
	require_once "../01.introduction/db_config.php";

	$db = new database;

	try{

		$sql = $db->conn->prepare("UPDATE personal SET `name`='{$name}',`age`={$age},`gender`='{$gender}',`phone`='{$phone}',`city`=1 WHERE id = {$id};");
		$sql->execute();

		echo $db->conn->lastInsertId() . " : Data was successfully inserted.";

	}catch( Exception $e ){
		echo "update-Error: ".$e->getLine()." = ".$e->getMessage();
	}