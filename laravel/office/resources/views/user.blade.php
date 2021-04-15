<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>User page</h1>

	<form action="user_controller" method="post">
		@csrf
		<input type="text" name="name">
		<br/><br/>
		<input type="password" name="password">
		<br/><br/>
		<input type="submit" name="submit">
	</form>


	<!-- include innerpage -->
	@include('innerpage')

</body>
</html>