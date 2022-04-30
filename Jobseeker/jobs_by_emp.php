<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";

// Create connection
$db1 = new mysqli($servername, $username, $password, $dbname);


$query=mysqli_query($db1,"select * from jobs where eid = $_GET[eid]");
?>
<!DOCTYPE HTML>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <title>View All Jobs</title>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<script type="text/javascript">
   $(function(){
      $("#header").load("/jobportal/navbar1.php");
    });
    </script>
<div id="header">
   
</div><br><br>

<body>
<div class="container" id="viewmain">
    <br>
    <br>
    <h3 style="font-family: Time new roman">All Jobs of <?php echo $_GET['ename']; ?></h3><br>
	<div class="table ">
    <table class="table table-striped" style="margin-top: 30px;">
        <th>Job Title</th>
        <th>Job Description</th>
        <th>Date of Posting</th>
        <th colspan="3">Actions</th>
        <?php
        while($result=mysqli_fetch_array($query)){
            echo "<tr> ";
            echo "<td>".$result['title']."</td>";
            echo "<td>".substr($result['jobdesc'],0,120)." ........</td>";
            echo "<td>".$result['postdate']."</td>";
            echo "<td> <a style='color: whitesmoke;'  href='view_jobs.php?jid=".$result['jobid']."'> <button type='button' class='btn btn-success w-100' style='margin-left:-1px;'>View</button></a> </td>";
            echo "</tr>";
        }
        ?>
    </table>
    </div>
</div>
</body>
</html>

