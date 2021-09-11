<?php

	require_once "../01.introduction/db_config.php";

	$db = new database;

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$city = $_POST['city'];

$arr = [$name,$age,$gender,$phone,$city];
try{
	$sql = $db->conn->prepare('INSERT INTO personal (name,age,gender,phone,city) values (?,?,?,?,?);');

	$sql->execute($arr);
	$insert_id = $db->conn->lastInsertId();
	if ($sql->rowCount()) {
		# code...
		echo $insert_id." Data inserted successfully.";
	}else{
		echo "Some Error happens";
	}
}catch( Exception $e ){
	echo "Serialize-data-Error: ".$e->getLine()." = ".$e->getMessage();
}
