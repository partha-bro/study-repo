<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Effects || jQuery</title>

	<style type="text/css">
		#box{
			background-color:red;
			height: 100px;
			width: 100px;
			margin-top: 0px;
		}
	</style>
</head>
<body>
	<input type="button" name="btn_hide" id="hide" value="Hide">
	<input type="button" name="btn_show" id="show" value="Show">
	<input type="button" name="btn_toogle" id="toggle" value="Toggle">
	<br/><br/>
	<input type="button" name="btn_fadeout" id="fadeout" value="Fadeout">
	<input type="button" name="btn_fadein" id="fadein" value="Fadein">
	<input type="button" name="btn_fadetoggle" id="fadetoggle" value="Fadetoggle">
	<br/><br/>
	<input type="button" name="btn_slideup" id="slideup" value="SlideUp">
	<input type="button" name="btn_slidedown" id="slidedown" value="SlideDown">
	<input type="button" name="btn_slidetoggle" id="slidetoggle" value="Slidetoggle">
<div id="box" style="">
	
</div>



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#hide').click(function(){
			$('#box').hide(3000);
		});

		$('#show').click(function(){
			$('#box').show(3000);
		});

		$('#toggle').click(function(){
			$('#box').toggle(3000);
		});

		$('#fadeout').click(function(){
			$('#box').fadeOut(3000);
		});

		$('#fadein').click(function(){
			$('#box').fadeIn(3000);
		});

		$('#fadetoggle').click(function(){
			$('#box').fadeToggle(3000);
		});

		$('#slideup').click(function(){
			$('#box').slideUp(3000);
		});

		$('#slidedown').click(function(){
			$('#box').slideDown(3000);
		});

		$('#slidetoggle').click(function(){
			$('#box').slideToggle(3000);
		});
	});
	
</script>
</body>
</html>