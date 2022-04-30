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
$email = $_POST['email'];

$pass= $_POST['password'];

$sql = "SELECT * FROM login WHERE email = '$email' and password= '$pass' and usertype= 'employer'";
$sql2 = "SELECT log_id FROM login WHERE email = '$email' and password= '$pass'";
$result2 = mysqli_query($conn,$sql2);
$row1 = mysqli_fetch_row($result2);
$logid=implode($row1);






$sql1 = "SELECT eid from employer where log_id = '$logid'";

$result = mysqli_query($conn,$sql);
$result1 = mysqli_query($conn,$sql1);


$count = mysqli_num_rows($result);
$row = mysqli_fetch_row($result1);
$eid=implode($row);


$sql4 = "SELECT ename from employer where log_id = '$logid'";
$result4 = mysqli_query($conn,$sql4);
$row4 = mysqli_fetch_row($result4);
$ename=implode($row4);

 
if ($count > 0) {
	$_SESSION['email'] = $email;
	$_SESSION['eid']= $eid ;
	$_SESSION['elogid']=$logid;
	$_SESSION['ename']=$ename;

	$_SESSION['status'] = True;
		header('location:/jobportal/employee/profile.php');
	


	

}
else{
	echo "<script>alert 'incorrect'</script>";
	header('location:login1.html');
}

?>