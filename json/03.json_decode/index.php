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
        url: 'fetch_data.php',
        type: 'POST',
        data: { id : 2},
        dataType: 'JSON',
        success: function(data){
          // $('#load').html(data.id);
          console.log(data);
        }
      });
    });
  </script>
</body>
</html>