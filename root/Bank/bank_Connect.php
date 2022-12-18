<?php
//variable to log in 
$host = "localhost"; 
$username = "root"; 
$user_pass = "usbw"; 
$database_in_use = "banking"; 

//log in
$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

echo $mysqli->host_info . "<br>";
?> 