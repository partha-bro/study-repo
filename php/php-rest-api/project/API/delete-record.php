<?php

	header('Content-Type: Application/JSON');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: DELETE');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Access-Control-Allow-Methods,Content-Type,authorization,X-Requested-With');

	// data fetch 
	$data = json_decode(file_get_contents('php://input'),true);
	$data_id = $data['id'];

	include_once 'database/dbconfig.php';

	$db = new Database;

	try{
		$sql = $db->conn->prepare('DELETE FROM student WHERE id = ?');

		$db->conn->beginTransaction();
		$sql->execute([$data_id]);
		$sql->fetchAll(PDO::FETCH_ASSOC);
		$no = $sql->rowCount();
		if ($no) {
			# code...
			$db->conn->rollback();
			echo json_encode( [ "message"=> "$no Record Deleted!", "status"=>true] );
		}else{
			echo json_encode( [ "message"=> "0 Record Deleted!", "status"=>false] );
		}
	} catch (Exception $e) {
		$message =  "Delete-Error: ".$e->getLine() ." :: ".$e->getMessage();
		echo json_encode( [ "message"=> ".$message.", "status"=>false] );
	}	