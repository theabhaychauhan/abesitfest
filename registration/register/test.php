<?php
$user="root";
$pass="";
$db="test";

$db = new mysqli('localhost:8080',$user,$pass,$db) or die("unbable to connect");

echo "hey bro";

?>