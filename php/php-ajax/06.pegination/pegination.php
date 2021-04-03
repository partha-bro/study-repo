<?php
	$page_no = $_GET['page_no'];

	require_once "../01.introduction/db_config.php";

	$db = new database;

	try{
		$limit = 2;
		if ($page_no) {
			$offset = ($page_no-1)*$limit;

			# code...
			$sql  = $db->conn->prepare('SELECT * FROM personal INNER JOIN city ON personal.city = city.cid LIMIT '.$offset.','.$limit.';');
			
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
			}
		}
		else{

			# code...
			$sql_count  = $db->conn->prepare('SELECT count(id) as total FROM personal');
			$sql_count->execute();
			$result = $sql_count->fetchAll(PDO::FETCH_ASSOC);
			$total = $result[0]['total'];

			$total /= $limit;
			$btn = '';
			for ($i=1; $i<=$total ; $i++) { 
				# code...
				$btn .= "<button id='$i'>$i</button>&nbsp;&nbsp;";
			}
			echo "Page: ". $btn;
		}
	}catch( PDOException $e ){
		echo "pagination-Error: ".$e->getLine()." = ".$e->getMessage();
	}