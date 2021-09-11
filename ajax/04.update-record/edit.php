<?php
	$id = $_GET['id'];

	if ($id) {
		# code...
	
		require_once "../01.introduction/db_config.php";

		$db = new database;

		try{
			$sql = $db->conn->prepare("SELECT * FROM personal WHERE id={$id}");

			$sql->execute();

			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			if ($sql->rowCount()) {
				# code...
				foreach ($result as $key => $row) {
					# code...
					$nm = $row['name'];
					$ag = $row['age'];
					$gd = $row['gender'];
					$ph = $row['phone'];
				}
			}

		}catch( Exception $e ){
			echo "Delete-Error: ".$e->getLine()." = ".$e->getMessage();
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>INSERT || AJAX</title>
</head>
<body align='center'>
	<h3> Data Table </h3>
	<fieldset>
		<input type="text" id="name" placeholder="name" value="<?= $nm ?>">
		<input type="text" id="age" placeholder="age" value="<?= $ag ?>">
		<input type="text" id="gender" placeholder="gender" value="<?= $gd ?>">
		<input type="text" id="phone" placeholder="phone" value="<?= $ph ?>">
		<button id="btn-save">Edit</button>
		<button ><a href='../01.introduction/index.php'>Home</a></button>
	</fieldset>
	

	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

  <script type="text/javascript">

  	$(document).ready(function(){
  		$('#btn-save').on("click",function(){

  			var id = <?= $id ?>;
  			var fname = $('#name').val();
  			var fage = $('#age').val();
  			var fgender = $('#gender').val();
  			var fphone = $('#phone').val();

  			$.ajax({
  				url : 'ajax-load.php',
  				type : 'post',
  				data : { number:id,name:fname,age:fage,gender:fgender,phone:fphone} ,
  				success: function(data){
  					alert(data);
  				}
  			});
  		});

  		
  	});
  </script>
</body>
</html>