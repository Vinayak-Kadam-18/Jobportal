<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";

// Create connection
$db1 = new mysqli($servername, $username, $password, $dbname);

$empid=$_GET['id'];
$query=mysqli_query($db1,"select * from employer where eid = $empid");
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

    <title>Employer Profile</title>
     <script type="text/javascript">
   $(function(){
 
      $("#header").load("/jobportal/navbar1.php");
    });     
    </script>
    <div id="header">
     </div>
</head>
<body>


<!-- left side info and logo ---------------------------------- -->
<div class="row">
 <aside class="col-lg-3 text-center" role="complementary">
        <div class="thumbnail text-center" style="margin-top: 90px;" >
            <?php if($result['logo']!="") {
                echo "<img src = '../uploads/logo/".$result['logo']."' class='img-rounded ml-4' style='max-height: 290px; max-width: 290px'>";
            }else echo" <img src='/jobportal//uploads//logo/fallbacklogo.jpg' height=150>";
            ?>
            <br>
            <strong><?php echo $result['ename']; ?></strong><br>
            </strong> &nbsp;&nbsp;
            <a class="btn btn-info btn-block w-100 h-50" href="jobs_by_emp.php?eid=<?php echo $empid; ?>&ename=<?php echo $result['ename']; ?>"
             style="font-size: 16px;"> View All jobs of <?php echo $result['ename']; ?> </a>
        </div>
    </aside>
<!-- left side info ends here ---------------------------------- -->

<!-- right side section ------------------------------------- -->
<aside class="col-lg-9">
<div class="container" style="margin-top: 100px;" id="tablecontent">

    <h2 style="text-align:center; font-family: times">Employer: <?php echo $result['ename']; ?></h2><br>
    <div class='page-header' style='background:skyblue'></div>

<table class="table table-striped " style="font-family: 'Martel', serif;" >
    <tr>
        <td  class="w-25">Employer Name:</td>
        <td><strong><?php echo $result['ename']; ?></td>
    </tr>
    <tr>
        <td class="">Type:</td>
        <td><?php echo $result['etype']; ?></td>
    </tr>
    <tr>
        <td class="tbold">Industry:</td>
        <td><?php echo $result['industry']; ?></td>
    </tr>
    <tr>
        <td class="tbold">Address:</td>
        <td><?php echo $result['address']; ?></td>
    </tr>
    <tr>
        <td class="tbold">Pincode:</td>
        <td><?php echo $result['pincode']; ?></td>
    </tr>
    <tr>
        <td class="tbold">Executive Name:</td>
        <td><?php echo $result['executive']; ?></td>
    </tr>
    <tr>
        <td class="tbold">Phone Number:</td>
        <td><?php echo $result['phone']; ?></td>
    </tr>
    <tr>
        <td class="tbold">Main Location:</td>
        <td><?php echo $result['locations']; ?></td>
    </tr>
    <tr>
        <td class="tbold">About Company:</td>
        <td><?php echo $result['profile']; ?></td>
    </tr>
</table>


</div>
</div> 
</body>
</html>
