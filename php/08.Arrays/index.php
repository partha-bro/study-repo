<?php
### TOPIC NAME: Arrays ###

/*
    1. Arrays                                       Line = 41
        1.1 single line ddeclare 
        1.2 multiline line declare for clarity
    2. Empty array                                  Line = 57
    3. Print the array                              Line = 112
        3.1 var_dump()  
        3.2 print_r()
    4. find length of the array                     Line = 129
        4.1 count()
    5. Access Array Element using Constant use {}   Line = 132
    6. Foreach statement                            Line = 138
    7. Mixed Array                                  Line = 151
    8. Indexed Arrays                               Line = 182
    9. Associative Arrays                           Line = 210
        9.1 array_keys()       
    10. Multi Dimension Arrays                      Line = 313
    11. Array Function unset                        Line = 392
        11.1 unset()
    12. Sort Arrays                                 Line = 489
        12.1 sort()
        12.2 rsort()
        12.3 asort()
        12.4 arsort()
        12.5 ksort()
        12.6 krsort()
    13. Copy Arrays                                 Line = 521
    14. Convert string to array                     Line = 548
        14.1 explode()
    15. Convert array to string                     Line = 561
        15.1 implode()
    16. Exercise 1                                  Line = 568
    17. Exercise 2                                  Line = 601
    18. Practice                                    Line = 640
*/

echo "<pre>";
## Arrays
    /*
        Reference: https://www.php.net/manual/en/language.types.array.php
        As of PHP 5.4 you can also use the short array syntax, 
        which replaces array() with [].

        NOTE:
            $arr is a Array Variable
            $arr[0] is a Array Element
            0 is a index of Array
            Array index starts with 0 not 1
            Arrays can store any type of value - String, Integer, Boolean or arrays
            Arrays has a length based on the number of elements it has.
            Usecase: Collection of variables together.
    */

// Define empty array of single line
    $arr = [ 1, 'two', 3 ];
    $arr = array( 1, 'two', 3 );

// Define empty array of multiple line
    $arr = [    1, 
                'two',
                3 
            ];
//we cannot use echo for print an array because of $arr has array not a single value
    // echo $arr; 

//Empty array
    //Empty Arrays
    $arr = [];

    var_dump( $arr );
    echo "<br/>";
    print_r ( $arr );
    echo "<br/>";

    //echo $arr[0] . PHP_EOL;
    if( empty($arr) ){
        echo "Array is empty" . PHP_EOL."<br/>";
    }

    $arr = 10;
    //Guess the output.
    var_dump( $arr ); //Converted Array to Integer
    echo "<br/>";

    $arr = [10];
    //Guess the output. - Observe the square brackets.
    var_dump( $arr ); //Converted Integer back to Array
    echo "<br/>";

    $arr[0] = [10];
    //Index 0 holds an array which has 10 as first value
    var_dump( $arr ); //Learn more about multidimension array in next lecture
    echo "<br/>";

    //Reset the Array
    $arr = [];
    var_dump( $arr );
    if( empty($arr) ){
        echo "Array is empty" . PHP_EOL."<br/>";
    }

    $arr = [[]];
    //What is this?
    var_dump($arr);

    //Remember [] means empty arrays

echo "<hr/>";
// So we can use var_dump() and print_r() functions
    echo 'var_dump("string")='.PHP_EOL;     // it is use for know your data type
    var_dump("string");
    echo "<br/>";
    echo 'var_dump("$arr")='.PHP_EOL;         // we can also use for print array value with their data type
    var_dump($arr);
    echo "<br/>";
    echo 'print_r($arr)='.PHP_EOL;          // this is use for print arrays value without datatype.
    print_r($arr);
    echo "<br/>";

    echo "<hr/>";

// Access the data through index
    print_r($arr);
    echo "1 index of array is $arr[1] "."<br/>";

// Find the length of array using count()
    echo "Length of the array is ".count($arr)."<br/>";

//Access Array Element inside the String using Constant use {}
    const ARRAY_ELEMENT = 1;
    echo "{$arr[ARRAY_ELEMENT]}" . PHP_EOL;

echo "<hr/>";

// Foreach statement
    /*
        syntax: foreach(array as $key => $value){
                    # code...
                    echo " $key => $value ";
                }
    */
    $days = [ "Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun"];
    foreach ($days as $key => $value){
        echo "$key => $value"."day"."<br/>";
    }

echo "<hr/>";
// Mixed Array
    
    //If Index is not specified, PHP will use the increment of the largest previously used integer key.

    $arr = [];
    $arr[0] = 1;
    $arr[2] = "String";
    $arr[4] = true;
    $arr[10] = 14.5;

    //Adding new values to array
    $arr[] = "New String 1";
    $arr[] = "New String 2";

    //Guess the Output - Think how it might work for a sec.
    var_dump($arr);

    $arr[0] = "Previously 1 and now Changed Value";
    foreach($arr as $values){
        echo $values . PHP_EOL."<br/>";
    }

    //Curious to know what is inside index of 1
    //For loop is bad sometimes. Recommendation is to use foreach loop for arrays
    echo "If 1 return then element is empty :".empty($arr[1]) . PHP_EOL."<br/>";

    $arr[1] = 'No empty';
    echo "If nothing return then element is Preseent :".empty($arr[1]) . PHP_EOL;

