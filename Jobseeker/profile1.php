<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id= $_SESSION['logid'];
//echo $id;
if(isset($_SESSION['logid']))
{
    $q = "select * from login join jobseeker on login.log_id=jobseeker.log_id WHERE login.log_id = $id";
   $result = mysqli_query($conn, $q);
    $row = mysqli_fetch_array($result);
  
    $_SESSION['jsname']=$row['name'];
    $_SESSION['jsid']=$row['user_id'];


      $q1 = "select job_id from application WHERE user_id = $_SESSION[jsid]";
      $result1 = mysqli_query($conn, $q1);
     while( $row1 = mysqli_fetch_array($result1)){;
    }

}
else
{
   // header('location:../login.php?msg=please_login');
}
?>
<!DOCTYPE HTML>
<html>
<head>

<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Profile - <?php echo $row['name']; ?></title>
<style type="text/css" media="screen">
  #fileLoader
{
    display:none;
}

</style>

    <script type="text/javascript">
        
$(document).ready(function() {
    $('.tablinks:first').addClass('active');
});    </script>
 <style type="text/css" media="screen">
      .btnn{
        margin-left: 420px;
        border-radius: 5px;
        border-color: purple;
        color: purple;
        outline: 0;
        padding-left: 18px;
        padding-right: 18px;
         padding-top: 5px;
          padding-bottom: 5px;

        border: 1px solid
      }
      .btnn:hover{
        background-color: #9370DB;
        color: white !important;
       }
       
    </style>
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

  <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/jobportal/css/web2.css">
<script type="text/javascript">
   $(function(){
      $("#header").load("/jobportal/navbar1.php");
    });
    </script>

</head>
<body>
  <div id="header"></div>
<br><br>
<div class="container-fluid d-flex justify-content-center " id="content" style="margin-top: 50px">

    <aside class="col-sm-3 text-center" role="complementary">
        <div class="region region-sidebar-first well" id="sidebar">
            <h3 class="text-center" style="color: #dd4814"> Welcome <?php echo $row['name']; ?> </h3> <hr>
               <div class="thumbnail text-center">
        <div class="img thumbnail">
           <?php if($row['photo']!="") {
              echo "<img src = '/jobportal/uploads/images/".$row['photo']."' class='img-circle'; style='max-height: 220px; max-width: 250px' >";
             }else echo" <img src='/jobportal/uploads/images/fallbacklogo.jpg' class='img-circle'; style='max-height: 220px; max-width: 200px' >";
           ?>
        </div>
      
         <br>
          <!-- Button trigger modal -->
              <p><button class="btn btn-default w-75" data-toggle="modal" data-target="#changelogo">Change or Upload Profile
        </div>
<!------------- logo ------------------------------------- -->
   <div class="modal fade" id="changelogo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Upload Profile Picture</h4>
        <button type="button"  class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>
      <div class="modal-body">
       <form method="post" action="../upload.php?type=image" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file" class="control-label">Select your Image:</label>
                <input type=file name="file" id="file" class="form-control">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" id="submit" name="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
           
<!------------- logo ------------------------------------- -->
     </aside>
    <aside class="col-sm-9">
    <ul class="nav nav-tabs"> 
    <li class="active"><a class="text-light colors1 mr-5" data-toggle="tab" href="#details" style="font-family: 'Times new roman';font-size: 20px">Profile</a></li>
    <li><a class="text-light colors1 mr-5" data-toggle="tab"  href="#recjobs" style="font-family: 'Times new roman';font-size: 20px">Recommended Jobs</a></li>
    <li><a class="text-light colors1 mr-5" data-toggle="tab" href="#resume" style="font-family: 'Times new roman';font-size: 20px">Update Resume</a></li>
    <li><a class="text-light colors1 mr-5" data-toggle="tab" href="#appljob" style="font-family: 'Times new roman';font-size: 20px">Applied jobs</a></li>
</ul>

<!------------------------------------------------------------------------------- -->

    <div class="tab-content">

<!------------------------------------------------------------------------------- -->

        <div id="details" class="tab-pane active" style="margin-top: 50px;">
        <h3 style="font-family: Times"> Your Profile</h3>
        <table class="table table-striped " style="font-family: 'Martel', serif;" >
        <tr>
            <td class="tbold">Full Name:</td>
            <td><?php echo $row['name']; ?></td>

        </tr>
        <tr>
            <td class="tbold">Email:</td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Phone:</td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Location:</td>
            <td><?php echo $row['location']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Experience (Years):</td>
            <td><?php echo $row['experience']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Skills:</td>
            <td><?php echo $row['skills']; ?></td>
        </tr>
        <tr>
           <td class="tbold">UG Qualification:</td>
            <td><?php echo $row['basic_edu']; ?></td>
        </tr>
        <tr>
            <td class="tbold">PG Qualification:</td>
            <td><?php echo $row['master_edu']; ?></td>
        </tr>
    </table>
            <center> <a href="view_profile.php"> <button class="btn btn-success w-25">Edit</button></a></center>
            <br><br>

