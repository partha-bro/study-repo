<?php

	require_once "../01.introduction/db_config.php";

	$db = new database;

	$limit = 2;

	// assign offset variable of limit
	if (isset($_POST['page_no'])) {
		# code...
		$offset = $_POST['page_no'];
	}else{
		$offset = 0;
	}

	try{
		
		// if ($page_no) {
			

			# code...
			$sql  = $db->conn->prepare("SELECT * FROM personal INNER JOIN city ON personal.city = city.cid LIMIT {$offset},{$limit}");
			
			$sql->execute();
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			if ($sql->rowCount() > 0) {
				# code...
				$output = '<tbody>';

				foreach ($result as $key => $row) {
					$last_id = $row['id'];
					# code...
					$output .= "<tr>
								<td>{$row['id']}</td>
								<td>{$row['name']}</td>
								<td>{$row['age']}</td>
								<td>{$row['gender']}</td>
								<td>{$row['phone']}</td>
								<td>{$row['cname']}</td>
								<td><button id='{$row['id']}' onclick='editData({$row['id']})';>Edit</button></td>
								<td><button id='{$row['id']}' onclick='deleteData({$row['id']})';>Delete</button></td>
							</tr>";
				}
				$output .= "</tbody>
						    <tbody id='pegination' align='center'>
						      <tr>
						        <td colspan='8'>
						          <button id='ajaxbtn' data-id='{$last_id}'>Load More</button>
						        </td>
						      </tr>
						     </tbody>";

				echo $output;
			}else{
				echo "";
			}

		
		
	}catch( PDOException $e ){
		echo "pagination-Error: ".$e->getLine()." = ".$e->getMessage();
	}