<!doctype html>
<html>
<head>
    <title>
        Control Structures
    </title>
</head>
<body>

    <h1>Exercise 1: Display Odd and Even Numbers</h1>
    <hr/>
    <h2>Logic</h2>
    <h3>1) Display Even and Odd Numbers</h3>
    <h3>2) Define the MAX_NUMBERS in the namespace file</h3>
    <h3>3) Write the for loop to loop for MAX_NUMBERS times</h3>
    <h3>4) Print even and odd numbers in a table format.</h3>
    <hr/>
    <?php
        include 'namespaceMaxNumber.php'
        // $max_num = namespaceMaxNumber\MAX_NUMBERS;
    ?>
    <table border=1 cellspacing=0 cellpadding=3 align='center'>
        <tr>
            <th>Number</th>
            <th>Even</th>
            <th>Odd</th>
        </tr>

        <?php
            for ($i=1; $i <= namespaceMaxNumber\MAX_NUMBERS; $i++) { 
                # code...
                echo '<tr>';
                if ($i%2 == 0) {
                    # code...
                    echo "<td>$i</td><td style='color:red'>YES</td><td>NO</td>";
                } else {
                    echo "<td>$i</td><td>NO</td><td style='color:red'>YES</td>";
                }
                echo '</tr>';
            }

        ?>
    </table>
</body>
</html>
