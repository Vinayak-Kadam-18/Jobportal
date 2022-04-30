<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection1
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "hello its working";
$user_id=$_GET['user'];
$emp_id=$_GET['emp_id'];
$job_id=$_GET['jobid'];

$date=date('d-m-y');




$q=mysqli_query($conn,"select * from selection where job_id=$job_id and user_id= $user_id ");
if(mysqli_num_rows($q)>0){
        $q5=mysqli_query($conn,"insert into selection (time) VALUES ($time) where job_id=$job_id and user_id= $user_id");  

    echo " <div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Sorry!</strong> This user is already Selected for the job</p>
        </div>";
}else{
    $q2=mysqli_query($conn,"insert into selection(user_id,emp_id,job_id,date,status) VALUES ($user_id,$emp_id,$job_id,'$date',1)");
    if($q2){
            $q3=mysqli_query($conn,"update application set status = 1 where job_id=$job_id and user_id= $user_id");

        echo " <div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Success!</strong> This user is succesfully selected for the job</p>
        </div>";
    }
    else{
        echo " <div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Sorry!</strong> Something Went Wrong! Try Again</p>
        </div>";
    }
}
?>
