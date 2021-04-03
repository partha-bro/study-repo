<?php
	$page_no =  $_POST['page_no'];

	require_once "../01.introduction/db_config.php";

	$db = new database;
	$limit = 2;
	$offset = $page_no + $limit;

	try{
		
		// if ($page_no) {
			

			# code...
			$sql  = $db->conn->prepare('SELECT * FROM personal INNER JOIN city ON personal.city = city.cid LIMIT 0,'.$offset.';');
			
			$sql->execute();
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			if ($sql->rowCount() > 0) {
				# code...
				$output='';
				foreach ($result as $key => $row) {
					
					# code...
					$output .= "
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
				$output .= "
						</tbody>
							</table>
							<br/><br/>
							<div id='pegination' align='center'>
								<button id='".$offset."'>Load More</button>
							</div>
					";
			}

		// }
		// else{

		// 	# code...
		// 	$sql_count  = $db->conn->prepare('SELECT * FROM personal INNER JOIN city ON personal.city = city.cid LIMIT 2');
		// 	$sql_count->execute();
		// 	$result = $sql_count->fetchAll(PDO::FETCH_ASSOC);
		// 	if ($sql_count->rowCount() > 0) {
		// 		# code...
		// 		$output='';
		// 		foreach ($result as $key => $row) {
					
		// 			# code...
		// 			$output .= "
		// 					<tr>
		// 						<td>{$row['id']}</td>
		// 						<td>{$row['name']}</td>
		// 						<td>{$row['age']}</td>
		// 						<td>{$row['gender']}</td>
		// 						<td>{$row['phone']}</td>
		// 						<td>{$row['cname']}</td>
		// 						<td><button id='{$row['id']}' onclick='editData({$row['id']});''>Edit</button></td>
		// 						<td><button id='{$row['id']}' onclick='deleteData({$row['id']});''>Delete</button></td>
		// 					</tr>

		// 			";
		// 		}
		// 		$output .= "
		// 				</tbody>
		// 					</table>
		// 					<br/><br/>
		// 					<div id='pegination' align='center'>
		// 						<button id='{$offset}'>Load More</button>
		// 					</div>
		// 			";
		// 	}
		// }
		echo "$output";
	}catch( PDOException $e ){
		echo "pagination-Error: ".$e->getLine()." = ".$e->getMessage();
	}