echo "<hr/>";

// Indexed Arrays
    //Index Arrays are sequence array of element with integer index numbers.
    //Mostly it is in sequence.
    //Index starts with 0
    //New elements get the index of highest index + 1 number.
    //You can always break the sequence and add new elements to future index.

    $arr = [1, 2, 3, 4, 5];
    var_dump($arr);
    echo "<br/>";

    $arr[100] = 100;
    var_dump($arr);
    echo "<br/>";

    $arr[] = 101;
    var_dump($arr);
    echo "<br/>";

    $arr[90] = 90;
    var_dump($arr);
    echo "<br/>";

    $arr[] = 91;        // highest index number + 1 = 102
    var_dump($arr);
    
echo "<hr/>";

// Associative Arrays
    //In Associative Arrays, you specify the index.
    //index => value
    // => is a special symbol to represent key and value.
    //key => value - key is the index and value is the value at that index.

    //Indexed Array
    $arr = [ "Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun"];
    var_dump($arr);
    foreach($arr as $values){
        echo $values . PHP_EOL;
    }
    echo "<br/>";

    //Associative Array
    $arr = [ 0 => "Mon", 1 => "Tues", "Wed", "Thurs", 10 => "Fri", 15 => "Sat", "Sun"];
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";
    echo "<br/>";

    foreach($arr as $values){
        echo $values . PHP_EOL;
    }
    echo "<br/>";

    foreach($arr as $key => $values){
        echo "$key => $values" . PHP_EOL;
    }
    echo "<br/>";

    //=> is a symbol to represent the array element association to variables.
    foreach($arr as $key1 => $values1){
        echo "$key1 => $values1" . PHP_EOL;
    }
    echo "<br/>";

    //Print all keys
    print_r ( array_keys($arr) );
    echo "<br/>";

    //Access only key
    foreach(array_keys($arr) as $key){
        echo $key . PHP_EOL;
    }
    echo "<br/>";

    //Access only value
    foreach($arr as $value){
        echo $value . PHP_EOL;
    }
    echo "<br/>";

    $userDetails = [
        "John" => "john@gmail.com",
        "Jenny" => "jenny@gmail.com",
        "Ajit" => "ajit@gmail.com",

    ];

    var_dump( $userDetails );
    echo "<br/>";
    echo $userDetails["John"] . PHP_EOL;
    echo "<br/>";
    echo $userDetails["Jenny"] . PHP_EOL;
    echo "<br/>";
    echo $userDetails["Ajit"] . PHP_EOL;
    echo "<br/>";
    $userDetails["Mary"] = "mary@gmail.com";
    var_dump($userDetails);
    echo "<br/>";
    //Error - 0 is not the key anymore. Index is not element position.
    //echo $userDetails[0] . PHP_EOL;

    $userDetails[0] = "user@gmail.com";
    var_dump($userDetails);
    echo "<br/>";

    echo $userDetails[0] . PHP_EOL;
    echo "<br/>";

    //Guess the Output
    $userDetails[] = [ "Jane" => "jane@gmail.com" ];

    //Replaced the existing array.
    var_dump($userDetails);
    echo "<br/>";

    echo $userDetails[1]["Jane"] . PHP_EOL;
    echo "<br/>";

    //Add an element at end of the array
    $userDetails = [
        "John" => "john@gmail.com",
        "Jenny" => "jenny@gmail.com",
        "Ajit" => "ajit@gmail.com",

    ];
    $userDetails["Jane"] = "jane@gmail.com";
    var_dump($userDetails);

echo "<hr/>";

// Multi Dimension Arrays
    //Array inside an array is called as Multi Dimension array
    //Array holding one or multiple arrays

    //Single Dimension
    $arr = [ 0, 1, 2, 3, 4, 5 ];
    var_dump($arr);
    echo "<br/>";

    //Single Dimension
    $arr1 = [
        "John" => "john@gmail.com",
        "Jenny" => "jenny@gmail.com",
        "Ajit" => "ajit@gmail.com"

    ];
    var_dump($arr1);
    echo "<br/>";

    //Multi Dimension with Indexed
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
        echo "]" . PHP_EOL;
    }
    echo "<br/>";

    //Multi Dimention with Associative
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
            echo $values . PHP_EOL;
            echo "<br/>";
        }
    }

    //Access all the Key Value Pair. Key is String and Values are Arrays
    foreach($arr3 as $key => $valueArray){
        echo "Values for Key: $key" . PHP_EOL;
        foreach( $valueArray as $values){
            echo $values . PHP_EOL;
            echo "<br/>";
        }
    }

echo "<hr/>";

