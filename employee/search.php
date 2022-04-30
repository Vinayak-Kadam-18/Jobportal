<?php
session_start();





?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@500&display=swap" rel="stylesheet">
 
  <title></title>
  <style type="text/css" media="screen">
    .colors1{
  color: #100690 !important;
}
  </style>
</head>
<body>
  <script type="text/javascript">
   $(function(){
      $("#header").load("/jobportal/employee/navbar_emp.php");
    });
    </script>
    <div id="header"></div>
<!-- /.container-fluid -->
<br><br><br><br>
<div class="container">
  <div class="row">
  <div class="col-sm-10 ">
	<form action="" method="GET" accept-charset="utf-8">
		
		<input class="form-control " name="key" type="text">
  </div>
    <div class="col-sm-2 ">

		<button class="btn btn-default" type="submit">Search</button>
  </div></div>
	</form>
</div>

<?php

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
if(isset($_GET['key']))
{
	$keyword1= $_GET['key'];


if($keyword1=="" ){
    echo " <br><br><div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Oops!</strong> Please enter a search term</p>
        </div>";

}
else{
$condition = '';
$keyword= explode(" ",$_GET['key']);
foreach ($keyword as $text) {
	
	$condition .="skills LIKE '%" .mysqli_real_escape_string($conn,$text) . "%' AND ";
	}
	$condition = substr($condition, 0, -4);


$query = "select * from jobseeker where " . $condition ;
$row1 = mysqli_query($conn, $query);

if (mysqli_num_rows($row1) == 0)
		{
		    echo " <div class='alert alert-danger alert-dismissible' role='alert'>
		            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
		                    aria-hidden='true'>&times;</span></button>
		           <p style='font-size: 20px'><strong>Sorry!</strong> No jobs found matching your search, try something else</p>
		        </div>";
		}
		else {
			?>
		<div class="container" id="viewmain">
		  <div class="table-responsive" style="margin-top: 50px">
		    <table class="table table-responsive table-striped">
		        <th>Name</th>
		        <th>Skills</th>
		        <th>Experience</th>
		        <th >Location</th>
		        <th>Basic education</th>
		        <th>Master education</th>
		        <th>Contact</th>
            <th>Resume</th>
		    <?php
		    while($result=mysqli_fetch_array($row1)){
		  

		    echo" <tr> ";
		       
		        echo "<td><a href='viewjobseeker.php?jsid=" . $result['user_id'] . "'>".$result['name']."</td>";
		        echo "<td>".substr($result['skills'],0,130)." </td>";
		        echo "<td>".$result['experience']."</td>";
		        echo "<td > " .$result['location']."</td>";
		        echo "<td> " .$result['basic_edu']."</td>";
		        echo "<td> " .$result['master_edu']."</td>";
		        echo "<td> " .$result['phone']."</td>";
             echo "<td> <a href = '../uploads/resume/".$result['Resume']."' > Download </a> </td> ";
		        echo "</tr>";
		    }
	}
}
		?>
		    </table>
		    </div>
		</div>
</body>
</html>
<?php
}
?>