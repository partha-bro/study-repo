<?php
## Date: 21-03-21
### TOPIC NAME: PHP MySQLi PDO ###

/*
	Remember: Always use three step to connection between php & database
	Step 1: Make a connection
	Step 2: Run the given query
	Step 3: Fetch the data
	Step 4: close the connection

	1. PDO
		1.1 Make a connection
				$conn = new PDO('host','user','password','database');

		1.2 Run the given query

		1.3 Fetch number of rows
				
				
		1.4 Fetch the data
				mysqli_fetch_assoc()
				mysqli_fetch_array()
				mysqli_fetch_row()
				mysqli_fetch_all()
				mysqli_fetch_field()
	
		1.5 Error
			while use error function to know about any error always use die()
			Beacuse it stop the php file in that position and show the reseptive error
				$conn->connect_error()
				$conn->connect_errno()
				$conn->error()
				$conn->error_list()

		1.6 Close the connection
				$conn = NULL;
*/

