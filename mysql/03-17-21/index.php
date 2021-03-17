<?php
### TOPIC NAME: MySQL Database Part-2 ###
/*
	0. How to redirect another page
		syntax: header('Location: path');

	1. Fetch data
		syntax: SELECT * FROM TABLE_NAME ORDER BY ID ASC;

	2. Insert data
		syntax: INSERT INTO TABLE_NAME (`COL_1`,`COL_2`,...) VALUES ('VALUE_1','VALUE_2',...);

	3. Delete data
		syntax: DELETE FROM TABLE_NAME WHERE `COL_1` = 'VALUE_1';

	4. Update data
		syntax: UPDATE TABLE_NAME SET `COL_1`='VALUE_1', `COL_2`='VALUE_2',... WHERE `COL_0`='VALUE_0';

	5. If you get last id of insert data then after run $conn->query($sql)
		$last_id = $conn->insert_id;

	6. How to executed multiple statement in one query?
		$sql = 'SELECT DISTINCT name from users;';
		$sql .= 'SELECT DISTINCT number from users;';
		$sql .= 'SELECT DISTINCT email from users;';

		$conn->multi_query($sql);

	7.   

	NOTE: Always use ` symbol for column name of table
					 ' symbol for value of table

*/
	date_default_timezone_set('Asia/Kolkata');
	// connect the database
	require_once('db_connect.php');

	if (isset($_GET['msg'])) {
		# code...
		if ($_GET['msg'] === 'delete') {
			# code...
			echo "<script> alert('Sorry, Your record was deleted.') </script>";
		}else if ($_GET['msg'] === 'edit') {
			# code...
			echo "<script> alert('Your record was updated successfully.') </script>";
		}else if ($_GET['msg'] === 'insert') {
			# code...
			echo "<script> alert('".$_GET['id']." : Your record was inserted successfully.') </script>";
		}else{

		}
	}

?>
<fieldset>
	<legend>
		DATA
	</legend>
	<button><a href="<?php echo $_SERVER['PHP_SELF'] ?>">Home</a></button>
	<button><a href="insert_db.php">Insert</a></button>
</fieldset>
<br/>
	<hr/>
	<hr/>
<br/>
<table border="5" cellspacing="0" cellpadding="5" width="100%" align="center">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Number</th>
		<th>Email</th>
		<th>Date</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
		<?php
			$sql = 'SELECT * FROM users';
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				# code...
				while ($rows = $result->fetch_assoc()) {
					# code...
					echo "<tr>";
					echo "<td>".$rows['id']."</td>";
					echo "<td>".$rows['name']."</td>";
					echo "<td>".$rows['number']."</td>";
					echo "<td>".$rows['email']."</td>";
					echo "<td>".$rows['date']."</td>";
					echo "<td>
							<form method='post' action='edit_db.php'>
								<input type='hidden' name='id' value='".$rows['id']."'>
								<input type='submit' name='edit' value='Edit'>
							</form>
								</td>";
					echo "<td>
							<form method='post' action='delete_db.php'>
								<input type='hidden' name='id' value='".$rows['id']."'>
								<input type='submit' name='delete' value='Delete'>
							</form>
								</td>";
					echo "</tr>";
				}
				
			}else{
				echo "<script> console.log('0 result found!') </script>";
			}
		?>
</table>

<?php 
	echo "<hr/>";
# 6. How to executed multiple statement in one query?

	// $sql = "INSERT INTO users (`name`,`number`,`email`) VALUES ('ram','147','ram@hotmail.com');";
	// $sql .= "INSERT INTO users (`name`,`number`,`email`) VALUES ('hari','852','hari@hotmail.com');";
	// $sql .= "INSERT INTO users (`name`,`number`,`email`) VALUES('sita','369','sita@hotmail.com');";

	if($conn->multi_query($sql) === TRUE){
		echo 'successfully';
	}else{
		echo "ERROR: ".$conn->error;
	}
	
 ?>

