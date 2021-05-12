<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
	<!-- Styles -->
    	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body class="container-fluid">
	<h1>Add Student</h1>

	@if( session('status') )
		<strong class="alert alert-success">{{session('message')}}</strong>
	@else
		<strong class="bg-warning">{{session('message')}}</strong>
	@endif

	<form action="add" method="POST" style="margin-bottom: 2%">
		@csrf
		<input type="text" name="student_name" placeholder="Enter name" required="required"> <br><br>
		<input type="number" name="age" placeholder="Enter age"> <br><br>
		<input type="text" name="city" placeholder="Enter city"> <br><br>
		<button type="submit" class="bg-primary"><b>Add Student</b></button>
	</form>
</body>
</html>
