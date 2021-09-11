<?php

	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: PUT');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Access-Control-Allow-Methods,Content-Type,Authorization,X-Requested-With');

	$data = json_decode(file_get_contents('php://input'),true);
	$sid = $data['id'];
	$sname = $data['student_name'];
	$sage = $data['age'];
	$scity = $data['city'];

	include_once 'database/dbconfig.php';
	$db = new Database;

	try{
		// $db->conn->beginTransaction();
		$sql = $db->conn->prepare('UPDATE student SET student_name=?,age=?,city=? WHERE id=?');
		$sql->execute( array( $sname,$sage,$scity,$sid ) );
		if( $sql->rowCount() ){
			// $db->conn->rollback();
			$message = "Data is updated.";
			echo json_encode([ "message" => $message, "status" => true ]);
		}else{
			echo json_encode([ "message" => "No Record Update!", "status" => false ]);
		}


	}catch( Exception $e ){
		$message =  "Update-Error: ".$e->getLine() ." :: ".$e->getMessage();
		echo json_encode( [ "message"=> ".$message.", "status"=>false] );
	}	