<?php
	
	// jQuery Mouse Event
	
	/* Types of mouse event
			- click()			=> when mouse is clicked single time on selector then event occur
			- dblclick()		=> when mouse is clicked double times on selector  then event occur
			- contextmenu()		=> when mouse is right click on selector  then event occur
			- mouseenter()		=> when mouse is enter on selector  then event occur
			- mouseleave()		=> when mouse is leave on selector  then event occur
	*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jQuery Mouse Event</title>
</head>
<body>
	<h1> jQuery Mouse Event </h1>
	<div id="box" class="test">
		<h2>Test Box</h2>
		<p>juifhkng fgpihdfk hfughakdbgnpa hughadga uiaughagn</p>
	</div>
</body>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$('.test').css('color','white');
		$('.test').css('border','5px dotted orange');
	
		$('#box').click(function(){
			$('.test').css('background-color','red');
		});

		$('#box').dblclick(function(){
			$('.test').css('background-color','green');
		});

		$('#box').contextmenu(function(){
			$('.test').css('background-color','blue');
		});

		$('#box').mouseenter(function(){
			$('.test').css('background-color','black');
		});

		$('#box').mouseleave(function(){
			$('.test').css('background-color','gray');
		});
	});
</script>
</html>