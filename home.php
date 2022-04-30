<?php 
  session_start();
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

?>

<!DOCTYPE html>
<html >
<head>
	<title>Welcome!</title>
	<link rel="stylesheet" href="css/web2.css">
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@500&display=swap" rel="stylesheet">
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/web2.css">
    <style type="text/css" media="screen">
      .acol { 
        color: black;
        text-decoration: none;
         }
         .acol:hover { 
        
        text-decoration: none;
         }
         .aqua{
          color: #52307c;
          font-size: 22px;
          font-weight: 600;
          font-family: arial;
         }
         .link{
          color:  #696969;

         }
         

a:hover,a:focus{
    outline: none;
    text-decoration: none;
}
.tab .nav-tabs{ border-bottom: 2px solid #e8e8e8; }
.tab .nav-tabs li a{
    display: block;
    padding: 10px 20px;
    margin: 0 5px 1px 0;
    background: #fff;
    font-size: 20px;
    font-weight: 700;
    color: #112529;
    text-align: center;
    border: none;
    border-radius: 0;
    z-index: 2;
    position: relative;
    transition:all 0.3s ease 0s;
}
.tab .nav-tabs li a:hover,
.tab .nav-tabs li.active a{
    color: #52307c;
    border: none;
    text-decoration: none;
}
.tab .nav-tabs li.active a:before{
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 25px;
    font-weight: 700;
    color: #52307c;
    margin: 0 auto;
    position: absolute;
    bottom: -30px;
    left: 0;
    right: 0;
}
.tab .nav-tabs li.active a:after{
    content: "";
    width: 100%;
    height: 3px;
    background: #52307c;
    position: absolute;
    bottom: -1px;
    left: 0;
    z-index: -1;
    transition: all 0.3s ease 0s;
}
.tab .tab-content{
    padding: 30px 20px 20px;
    margin-top: 0;
    background: #fff;
    font-size: 15px;
    color: #7a9181;
    line-height: 30px;
    border-radius: 0 0 5px 5px;
}
.tab .tab-content h3{
    font-size: 24px;
    margin-top: 0;
}
@media only screen and (max-width: 479px){
    .tab .nav-tabs li{
        width: 100%;
        text-align: center;
    }
    .tab .nav-tabs li.active a:before{
        content: "\f105";
        bottom: 15%;
        left: 0;
        right: auto;
    }
}


    </style>

     <script type="text/javascript">
   $(function(){
      $("#header").load("navbar.php");
    });
   var scroll = $(window).scrollTop();
$("html").scrollTop(scroll);
    </script>
    
  

    <?php
    
//-------------------------------- notification -------------------------------------------
$_SESSION['notifycount']=0;

    if(isset($_SESSION['jsid'])){
    $q5=mysqli_query($conn,"select count(*) as total from selection where user_id =$_SESSION[jsid] and readmsg = '0' ");
    $result=mysqli_fetch_assoc($q5);
    $_SESSION['notifycount']=$result['total'];
 }

?>


</head>
<header>
    <div id="header">
      </div>
<!-- wave -->
    <div style="overflow: hidden;">
  <svg id="svg" xmlns="http://www.w3.org/2000/svg" viewBox="-300 0 950 270" >
    <path d="M-314,267 C105,364 400,100 812,279" fill="#0b345d" stroke="white" stroke-width="120" stroke-linecap="round"/>
  </svg>

	</div>
</header>
<body>

  
  


<div class="text1">
  
  
  <h1 style="font-size: 32px">Find Your Dream Job Here!</h1>
  <blockquote class="text2"> 300,000+ Jobs</blockquote>
</div>


<form class="form-inline has-search  " sec="search" action="search.php" method="GET">
  <div class="form-group">
      <i class="fa fa-search form-control-feedback"></i>
        <input id="input1" class="form-control" size="44" type="text" name="key" placeholder="Search a Job title" id="search">
      </div>

    <div class="form-group" style="margin-left: 20px">
          <span class="fa fa-map-marker form-control-feedback"></span>
        <input class="form-control "size="21" name="loc" type="text" placeholder="Location">

      </div>
          <button class="btn" type="submit">Search</button>
        </form>
        <div class="container" id="card" style="width: 340px;">
        <div class="card shadow crd text-center" style="height: 145px;left: 490px;bottom: 155px;padding-top: 30px">
          <?php if(isset($_SESSION['eid'])){ ?>
                <text>New To Website?</text>   <!-- <a href="employee/post_jobs.php">Post a job</a>-->

             <a href="/jobportal/employee/post_jobs.php"> <button class="crdbutt" type="button" >Post a Job</button></a>

          
         <?php }else{ ?>
          <text>New To Website?</text>   <!-- <a href="employee/post_jobs.php">Post a job</a>-->

            <a href="jobseeker/register.php"> <button class="crdbutt" type="button" >Register Here</button></a>
<?php } ?>
        </div>

      </div>
        

        <br>
                        <span class="d-flex justify-content-center" style="color:#5a615a;font-size: 28px;font-weight: 600;font-family: Arial,serif">Top Trending&nbsp; <b>Categories </b></span>
                        <span class="d-flex justify-content-center" style="font-size: 20px;font-weight: 500;color: #828282;font-family: 'Lucida Sans Unicode ', 'Lucida Grande', sans-serif">A better career is out there.We will help you to find it</span>

        <br>

                <div class="container ">
                  <div class="row">
          <div class="col-sm-3 py-2 px-2">
            <a href="jobs.php?key=<?=rawurlencode('account finance')?>" class="acol">
          <div class="card card-body h-100 " style="  background-color: #f8f9f8">
              <img src="img/iconfinder_28_5243673.png"  height="60px" width="60px"  alt="" style="margin: 10px;margin-left: 70px">
              <span class="text-center" style="font-weight: 500">Account and Finance</span>
            </div>
            
        </div></a>


           <div class="col-sm-3 py-2  px-2  ">
            <a href="jobs.php?key=<?=rawurlencode('design Art multimedia')?>" class="acol">
            <div class="card card-body h-100 "style="  background-color: #f8f9f8">
              <img src="img/iconfinder_travel_journey-13_1061161.png"  height="60px" width="60px"  alt="" style="margin: 10px;margin-left: 70px">
              <span class="text-center" style="font-weight: 500">Design,Art and Multimedia</span>
            </div>
            
        </div></a>

           <div class="col-sm-3 py-2 px-2  ">
            <a href="jobs.php?key=<?=rawurlencode('hotel food')?>" class="acol"> 

            <div class="card card-body h-100 "style="  background-color: #f8f9f8">
              <img src="img/iconfinder_71_815253.png"  height="60px" width="60px"  alt="" style="margin: 10px;margin-left: 70px">
              <span class="text-center" style="font-weight: 500">Resort and Food Service</span>
            </div></a>
            
        </div>

          
           <div class="col-sm-3 py-2 px-2  ">
            <a href="jobs.php?key=<?=rawurlencode('Programming tech web network')?>" class="acol"> 
            <div class="card card-body h-100 "style="  background-color: #f8f9f8">
              <img src="img/iconfinder_ArtificialIntelligence12_2890565.png"  height="60px" width="60px"  alt="" style="margin: 10px;margin-left: 70px">
              <span class="text-center" style="font-weight: 500">Programming and  Tech</span>
            </div></a>
            
        </div>


        <div class="col-sm-3 py-2 px-2 ">
          <a href="jobs.php?key=<?=rawurlencode('Data science')?>" class="acol"> 
            <div class="card card-body h-100 "style="  background-color: #f8f9f8">
              <img src="img/iconfinder_24_4698595.png"  height="60px" width="70px"  alt="" style="margin: 10px;margin-left: 70px">
              <span class="text-center" style="font-weight: 500">Data science and Analytics</span>
            </div>
            </a>
        </div>

           <div class="col-sm-3 py-2 px-2">
            <a href="jobs.php?key=<?=rawurlencode('Writing Translation')?>" class="acol"> 
          <div class="card card-body h-100 " style="  background-color: #f8f9f8">
             <img src="img/iconfinder_shining_mix_write_1059387.png" name="web" height="60px" width="60px"  alt="" style="margin: 10px;margin-left: 70px">
              <span class="text-center" style="font-weight: 500">Writing/Translation</span>
            </div>
            
        </div></a>
</form>
           <div class="col-sm-3 py-2 px-2">
                        <a href="jobs.php?key=<?=rawurlencode('education')?>" class="acol"> 

            <div class="card card-body h-100 "style="  background-color: #f8f9f8">
              <img src="img/iconfinder_graduation-cap_3688484.png"  height="60px" width="60px"  alt="" style="margin: 10px;margin-left: 70px">
              <span class="text-center" style="font-weight: 500">Education Training</span>
            </div></a>
            
        </div>

          
           <div class="col-sm-3 py-2 px-2">
        <a href="jobs.php?key=<?=rawurlencode('sales marketing')?>" class="acol"> 
            <div class="card card-body h-100 "style="  background-color: #f8f9f8">
              
              <img src="img/iconfinder_08_Sales_1871425.png"  height="60px" width="60px"  alt="" style="margin: 10px;margin-left: 70px">
              <span class="text-center" style="font-weight: 500">Sales and marketing</span>
            </div>
            
        </div></a>
</div>
<br><hr><br>



<div class="container">
<span class="txt " > Find Job Vacancies by</span><br><br>
  <div class="card">
    <div class="card-body ">
    <div class="row">
        <div class="col-md-12  ">
            <div class="tab " role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs text-center" role="tablist ">
                    <li role="presentation" class="active mx-auto "><a href="#Section1"  role="tab" data-toggle="tab">Industry</a></li>
                    <li role="presentation" class="mx-auto "><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Location</a></li>
                    <li role="presentation" class="mx-auto "><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab">Roles</a></li>
                    <li role="presentation" class="mx-auto "><a href="#Section5" aria-controls="messages" role="tab" data-toggle="tab">Function</a></li>
                    <li role="presentation" class="mx-auto "><a href="#Section6" aria-controls="messages" role="tab" data-toggle="tab">Company</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade-in active" id="Section1">
                     <table class="table table-borderless">
 
                      <table class="table table-borderless">
                       <tbody style="font-family: Times new roman;font-size: 20px;font-weight: 500">
                            <tr>
                          <td><a href="jobs/job.php?ind=<?=rawurlencode('IT/Programming')?>" class="link">IT/Computers-software</a></td>
                          <td><a href="jobs/job.php?ind=<?=rawurlencode('Telecom')?>" class="link">Telecom</td>
                          <td><a href="jobs/job.php?ind=<?=rawurlencode('Electricals/Switchgears')?>" class="link">Electricals/Switchgears</td>
                           

                        </tr>
                        <tr>
                          <td><a href="jobs/job.php?ind=<?=rawurlencode('Real Estate/CRM')?>" class="link">Real Estate/CRM</td>
                          <td><a href="jobs/job.php?ind=<?=rawurlencode('IT Enabled Services/BPO')?>" class="link">ITES/BPO</td>
                          <td><a href="jobs/job.php?ind=<?=rawurlencode('Healthcare/Medicine')?>" class="link">Hospital/Healthcare</td>
                   
                        </tr>
                        <tr>
                          <td><a href="jobs/job.php?ind=<?=rawurlencode('Accounting/Banking/Financial Services')?>" class="link">Banking/Accounting/Finicial service</td>

                          <td><a href="jobs/job.php?ind=<?=rawurlencode('Engineering/Construction/Steel/Iron')?>" class="link">Engineering & Construction</td>
                          <td><a href="jobs/job.php?ind=<?=rawurlencode('Architectural Services/ Interior Designing')?>" class="link">Architectural Services/ Interior Designing</td>
                           
                        </tr>
                          <tr>
                           <td><a href="jobs/job.php?ind=<?=rawurlencode('Computer Hardware/Networking')?>" class="link">IT/Computers-Hardware and Networking</td>
                              <td ><a href="jobs/job.php?ind=<?=rawurlencode('Law/Legal Firms')?>" class="link">Law/Legal Firms</td>
                        <td><a href="jobs/job.php?ind=<?=rawurlencode('NGO/Social Services')?>" class="link">NGO/Social Services</td>
                            
                          </tr>
                          <tr>
                          <td colspan="4" align="right"><a href="jobs/job-by-industry.php" >Browse By All Industry <i class="fa fa-arrow-right" aria-hidden="true"></i></a></td>
                       </tr>

                      </tbody>
                    </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                    <table class="table table-borderless">
                       <tbody style="font-family: Times new roman;font-size: 20px;font-weight: 500" align="center">
                            <tr>
                          <td><a href="jobs/job.php?loc=<?=rawurlencode('Mumbai')?>" class="link" class="link">Mumbai</a></td>
                          <td><a href="jobs/job.php?loc=<?=rawurlencode('Bangalore')?>" class="link">Banglore</td>
                          <td><a href="jobs/job.php?loc=<?=rawurlencode('Chennai')?>" class="link" class="link">Chennai</td>
                          <td><a href="jobs/job.php?loc=<?=rawurlencode('Gurgaon')?>" class="link" class="link">Gurgaon</td>

                           

                        </tr>
                        <tr>
                          <td><a href="jobs/job.php?loc=<?=rawurlencode('Pune')?>" class="link" class="link">Pune</td>
                          <td><a href="jobs/job.php?loc=<?=rawurlencode('Gurugram')?>" class="link" class="link">Gurugram</td>
                          <td><a href="jobs/job.php?loc=<?=rawurlencode('Noida')?>" class="link" class="link">Noida</td>
                          <td><a href="jobs/job.php?loc=<?=rawurlencode('Lonavla')?>" class="link" class="link">Lonavla</td>
                        </tr>
                        <tr>
                          <td><a href="jobs/job.php?loc=<?=rawurlencode('Kolkata')?>" class="link" class="link">Kolkata</td>
                          <td><a href="jobs/job.php?loc=<?=rawurlencode('Navi Mumbai')?>" class="link" class="link">New Mumbai</td>
                          <td><a href="jobs/job.php?loc=<?=rawurlencode('Thane')?>" class="link" class="link">Thane</td>
                          <td><a href="jobs/job.php?loc=<?=rawurlencode('Coimbatore')?>" class="link" class="link">Coimbatore</td>
                        </tr>
                        <tr>
                          <td><a href="jobs/job.php?loc=<?=rawurlencode('Hyderabad')?>" class="link" class="link">Hyderabad</td>
                          <td ><a href="jobs/job.php?loc=<?=rawurlencode('Delhi')?>" class="link" class="link">Delhi</td>
                          <td><a href="jobs/job.php?loc=<?=rawurlencode('Bandra')?>" class="link" class="link">Bandra</td>
                          <td><a href="jobs/job.php?loc=<?=rawurlencode('Indore')?>" class="link" class="link">Indore</td>
                        </tr>
                        <tr>
                          <td colspan="4" align="right"><a href="jobs/job-by-location.php" >Browse By All Location <i class="fa fa-arrow-right" aria-hidden="true"></i></a></td>
                       </tr>
   
                      </tbody>
                </table>
                          </div>
            
                     <div role="tabpanel" class="tab-pane fade" id="Section4">
                        <table class="table table-borderless">
                       <tbody style="font-family: Times new roman;font-size: 20px;font-weight: 500">
                            <tr>
                          <td><a href="jobs/job.php?role=<?=rawurlencode('Software Engineer')?>" class="link">Software Engineer</a></td>
                          <td><a href="jobs/job.php?role=<?=rawurlencode('Web Developer')?>" class="link">Web Developer</td>
                          <td><a href="jobs/job.php?role=<?=rawurlencode('Network Administrator')?>" class="link">Network Administrator</td>
                           

                        </tr>
                        <tr>
                          <td><a href="jobs/job.php?role=<?=rawurlencode('Management consultant')?>" class="link">Management consultant</td>
                          <td><a href="jobs/job.php?role=<?=rawurlencode('Account Exexutive/Manager')?>" class="link">Account Exexutive</td>
                          <td><a href="jobs/job.php?role=<?=rawurlencode('Chartered Accountant')?>" class="link">Chartered Accountant</td>
                   
                        </tr>
                        <tr>
                          <td><a href="jobs/job.php?role=<?=rawurlencode('Interior designer')?>" class="link">Interior designer</td>
                          <td><a href="jobs/job.php?role=<?=rawurlencode('Restaurant Manager')?>" class="link">Restaurant Manager</td>
                          <td><a href="jobs/job.php?role=<?=rawurlencode('Data Analyst')?>" class="link">Data Analyst</td>
                           
                        </tr>
                          <tr>
                           <td><a href="jobs/job.php?role=<?=rawurlencode('Junior Data Scientist')?>" class="link">Junior Data Scientist</td>
                              <td ><a href="jobs/job.php?role=<?=rawurlencode('Accounts & Finance Manager')?>" class="link">Accounts & Finance Manager</td>
                        <td><a href="jobs/job.php?role=<?=rawurlencode('Software Developer')?>" class="link">Software Developer</td>
                            
                          </tr>

                      </tbody>
                </table>
                    </div>
                     <div role="tabpanel" class="tab-pane fade" id="Section5">
                        <table class="table table-borderless">
                       <tbody style="font-family: Times new roman;font-size: 20px;font-weight: 500">
                            <tr>
                          <td><a href="jobs/job.php?fnc=<?=rawurlencode('Accounts')?>" class="link">Accounts</a></td>
                          <td><a href="jobs/job.php?fnc=<?=rawurlencode('Telecom')?>" class="link">Telecom</td>
                          <td><a href="jobs/job.php?fnc=<?=rawurlencode('Automotive/Automobiles')?>" class="link">Automotive/Automobiles</td>
                           

                        </tr>
                        <tr>
                          <td><a href="jobs/job.php?fnc=<?=rawurlencode('Banking/Accounting/Finicial service')?>" class="link">Banking/Accounting/Finicial service</td>
                          <td><a href="jobs/job.php?fnc=<?=rawurlencode('ITES/BPO')?>" class="link">ITES/BPO</td>
                          <td><a href="jobs/job.php?fnc=<?=rawurlencode('Finance')?>" class="link">Finance</td>
                   
                        </tr>
                        <tr>
                          <td><a href="jobs/job.php?fnc=<?=rawurlencode('Recruitment/Staffing/RPO')?>" class="link">Recruitment/Staffing/RPO</td>
                          <td><a href="jobs/job.php?fnc=<?=rawurlencode('Designing')?>" class="link">Designing</td>
                          <td><a href="jobs/job.php?fnc=<?=rawurlencode('Internet/E-commerce')?>" class="link">Internet/E-commerce</td>
                           
                        </tr>
                          <tr>
                           <td><a href="jobs/job.php?fnc=<?=rawurlencode('Web Developement')?>" class="link">IT/Computers-Hardware and Networking</td>
                              <td ><a href="jobs/job.php?fnc=<?=rawurlencode('Construction and Engineering')?>" class="link">Construction and Engineering</td>
                        <td><a href="jobs/job.php?fnc=<?=rawurlencode('Engineering/Procrutment')?>" class="link">Engineering/Procrutment</td>
                            
                          </tr>
                          <tr>
                          <td colspan="4" align="right"><a href="jobs/job-by-function.php" >Browse By All Function <i class="fa fa-arrow-right" aria-hidden="true"></i></a></td>
                       </tr>

                      </tbody>
                </table>
                    </div>
                     <div role="tabpanel" class="tab-pane fade" id="Section6">
                        <table class="table table-borderless">
                       <tbody style="font-family: Times new roman;font-size: 20px;font-weight: 500">
                            <tr>
                          <td><a href="jobs/job.php?comp=<?=rawurlencode('Mindspace')?>" class="link">Mindspace</a></td>
                          <td><a href="jobs/job.php?comp=<?=rawurlencode('Accenture')?>" class="link">Accenture</a></td>
                          <td><a href="jobs/job.php?comp=<?=rawurlencode('Parle Agro pvt. Ltd')?>" class="link">Parle Agro pvt. Ltd</td>
                          <td><a href="jobs/job.php?comp=<?=rawurlencode('Tarare Consulting services Private Limited')?>" class="link">Tarare Consulting</td>

                        </tr>
                        <tr>
                          <td><a href="jobs/job.php?comp=<?=rawurlencode('Opaque Ceramics Private Limited')?>" class="link">Opaque Ceramics </td>
                         <td><a href="jobs/job.php?comp=<?=rawurlencode('Advanced Engineering Solutions Private Limited')?>" class="link">Advanced Engineering Pvt</td>
                          <td><a href="jobs/job.php?comp=<?=rawurlencode('Oracle')?>" class="link">Oracle</td>
                          <td><a href="jobs/job.php?comp=<?=rawurlencode('Sarfarosh Bharat Company')?>" class="link">Sarfarosh Bharat Company</td>
                        </tr>
                        <tr>
                          <td><a href="jobs/job.php?comp=<?=rawurlencode('Kott Software')?>" class="link">Kott Software</td>
                          <td><a href="jobs/job.php?comp=<?=rawurlencode('International Trade Links')?>" class="link">International Trade Links</td>
                          <td><a href="jobs/job.php?comp=<?=rawurlencode('Infosys Pvt Ltd')?>" class="link">Infosys </td>
                         <td><a href="jobs/job.php?comp=<?=rawurlencode('Reliance Jio Infocomm Limited')?>" class="link">Reliance Jio Infocomm Limited</td>

                        </tr>
                          <tr>
                           <td><a href="jobs/job.php?comp=<?=rawurlencode('Amazon')?>" class="link">Genpact</td>
                              <td ><a href="jobs/job.php?comp=<?=rawurlencode('Amazon')?>" class="link">Deloitte</td>
                        <td><a href="jobs/job.php?comp=<?=rawurlencode('Amazon')?>" class="link">Bertelsmann Co.</td>
                          <td><a href="jobs/job.php?comp=<?=rawurlencode('WhiteHat Education Technology Pvt. Ltd')?>" class="link">WhiteHat Education</td>
                          </tr>
                           <tr>
                          <td colspan="4" align="right"><a href="jobs/job-by-company.php" >Browse By All Companies <i class="fa fa-arrow-right" aria-hidden="true"></i></a></td>
                       </tr>


                      </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>


</div>
<div class="jumbotron jumbotron-fluid" style="margin-top: 40px">
  <div class="row">
       <div class="col-md-6 j2">
            <img src="img/Work-PNG-Pic.png" alt="" height="320" class="d-block m-auto img">


  </div>
        <div class="col-md-6 j1  justify-content-center text-dark" style="left: 20px">

          <h3 class=" " style="margin-left: 140px;font-family: times new roman;font-size: 37px;font-weight: 600">Popular Keywords</h3>
          <br><br>


          <a href="jobs.php?key=<?=rawurlencode('Architecture')?>"><button class="btm">Architecture</button></a>
          <a href="jobs.php?key=<?=rawurlencode('Retail Associate')?>"><button class="btm">Retail Associate</button></a>
        <a href="jobs.php?key=<?=rawurlencode('Amazon Jobs')?>"><button class="btm">Amazon Jobs</button></a>
        <br>
        <a href="jobs.php?key=<?=rawurlencode('Buisness Devolopement')?>"><button class="btm">Buisness Devolopement</button></a>
          <a href="jobs.php?key=<?=rawurlencode('Warehouse Jobs')?>"><button class="btm">Warehouse Jobs</button></a>
         <a href="jobs.php?key=<?=rawurlencode('Networking')?>"><button class="btm">Networking</button></a>

            <br>
          <a href="jobs.php?key=<?=rawurlencode('Engineer')?>"><button class="btm">Engineering</button></a>
          <a href="jobs.php?key=<?=rawurlencode('Retail Jobs')?>"><button class="btm">Retail Jobs</button></a>
        <a href="jobs.php?key=<?=rawurlencode('Research')?>"><button class="btm">Research </button></a>
        <a href="jobs.php?key=<?=rawurlencode('Support')?>"><button class="btm">Support</button></a>

        <br>
        
         <a href="jobs.php?key=<?=rawurlencode('Sales Executive')?>"><button class="btm">Sales Executive</button> </a>
         <a href="jobs.php?key=<?=rawurlencode('Marketing')?>"><button class="btm">Marketing</button></a>
        <a href="jobs.php?key=<?=rawurlencode('Finance')?>"><button class="btm" >Finance </button></a>
        <a href="jobs.php?key=<?=rawurlencode('Human Resourse')?>"><button class="btm">Human Resourse</button>    </a>

        <br>
         <a href="jobs.php?key=<?=rawurlencode('Accounting')?>"><button class="btm">Accounting</button></a>
          <a href="jobs.php?key=<?=rawurlencode('Information Technology')?>"><button class="btm">Information Technology</button></a>
        <a href="jobs.php?key=<?=rawurlencode('Ethical hacker')?>"><button class="btm">Ethical hacker</button></a>


    </div>
 
</div>
</div>




<div class="container" id="cont">
  <hr>
  <div style="font-family: times">
  <h3 class="d-flex justify-content-center" style="font-size: 36px">Our team is here to help</h3>
  <br>
    <h6 class="d-flex justify-content-center" style="font-size: 20px">From working with hirers to understand their needs, to helping our</h6>
    <h6 class="d-flex justify-content-center" style="font-size: 20px"> jobseekers step-by-step through the process.</h6>  </div>

<div class="d-flex justify-content-center">
    <a href="contact.php" id="cont"><button class="btn-info btncont text-light " > Contact us</button></a>
</div>
<hr>
</div>

