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

$sql = "SELECT * FROM login WHERE email = '$email' and password= '$pass'and usertype= 'jobseeker'";

$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

$sql2 = "SELECT log_id FROM login WHERE email = '$email' and password= '$pass'";
$result2 = mysqli_query($conn,$sql2);
$row1 = mysqli_fetch_row($result2);
$logid=implode($row1);
$_SESSION['logid']=$logid;
 
if ($count > 0) {
	
	$_SESSION['email'] = $email;

	$sql3 = "SELECT user_id FROM jobseeker WHERE log_id='$logid'";
	$result3 = mysqli_query($conn,$sql3);
	$row2 = mysqli_fetch_row($result3);
		$_SESSION['jsid']=implode($row2);


		header('location:../home.php');
}
else{
	echo "<script>alert 'incorrect'</script>";
	header('location:login1.html');
}

?>