<?php
	
	// jQuery GET Method
	
	/* Types of GET Method
			- text()		=> get text value of selector without any html tag
			- html()		=> get html value of selector 
			- attr()		=> get value of any attribute of selector attr('attribute_name')
			- val()			=> get value of any form data
	*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jQuery GET Method</title>
</head>
<body>
	<h1> jQuery GET Method </h1>
	<div id="box" class="test">
		<h2>Test Box</h2>
		<p>juifhkng fgpihdfk hfughakdbgnpa hughadga uiaughagn</p>
	</div>
</body>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		console.log("TEXT: "+ $('#box').text());
		console.log("HTML: "+ $('#box').html());
		console.log("Class Attribute: "+ $('#box').attr('class'));
	});
</script>
</html>