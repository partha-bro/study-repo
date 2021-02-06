<!DOCTYPE html>
    <html>
        <head>
            <title>Assignment | Problem</title>
        </head>
        <body>
            <h1> Student Details</h1>
        <hr/>
            <h3>1) Create a Students Array with 3 students</h3>
            <h3>2) Provide the details: ID, Name, Age and Class</h3>
            <h3>3) Fill up the Array and Display in HTML Page</h3>
            <h3>4) Use Table to display the Students details.</h3>
        <hr/>
            
        <table cellpadding=0 cellspacing=0 border=2 style="height:25px weidt:30px">
            <tr>
                <th> No. </th>
                <th> ID </th>
                <th> Name </th>
                <th> Age </th>
                <th> Class </th>
            </tr>
            <?php
                $student = [ 
                    1 => ["id" => "06","name" => "ram","age" => 15,"class" => 9 ],
                    2 => ["id" => "44","name" => "sita","age" => 14,"class" => 8 ],
                    3 => ["id" => "25","name" => "naman","age" => 16,"class" => 10 ],
                ];
                
                foreach ($student as $key => $detail) {
                    # code...
                    echo "<tr/>";
                    echo "<td>$key</td>";
                    foreach ($detail as $value) {
                        # code...
                        echo "<td> $value </td>";
                    }
                    echo "</tr>";
                }
            ?>

        </table>
        </body>
    </html>