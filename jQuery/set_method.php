<?php
	
	// jQuery SET Method
	
	/* Types of SET Method
			- text()		=> set text value of selector without any html tag
			- html()		=> set html value of selector 
			- attr()		=> set value of any attribute of selector 
			- val()			=> set value of any form data
	*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jQuery SET Method</title>

	<style type="text/css">
		.red{
			color: red;
		}
	</style>
</head>
<body>
	<h1> jQuery SET Method </h1>
	<div id="box" class="test">
		<h2>Test Box</h2>
		<p>juifhkng fgpihdfk hfughakdbgnpa hughadga uiaughagn</p> 
	</div>
	<button id='set'>Set Value</button>
</body>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$('#set').click(function(){
			$('#box h2').text('New Value set in header');
			$('#box p').html('juifhkng fgpihdfk <i>hfughakdbgnpa</i> hughadga');
			$('#box p,h2').attr('align','center');
			$('#box p,h2').attr('class','red');
		});
	});
</script>
</html>