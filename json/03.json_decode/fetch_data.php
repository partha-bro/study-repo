<?php

include 'database.php';

$db = new Database;

if (isset($_POST['id'])) {
	# code...
	try{

		$sql = $db->conn->prepare("SELECT * FROM student WHERE id = {$_POST['id']}");
		$sql->execute();
		$result = $sql->fetchAll(PDO::FETCH_ASSOC);

		if ($sql->rowCount()) {
			# code...
			$json_encode_object = json_encode($result);
		}else{
			echo "0 Record!!!";
		}

		$output = json_decode($json_encode_object);

		echo $output;
	}catch( Exception $e ){
		echo "select-Error: ".$e->getMessage();
	}
}else{
	echo "";
}