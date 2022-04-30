<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$query = "select DISTINCT fnarea from jobs order by fnarea";
 $result   = mysqli_query($conn, $query);


?>
<html>
<head>
<title>Jobs By Function</title>

     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <script type="text/javascript">
   $(function(){
 
      $("#header").load("/jobportal/navbar1.php");
    });
    </script>
    <style type="text/css" media="screen">
      .column-list {
          columns: 300px;
      }
       .aqua{
        color: #52307c;
        font-size: 15px;
          font-weight: 600;
      }

      
    </style>
        <div id="header">
          </div>
</head>
<body style="background-color: #f0f1f0">
<div class="container">
		<div class="card card-body shadow-lg" style="margin-top: 100px">
      <ul class="column-list">
 <?php


    while ($row = mysqli_fetch_array($result)) {
    	$fnarea = $row['fnarea'];
    	echo	"<li class='aqua'><a style='color:inherit' href='/jobportal/jobs/job.php?fnc=$fnarea'>$fnarea</a></li>"."</br>";

}
    ?>
</div>
</div>
</head>
</body>
</html>
