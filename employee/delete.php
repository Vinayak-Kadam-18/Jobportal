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
session_start();
if(!isset($_SESSION['eid'])){
    header('location:../login.php?msg=please_login');
}
elseif(!isset($_GET['jid'])){
    header('location:managejobs.php?msg=selectjob');
}
$query = "DELETE FROM jobs WHERE jobid=$_GET[jid]";
$result = mysqli_query($conn,$query);
if($result) {
    echo "<h3 style='color: green;'> Selected Job Is Successfully Deleted</h3>";
}
else{
    echo "<h3 style='color: red;'> Failed to delete the selected job!</h3>";
}
?>