<!-- Assingment -->
<h2>Employee Information:</h2>

<h4>1) Print the Employee Details</h4>
<?php
    $name = 'Sandy';
    $age = 25;
    $j_date = '01-10-17';
    $mail = 'sandy@hotmail.com';
    $address = 'setcor 2, UK';
    $working_work = 8.5;
    $marital_status = 'single';
    $salary = 822.80;
    $deduction = 50.30;
    echo "Employee name is $name and age is $age, Joining date is $j_date".PHP_EOL;
?>
<hr/>
<h4>2) Working Hours</h4>
<?php
    $emp_working_hour = 4.5;
    $daily_hour = $working_work - $emp_working_hour;
    echo "Employee's Working work for daily: $daily_hour".PHP_EOL;
?>
<hr/>
<h4>3) Employee Email ID and Address</h4>
<?php
    echo 'Employee is working address is '.$address.' and mail is '.$mail.PHP_EOL;
?>
<hr/>
<h4>4) Check if Employer is Married or not</h4>
<?php
    $status = ( $marital_status === 'single') ? 'Not Married' : 'Married';
    echo "Employer is $status";
?>
<hr/>
<h4>5) Print the Employer Last Salary Drawn using Doubles</h4>
<?php
    $in_hand = $salary - $deduction;
    echo "in-hand salary: ".$in_hand;
?>
<hr/>