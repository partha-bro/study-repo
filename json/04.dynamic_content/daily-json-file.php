<?php

include '../02.json_encode_using_jquery/database.php';

$db = new Database;


	# code...
	try{

		$sql = $db->conn->prepare("SELECT * FROM student ");
		$sql->execute();
		$result = $sql->fetchAll(PDO::FETCH_ASSOC);

		if ($sql->rowCount()) {
			# code...
			$json_encode_object = json_encode($result, JSON_PRETTY_PRINT);

			$file_name = "my-".date('d-m-y').".json";
			$full_path = "json/".$file_name;

			if (file_put_contents($full_path, $json_encode_object)) {
				# code...
				echo $full_path."File Created.";
			}else{
				echo "Can't insert data in JSON file.";
			}
		}else{
			echo "0 Record!!!";
		}

	}catch( Exception $e ){
		echo "select-Error: ".$e->getMessage();
	}
