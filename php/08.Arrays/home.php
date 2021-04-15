<?php
### TOPIC NAME: Arrays Part 2 ###

	/*
		1. Multidimenstion array
		2. Multi Dimension with Indexed
		3. Multi Dimention with Associative
		4. Multi dimension array using list() function
        5. count() and sizeof() and array_count_values()
        6. in_array() and array_search()
        7. array_replace() and array_replace_recursive()
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

// 5. count() and sizeof() and array_count_values()

    /*
        count() and sizeof() functions are same to count the element present in an array.
    */

    echo "count: ".count($arr3)."<br/>";
    echo "sizeof: ".sizeof($arr3)."<br/>";

    // array_count_values() take an array parameer and return also an array but it gives count of an element of that array like duplicate or not. it does not suppoert multidimension array.

    $arr4 = array( 'apple','orange','banana','apple','grapes','banana');
    echo "<pre>";
        print_r(array_count_values($arr4));
    echo "</pre>";

echo "<hr/>";

// 6. in_array() and array_search()
    
    /*
            in_array() = this function is use to search element in perticular array, but it gives boolean value like true or false.

            array_search() = this function is use to search element in perticular array, but it gives key value of that element.
    */

    // $arr4 is numeric array and $arr3 is associative array

    echo in_array('apple', $arr4)."<br/>";
    echo array_search([
            "John" => "john2@gmail.com",
            "Jenny" => "jenny2@gmail.com",
            "Ajit" => "ajit2@gmail.com"
        ], $arr3)."<br/>";

echo "<hr/>";

// 7. array_replace() and array_replace_recursive()

    /*
        array_replace() = it replace the array between more than two array.
                            it is only use in numeric & assiciative array
                            it always give a new array, do not change in existing array.

        array_replace_recursive() = it replace the array between more than two array.
                            it is only use in multidimenstion assiciative array
                            it always give a new array, do not change in existing array.

        NOTE: it always replace goes right to left array.
                if key value is same then replace that value.
    */

    $fruit = ['orange','banana','apple','a'=>'grapes'];
    $veggie = ['carrot','pea'];
    $color = ['red','a'=>'green'];

    $new_arr = array_replace($fruit, $veggie, $color);
    echo "<pre>";
    print_r($new_arr);
    echo "</pre>";

    $arr5 = array( 'a'=>array('red'), 'b'=>array('pink','green'));
    $arr6 = array( 'a'=>array('yellow'), 'b'=>array('black'));

    $new_arr = array_replace_recursive($arr5, $arr6 );
    echo "<pre>";
    print_r($new_arr);
    echo "</pre>";

echo "<hr/>";