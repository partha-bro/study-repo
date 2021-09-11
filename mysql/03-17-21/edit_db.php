<?php
	
	require_once('db_connect.php');

	if (isset($_POST['edit'])) {
		# code...
		$id = $_POST['id'];
		echo "<script> console.log('".$id." Data is Fetching...') </script>";

		$sql_fetch = "SELECT * FROM users WHERE id =".$id;

		$result = $conn->query($sql_fetch);
		if ($result->num_rows > 0) {
			# code...
			while ($rows = $result->fetch_assoc()) {
				# code...
				$name = $rows['name'];
				$number = $rows['number'];
				$email = $rows['email'];
			}
		}else{
			echo "<script> console.log('0 results found!!!') </script>";
		}
	}else{
		echo "<script> console.log('Data is not fetching!!!') </script>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>UPDATE || DATABASE</title>
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
		<input type='hidden' name='id' value='<?php echo $_POST['id'] ?>'>
		<input type="text" name="name" placeholder="Name:" value="<?php echo $name; ?>" required="required">
		<input type="number" name="number" placeholder="Number:" value="<?php echo $number; ?>" required="required">
		<input type="text" name="email" placeholder="E-mail:" value="<?php echo $email; ?>" required="required">
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
		$id = $_POST['id'];
		$name = $_POST['name'];
		$number = $_POST['number'];
		$email = $_POST['email'];

		echo "<script> console.log('".$name."') </script>";
		$sql_update = "UPDATE users SET `name`='".$name."', `number`='".$number."', `email`='".$email."' WHERE id='".$id."'";

		$conn->query($sql_update);

		echo "<script> console.log('Update Successful...') </script>";
		header('Location: index.php?msg=edit');
	}else{
		echo "<script> console.log('Data is not Comming, Some error happens!!!') </script>";
	}