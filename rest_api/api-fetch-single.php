<?php
	// Rest Api

	header('Content-type: application/json');
	header('access-control-allow-origin: *');

	require_once 'database/dbconfig.php';

	// create a database connection
	$db = new database; 

	// error message format 
	$array_error = array('message' => 'No Record Found.', 'status' => false);

	// input data from user and fetch
	$data = json_decode(file_get_contents('php://input'),true);
	$student_id = $data['id'];


	try{
		$sql = $db->conn->prepare("SELECT * FROM student WHERE id={$student_id}");
		$sql->execute();

		$result = $sql->fetchAll(PDO::FETCH_ASSOC);

		if ($sql->rowCount()) {
			# code...
			echo json_encode($result);
		}else{
			echo json_encode($array_error);
		}
	}catch( Exception $e ){
		echo "Fetch-error: ".$e->getLine()."=>".$e->getMessage();
	}