<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
	<!-- Styles -->
    	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body class="container-fluid">
	<h1>Edit Student</h1>
	<form action="/update" method="POST" style="margin-bottom: 2%">
		@csrf
		<input type="hidden" name="id" value="{{$data['id']}}">
		<input type="text" name="student_name" value="{{$data['student_name']}}"> <br><br>
		<input type="number" name="age" value="{{$data['age']}}"> <br><br>
		<input type="text" name="city" value="{{$data['city']}}"> <br><br>
		<button type="submit" class="bg-primary"><b>Update Student</b></button>
	</form>
</body>
</html>
