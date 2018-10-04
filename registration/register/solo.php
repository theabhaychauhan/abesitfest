<?php

    $college = filter_input(INPUT_POST,'college');
    $city = filter_input(INPUT_POST,'city');
    $fname = filter_input(INPUT_POST,'fname');
    $mobile = filter_input(INPUT_POST,'mobile');
    $email = filter_input(INPUT_POST,'email');
    $team_events = $_POST['team_events']; 
    if(!empty($college) || !empty($city) || !empty($fname) || !empty($mobile) || !empty($email) || !empty($team_events))
    {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "test";

        $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

        if(mysqli_connect_error())
        {
            die('Connect Error ('. mysqli_connect_errno() .') '
           .mysqli_connect_error());
        }
        else
        {
            for($i=0;$i<sizeof($team_events);$i++)
            {
                $sql = "INSERT INTO solo (college,city,fname,mobile,email,events) values ('$college','$city','$fname','$mobile','$email','$team_events[$i]')";
                if ($conn->query($sql))
                {
                    echo "new record is inserted successfully";
                }
                else
                {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
        $conn->close();
    }
    else{
        echo "Some Fields seem to be ommited";
    }
?>




