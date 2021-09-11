<?php

include_once "database/database.php";

// Creating database object with create database connection
$obj = new database;

// Assign table name of that database
$tbl_name = 'student';

// $insert_data =  [ 'student_name'=>'Ram Kumar', 'age' => 23, 'city'=>'Goa'];

// Insert(table name, array of insert data)
// echo $obj->insert( $tbl_name,$insert_data );

$update_data =  [ 'student_name'=>'Akshay Kumar', 'age' => 53, 'city'=>'Amritsar'];

// Update(table name, array of update data, sql condition)
echo $obj->update( $tbl_name,$update_data,"id='7'" );

// Delete(table name, sql condition)
echo $obj->delete( $tbl_name,"id='8'" );

echo $obj->delete( $tbl_name,"id='13' AND student_name='Ram Kumar'" );

// select(table name,column feild default *, join, where, order, limit)
echo "<pre>";

// All record
echo $obj->select( $tbl_name );
echo "<hr/>";

// only student name
echo $obj->select( $tbl_name,'student_name' );
echo "<hr/>";

// there is no another table so no join
// where clause
echo $obj->select( $tbl_name,"student_name",null,"id='7'" );
echo "<hr/>";

// Order
echo $obj->select( $tbl_name,"student_name",null,null,"id" );
echo "<hr/>";

// Order
echo $obj->select( $tbl_name,"student_name",null,null,"age",3);
echo "<hr/>";