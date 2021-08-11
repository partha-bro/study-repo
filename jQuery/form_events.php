<?php
	
	## Form Events
	
	/*
		- focus()		=> it is work when any form field is on focus
		- blur()		=> this is opposite of focus when anyone go out of that form field
		- Select()		=> when yo select any word then this event call
		- change()		=> this method is use when value is change in check box/radio button/drop down
		- Submit()		=> this method call when submit button is clicked, but submit method selector is form id/class/tag name
	*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jQuery Form Event</title>
</head>
<body>
	<h1> jQuery Form Event </h1>
	<div id="box">
		<form id='sform' action='' method="" enctype="data-form">
			<label>Name</label>
			<input type="text" name="sname" id="sname">
			<label>Age</label>
			<input type="number" name="sage" id="sage">
			<select id="sstate"> 
				<option>Select your State</option>
				<option>Odisha</option>
				<option>Delhi</option>
				<option>Kolkata</option>
			</select>
			<input type="submit" name="submit" id="submit" value="Submit">
		</form>
	</div>
</body>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$('#box').css('border','2px solid black');
		$('#box').css('padding','5px 5px 5px 5px');
		$('#box').css('text-align','center');

		$('#sname,#sage,#sstate').focus(function(){
			$(this).css('background-color','skyblue');
		});

		$('#sname,#sage,#sstate').blur(function(){
			$(this).css('background-color','lime');
		});

		$('#sname,#sage').select(function(){
			$(this).css('background-color','yellow');
		});

		$('#sstate').change(function(){
			$(this).css('background-color','pink');
		});

		$('#sform').submit(function(){
			alert('Your data will be saved soon!!!');
		});
	});
</script>
</html>