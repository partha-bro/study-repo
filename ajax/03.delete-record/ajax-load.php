<?php
	
	$no = $_POST['number'];
	
	require_once "../01.introduction/db_config.php";

	$db = new database;

	try{
		$sql = $db->conn->prepare("DELETE FROM personal WHERE id={$no}");

		$sql->execute();

		echo "Data was successfully deleted.";

	}catch( Exception $e ){
		echo "Delete-Error: ".$e->getLine()." = ".$e->getMessage();
	}