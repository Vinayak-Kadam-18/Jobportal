<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$loc=null;
$ind=null;
$fnc=null;
$role=null;

if(isset($_GET['loc'])){

$loc=$_GET['loc'];
}

if(isset($_GET['ind'])){

$ind=$_GET['ind'];
}
if(isset($_GET['role'])){

$role=$_GET['role'];
}
if(isset($_GET['fnc'])){

$fnc=$_GET['fnc'];
}
if(isset($_GET['comp'])){

$comp=$_GET['comp'];
}


if(isset($loc))
{
    location();
}
elseif(isset($ind))
{
    industry();
}
elseif(isset($fnc)) {
     functions();
}
elseif(isset($comp)) {
     company();
}
elseif(isset($role)) {
     role();
}

function location(){

  global $result;
    $query = "select * from jobs join employer  on jobs.eid = employer.eid where location LIKE '%" . $GLOBALS['loc']. "%' ";
 $result   = mysqli_query($GLOBALS['conn'], $query);

}

function industry(){
    global $result;
    $condition = '';
$keyword= explode(" ",$_GET['ind']);
foreach ($keyword as $text) {
    
    $condition .="jobs.industry LIKE '%" .mysqli_real_escape_string($GLOBALS['conn'],$text) . "%' and";
    }
    $condition = substr($condition, 0, -4);


$query = "select * from jobs  join employer  on jobs.eid = employer.eid  where jobs.industry LIKE '%" .$GLOBALS['ind']. "%'  order by title" ;
$result = mysqli_query($GLOBALS['conn'], $query);


}

function functions(){

  global $result;
    $query = "select * from jobs join employer  on jobs.eid = employer.eid where fnarea LIKE '%" . $GLOBALS['fnc']. "%' ";
 $result   = mysqli_query($GLOBALS['conn'], $query);
}

function company(){

  global $result;
    $query = "select * from jobs join employer  on jobs.eid = employer.eid where employer.ename LIKE '%" . $GLOBALS['comp']. "%' ";
 $result   = mysqli_query($GLOBALS['conn'], $query);
}
function role(){

  global $result;
    $query = "select * from jobs join employer  on jobs.eid = employer.eid where title LIKE '%" . $GLOBALS['role']. "%' ";
 $result   = mysqli_query($GLOBALS['conn'], $query);
}
?>
<html>
<head>
<title>Find your dream JOB here</title>
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
       table,th,td{
        border: 1px solid;
        border-collapse: collapse;
       }
      .btnn{
        margin-left: 690px;
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
    <div id="header"></div>

</head>

<body style="margin-top: 80px"  >
  <div class="container">

    <?php

    if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_array($result)) {?>
      <!--  //$query2 = mysqli_query($db1, "select * from employer where eid = '$row[eid]'");
        //$r2 = mysqli_fetch_array($query2)  -->

        
                  
            <div class="card " style="margin-bottom: 50px;width: 90%; padding-left: 10px;left: 0px">
                <div class="card-body pt-4 pb-4">
                    <div class="h5">
               <?php 
                echo $row['title'] ;
                ?>
                    </div>
                <Label style="color: purple"><?php 
                echo "<a href='/jobportal/jobseeker/view_emp.php?id=".$row['eid']."' style='color:inherit'>".$row['ename']. "</a>";
                    ?></Label><br><br>

                 <!--<span class="fa fa-map-marker">&nbsp;</span>-->
                 <img src="https://img.icons8.com/fluent/17/000000/maps.png"/>
                 <?php echo $row['location']
                 ?>
                <!-- <i class="fa fa-suitcase"  style="padding-left:60px;padding-right: 5px"></i> -->
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="https://img.icons8.com/fluent/21/000000/new-job.png"/>
                  <?php echo $row['experience']. "  years"
                 ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <!--<img src="img/money.svg" height="22" style="padding-left:60px;padding-right: 5px"></svg>-->
                  <img src="https://img.icons8.com/color/18/000000/coins.png"/>
                  <?php echo $row['basicpay']. "  per annum"
                 ?>
                 <br><br>
                 <span style="color: #5a615a">
                    <?php 
                 echo  $row['Profile'] ;
                 ?></span>

            </div>
            <div class="card-footer">
                Posted on :  <?php
                 echo  $row['postdate'];
                
            if(isset($_SESSION['jsid'])){
              $query1 = "select * from application where user_id=$_SESSION[jsid]";
              $result1 = mysqli_query($conn, $query1);
              $abc="";
             while ($row1 = mysqli_fetch_array($result1)) {
               
              if($row['jobid']==$row1['job_id'])
              {
               $abc = 1;
               
              }
          
            
                else{
                   $abc = 2;
                }
              }
         
              if($abc==1){
                                 echo "<td> <h4 style='color: green; margin-left:830px;margin-top:-10px' >Applied</h4> </td>";

              }

              else{
           echo " <a href='/jobportal/jobseeker/view_jobs.php?jid=".$row['jobid']."'> <button class='btnn ' type='button' >View</button></a>";

              }
         } 
         else{
                      echo " <a href='/jobportal/jobseeker/view_jobs.php?jid=".$row['jobid']."'> <button class='btnn ' type='button' >View</button></a>";
 
         }
            ?>
            </div>
        </div>
  

   <?php }
  
    
}
else{
    echo "<div class='alert alert-danger'>";

    
    echo "<strong>No jobs has been found";
   ?>
    </div>
  <?php } ?> 
</table>
 </div>
</html>
