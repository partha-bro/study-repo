<?php

	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: PUT');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Access-Control-Allow-Methods,Content-Type,Authorization,X-Requested-With');

	$data = json_decode(file_get_contents('php://input'),true);

	include_once 'database/dbconfig.php';

	$db = new Database;

	try{
		if ($data['id'] == null && $data['student_name'] == null && $data['age'] == null && $data['city'] == null) {
			# code...
			echo json_encode( array('message' => 'Data is missing.', 'status' => false) );
		}else{
			$id = $data['id'];
			$student_name = $data['student_name'];
			$age = $data['age'];
			$city = $data['city'];

			$sql = $db->conn->prepare("UPDATE student SET student_name = ?, age= ?, city = ? WHERE id = ? ");
			$sql->execute([ $student_name,$age,$city,$id ])
			if($sql->rowCount()) {
				# code...
				echo json_encode( array('message' => 'Update data successfully.', 'status' => true) );
			}else{
				echo json_encode( array('message' => 'No Record Found.', 'status' => false) );
			}
		}
		


	}catch( Exception $e ){
		echo "Fetch-error: ".$e->getLine()."=>".$e->getMessage();
	}