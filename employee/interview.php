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

$hr = $_POST['hrs'];
$min = $_POST['min'];
$type = $_POST['typ'];
$time = $hr.':'.$min." ".$type;
$dt = $_POST['date'];
 $q5=mysqli_query($conn,"UPDATE `selection` SET `meet_date`='$dt', `meet_time`='$time',`readmsg`='0' where job_id=$job_id and user_id= $user_id");
 if($q5){
 	?><script>
	
 	if (window.confirm('Really go to another page?'))
{
	<?php header('Location: ' . $_SERVER['HTTP_REFERER']); ?>
}

else
{
    // They clicked no
}
</script>
<?php }
?>