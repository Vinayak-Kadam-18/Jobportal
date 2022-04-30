<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
    <head> 
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<link href="https://fonts.googleapis.com/css?family=Karla:400,700|Martel:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@500&display=swap" rel="stylesheet">
      <script src="/jobportal/js/cities.js"></script>

 
  <style type="text/css" media="screen">
    .colors1{
  color: #100690 !important;

    }
    .bg-custom{
    background-color: #f5f5f5 !important;

}
.nav-link{

font-family: 'Cormorant', serif;
font-size: 22px;}
  </style>
        <title> Post Job opening </title>
      </head>
    <body style="background-color: #f0f1f0; font-family: 'Martel', serif;">

   
   
<nav class="navbar navbar-expand fixed-top navbar-dark bg-custom" id="navbar">
    
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link colors1" href="/jobportal/home.php">LOGO</a>
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
           <li class="nav-item dropdown">           
              <?php
            if(isset($_SESSION['email'])){?>
               <a class="nav-link text-light active colors1" href="#" id="navbardrop" data-toggle="dropdown">
                  <?php
                  echo $_SESSION['email'];
                  }?>
                  <div class="dropdown-menu ">
                       <a class="dropdown-item" href="/project/logout.php">Log out</a></div></li>
                      
            
              
</div></div>
</nav> <!--/.container-fluid -->
<br><br><br><br>

    <!-- /.container-fluid -->


        <div class="container">
        <div class="page-header" style="background: #f4511e"></div>
          <div class="card shadow" style="padding:70px">
       
          <div class="page-header" />
                      <h2 class="text-center"  style="font-family: 'Martel', serif;">Post jobs  for your company</h2>
                      <h5 class="text-center"  style="font-family: 'Martel', serif;">Hire best candidates on our website</h5><br>


          <div class="row">
<div class="col-md-6">
   <h3 style="color: #5a615a"> Job Details: </h3><hr><br>
        <form id="job_post" role="form" onsubmit="return checkForm();" method="post" class="form-horizontal" action="process_postjob.php">
           
            <div class="form-group">
                  <label for="desig" class="control-label ">Job Title/ Designation:</label>
                 
                  <input type="text" class="form-control" name="desig" id="desig" required onblur="validate('text','deser', this.value);">
                
