<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<x-header name='About' />
	<h2>About Page</h2>
	@foreach($names as $name)
		<h3>{{strtoupper($name)}}</h3>
	@endforeach
</body>
</html>