</div> <!-- profile -->
    <!------------------------------------------------------------------------------- -->
    <div id="recjobs" class="tab-pane fade" style="margin-top: 20px;">

        <?php
        $ug=$row['basic_edu'];
        $pg=$row['master_edu'];
        $q=mysqli_query($conn,"select * from jobs where ugqual='$ug' OR pgqual = '$pg'");
        if(mysqli_num_rows($q)>0) {
            echo "<h3 style='font-family:times'>These jobs are recomended to you based on your profile:</h3><br>";
        
            while ($result2 = mysqli_fetch_array($q)) {
                $query2 = mysqli_query($conn, "select * from employer where eid = '$result2[eid]'");
                $r2 = mysqli_fetch_array($query2);

             
               echo "<h3> <a style='color: purple;'  href='view_jobs.php?jid=" . $result2['jobid'] . "'>".$result2['title']."</a></h3>"; 
               echo "<h4 style='font-size:19px'> Employer: <a href='view_emp.php?id=".$r2['eid']."'>".$r2['ename']."</a></h4>";
               echo "<p>". substr($result2['jobdesc'],0,120) ." .......</p>";
               echo "<h4 style='font-size:19px'>Job Posted on: " . $result2['postdate'] ."</h4>";
               echo "<hr>";
            }
        }
        else{
           echo "<h3 style='color: #122b40; margin-top: 30px;'>No jobs are reccomended to you at this moment! </h3>";
        }
        ?>
        </table>
    </div>

<!--------------------------------- Resume ---------------------------------------------- -->

    <div id="resume" class="tab-pane fade">
        <div>
    <form action="../upload.php?type=file" enctype="multipart/form-data" method="post">
       <?php if($row['Resume']==""){
    echo "<br><div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Note:</strong> You have'nt uploaded a resume file yet! Upload a attractive resume file for a better job!</p>
        </div>";
}?>
          <br>
        <h4>Upload your updated resume file:</h4>
        <hr style="background-color: darkslateblue;">
        <div class="form-group" >
            <label class="form-group col-sm-3" for="file" style="font-size:16px; ">Select your resume file:</label>
             <div class="col-sm-7 ">
              <div class="form-group">
               
                 <input type="file" name="file" id="resumefile" class="w-75">
               </div>
                 <br>
                 <button class="btn btn-success w-50" type="submit" name="submit" value="submit">Upload Resume</button>
             </div>
        </div>
    </form>
        <div class="page-header"></div>
        <?php if($row['Resume']!="") {
                echo "<a href = '../uploads/resume/".$row['Resume']."' > Download Your Current Resume File </a >";
         }?>

        <br>

    </div>
    </div> <!-- resume -->
    <!------------------------------------------------------------------------------- -->

    <div id="appljob" class="tab-pane fade">
       <div class="container-fluid" id="appljob" > <?php
      $q4 = "select job_id from application WHERE user_id = $_SESSION[jsid]";
      $result4 = mysqli_query($conn, $q4);
     $count= mysqli_num_rows($result4);
     if($count==0){
         echo " <br><br><div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 18px'><strong>You haven't applied to any jobs</strong></p>
        </div>";
       }
       else{
     while( $row4 = mysqli_fetch_array($result4)){
      $a=$row4['job_id'];
      
      $query5 = "select * from jobs join employer  on jobs.eid = employer.eid WHERE jobid=$a";
      
       $result5   = mysqli_query($conn, $query5);
       
        while ($row5 = mysqli_fetch_array($result5)) {?>
   

        
                  
            <div class="card mt-4 " style="margin-bottom: 50px;width: 90%; padding-left: 10px;left: 0px">
                <div class="card-body pt-4 pb-4">
                    <div class="h5">
               <?php 
                echo $row5['title'] ;
                ?>
                    </div>
                <Label style="color: purple"><?php 
                echo "<a href='view_emp.php?id=".$row5['eid']."' style='color:inherit'>".$row5['ename']. "</a>";
                    ?></Label><br><br>

                 <img src="https://img.icons8.com/fluent/17/000000/maps.png"/>
                 <?php echo $row5['location']
                 ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="https://img.icons8.com/fluent/21/000000/new-job.png"/>
                  <?php echo $row5['experience']. "  years"
                 ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <img src="https://img.icons8.com/color/18/000000/coins.png"/>
                  <?php echo $row5['basicpay']. "  per annum"
                 ?>
                 <br><br>
                 <span style="color: #5a615a">
                    <?php 
                 echo  $row5['Profile'] ;
                 ?></span></div>
                  <div class="card-footer w-100" >
                Posted on :  <?php
                 echo  $row5['postdate'];

                  echo " <a href='/jobportal/jobseeker/view_jobs.php?jid=".$row5['jobid']."'> <button style='margin-left:390px' class='btn btn-info' type='button' ' >View</button></a>";
                
               echo " <a href='/jobportal/jobseeker/cancel.php?jid=".$row5['jobid']."'> <button class='btn btn-danger ' type='button' >Cancel</button></a>";
               
;
?>
            

           
               </div></div>
               <?php 
}}}
?>
           
        
        </div>
    </div>

<!------------------------------------------------------------------------------- -->
</div> 

</div>
</section> 

</div>

</body>


</html>
