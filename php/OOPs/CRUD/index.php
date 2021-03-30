<?php

include_once "database/database.php";

$obj = new database;

$db_name = 'student';
$insert_data =  [ 'student_name'=>'Ram Kumar', 'age' => 23, 'city'=>'Goa'];
echo $obj->insert( $db_name,$insert_data );