<?php

    $college = filter_input(INPUT_POST,'college');
    $city = filter_input(INPUT_POST,'city');
    $fname = filter_input(INPUT_POST,'fname');
    $mobile = filter_input(INPUT_POST,'mobile');
    $email = filter_input(INPUT_POST,'email');
    $team_events = array($_POST['team_events']);
    $team = filter_input(INPUT_POST,'team');
    $pname = filter_input(INPUT_POST,'pname');
    $pphone = filter_input(INPUT_POST,'pphone');
    $pemail = filter_input(INPUT_POST,'pemail');
    $event = filter_input(INPUT_POST,'event');
    if(!empty($college) || !empty($city) || !empty($fname) || !empty($mobile) || !empty($email) || !empty($check_list) || !empty($team) || !empty($pname) || 
    !empty($pphone) || !empty($pemail) || !empty($event))
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
            $sql = "INSERT INTO registrations (college,city,fname,mobile,email,check_list,team,pname,pphone,pemail,event) values ('$college','$city','$fname','$mobile','$email','$team_events','$team','$pname','$pphone','$pemail','$event')";
            if ($conn->query($sql))
            {
                echo "new record is inserted successfully";
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        $conn->close();
    }
    else{
        echo "Some Fields seem to be ommited";
    }
?>




