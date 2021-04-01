<?php
  include_once '../01.introduction/header.php'
?>
	<fieldset>
		<input type="text" id="name" placeholder="name">
		<input type="text" id="age" placeholder="age">
		<input type="text" id="gender" placeholder="gender">
		<input type="text" id="phone" placeholder="phone">
		<button id="btn-save">Save</button>
	</fieldset>
	

	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
  	$(document).ready(function(){
  		$('#btn-save').on("click",function(){
  			var fname = $('#name').val();
  			var fage = $('#age').val();
  			var fgender = $('#gender').val();
  			var fphone = $('#phone').val();

  			$.ajax({
  				url : 'ajax-load.php',
  				type : 'post',
  				data : { name:fname,age:fage,gender:fgender,phone:fphone} ,
  				success: function(data){
  					alert(data);
  				}
  			});
  		});
  	});
  </script>
</body>
</html>