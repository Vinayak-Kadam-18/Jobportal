<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$date=date("d-m-Y");
$a=strval($date);

$query ="CREATE EVENT del_meet
    ON SCHEDULE EVERY 1 MINUTE
     DO
 		UPDATE selection  SET `meet_date`=NULL,`meet_time`=NULL WHERE `meet_date` < '".strval(date('d-m-Y')). " ' " ;
 mysqli_query($conn,$query);
 ?>