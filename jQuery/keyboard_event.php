<?php
	
	// jQuery Keyboard Event
	
	/* Types of Keyboard event
			- keypress()	=> when any key press then event occur
			- keydown()		=> press and down are same functionallty
			- keyup()		=> when any key is up or up the key after pressed then event occur
	*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jQuery Keyboard Event</title>
</head>
<body>
	<h1> jQuery Keyboard Event </h1>
	<div id="box" class="test">
		<h2>Test Box</h2>
		<p>juifhkng fgpihdfk hfughakdbgnpa hughadga uiaughagn</p>
	</div>
</body>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		 $('#box').css('border','5px dotted orange');

		 $('body').keypress(function(){
		 	$(this).css('background-color','red');
		 });

		 $('body').keyup(function(){
		 	$(this).css('background-color','black');
		 	$(this).css('color','white');
		 });
	});
</script>
</html>