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

if 	(!isset($_SESSION['eid']))
{
	echo "please log in as employer";
}
else
{
$eid=$_SESSION['eid'];
$desig=$_POST['desig'];
$vacno=$_POST['vacno'];
$desc=$_POST['jobdesc'];
$exp=$_POST['exp'];
$money=$_POST['money'];
$salary=$_POST['pay'];
$fnarea=$_POST['fnarea'];
$countryid=$_POST['country'];
$stateid=$_POST['state'];
$cityid=$_POST['city'];
$indtype=$_POST['indtype'];
$ug=$_POST['ugcourse'];
$pg=$_POST['pgcourse'];
$profile=$_POST['profile'];
$type=$_POST['type'];
$date=date('dd-MM-yyyy');
$pay=$money." ".$salary;

$location=.$cityid",".$stateid.",".$countryid;

$query4="INSERT INTO jobs (eid,title,jobdesc,vacno,experience,basicpay,fnarea,location,industry,ugqual,pgqual,profile,postdate,type )VALUES ('$eid','$desig','$desc','$vacno','$exp','$pay','$fnarea','$location','$indtype','$ug','$pg','$profile','$date','$type')";

	if (!mysqli_query($conn,$query4))
	{
	 echo("Error description: " . mysqli_error($conn));
	}
	else{
	    header('location:profile.php?msg=jobposted');
	}
}
?>