<br>            </div>
            
             <div class="form-group">
                  <label for="vac_no" class="control-label ">Number of vacancies:</label>
                   <input type="text" name="vacno" class="form-control" id="vac_no"  required onblur="validate('digit','vacer', this.value)" > 
            </div><br>
            
             <div class="form-group">
                <label for="job_desc" class="control-label col-sm-4">Job Description:</label>
                   <textarea class="form-control" rows="5" id="job_desc" name="jobdesc" required onblur="validate('longtext','jober',this.value)"></textarea> 
            </div><br>
            <div class="form-group">
                <label for="indtype" class="control-label col-sm-4">Industry:</label>
                <div class="col-sm-12"> 
                <select name="indtype" id="indtype" class="form-control"  required>
                    <option selected="selected" value="">- Select an Industry -</option>
                                    <option value="Accessories/Apparel/Fashion Design">Accessories/Apparel/Fashion Design</option>
                                    <option value="Accounting/Banking/Financial Services">Accounting/Banking/Financial Services</option>
                                    <option value="Advertising/Event Management/PR">Advertising/Event Management/PR</option>
                                    <option value="Agriculture/Dairy/Forestry/Fishing">Agriculture/Dairy/Forestry/Fishing</option>
                                    <option value="Airlines/Hotel/Hospitality/Travel/Tourism/Restaurants">Airlines/Hospitality/Travel/Tourism/Restaurants</option>
                                    <option value="Animation / Gaming">Animation / Gaming</option>
                                    <option value="Architectural Services/ Interior Designing">Architectural Services/ Interior Designing</option>
                                    <option value="Auto Ancillary/Automobiles/Components">Auto Ancillary/Automobiles/Components</option>
                                    <option value="Banking/Broking">Banking/Broking</option>
                                    <option value="Biotechnology/Pharmaceutical/Clinical Research">Biotechnology/Pharmaceutical/Clinical Research</option>
                                    <option value="Brewery/Distillery">Brewery/Distillery</option>
                                    <option value="Engineering/Construction/Steel/Iron">Engineering/Construction/Steel/Iron</option>
                                    <option value="Ceramics/Sanitaryware">Ceramics/Sanitaryware</option>
                                      <option value="Consulting/ Advisory Services">Consulting/Advisory Services</option>          
                                    <option value="Chemicals/Petro Chemicals/Plastics">Chemicals/Petro Chemicals/Plastics</option>
                                    <option value="Computer Hardware/Networking">Computer Hardware/Networking</option>
                                    <option value="Consumer FMCG/Foods/Beverages">Consumer FMCG/Foods/Beverages</option>
                                    <option value="Consumer Goods - Durables">Consumer Goods - Durables</option>
                                    <option value="Courier/Freight/Transportation/Warehousing">Courier/Freight/Transportation/Warehousing</option>
                                    <option value="Design/Art">Desiging/Art</option>
                                    <option value="IT Enabled Services/BPO">IT Enabled Services/BPO</option>
                                    <option value="Education/Training/Teaching">Education/Training/Teaching</option>
                                    <option value="Electricals/Switchgears">Electricals/Switchgears</option>
                                    <option value="Employment Firms/Recruitment Services Firms">Employment Firms/Recruitment Services Firms</option>
                                    <option value="Engineering/Construction/Steel/Iron">Engineering/Construction/Steel/Iron</option>
                                    <option value="Entertainment/Media/Publishing/Dotcom">Entertainment/Media/Publishing/Dotcom</option>
                                    <option value="Export Houses/Textiles/Merchandise">Export Houses/Textiles/Merchandise</option>
                                    <option value="FacilityManagement">FacilityManagement</option>
                                    <option value="Fertilizers/Pesticides">Fertilizers/Pesticides</option>
                                    <option value="FoodProcessing">FoodProcessing</option>
                                    <option value="Gems and Jewellery">Gems and Jewellery</option>
                                    <option value="Glass">Glass</option>
                                    <option value="Government/Defence">Government/Defence</option>
                                    <option value="Hotels/Food">Hotels/Food</option>
                                    <option value="Healthcare/Medicine">Healthcare/Medicine</option>
                                    <option value="HeatVentilation/AirConditioning">HeatVentilation/AirConditioning</option>
                                    <option value="IT/Programming/Tech">IT/Programming/Tech</option>
                                    <option value="Insurance">Insurance</option>
                                    <option value="KPO/Research/Analytics">KPO/Research/Analytics</option>
                                    <option value="Law/Legal Firms">Law/Legal Firms</option>
                                    <option value="Machinery/Equipment Manufacturing/Industrial Products">Machinery/Equipment Manufacturing/Industrial Products</option>
                                    <option value="Multimedia">Multimedia</option>
                                    <option value=">Mining">Mining</option>
                                    <option value="NGO/Social Services">NGO/Social Services</option>
                                    <option value="Office Automation">Office Automation</option>
                                    <option value="Others/Engg. Services/Service Providers">Others/Engg. Services/Service Providers</option>
                                    <option value="Petroleum/Oil and Gas/Projects/Infrastructure/Power/Non-conventional Energy">Petroleum/Oil and Gas/Power/Non-conventional Energy</option>
                                    <option value="Printing/Packaging">Printing/Packaging</option>
                                    <option value="Publishing">Publishing</option>
                                    <option value="Real Estate/CRM">Real Estate/CRM</option>
                                    <option value="Retailing">Retailing</option>
                                    <option value="Sales/Marketing">Sales/Marketing</option>                  
                                    <option value="Security/Law Enforcement">Security/Law Enforcement</option>
                                    <option value="Shipping/Marine">Shipping/Marine</option>
                                    <option value="Software Services">Software Services</option>
                                    <option value="Strategy/ManagementConsultingFirms">Strategy/ManagementConsultingFirms</option>
                                    <option value="Telecom Equipment/Electronics/Electronic Devices/RF/Mobile Network/Semi-conductor">Telecom Equipment/Electronics/Electronic Devices/RF/Mobile Network/Semi-conductor</option>
                                    <option value="Telecom/ISP">Telecom/ISP</option>
                                        <option value="Writing/Translation">Writing/Translation</option>
                                    <option value="WaterTreatment/WasteManagement">WaterTreatment/WasteManagement</option>
                                   <option value="Wellness/Fitness/Sports">Wellness/Fitness/Sports</option>
                </select>
                </div>
            </div><br>
          

            
             <div class="form-inline form-group">
                <label for="exp" class="control-label col-sm-4">Work Experiecne:</label>
                
                       <select class="form-control" name="exp" required name="exp" id="exp">
                           <option value=""> -Select- </option>
                            <option value="1">0-1</option>
                             <option value="2">1-3 </option>
                              <option value="3">2-5 </option>
                               <option value="4">3-5 </option>
                                <option value="5">5-7</option>
                                 <option value="6">6-8 </option>
                                  <option value="7">8-10 </option>
                                   <option value="7 above"> above 10+</option>
                       </select> &nbsp;&nbsp;<span> Minimum Years </span>
                   
             </div><br>
              <div class="form-group form-inline ">
                <label for="pay-div" class="control-label col-sm-2">Type:</label>
                         <select class="form-control" id="type" name="type"> 
                          <option value=""> -Select- </option>
                           <option value="Full"> Full Time </option>
                           <option value="Part"> Part Time </option>
                           <option value="WFH"> Work From Home </option>
                           <option value="Internship"> Internship </option>
                           </select>&nbsp;                 
            </div><br>
             
            <div class="form-group form-inline ">
                <label for="pay-div" class="control-label col-sm-3">Basic Pay:</label>
                         <select class="form-control" id="money" name="money"> 
                           <option value="Rs"> Rs </option>
                           <option value="USD"> USD </option>
                           </select>&nbsp;
                        <input type="text" class="form-control" id="pay" name="pay" required onblur="validate('digit','payer',this.value)">
                  
            </div><br>
            
            <div class="form-inline form-group">
                <label for="fnarea" class="control-label col-sm-3">Functional Area:</label>
                 <div class="col-sm-9"> 
                  <input type="text" class="form-control" id="fnarea" required name="fnarea"> </div>
               

            </div><br>
            <div class="form-group form-inline">
                <label for="location" class="control-label col-sm-3">Location:</label>
                <div class="col-sm-12">   
                  <select name="country" class=" form-control countries" id="countryId"  required>
                         <option value="">Select Country</option>
                    <option value="India">India</option>
                  </select>
                    <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control" required></select>
                    <select id ="state" class="form-control" name ="city" required></select>
                    <script language="javascript">print_state("sts");</script>
                                         
                    
            </div> 
            </div>
            
