<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jquery page</title>
</head>
<body>
	<h1>jQuery Implementation</h1>

	<p id=1> Test 1 </p>
	<p id=2> Test 2 </p>
</body>

<!-- jQuery -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	// Code -->
	$(document).ready(function(){
		alert('Hi Bro...');

		var a = $('#1').html();
		console.log(a);

		var b = $('#2').html();
		console.log(b );

		$('#1').css('color','red');
		$('#2').css('border','2px solid blue');
		$('*').css('font-weight','bold');
	});
</script>
</html>