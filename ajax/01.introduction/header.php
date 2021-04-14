<!DOCTYPE html>
<html>
<head>
	<title>PHP || AJAX</title>
</head>
<body align='center'>
	<h3> Data Table </h3>
	<button id="btn-data">Load Data</button>
	<button ><a href='../01.introduction/index.php'>Home</a></button>
	<button id="btn-data"><a href="../02.insert-record/index.php">Insert Data</a></button>
	<button id="btn-data"><a href="../03.delete-record/index.php">Delete Data</a></button>
	<button id="btn-data"><a href="../04.update-record/index.php">Update Data</a></button>
	<button id="btn-data"><a href="../05.live-search/index.php">Live Search</a></button>
	<button id="btn-data"><a href="../06.pegination/index.php">Button Pegination</a></button>
	<button id="btn-data"><a href="../07.load-more-pegination/index.php">Load more Pegination</a></button><br/><br/>
	<table id='table' align="center" border="5px" cellpadding="10" cellspacing="0">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Phone</th>
				<th>City</th>
				<th>EDIT</th>
				<th>DELETE</th>
			</tr>
		</thead>