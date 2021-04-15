<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<x-header name='User'/>
	<h2>Home Page</h2>
	@for($i=0;$i<=10;$i++)
		<h3>{{$i}}</h3>
	@endfor
</body>
</html>