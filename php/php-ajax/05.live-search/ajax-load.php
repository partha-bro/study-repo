<?php
	$search = $_POST['search'];
	// echo "<script> console.log('{$search}');</script>";
	require_once "../01.introduction/db_config.php";

	$db = new database;

	try{
		$sql = $db->conn->prepare("SELECT * FROM personal INNER JOIN city ON personal.city = city.cid WHERE name LIKE '{$search}%' ");

		$sql->execute();
		$result = $sql->fetchAll(PDO::FETCH_ASSOC);

		if ($sql->rowCount() > 0) {
			# code...
			foreach ($result as $key => $row) {
				# code...
				echo "
						<tr>
							<td>{$row['id']}</td>
							<td>{$row['name']}</td>
							<td>{$row['age']}</td>
							<td>{$row['gender']}</td>
							<td>{$row['phone']}</td>
							<td>{$row['cname']}</td>
							<td><button id='{$row['id']}' onclick='editData({$row['id']});''>Edit</button></td>
							<td><button id='{$row['id']}' onclick='deleteData({$row['id']});''>Delete</button></td>
						</tr>
				";
			}
		}else{
			echo "<h2> 0 Record Found! </h2>";
		}
	}catch( PDOException $e ){
		echo "live-search-Error: ".$e->getLine()." = ".$e->getMessage();
	}