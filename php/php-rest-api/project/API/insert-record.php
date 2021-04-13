<?php

	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Access-Control-Allow-Methods,Content-Type,Authorization,X-Requested-With');

	$data = json_decode(file_get_contents('php://input'),true);
	$sname = $data['student_name'];
	$sage = $data['age'];
	$scity = $data['city'];

	include_once 'database/dbconfig.php';
	$db = new Database;

	try{
		$db->conn->beginTransaction();
		$sql = $db->conn->prepare('INSERT INTO student (student_name,age,city) VALUES (?,?,?)');
		
		if( $sql->execute( array($sname,$sage,$scity) ) ){
			$insert_id = $db->conn->lastInsertId();
			$db->conn->rollback();
			$message = "$insert_id id is inserted.";
			echo json_encode([ "message" => $message, "status" => true ]);
		}else{
			echo json_encode([ "message" => "No Record Insert!", "status" => false ]);
		}


	}catch( Exception $e ){
		$message =  "Insert-Error: ".$e->getLine() ." :: ".$e->getMessage();
		echo json_encode( [ "message"=> ".$message.", "status"=>false] );
	}