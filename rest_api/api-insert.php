<?php

	header('Content-Type: apllication/json');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Headers, Content-Type, Authorization, X-Requested-With');

	/*
		Always add header function and there value is
			Access-Control-Allow-Headers: 	= define header name for use
			Access-Control-Allow-Methods: 	= Which methods will use 
			Content-Type: 					= What type of data return
			Authorization: 					= authenticate for other users to use
			X-Requested-With: 				= restricted data comming from ajax 
	*/

	// Read tha data from input json

	$data = json_decode(file_get_contents('php://input'),true);

	$student_name = $data['student_name'];
	$age = $data['age'];
	$city = $data['city'];

	require_once 'database/dbconfig.php';

	// create a database connection
	$db = new database; 

	try{
		$sql = $db->conn->prepare("INSERT INTO student (student_name,age,city) VALUES (?,?,?) ");
		$sql->execute([ $student_name, $age, $city ]);

		if ($db->conn->lastInsertId()) {
			# code...
			echo json_encode( array('message' => 'Insert data successfully.', 'status' => true) );
		}else{
			echo json_encode( array('message' => 'No Record Found.', 'status' => false) );
		}
	}catch( Exception $e ){
		echo "Fetch-error: ".$e->getLine()."=>".$e->getMessage();
	}