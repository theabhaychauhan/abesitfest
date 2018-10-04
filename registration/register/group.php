<?php

    $college = filter_input(INPUT_POST,'college');
    $tname = filter_input(INPUT_POST,'tname');
    $fname = filter_input(INPUT_POST,'fname');
    $mobile = filter_input(INPUT_POST,'mobile');
    $email = filter_input(INPUT_POST,'email');
    $team_event = filter_input(INPUT_POST,'team_events');
    $pname = $_POST['pname'];
    $pphone = $_POST['pphone'];
    $pemail = $_POST['pemail']; 
    if(!empty($college) || !empty($team) || !empty($tname) || !empty($mobile) || !empty($email) || !empty($team_event) || !empty($team) || !empty($pname) || 
    !empty($pphone) || !empty($pemail))
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
            for($i=0;$i<sizeof($pname);$i++)
            {
            $sql = "INSERT INTO groups (college,team,tname,mobile,email,event,pname,pphone,pemail) values ('$college','$tname','$fname','$mobile','$email','$team_event','$pname[$i]','$pphone[$i]','$pemail[$i]')";
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




