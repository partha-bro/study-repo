<?php

	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: DELETE');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Access-Control-Allow-Methods,Content-Type,Authorization,X-Requested-With');

	$data = json_decode(file_get_contents('php://input'),true);

	$id = $data['id'];

	include_once 'database/dbconfig.php';

	$db = new Database;

	try{
		$sql = $db->conn->prepare('DELETE FROM student WHERE id = ?');
		$sql->execute([ $id ]);
		if ($sql->rowCount()) {
			# code...
			echo json_encode([ 'message' => 'Data Deleted', 'status' => true ]);
		}else{
			echo json_encode([ 'message' => 'Data not Deleted', 'status' => false ]);
		}
	}catch( Exception $e ){
		echo "Fetch-error: ".$e->getLine()."=>".$e->getMessage();
	}