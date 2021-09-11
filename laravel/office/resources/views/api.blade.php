<!DOCTYPE html>
<html>
<head>
	<title>API || Records</title>
</head>
<body>
	<h1>User Data</h1>

	<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>E-mail</td>
			<td>Photo</td>
		</tr>

		@foreach($collection as $item)
			<tr>
				<td>{{$item['id']}}</td>
				<td>{{$item['first_name']}}</td>
				<td>{{$item['email']}}</td>
				<td><img src="{{$item['avatar']}}"></td>
			</tr>
		@endforeach
	</table>
</body>
</html>