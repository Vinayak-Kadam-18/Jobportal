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


    <link rel="stylesheet" href="css/web2.css">
    <style type="text/css" media="screen">
      .butn{
        padding: 4px;
        padding-right: 10px;
        padding-left: 13px;
        margin-top: 8px;
        margin-right: 13px;
        font-family: 'Cormorant', serif;
        font-size: 18px;
        color: white;
         background-color: Transparent;
         border-radius: 10px;
         border-color:  #F5F5F5;
    border: 0.5px solid   #F5F5F5;
    
    outline:0;

      }
      .butn:hover{
        color: black;
        background-color: white;
        border-color: white
      }
      
    </style>
    <script>
 $(window).scroll(function(){
 $('nav').toggleClass('scrolled', $(this).scrollTop() >=270);
 });
</script>

<script>
  

  $(window).scroll(function(){
    if($(this).scrollTop() >= 270){
      $('.colors').addClass('ncol');
       $('.butn').addClass('ncol');

      }else{
              $('.colors').removeClass('ncol');
}
   });
</script>

<script>
 //  $(document).ready(function(){
 //   $(this).scrollTop(0);
//  });
</script>
   
  
</head>
<body>

 


<nav class="navbar navbar-expand fixed-top navbar-dark bg-dark" id="navbar">
    
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link colors" href="home.php">LOGO</a>
            </li>
            
           </ul>

       <ul class=" nav navbar-nav mx-auto"> 
       <li class="nav-item dropdown">

               <a class="nav-link text-light colors" href="#" id="navbardrop" data-toggle="dropdown"> Jobs
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#search">Search jobs</a>
        <a class="dropdown-item" href="/jobportal/search.php">Advanced search</a>
        <a class="dropdown-item" href="/jobportal/jobseeker/register.php">Register</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="jobs/job-by-location.php">Search by Location</a>
        <a class="dropdown-item" href="jobs/job-by-industry.php">Search by Industry</a>
        <a class="dropdown-item" href="jobs/job-by-company.php">Search by Company</a>
   </div>
           


           <li class="nav-item dropdown">           
               <a class="nav-link text-light colors" href="#" id="navbardrop" data-toggle="dropdown">
        Reqruiter
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="jobs/job-by-location.php">Browse all Industry</a>
       </div>
         </li>   

           <li class="nav-item dropdown">           
               <a class="nav-link text-light colors" href="#" id="navbardrop" data-toggle="dropdown">
       Companies
      </a>
      <div class="dropdown-menu">

        
        <a class="dropdown-item" href="jobs/job-by-company.php">Browse all companies</a>
        <a class="dropdown-item" href="interview/questions.html">Interview Question</a>
      </div>
    </li>



            <li class="nav-item dropdown">           
               <a class="nav-link text-light colors" href="#" id="navbardrop" data-toggle="dropdown">
       Services
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/jobportal/resume/resume-tips.html">Resume writing</a>
         </div>
    </li>



            <li class="nav-item dropdown">           
               <a class="nav-link text-light colors" href="#" id="navbardrop" data-toggle="dropdown">
       More
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/jobportal/contact.php">Ask your Quries</a>
    
       

        </ul>
      
         <ul class="navbar-nav ml-auto">
            
                <?php
            if(isset($_SESSION['email'])){?>

           
           <li class="nav-item dropdown">           
              
                 <img src="img/user.svg" class="user" height="27"  >
               <a class="nav-link text-light d1 active colors" href="#" id="navbardrop" data-toggle="dropdown">
                  <?php
                  echo $_SESSION['email']
                  ?>

                      <div class="dropdown-menu ">
                   <a class="dropdown-item" href="profile.php" >My Profile</a>
                   <a class="dropdown-item" href="logout.php">Log out</a></div></li>
                   <?php
            if(isset($_SESSION['jsid'])){?>
                    <a href="/jobportal/jobseeker/notification.php">
                      <img src="img/bell.svg" alt="" height="25" id="user">
              
             <?php if($_SESSION['notifycount']>0) {?>
             <span id="notify" class="badge badge-danger" ><?php echo $_SESSION["notifycount"] ?></span></a>
             <?php } }?>
                      
         <?php    }
                else{
                  ?>
                  <li class="nav-item dropdown">           
               <a class="nav-link dropdown-toggle text-light colors" data-toggle="dropdown-toggle"  id="navbardrop">Register</a>
      <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="employee/register.php">Employeer</a>
        <a class="dropdown-item" href="jobseeker/register.php">Jobseeker</a>
       </div>

        <li class="dropdown">   
         <a class="nav-link text-light  colors" href="/jobportal/jobseeker/login1.html" id="navbardrop" >Log in</a>
      <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="employee/login1.html">Employeer</a>
        <a class="dropdown-item" href="jobseeker/login1.html">Jobseeker</a>
       

       </div>


         
                
                
      
       

</nav>


</body>
</html>
<?php }
?>
