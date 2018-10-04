<?php
if(isset($_POST['Submit'])){
    $college = $_POST['college'];
    $city = $_POST['city'];
    $fname = $_POST['fname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $checked_count = count($_POST['check_list']);
    $team = $_POST['team'];
    $pname = count($_POST['pname']);
    $pphone = count($_POST['pphone']);
    $pemail = count($_POST['pemail']);
    $event = count($_POST['event']);
    $host = "localhost:8080";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "test";
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(!empty($college) || !empty($city) || !empty($fname) || !empty($mobile) || !empty($email) || !empty($check_list) || !empty($team) || !empty($pname) || 
    !empty($pphone) || !empty($pemail) || !empty($event))
    {
    if(mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_error() .') '
           .mysqli_connect_error());
    }
    else{
    
    $sql = "INSERT INTO registrations(college,city,fname,mobile,email,check_list,team,pname,pphone,pemail,event) VALUES ('','$college','$city','$fname','$mobile','$email','$check_list','$team','$pname','$pphone','$pemail','$event','')";
    }
    //echo $sql;
    //die($sql);
    if ($conn->query($sql)) {
           // $sql = "SELECT COUNT(*) AS COUNTS FROM registrations WHERE event_name='$ename';";
        echo "new record is inserted successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
}
?>