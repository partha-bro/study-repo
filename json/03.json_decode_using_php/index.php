<?php

  $path_json = '../01.intro/data.json';

  $json_data = file_get_contents($path_json);

  $arr = json_decode($json_data,true); 

  // echo "<pre>";
  // print_r($arr);

  // we can use nested foreach to retrive the data from array.
  echo "<table border=1>";
  foreach ($arr as $key => $value) {

     $arr_value = $value;
    
  }
  $arr_key = array_keys($arr_value);
  echo "<pre>";
  print_r($arr_key);

  echo "<tr>";
  for ($i=0; $i < count($arr_value); $i++) { 
    # code...
    echo "<th>".$arr_key[$i]."</th>";
  }
  echo "</tr>";

  foreach ($arr as $key => $value) {
    # code...
    echo "<tr><td>{$value['userId']}</td><td>{$value['id']}</td><td>{$value['title']}</td><td>{$value['body']}</td></tr>";
    // foreach ($value as $k => $v) {
    //   # code...
    //   echo "<tr><td>$v</td><td>$v</td><td>$v</td><td>$v</td></tr>";
    // }
  }

  echo "</table>";
echo "<hr/>";

// NOTE: This above long code to create table,it is easly build with list() using foreach loop, but i can not do it, some error it occur.So try we will try.