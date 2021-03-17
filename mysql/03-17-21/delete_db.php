<fieldset>
	<legend>
		DATA
	</legend>
	<button><a href="index.php">Home</a></button>
</fieldset>

<fieldset>
	<legend>
		Confirm
	</legend>
	<strong>Do you want to delete it?</strong><br/><br/>
	<form method="post">
		<input type='hidden' name='id' value='<?php echo $_POST['id'] ?>'>
		<input type="submit" name="btn_delete" value="Done">
		<input type="submit" name="btn_cancel" value="Cancel">
	</form>
</fieldset>
<?php
	$id = $_POST['id'];
	echo "<script> console.log('".$id."'); </script>";
	require_once('db_connect.php');

	if(isset($_POST['btn_delete'])){
		

		$sql = "DELETE FROM users WHERE id = ".$id;

		$result = $conn->query($sql);
		echo $result;
		header('Location: index.php?msg=delete');
	}
	
	if (isset($_POST['btn_cancel'])) {
		# code...
		header('Location: index.php');
	}