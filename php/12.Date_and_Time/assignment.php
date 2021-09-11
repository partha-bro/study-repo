<h1>Assignemnt</h1>

<h2> Practical Test - Simple Date Website</h2>

<h4> Build a Webpage that shows current time.</h4>

<h4> Populate Dropdown with Timezone</h4>

<h4> When selected display time from that timezone.</h4>

    <fieldset>
        <legend>
            &nbsp;&nbsp;Current timezone&nbsp;&nbsp;
        </legend>

        <form method="post">
            <label>TimeZone: </label>
            <select name="timezone">
                <option selected="selected">Choose your time zone</option>
                <option value="Asia/Kolkata">Asia/Kolkata</option>
                <option value="Australia/Melbourne">Australia/Melbourne</option>
                <option value="Europe/Berlin">Europe/Berlin</option>
            </select>
            <input type="submit" name="submit" value="click">
        </form>
    </fieldset>

<?php
    if (isset($_POST['submit'])) {
        # code...
        if ($_POST['timezone'] == 'Asia/Kolkata') {
            # code...
            date_default_timezone_set($_POST['timezone']);
            $time = "Current Time: ".date('d-M-Y H:i:s A');
        }elseif ($_POST['timezone'] == 'Australia/Melbourne') {
            # code...
            date_default_timezone_set($_POST['timezone']);
            $time = "Current Time: ".date('d-M-Y H:i:s A');
        }elseif ($_POST['timezone'] == 'Europe/Berlin') {
            # code...
            date_default_timezone_set($_POST['timezone']);
            $time = "Current Time: ".date('d-M-Y H:i:s A');
        }else{
            $time = "You are not selected any timezone";
        }
    }else{
        $time = "You are not selected any timezone";
    }

    echo "<fieldset style='background-color:red; color:white;' >
        <legend style='background-color:white; color:black;'>
            <b>&nbsp;&nbsp;Current time&nbsp;&nbsp;</b>
        </legend>
            <marquee><h4>".$time."</h4></marquee>
    </fieldset>";