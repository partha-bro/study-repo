<?php

include_once "database/database.php";

$obj = new database;

$db_name = 'student';
// $insert_data =  [ 'student_name'=>'Ram Kumar', 'age' => 23, 'city'=>'Goa'];
// echo $obj->insert( $db_name,$insert_data );

$update_data =  [ 'student_name'=>'Akshay Kumar', 'age' => 53, 'city'=>'Amritsar'];
echo $obj->update( $db_name,$update_data,"id='7'" );

echo $obj->delete( $db_name,"id='8'" );

echo $obj->select( $db_name );