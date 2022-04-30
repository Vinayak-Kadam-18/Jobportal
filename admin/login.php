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

$sql = "SELECT * FROM admin WHERE adm_name = '$email' and adm_pass= '$pass'";

$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);


 
if ($count > 0) {
	
	$_SESSION['email'] = $email;



		header('location:/jobportal/admin/home.php');
}
else{
	echo "<script>alert 'incorrect'</script>";
	header('location:login1.html');
}

?>