</div>
<div class="col-md-6">
            <h3 style="color: #5a615a" class="text-center"> Desired Candidate Profile:</h3><hr><br>
            <div class="page-header" />
                <div class="form-group">
                    <label for="ugcourse" class="control-label col-sm-6">Specify UG Qualification:</label>
                    <div class="col-sm-12 "><select name="ugcourse" id="ugcourse"  name="ugcourse" class=" form-control" required>
               <option value="" label="Select">Select</option>
               <option value="B.A">B.A</option>
               <option value="B.Arch">B.Arch</option>
               <option value="BCA">BCA</option>
               <option value="B.B.A">B.B.A</option>
               <option value="B.Com">B.Com</option>
               <option value="B.Ed">B.Ed</option>
               <option value="BDS">BDS</option>
               <option value="BHM">BHM</option>
               <option value="B.Pharma">B.Pharma</option>
               <option value="B.Sc">B.Sc</option>
               <option value="B.Tech/B.E.">B.Tech/B.E.</option>
               <option value="LLB">LLB</option>
               <option value="MBBS">MBBS</option>
               <option value="Diploma">Diploma</option>
               <option value="BVSC">BVSC</option>
               <option value="Other">Other</option>
               </select>
                    </div>
                </div>
                <div class="form-group">
                  <br>
                    <label for="pgcourse" class="control-label col-sm-12">Specify PG Qualification:</label>
                    <div class="col-sm-12">
                        <select name="pgcourse" id="pgcourse" name="pgcourse"  class="form-control" required>
                            <option value="">Select</option>
                              <option value="Not Pursuing Post Graduation"> Not Required</option>
                              <option value="CA">CA</option>
                              <option value="CS">CS</option>
                              <option value="ICWA (CMA)">ICWA (CMA)</option>
                              <option value="Integrated PG">Integrated PG</option>
                              <option value="LLM">LLM</option>
                              <option value="M.A">M.A</option>
                              <option value="M.Arch">M.Arch</option>
                              <option value="M.Com">M.Com</option>
                              <option value="M.Ed">M.Ed</option>
                              <option value="M.Pharma">M.Pharma</option>
                              <option value="M.Sc">M.Sc</option>
                              <option value="M.Tech">M.Tech</option>
                              <option value="MBA/PGDM">MBA/PGDM</option>
                              <option value="MCA">MCA</option>
                              <option value="MS">MS</option>
                              <option value="PG Diploma">PG Diploma</option>
                              <option value="MVSC">MVSC</option>
                             <option value="MCM">MCM</option>
                             <option value="Other">Other</option>
                         </select> 
                    </div>
                </div>
                <div class="form-group"><br>
                    <label for="profile" class="control-label col-sm-12">Desired Candidate Profile</label>
                    <div class="col-sm-12"><textarea id="profile" rows="5" name="profile" class="form-control" required onblur="validate('proer',this.value)"></textarea></div>
                    <label class="error" id="proer"></label>
                </div>
              </div></div></form>

              <div class="mx-auto">
                <hr>
                <p> Are you sure to submit the job! Check for errors before submitting the job</p>
                <div class="form-group mx-auto col-sm-8">
                     <button class="btn btn-lg btn-info btn-block" type="submit" id="postbtn">Post Job</button>
        </div></form>
           </div></div></div></div>
    </body>


</html>
