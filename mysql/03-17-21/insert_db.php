<!DOCTYPE html>
<html>
<head>
	<title>Insert || DATABASE</title>
</head>
<fieldset>
	<legend>
		DATA
	</legend>
	<button><a href="index.php">Home</a></button>
</fieldset>
<br/>
	<hr/>
	<hr/>
<br/>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
		<input type="text" name="name" placeholder="Name:" value="" required="required">
		<input type="number" name="number" placeholder="Number:" value="" required="required">
		<input type="text" name="email" placeholder="E-mail:" value="" required="required">
		<input type="reset" name="reset">
		<input type="submit" name="submit">
	</form>
</body>
</html>

<?php
	
	require_once('db_connect.php');

	if (isset($_POST['submit'])) {
		# code...
		echo "<script> console.log('Data is Comming...') </script>";

		$name = $_POST['name'];
		$number = $_POST['number'];
		$email = $_POST['email'];

		$sql_insert = "INSERT INTO users (`name`,`number`,`email`) VALUES ('".$name."','".$number."','".$email."')";

		// $conn->query($sql_insert);
		if ($conn->query($sql_insert) === TRUE) {
			# code...
			$last_id = $conn->insert_id;
			echo "<script> console.log('Insert Successful...') </script>";
			// echo "<script> alert('Last id is: ".$last_id."') </script>";
			header("Location: index.php?msg=insert&id=$last_id");
		}else{

		}
		
	}else{
		echo "<script> console.log('Data is not Comming, Some error happens!!!') </script>";
	}