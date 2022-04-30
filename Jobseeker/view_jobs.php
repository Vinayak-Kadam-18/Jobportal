<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";

// Create connection
$db1 = new mysqli($servername, $username, $password, $dbname);

$jobid=$_GET['jid'];
$query=mysqli_query($db1,"select * from jobs where jobid = $jobid");
$result=mysqli_fetch_array($query);
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
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Martel:400,700" rel="stylesheet">

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    
    <title>Job Profile </title>
</head>
<body>

<script type="text/javascript">
   $(function(){
      $("#header").load("/jobportal/navbar1.php");
    });
    </script>

<div id="header">
</div>
<div class="container " style="margin-top: 90px">
<?php
    $qc=mysqli_query($db1,"select * from employer where eid=$result[eid]");
    $res=mysqli_fetch_array($qc);
?>


<center><h3 style="font-family: Times new roman">Details of <?php echo $result['title']; ?> by <?php echo $res['ename']; ?> </h3></center>

<div id="applydiv"></div>
<div class="page-header" style="background: midnightblue"></div>

<div class="card card-body shadow">
    <div class="container-fluid">
    
<div id="tablecontent">
    <h3 style="font-family: Times"> Job Details: </h3>

    <table class="table table-striped " style="font-family: 'Martel', serif;"> 
        <tr>
            <td class="tbold"> Company: </td>
            <td><strong style="color: #100690"><?php echo "<a href='view_emp.php?id=".$res['eid']."' style='color:inherit'>".$res['ename']."</a>"; ?></strong></td>
        </tr>
        <tr>
            <td class="tbold">Designation:</td>
            <td><?php echo $result['title']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Date of Posting:</td>
            <td><?php echo $result['postdate']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Number of Vacancies: </td>
            <td><?php echo $result['vacno']; ?> </td>
        </tr>
        <tr>
            <td class="tbold">Job Description:</td>
            <td><?php echo $result['jobdesc']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Required Experience:</td>
            <td><?php echo $result['experience']." "; ?>Years</td>
        </tr>
        <tr>
            <td class="tbold">Basic Pay:</td>
            <td><?php echo $result['basicpay']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Functional Area:</td>
            <td><?php echo $result['fnarea']; ?></td>
        </tr>
        <tr>
            <td class="tbold"> Location:</td>
            <td><?php echo $result['location']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Industry:</td>
            <td><?php echo $result['industry']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Required UG Qualification:</td>
            <td><?php echo $result['ugqual']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Required PG Qualification:</td>
            <td><?php echo $result['pgqual']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Desired Candidate Profile:</td>
            <td><?php echo $result['Profile']; ?></td>
        </tr>

</table>
<center><?php
 echo " <a href='/jobportal/jobseeker/apply.php?jid=".$result['jobid']."'> <button class='btn btn-success w-25 ' type='button' >Apply for job</button></a>";

?></center>
<div class="page-header" />

</div>
</body>
</html>
