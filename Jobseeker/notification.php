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
?>
<!DOCTYPE html>
<html>
<head>
	<script></script>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body onload="myfunc()" style='font-size:17px;font-family:times'>
	<script>
function myfunc() {
  <?php
  $q =mysqli_query($conn,"UPDATE selection SET readmsg = '1' WHERE user_id =$_SESSION[jsid]");
  ?>
}
</script>
 <div class="container "  style="margin-top: 50px">
	<?php 

 $_SESSION['notifycount']=0;
$q1=mysqli_query($conn,"select * from selection where user_id =$_SESSION[jsid]");

if($q1) {
	while ($row = mysqli_fetch_array($q1)) 
 	{
 	$job = $row['job_id'];
 	$comp=$row['emp_id'];
 	$q2=mysqli_query($conn,"select title from jobs where jobid =$row[job_id]");
 	$row1 = mysqli_fetch_row($q2);
    $title=implode($row1);

    $q3=mysqli_query($conn,"select ename from employer where eid =$row[emp_id]");
 	$row2 = mysqli_fetch_row($q3);
    $ename=implode($row2);
 	
 ?>

  
  <div class="alert alert-success">
  	<?php
    echo "<strong>Congratulations! </strong>You have been selected for " .$title. " position by " .$ename. "&nbsp;&nbsp&nbsp&nbsp";

   ?>
    </div>

    <?php echo "<br>" ;

          $q5=mysqli_query($conn,"SELECT `meet_time` FROM `selection` where job_id =$row[job_id] and user_id =$_SESSION[jsid]");
          $row5 = mysqli_fetch_row($q5);
          $time=implode($row5);

           $q6=mysqli_query($conn,"SELECT `meet_date` FROM `selection` where job_id =$row[job_id] and user_id =$_SESSION[jsid]");
          $row6 = mysqli_fetch_row($q6);
          $dt=implode($row6);
      
          if($time==NULL){
          }else{
            echo  "<div class='alert alert-dismissable alert-info'>";
            echo "Your interview have been schedulded on <strong>".$time."</strong> at <strong>".$dt."</strong> for " .$title. " position by " .$ename. ". Please kindly check your email for meeting link!&nbsp;&nbsp&nbsp&nbsp";
          }
    }
   }
    else{
    	echo "no notifications";
    }
    ?><br>
    <?php
    {



    }

 

?>
</div>
<div class="card" style="width: 18rem;">
  
</body>
</html>

