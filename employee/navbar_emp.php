<?php 
session_start();
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
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/jobportal/css/web2.css">

<style type="text/css">
  .colors1{
    color: #100690 !important;
  }
</style>
  
    <title>Welcome <?php echo $row['ename']; ?></title>
</head>
<body>
<div id="nav">
   
<nav class="navbar navbar-expand fixed-top navbar-dark bg-custom" id="navbar">
    
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link colors1" href="profile.php">LOGO</a>
            </li>
            
           </ul>

       <ul class=" nav navbar-nav mx-auto"> 
      
           


           <li class="nav-item dropdown pr-2">           
               <a class="nav-link text-light colors1" href="/jobportal/employee/profile.php" id="navbardrop" >
      Profile
      </a>
    
         </li>   

           <li class="nav-item pr-2">           
               <a class="nav-link text-light colors1" href="post_jobs.php" >
       Post Jobs
      </a>
     
    </li>



            <li class="nav-item  pr-2">           
               <a class="nav-link text-light colors1" href="managejob.php">
       Manage jobs
      </a></li>



            <li class="nav-item ">           
               <a class="nav-link text-light colors1" href="search.php" >
       Search candidates
      </a>
        </ul>
      
         <ul class="navbar-nav ml-auto">
           <li class="nav-item dropdown " data-toggle="dropdown">           
              <?php
            if(isset($_SESSION['email'])){?>
               <a class="nav-link text-light active colors1" href="/jobportal/employee/profile.php" id="navbardrop" >
                  <?php echo $_SESSION['email']; ?>
                  <div class="dropdown-menu ">
                       <a class="dropdown-item" href="/jobportal/logout.php">Log out</a></div></li>
                   
            
            
                
    
        <link rel="stylesheet" href="/jobportal/css/web2.css"> 

</nav></div>
<?php 
}
?>