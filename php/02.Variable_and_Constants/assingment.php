<h1>Assignemnt</h1>

<h4> Define and Assign $firstname and $lastname variable with your name.</h4>
<?php
    $firstname = 'Partha';
    $lastname = 'parida'; 
    echo '$firstname = Partha <br/>';
    echo '$lastname = parida'; 
    echo '<hr/>';
?>
<h4> Print the firstname, lastname using echo / print.</h4>
<?php
    echo "First name is ".$firstname." and Last name is ".$lastname." <br/> using concatination";
    echo '<hr/>';
?>
<h4> Embed the variable inside the quotes.</h4>
<?php
    echo "First name is $firstname and Last name is $lastname <br/> variable use in double quote";
    echo '<hr/>';
?>
<h4> Define a function to print the name.</h4>
<?php
    function printName($name){
        echo "Name Inside the value $name";
        echo '<hr/>';
    }
    printName('Arjun');
?>
<h4> Show PHP Variables are case sensitive.</h4>
<?php
    $num = 12;
    $NUM = 13;
    if($num == $NUM){
        echo "Case is not sensitive.";
    }else{
        echo "Case is sensitive.";
    }
    echo '<hr/>';
?>
<h4> Create a local variable outside the function and define same inside the function. Display the variable.</h4>
<?php
    $num = 'outsideVal';
    function fun(){
        $num = 'insideVal';
        echo "Inside the function: $num <br/>";
    }
    fun();
    echo "Outside the function: $num";
    echo '<hr/>';
?>
<h4> Define and show the Global Variable.</h4>
<?php
    global $energy;
    $energy = 'solar energy';
    function energy(){
        echo "Vitamin D source is ".$GLOBALS['energy'];
    }
    energy();
    echo '<hr/>';
?>
<h4> Define and show the Static Variable.</h4>
<?php
    function counter(){
        static $count = 1;
        echo "static count number: $count <br/>";
        $count++;
    }
    for ($i=1; $i<=5; $i++ ){
        counter();
    }
    echo '<hr/>';
?>
<h4> Show a Super Global Variable.</h4>
<?php
    echo "Infomation: ".$_SERVER['HTTP_USER_AGENT'];
    echo '<hr/>';
?>
<h4> Define and show Variable of Variables.</h4>
<?php
    $time = time();
    $bad = 'time';
    echo $$bad;
    echo '<hr/>';
?>
<h4> Use the isset method using tenary operators.</h4>
<?php
    echo isset($bad) ? 'value is present' : 'value is not present';  
    echo '<hr/>';
?>
<h4> Define and Display a Constant.</h4>
<?php
    const PIE = 3.141;
    echo "Constant value of PIE: ".PIE;
    echo '<hr/>';
?>
<h4> Show magic constant.</h4>
<?php
    echo "__DIR__: ".__DIR__;
    echo "__FILE__: ".__FILE__;
    echo '<hr/>';
?>