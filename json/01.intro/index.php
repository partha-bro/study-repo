<!DOCTYPE html>
<html>
<head>
	<title>DATA || JSON</title>
</head>
<body>

	<h2> DATA FROM JSON</h2>

	<div id='load'></div>

	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
  	$(document).ready(function(){
  		$.ajax({
  			url: 'data.json',
  			type: 'GET',
  			success: function(data){
  				// console.log(data);
  				// $.each function is same as foreach loop in php
  				$.each( data, function( key,value){
  					$('#load').append(value.id + " " + value.title + "<br/>");
  				});
  			}
  		});
  	});
  </script>
</body>
</html>