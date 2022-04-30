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

$jobid=$_GET['jid'];
$jsid=$_SESSION['jsid'];
if(!$jsid){
    header("Location:login1.html");
}
else{
$date=date("d-m-y");

$q1=mysqli_query($conn,"Delete from application where job_id =$jobid AND user_id = $jsid");

    echo " <div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Note:</strong> Application canceled for this job sucessfully!</p>
        </div>";


}
?>