<?php

	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Access-Control-Allow-Methods,content-type,Authorization,X-Requested-With');

	$data = $_GET['search'];

	include_once 'database/dbconfig.php';
	$db = new Database;

	try{
		$sql = $db->conn->prepare("SELECT * FROM student WHERE student_name LIKE '%{$data}%' ");
		$sql->execute();
		$result = $sql->fetchAll(PDO::FETCH_ASSOC);
		if ($sql->rowCount()) {
			# code...
			echo json_encode($result);
		}else{
			echo json_encode([ "message"=>"O Record", "status"=>false]);
		}
	}catch( Exception $e ){
		$message =  "Serch-Error: ".$e->getLine()." || ".$e->getMessage();
		echo json_encode([ "messsage"=>$message, "status"=>false ]);
	}