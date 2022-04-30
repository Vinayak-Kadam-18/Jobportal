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
$query= mysqli_query($conn,"select * from jobs order by Right(postdate,4) ASC");

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
  <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Karla:400,700|Martel:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Karla:400,700|Zilla+Slab:300" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/jobportal/css/web2.css">

<style type="text/css">
  .colors1{
    color: #100690 !important;
  }

</style>
<nav class="navbar navbar-expand fixed-top navbar-dark bg-custom" id="navbar">
    
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link colors1" href="/jobportal/admin/home.php">LOGO</a>
            </li>
            
           </ul>

       <ul class=" nav navbar-nav mr-auto"> 
      
           


           <li class="nav-item dropdown pr-2">           
               <a class="nav-link text-light colors1" href="/jobportal/admin/managejobseeker.php" id="navbardrop" >
      Manage jobseeker
      </a>
    
         </li>   

            <li class="nav-item  pr-2">           
               <a class="nav-link text-light colors1" href="managejob.php">
       Manage jobs
      </a></li>
                      
    
            <li class="nav-item  pr-2">           
               <a class="nav-link text-light colors1" href="/jobportal/logout.php">
       Log out
      </a></li>
    </li>
        <link rel="stylesheet" href="/jobportal/css/web2.css"> 

</nav>
</head>
<body>

<div id="header"></div>
   
<!-- /.container-fluid -->
<div class="container-fluid d-flex justify-content-center " id="content" style="margin-top: 90px">
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
        echo "<td>  <a style='color: whitesmoke;'  href='deletejob.php?jid=".$result['jobid']."'><button type='button' class='btn btn-danger'>Delete</button></a> </td>";
       echo" <tr> ";
     }
?>
    </table>
    </div>
</div>
</div>
</body>
<?php }
?>