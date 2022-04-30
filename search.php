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
$keyword1 =null;
$keyword2=null;
if(isset($_GET['key']) && isset($_GET['loc'])){

$keyword1= $_GET['key'];
$keyword2= $_GET['loc'];
}
$keyword3 =null;

if(isset($_GET['type'])){

  $keyword3=$_GET['type'];
}
?>


<html>
<head>
<title>Advanced Search</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Karla:400,700|Martel:400,700" rel="stylesheet">

<script type="text/javascript">
   $(function(){
      $("#header").load("navbar1.php");
    });
    </script>

    <style type="text/css" media="screen">
       table,th,td{
        border: 1px solid;
        border-collapse: collapse;
       }
      .btnn{
        margin-left: 670px;
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
       .l1{
        float: left;
        font-family: Times new roman;
        font-weight: 500;
        font-size: 20px;
       }
       
    </style>
    <div id="header"></div>

</head>

<body style="margin-top: 100px"  >
  <div class="container">
  <form  action="search.php" method="GET">
    <div class="row">
    <div class=" col-sm-4">
        <label class="l1" >Title :&nbsp;</label>
        <input class="form-control w-75" size="44" type="text" name="key"  id="search" value="<?php echo $keyword1 ?>" >
      </div>
          <div class="col-sm-4">

        <label class="l1">Location :&nbsp;</label>

        <input class="form-control w-50 "size="21" name="loc" type="text" placeholder="Location">
      </div>
          <div class="col-sm-3" style="right: 50px">
                    <label class="l1">Type :&nbsp;&nbsp;</label>

            <select class="form-control w-75" id="tp" name="type" onchange="change()">
            <option value="" selected disabled>Choose</option>

              <option value="">All</option>

              <option value="Full">Full time</option>
              <option value="Part">Part time</option>
              <option value="WFH">Work From Home</option>
              <option value="Internship">Internship</option>
            </select>
      <p></p></div>
      <div class="col-sm-1">
          <button class="btn" type="submit" style="right: 50px"  >Search</button>
        </div>
      </div>
        </form>
        </div></div><hr>
     <!--  <script  type="text/javascript" charset="utf-8" async defer>
         $(document).ready(function(){
          $("#tp").change(function(){
            this.form.submit();
          })
         })
       </script> -->



<?php


if($keyword1=="" ){
    echo " <div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Oops!</strong> Please enter a search term</p>
        </div>";

}
else{
$query = "select * from jobs  join employer  on jobs.eid = employer.eid  where title LIKE '%" . $keyword1 . "%' and jobs.location LIKE '%" . $keyword2. "%'and type LIKE '%" . $keyword3 . "%'      " ;
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 0)
{
    echo " <div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Sorry!</strong> No jobs found matching your search, try something else</p>
        </div>";
}
else {
?>

    
<?php
if(isset($keyword1)){
    echo "<h3 style='font-family: Martel, serif; color:green ;text-align:center;margin-bottom:40px'> Search Results Matching :" . $keyword1. "</h3> ";
}?>
<div class="container">
    <?php
    while ($row = mysqli_fetch_array($result)) {?>
 
        
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

                 <span class="fa fa-map-marker">&nbsp;</span>
                 <?php echo $row['location']
                 ?>
                 <i class="fa fa-suitcase"  style="padding-left:60px;padding-right: 5px"></i>
                  <?php echo $row['experience']. "  years"
                 ?>
                  <img src="img/money.svg" height="22" style="padding-left:60px;padding-right: 5px"></svg>
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
                        // echo "<td> <h4 style='color: green'>Applied</h4> </td>";
                       $abc = 1;
                       break;
                      }
                  
                    
                        else{
                    // echo " <a href='jobseeker/apply.php?jid=".$row['jobid']."'> <button class='btnn ' type='button' >APPLY</button></a>";
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

    }?>     
</table>
 </div>
</html>
