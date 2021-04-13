<?php
### TOPIC NAME: Arrays Part 2 ###

	/*
		1. Multidimenstion array
		2. Multi Dimension with Indexed
		3. Multi Dimention with Associative
		4. Multi dimension array using list() function

	*/

// 1. Multidimenstion array
	/*
		Array inside an array is called as Multi Dimension array
    	Array holding one or multiple arrays
	*/

// 2. Multi Dimension with Indexed
    $arr2 = [
        [ 0, 1, 2, 3, 4, 5 ],
        [ 6, 7, 8 ],
        [ 9, 10 ],
    ];
    var_dump($arr2);
    echo "<br/>";

    foreach( $arr2 as $singleArr ){
        //Is Single Array - $singleArr
        var_dump( $singleArr );
        echo "<br/>";
    }


    foreach( $arr2 as $singleArr ){
        //Is Single Array - $singleArr
        echo "[";
        foreach( $singleArr as $values ){
            echo $values . ", " ;
        }
        echo "]" . "<br/>";
    }
    echo "<br/>";

// 3. Multi Dimention with Associative
    $arr3 = [
        "emaillist1" => [
            "John1" => "john1@gmail.com",
            "Jenny1" => "jenny1@gmail.com",
            "Ajit1" => "ajit1@gmail.com"
        ],
        "emaillist2" => [
            "John2" => "john2@gmail.com",
            "Jenny2" => "jenny2@gmail.com",
            "Ajit2" => "ajit2@gmail.com"
        ]

    ];

    //Access all the Values Array
    foreach($arr3 as $valueArray){
        foreach( $valueArray as $values){
            echo $values . "<br/>";
            echo "<br/>";
        }
    }

    //Access all the Key Value Pair. Key is String and Values are Arrays
    foreach($arr3 as $key => $valueArray){
        echo "Values for Key: $key" . "<br/>";
        foreach( $valueArray as $values){
            echo $values . "<br/>";
            echo "<br/>";
        }
    }

echo "<hr/>";

// 4. Multi dimension array using list() function
	/*
		The list() function is used to assign values to a list of variables in one operation.
		list() uses in foreach for avoid nested foreach

		Note: Prior to PHP 7.1, this function only worked on numerical arrays.

		Syntax
			list(var1, var2, ...)

		We can use list() function in foreach() but the multidimension inside data has equal no. like:
							$arr2 = [
								        [ 0, 1],
								        [ 6, 7],
								        [ 9, 10],
								    ];

		Error happens when use below array in list()
							$arr2 = [
								        [ 0, 1, 8, 3],
								        [ 6, 7, 5],
								        [ 9, 10],
								    ];
	*/

	$my_array = array("Dog","Cat","Horse");

	list($a, $b, $c) = $my_array;
	echo "I have several animals, a $a, a $b and a $c.";

	// multi dimension indexed array using list()
	$arr2 = [
        [ 0, 1],
        [ 6, 7],
        [ 9, 10],
    ];

    foreach ($arr2 as list( $a, $b )) {
    	# code...
    	echo "$a ~ $b <br/>";
    }

    // Multi Dimention with Associative using list()
    $arr3 = [
        "emaillist1" => [
            "John" => "john1@gmail.com",
            "Jenny" => "jenny1@gmail.com",
            "Ajit" => "ajit1@gmail.com"
        ],
        "emaillist2" => [
            "John" => "john2@gmail.com",
            "Jenny" => "jenny2@gmail.com",
            "Ajit" => "ajit2@gmail.com"
        ]

    ];

    //Access all the Values Array
    foreach($arr3 as list( "John"=>$a, "Jenny"=>$b, "Ajit"=>$c)){
        echo "$a ~ $b ~ $c <br/>";
    }
echo "<hr/>";