<?php
$db_host = "etutoring123-server.mysql.database.azure.com";
$db_username = "dqvvxwygwc";
$db_password = "725A5XRF44TRATWR$";
$db_name = "e_tutoring";

// create connection
$conn = new mysqli($db_host,$db_username,$db_password,$db_name);


//check connection

if($conn-> connect_error){
    die("connection failed");
}

?>