// Array Function unset
    /*    
        unset() : this function is use to remove or delete value using index with array.
        Note: unset function is delete value of given index and remember that index, if delete index is last index then new create index is [last index + 1], all this operation is done in indexed array but associated array will not be affected.
    */
    $arr = [1, 2, 3, 4, 5];
    print_r($arr);
    echo "<br/>";

    unset($arr[4]);
    print_r($arr);
    echo "<br/>";

    $arr[] = 5;
    print_r($arr);
    echo "<br/>";
    /*
        Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
            [3] => 4
            [4] => 5
        )

        Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
            [3] => 4
        )

        Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
            [3] => 4
            [5] => 5
        )
    */

    $arr1 = [ "first" => 1, 2, 3, 4, "last" => 5];
    print_r($arr1);
    echo "<br/>";

    unset($arr1["last"]);
    print_r($arr1);
    echo "<br/>";

    $arr1["last"] = 5;
    print_r($arr1);
    echo "<br/>";

    $arr1[] = 6;
    print_r($arr1);
    /*
        Array
        (
            [first] => 1
            [0] => 2
            [1] => 3
            [2] => 4
            [last] => 5
        )

        Array
        (
            [first] => 1
            [0] => 2
            [1] => 3
            [2] => 4
        )

        Array
        (
            [first] => 1
            [0] => 2
            [1] => 3
            [2] => 4
            [last] => 5
        )

        Array
        (
            [first] => 1
            [0] => 2
            [1] => 3
            [2] => 4
            [last] => 5
            [3] => 6
        )
    */    
echo "<hr/>";

// Sort arrays
    //sort() and rsort()
    //Indexed Array
    $arr = [ 5, 2, 4, 3, 0, 1];
    print_r( $arr );
    sort($arr);
    print_r( $arr );
    rsort($arr);
    print_r( $arr );

    //asort() and arsort()
    //Associative Array
    $arr1 = [ "3" => "John", "1" => "Ajit", "2" => "Roger"];
    echo "Associative Array Sort by Values" . PHP_EOL;
    print_r( $arr1 );
    asort($arr1);
    print_r( $arr1 );
    arsort($arr1);
    print_r( $arr1 );


    //ksort() and krsort()
    //Associative Array
    echo "Associative Array Sort by Key" . PHP_EOL;
    print_r( $arr1 );
    ksort($arr1);
    print_r( $arr1 );
    krsort($arr1);
    print_r( $arr1 );

echo "<hr/>";

// Copy Arrays
    //Sample 1
    $arr = [0, 1, 2, 3, 4, 5];
    $arr1 = $arr;
    var_dump($arr1);

    //Sample 2
    $arr2 = [];
    foreach($arr as $values){
        $arr2[] = $values;
    }
    var_dump($arr2);

    //Sample 3
    $arr3 = [ "3" => "John", "1" => "Ajit", "2" => "Roger"];
    $arr4 = $arr3;
    var_dump($arr4);

    //Sample 4
    $arr5 = [];
    foreach($arr4 as $key => $value){
        $arr5[$key] = $value;
    }
    var_dump($arr5);

echo "<hr/>";

// Convert string to array
    $student = "lipu,sipu,babu,kalu,dipu";
    $arr_student = explode(",",$student);
    print_r($arr_student);

    // i want only 2 index to make an array
    $arr_student = explode(",",$student,2);
    print_r($arr_student);

    // i want only 4 index to make an array
    $arr_student = explode(",",$student,4);
    print_r($arr_student);
    
// Convert array to string
    $arr_student = explode(",",$student);
    $string_student = implode(",",$arr_student);
    print($string_student);

echo "<hr/>";

### Exercise 1 
/*
    1) Define Indexed Array and Associative Array.
    2) Use Employee Details as Array
    3) Display using foreach
*/
    // indexed array
    $details = [
        "name",
        "homwtown",
        "job",
        "salary"
    ];
    $info = [
        "Partha",
        "Puri",
        "Web developer",
        "25000"
    ];
    // make associative array using foreach
    foreach( $details as $key ){
        foreach( $info as $value){
            break;
        }
        $employee[$key] = $value; 
    }
    foreach ($employee as $key => $value) {
        # code...
        echo "$key => $value <br/>";
    }

echo "<hr/>";

### Exercise 2
    /*
        1) Write a Foreach Loop to read this array

        [
        "planets" =>
            [
            "sun" => [ "temp" => "hot", "color" => "red" ],
            "moon" => [ "temp" => "cold", "color"  => "white" ],
            "earth" => [ "temp" => "normal", "color" => "blue" ]
            ]
        ]	


    */

    $solar_system = [
        "planets" =>
            [
                "sun" => [ "temp" => "hot", "color" => "red" ],
                "moon" => [ "temp" => "cold", "color"  => "white" ],
                "earth" => [ "temp" => "normal", "color" => "blue" ]
            ]
        ];
    foreach ($solar_system as $key => $value) {
        # code...
        foreach ($value as $key_1 => $value_1) {
            # code...
            foreach ($value_1 as $key_2 => $value_2) {
                # code...
                echo "$key_2 => $value_2 <br/>";
            }
        }
    }

echo "<hr/>";
echo "</pre>";
?>
    <hr/>
        <button><a href="home.php"> Next </a></button>
    <hr/>
    <hr/>
        <button><a href="assingment.php"> ASSIGNMENT </a></button>
    <hr/>