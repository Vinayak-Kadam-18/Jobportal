<?php 
  
  session_start();
  

  

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style >
.nav-link{

font-family: 'Cormorant', serif;
font-size: 22px;

}
#colors1{
  color: #100690 !important;
}
.user1{ position: relative;
  right: 30px;
  
  top: 15px;
 }
 .d11{
  position: relative;
 margin-top: -24px;
 margin-right: 10px;
}
.bg-custom{
    background-color: #f5f5f5 !important;

}
#colors1{
  color: #100690 !important;
}

.colors1{
  color: #100690 !important;
}
</style>
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
  <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/jobportal/css/web2.css"> 


  
    
</script>
    
</head>
<body>
 



<nav class="navbar fixed-top navbar-expand navbar-dark bg-custom" id="navbar">
    
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link colors1" id="colors1" href="/jobportal/home.php">LOGO</a>
            </li>
            
           </ul>

       <ul class=" nav navbar-nav mx-auto"> 
       <li class="nav-item dropdown">

          <a class="nav-link text-light " id="colors1" href="#" id="navbardrop" data-toggle="dropdown"> Jobs
      </a>
       <div class="dropdown-menu">
        <a class="dropdown-item" href="#search">Search jobs</a>
        <a class="dropdown-item" href="/jobportal/search.php">Advanced search</a>
        <a class="dropdown-item" href="/jobportal/jobseeker/register.php">Register</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/jobportal/jobs/job-by-location.php">Search by Location</a>
        <a class="dropdown-item" href="/jobportal/jobs/job-by-industry.php">Search by Industry</a>
        <a class="dropdown-item" href="/jobportal/jobs/job-by-company.php">Search by Company</a>
   </div>
           


           <li class="nav-item dropdown">           
               <a class="nav-link text-light " id="colors1" href="#" id="navbardrop" data-toggle="dropdown">
        Reqruiter
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Browse all Reqruiter</a>
        <a class="dropdown-item" href="#">Requiretr connection</a>
       </div>
         </li>   

           <li class="nav-item dropdown">           
               <a class="nav-link text-light colors1" id="colors1" href="#" id="navbardrop" data-toggle="dropdown">
       Companies
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Browse all companies</a>
        <a class="dropdown-item" href="#">Interview Question</a>
        <a class="dropdown-item" href="#">Write company review</a>
        <a class="dropdown-item" href="#">company review</a>
      </div>
    </li>



            <li class="nav-item dropdown">           
               <a class="nav-link text-light colors1" id="colors1" href="#" id="navbardrop" data-toggle="dropdown">
       Services
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Resume writing</a>
        <a class="dropdown-item" href="#">Help/FAQ</a>
        <a class="dropdown-item" href="../contact.php">Contact us</a>
      </div>
    </li>



            <li class="nav-item dropdown">           
               <a class="nav-link text-light colors1" id="colors1" href="#" id="navbardrop" data-toggle="dropdown">
       More
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="signin.html">Ask your Quries</a>
        <a class="dropdown-item" href="#">Rate our service</a>
       

        </ul>
      
        <ul class="navbar-nav ml-auto">
           <li class="nav-item dropdown">           
              <?php
            if(isset($_SESSION['email'])){?>
               <img src="/jobportal/img/user.svg" class="user1" height="30"   >
               <a class="nav-link text-light d11 active colors" id="colors1" href="/jobportal/profile.php" id="navbardrop" >
                  <?php
                  echo $_SESSION['email'];
                  ?>
                      <div class="dropdown-menu ">
                       <a class="dropdown-item" href="/jobportal/logout.php">Log out</a></div></li>
                      
         <?php    }
                else{
                  ?>
                  <li class="nav-item dropdown">           
               <a class="nav-link dropdown-toggle text-light colors1" id="colors1" data-toggle="dropdown-toggle"  id="navbardrop">Register</a>
      <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="/jobportal/employee/register.php">Employeer</a>
        <a class="dropdown-item" href="/jobportal/jobseeker/register.php">Jobseeker</a>
       </div>

        <li class="dropdown">   
         <a class="nav-link text-light  colors1" id="colors1" href="/jobportal/jobseeker/login.html" id="navbardrop"  >Log in</a>
          <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="/jobportal/employee/login1.html">Employeer</a>
        <a class="dropdown-item" href="/jobportal/jobseeker/login1.html">Jobseeker</a>
      </div>

                
                
    
        <link rel="stylesheet" href="/project/css/web2.css"> 

</nav>

</body>
</html>
<?php }
?>