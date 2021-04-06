<?php

	$name = $_POST['name'];
	$age = $_POST['age'];
	$city = $_POST['city'];

	$arr = array('name' => $name, 'age' => $age, 'city' => $city);

	if (file_exists('json/form-data.json')) {
		# code...
		// fetch the prev. data of file
		$current_data = file_get_contents('json/form-data.json');

		//convert json object to array
		$array_data = json_decode($current_data,true);

		// insert value to an array
		$array_data[] =  $arr;

		// convert array to object
		$json_data = json_encode($array_data, JSON_PRETTY_PRINT);

		// write the array to the file.
		if (file_put_contents('json/form-data.json', $json_data)) {
			# code...
			echo "Data successfully Inserted in JSON format.";
		}else{
			echo "Data is not successfully Inserted in JSON format.";
		}
	}else{
		echo "File is not exist.";
	}