<?php

	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: DELETE');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Access-Control-Allow-Methods,Content-Type,authorization,X-Requested-With');

	// data fetch 
	$data = json_decode(file_get_contents('php://input'),true);
	$delete_id = $data['id'];

	include_once 'database/dbconfig.php';

	$db = new Database;

	try{
		$sql = $db->conn->prepare('DELETE FROM student WHERE id = ?');

		$db->conn->beginTransaction();

		
		if ($sql->execute([$delete_id])) {
			# code...
			$no = $sql->rowCount();
			$db->conn->rollback();
			$message = "$no Record Deleted!";
			echo json_encode([ "message"=> $message, "status" => true ]);
		}else{
			echo json_encode([ "message"=> "Error: No delete perform", "status" => false ]);
		}
	} catch (Exception $e) {
		$message =  "Delete-Error: ".$e->getLine() ." :: ".$e->getMessage();
		echo json_encode([ "message"=> ".$message.", "status"=>false ]);
	}	