<?php
    session_start();
    $db = mysqli_connect("localhost:8080", "root", "","test");
    if($conn->connect_error)
    {
        die("Connection failed: ".$conn->connect_error);
    }
    if(isset($_POST['hogya'])){
        $ $college = mysql_real_escape_string($_POST['college']);
        $city = mysql_real_escape_string($_POST['city']);
        $fname = mysql_real_escape_string($_POST['fname']);
        $mobile = mysql_real_escape_string($_POST['mobile']);
        $email = mysql_real_escape_string($_POST['email']);
        $checked_count = mysql_real_escape_string(count($_POST['check_list']));
        $team = mysql_real_escape_string($_POST['team']);
        $pname = mysql_real_escape_string(count($_POST['pname']));
        $pphone = mysql_real_escape_string(count($_POST['pphone']));
        $pemail = mysql_real_escape_string(count($_POST['pemail']));
        $event = mysql_real_escape_string(count($_POST['event']));

        $sql = "INSERT INTO registrations(college,city,fname,mobile,email,check_list,team,pname,pphone,pemail,event) VALUES('',':college',':city',':fname',':mobile',':email',':check_list',':team',':pname',':pphone',':pemail',':event','')";
        
        mysqli_query($db, $sql);
    }
?>