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

$email=$_POST['useremail'];
$password=$_POST['pass1'];
$name=$_POST['uname'];
$mobile=$_POST['mobno'];
$experience=$_POST['experience'];
$skills=$_POST['skills'];
$ug=$_POST['ugcourse'];
$pg=$_POST['pgcourse'];
$countryid=$_POST['country'];
$stateid=$_POST['state'];
$cityid=$_POST['city'];
$location="";
$type="jobseeker";
$location=$cityid.",".$stateid.",".$countryid;


$query4="INSERT INTO login (email,password,usertype,status) VALUES ('$email','$password','$type',1)";
$result1 = mysqli_query($conn,$query4) or die("Cant Register , The user email may be already existing");
$query5 =  "INSERT INTO jobseeker (log_id,name,phone,location,experience,skills,basic_edu,master_edu)
                VALUES ((SELECT log_id FROM login WHERE email='$email'),'$name','$mobile','$location','$experience','$skills','$ug','$pg')";


if (!mysqli_query($conn,$query5))
{
 echo("Error description: " . mysqli_error($conn));
}
else{
    header('location:/jobportal/jobseeker/login1.html');
     
            
            }


?>