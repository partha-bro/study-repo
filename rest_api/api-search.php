<?php

	header('Content-Type: Application/Json');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Access-Control-Allow-Methods,Content-Type,Authorization,X-Requested-With');

	$data = json_decode(file_get_contents('php://input'),true);
	$search = $data['search'];

	include_once 'database/dbconfig.php';
	$db = new Database;

	try{
		$sql = $db->conn->prepare("SELECT * FROM student WHERE student_name LIKE '%{$search}%' ");
		$sql->execute();
		$result = $sql->fetchAll(PDO::FETCH_ASSOC);
		if ($sql->rowCount()) {
			# code...
			echo json_encode($result);
		}else{
			echo json_encode( array('message' => 'No Record Found.', 'status' => false) );
		}
	}catch( Exception $e ){
		echo "Fetch-error: ".$e->getLine()."=>".$e->getMessage();
	}