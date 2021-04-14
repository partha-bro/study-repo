<?php
	
	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Access-Control-Allow-Methods,Content-Type,X-Requested-With,Authorization');

	include_once 'database/dbconfig.php';

	$db = new Database;

	try{
		$sql = $db->conn->prepare('SELECT * FROM student');
		$sql->execute();
		$result = $sql->fetchAll(PDO::FETCH_ASSOC);
		if ($sql->rowCount()) {
			# code...
			echo json_encode($result);
		}else{
			echo json_encode( [ "message"=> "0 Record Found!", "status"=>false] );
		}
	} catch (Exception $e) {
		$message =  "Fetch-Error: ".$e->getLine() ." :: ".$e->getMessage();
		echo json_encode( [ "message"=> ".$message.", "status"=>false] );
	}