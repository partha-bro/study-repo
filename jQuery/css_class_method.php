<?php
	
	// jQuery CSS Class Method
	
	/* Types of CSS Class Method
			- addClass()		=> set a new class to selector
			- removeClass()		=> remove given class to selector
			- toggleClass()		=> if class is added then remove to or vice versal
	*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jQuery CSS Class Method</title>

	<style type="text/css">
		.red{
			color: red;
		}
		.blue{
			color: blue;
			font-weight: bold;
		}

	</style>
</head>
<body>
	<h1> jQuery CSS Class Method </h1>
	<div id="box" class="test">
		<h2>Test Box</h2>
		<p>juifhkng fgpihdfk hfughakdbgnpa hughadga uiaughagn</p> 
	</div>
	<button id='add'>Add Class</button>
	<button id='remove'>Remove Class</button>
	<button id='toggle'>Toggle Class</button>
</body>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$('#add').click(function(){
			$('h2').addClass('red');
			$('p').addClass('blue');
		});

		$('#remove').click(function(){
			$('h2').removeClass();
			$('p').removeClass();
		});

		$('#toggle').click(function(){
			$('h2').toggleClass('red');
			$('p').toggleClass('blue');
		});
	});
</script>
</html>