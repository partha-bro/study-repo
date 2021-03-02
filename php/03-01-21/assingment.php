<h1>Assignemnt</h1>

<h3> Practical Test - Print Students details from File to HTML Table</h3>

<h4> 1) Create CSV Files with Student details</h4>
<?php
    // Path of student csv from current folder
    $file_path = 'testfolder/student.csv';

    // Create student.csv file if file does not exist and add some details 
    file_put_contents($file_path, "john,4,male\n");
    file_put_contents($file_path, "judy,6,female\n",FILE_APPEND);
    file_put_contents($file_path, "jack,11,male\n",FILE_APPEND);

    // Display the data of csv file
    $content = file_get_contents($file_path);
    echo "<pre>";
    echo "$content";
    echo "</pre>";
?>
<h4> 2) Each line in CSV is one Student Details.</h4>

<h4> 3) Read the CSV File and Store the Students details in Array</h4>

<h4> 4) Iterate the Array and Print the Students Table in HTML Format.</h4>
<table cellpadding="10" cellspacing="0" border="1">
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Class</th>
        <th>Gender</th>
    </tr>
    <?php
        $count = 1;
        $student_csv = file($file_path);
        foreach ($student_csv as $key => $value) {
            # code...
            
            $data[] = str_getcsv($value);
        }
        // echo "<pre>";
        // print_r($data);
        foreach ($data as $key => $value) {
            # code...
            echo "<tr>";
            echo "<td>$count</td>";
            foreach ($value as $k => $v) {
                # code...
                echo "<td>".strtoupper($v)."</td>";

            }
            $count++;
            echo "</tr>";
        }
    ?>
</table>