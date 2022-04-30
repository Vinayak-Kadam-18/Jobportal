<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//


$id = $_SESSION['elogid'];
//echo $id;
if(isset($_SESSION['elogid']))
{
$q = "select * from employer join login on login.log_id=employer.log_id WHERE login.log_id = $id";
//echo $q;
$result = mysqli_query($conn, $q);// or die("Selecting user profile failed");
$row = mysqli_fetch_array($result);
//  echo $row['log_id'];
    $_SESSION['eid']=$row['eid'];
    $_SESSION['name']=$row['ename'];
}
else
{
header('location:../login.php?msg=please_login');
}
if(isset($_GET['msg']) &&  $_GET['msg']=="jobposted") {

    ?>
    <script type="text/javascript"> alert("Job Successfully Posted");</script>
    <?php
}
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
 <script type="text/javascript">
   $(function(){
      $("#header").load("/jobportal/employee/navbar_emp.php");
    });
    </script>
  
    <title>Welcome <?php echo $row['ename']; ?></title>
</head>
<body>

<div id="header"></div>
   
<!-- /.container-fluid -->
<div class="container-fluid d-flex justify-content-center " id="content" style="margin-top: 90px">

    <aside class="col-sm-3 text-center" role="complementary">
        <div class="region region-sidebar-first well" id="sidebar">
            <h3 class="text-center" style="color: #001f3f; font-family: 'Zilla Slab', serif;font-weight: 600"> Welcome <?php echo $row['ename']; ?> </h3> <hr>
            <h4 style="color: red;"></h4>
           <h5> <b style=" font-family: 'Zilla Slab', serif; "> You can post a new job, manage your jobs and update your profile.</b></h5>
        </div>
        <div class="thumbnail text-center">
            <?php if($row['logo']!="") {
                echo "<img src = '../uploads/logo/".$row['logo']."' class='img-circle'; style='max-height: 320px; max-width: 190px'>";
            }else echo" <img src='../uploads/logo/default.jpg'>";
            ?>
            <b style="font-family: times;color: #001f3f"><br><?php echo $row['ename']; ?></b><br>
           <br> <p><button class="btn btn-default w-75" data-toggle="modal" data-target="#changelogo">Change Company Logo
        </div>
<!------------- logo ------------------------------------- -->
   <div class="modal fade" id="changelogo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Change or Upload your Company Logo</h4>
      </div>
      <div class="modal-body">
       <form method="post" action="../upload.php?type=logo" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file" class="control-label">Select your Logo:</label>
                <input type=file name="file" id="file" class="form-control">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" id="submit" name="submit" class="btn btn-primary">Save </button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ----------- change logo ends here ------------------------------------------------- -->
    </aside>
    <section class="col-sm-9">
    <div id="header">
    </div>
<div class="container">
    <h2 style="font-family: times new roman">Company Profile:</h2> <h4 style="font-family: times new roman">The following informations are visible to job seekers.
        We reccomend you to always update these informations.</h4>
    <hr> 
    <table class="table table-striped"  style="font-family: 'Martel', serif;" >
        <tr>
            <td class="tbold">Name:</td>
            <td><strong><?php echo $row['ename']; ?></strong></td>
        </tr>
        <tr>
            <td class="tbold">Type:</td>
            <td><?php echo $row['etype']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Industry:</td>
            <td><?php echo $row['industry']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Address:</td>
            <td><?php echo $row['address']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Pincode:</td>
            <td><?php echo $row['pincode']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Executive Name:</td>
            <td><?php echo $row['executive']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Phone Number:</td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Email:</td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Main Location:</td>
            <td><?php echo $row['locations']; ?></td>
        </tr>
        <tr>
            <td class="tbold">About Company:</td>
            <td><?php echo $row['profile']; ?></td>
        </tr>
    </table>
                <center> <a href="view_profile.php"> <button class="btn btn-success w-25">Edit</button></a></center>

    </div>
    <br><br><br>
        </section>
</body>

</html>
<?php 

?>