<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index || jQuery</title>
</head>
<body>
	<input type="button" name="btn" id="btn" value="click">
<div id="box" style="background-color:red;height: 100px;width: 100px;margin-top: 500px;">
	
</div>



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#btn').click(function(){
			$('#box').slideUp(5000); // 5000 means 5 sec
		});
	});
	
</script>
</body>
</html>