<?php
### TOPIC NAME: Date and Time ###

/*
	1. Getting the Timestamp and Date 					Line = 20
		1.1 date()
		1.2 time() 
	2. Converting the Timestamp 						Line = 57
		2.1 getdate()
	3. Common Use Case of Date and Timestamp 			Line = 69
		3.1 strtotime()
		3.2 date_create('parameter')->format('d-m-y')
	4. Exercise 1 - Print Australia Current Time 		Line = 105
		4.1 date_default_timezone_set()
		4.2 date_default_timezone_get()
	5. Exercise 2 - Show the TimeDifference				Line = 115
	6. ASSIGNMENT 										Line = 123
*/

# Getting the Timestamp and Date
	    //date(format, timestamp)
    /*
        d - Represent day of the month; two digits with leading zeros (01 or 31)
        D - Represent day of the week in text as an abbreviation (Mon to Sun)
        m - Represent month in numbers with leading zeros (01 or 12)
        M - Represent month in text, abbreviated (Jan to Dec)
        y - Represent year in two digits (08 or 14)
        Y - Represent year in four digits (2008 or 2014)
     */
    echo "Current Date: ". date("d-m-y")."<br/>";
    echo "Current Date: ". date("D-M-Y")."<br/>";
    echo "<hr/>";

    /*
        h - Represent hour in 12-hour format with leading zeros (01 to 12)
        H - Represent hour in in 24-hour format with leading zeros (00 to 23)
        i - Represent minutes with leading zeros (00 to 59)
        s - Represent seconds with leading zeros (00 to 59)
        a - Represent lowercase ante meridiem and post meridiem (am or pm)
        A - Represent uppercase Ante meridiem and Post meridiem (AM or PM)
     */
    echo "Current Time: ".date('h:i:s a')."<br/>";
    echo "Current Time: ".date('H:i:s A');
    echo "<hr/>";

    //Milli Seconds
	$time = time();    
	echo "milisecond: ".$time;
	echo "<hr/>";

    //Format timestamp
    echo "Current: " . date("d-m-y H:i:s:A") . "<br/>";
    $time = time() + 1000;
    echo "Current + 1000: " . date("d-m-y H:i:s:A", $time) . PHP_EOL;
    echo "<hr/>";

# Converting the Timestamp
    // getdate() gives you an array of all information about time and date.
    $dateArr = getdate();
    echo "<pre>";
    print_r($dateArr);
    echo "</pre>";

    // to print the current year
    echo "Current Year: ".getdate()['year']."<br/>";
    echo "Current Year: ".date('Y');
    echo "<hr/>";

# Common Use Case of Date and Timestamp
    /*
		strtotime() -> convert date or time to milliseconds
		date_create('now')->format('y-m-d')	=> current date create
		date_create('+1 day')->format('y-m-d')	=> current date +1 means 'tomorrow' create
		date_create('-1 day')->format('y-m-d')	=> current date -1 means 'yesterday' create
    */
    // Convert time to milliseconds
    // Yesterday liences
    $time = strtotime(date_create("-1 day")->format('d-m-y'));
    echo "Milliseconds of yesterday: ".$time."<br/>";
    $liences_date = strtotime(date_create('now')->format('d-m-y'));
    if ($time <= $liences_date) {
    	# code...
    	echo "You are ready to use."."<br/>";
    }else{
    	echo "Your liences expired."."<br/>";
    }   

    // Tommorow liences
    $time = strtotime(date_create("+1 day")->format('d-m-y'));
    echo "Milliseconds of tommorow: ".$time."<br/>";
    $liences_date = strtotime(date_create('now')->format('d-m-y'));
    if ($time <= $liences_date) {
    	# code...
    	echo "You are ready to use."."<br/>";
    }else{
    	echo "Your liences expired."."<br/>";
    }   
    echo "Current Date: ".date_create("now")->format('d-m-y')."<br/>";
    echo "-1 Date: ".date_create("-1 day")->format('d-m-y')."<br/>";
    echo "-2 Date: ".date_create("-2 day")->format('d-m-y')."<br/>";
    echo "-5 Date: ".date_create("-5 day")->format('d-m-y')."<br/>";
    echo "+5 Date: ".date_create("+5 day")->format('d-m-y')."<br/>";
    echo "<hr/>";

# Exercise 1 - Print Australia Current Time
    echo date_default_timezone_get()."<br/>";

    date_default_timezone_set('Australia/Melbourne');
    echo date('d-m-y H:i:s A')."<br/>";

    date_default_timezone_set('Asia/Kolkata');
    echo date('d-m-y H:i:s A')."<br/>";
    echo "<hr/>";

# Exercise 2 - Show the TimeDifference
	$start = date_create('21-03-10 09:13:50');
	$end = date_create('21-03-11 10:20:40');
	$diff = date_diff($end,$start);
	echo "<pre>";
	print_r($diff);
?>
<hr/>
<button><a href="assignment.php"> ASSIGNMENT </a></button>
<hr/>