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

$query = "DELETE FROM jobseeker WHERE user_id=$_GET[jsid]";
$result = mysqli_query($conn,$query);
if($result) {
    echo "<h3 style='color: green;'> Selected Jobseeker Is Successfully Deleted</h3>";
}
else{
    echo "<h3 style='color: red;'> Failed to delete the selected jobseeker!</h3>";
}
?>