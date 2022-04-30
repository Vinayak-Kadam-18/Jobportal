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
$eid=$_SESSION['eid'];
$query= mysqli_query($conn,"select * from jobs where eid = $eid");
$query1=mysqli_query($conn,"select jobid from jobs where eid = $eid");


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
 <style type="text/css" media="screen">
  .colors1{
  color: #100690 !important;
} 
 </style>
  <title>Your job postings</title>
  <script type="text/javascript">
   $(function(){
      $("#header").load("/jobportal/employee/navbar_emp.php");
    });
    </script>
    <div id="header">  </div>
</head>
<body style="margin-top: 70px">


<?php

 if(mysqli_num_rows($query)>0) { ?>
<div class="container" id="viewmain">
  <div class="table-responsive" style="margin-top: 50px">
    <table class="table table-responsive table-striped">
        <th>Job Title</th>
        <th>Job Description</th>
        <th style="width: 10%" >Date of Posting</th>
        <th colspan="2" class="text-center">Actions</th>
    <?php
    while($result=mysqli_fetch_array($query)){


    echo" <tr> ";
        /*for ($i=0; $i <3 ; $i++) {*/
        echo "<td>".$result['title']."</td>";
        echo "<td>".substr($result['jobdesc'],0,130)." ..........</td>";
        echo "<td >".$result['postdate']."</td>";
        echo "<td>  <a style='color: whitesmoke;'  href='view.php?jid=".$result['jobid']."'><button type='button' class='btn btn-success'>View/Edit</button></a> </td>";
        echo "<td> <a style='color: whitesmoke;'  href='applicants.php?jobid=".$result['jobid']."'><button type='button' class='btn btn-success'> Applicants</button> </a></td>";
        echo "</tr>";
    }
?>
    </table>
    </div>
</div>
<?php } else  echo " <div class='container'> <div class='alert alert-warning alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Note:</strong> You have'nt posted any jobs yet!</p>
        </div> </div>";
?>
</body>
</html>
<?php

?>