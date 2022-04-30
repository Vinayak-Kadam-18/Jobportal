<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
  <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/jobportal/css/employee.css">
      <script src="/jobportal/js/cities.js"></script>

  
<title> NEW CLIENT REGISTRATION </title>
 <style type="text/css" media="screen">
   .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}</style>

   <script  type="text/javascript" charset="utf-8" async defer>
   function mouseoverPass(obj) {
  var obj = document.getElementById('pass1');
  obj.type = "text";
}
function mouseoutPass(obj) {
  var obj = document.getElementById('pass1');
  obj.type = "password";
}
  </script>
</head>
<body style="background-color: #f0f1f0">
   <script type="text/javascript">
   $(function(){
 
      $("#header").load("/jobportal/navbar1.php");
    });
    </script>
        <div id="header">
          </div>
        </div>


<!-- container div for page contents -->
<div class="container"style="margin-top: 40px;padding: 40px">
  <div class="card shadow" style="padding: 60px">
        

<label class="h2 "style="font-weight: 600; color: #5a615a;"> Your Details</label>


 <div class="container" style="margin-top: 90px; "> 
 <form role="form" id="regcomp" onsubmit="return checkForm()" class="form-horizontal" method="post" action="register_emp.php">
 

  <div class="row">
    <div class="col-md-4" style="right: 10px;">

      <div class="form-group">
       <div class="col-sm-12">

        <label class="control-label " for="person">Full name</label>
          <input type="text"class="form-control" placeholder="Enter full Name" id="person" name="person"
                 required>
        </div>
        </div> 
      

    <div class="form-group">
              <div class="col-sm-12">

         <label class="control-label " for="phone">Contact Number:</label>
          <input type="text"class="form-control" placeholder="Enter Contact Number" id="phone" name="phone"
                 required >
        </div>
        <br><br>
        <label class="h2"style="font-weight: 600; color: #5a615a;"> Your Company Details</label>

         <div class="form-group">
                        <div class="col-sm-12 ">
                        <label class="control-label "> Company Name:</label> 
                            <input type ="text" class="form-control" name="compname" id="compname" placeholder="Enter Company Name"
                             required >
                   </div>
                </div>

                 <div class="form-group">
                <div class="col-sm-12"> 
                                <label for="indtype" class="control-label ">Industry:</label>
                                
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
                </div>

                <div class="form-group">
               <div class="col-sm-12 " id="comtype">
                   <label class="control-label " for="comtype"> Company Type: </label><br>
                        <label ><input type="radio" name="comtype" id="type1" value="Company">&nbsp;&nbsp;Company&nbsp;&nbsp;</label>
                        <label ><input type="radio" name="comtype" id="type2" value="Consultant">&nbsp;Consultant</label>
                    </div>
                </div>
                <br>



                    <div class="form-group"><br><br>
                       <div class="col-sm-12">
                        <label class="control-label ">About Company:</label>
                            <textarea placeholder="Describe your company" class="form-control" rows="4" style="width: 600px" required ></textarea>
                        </div>
                    </div>

</div>  </div>

     <div class="col-md-4">
  
                <div class="form-group">
                     <div class="col-sm-12">

                    <label for="email" class="control-label ">E-mail:</label>
                       <input type="email"  required placeholder="Enter your email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" class="form-control" name="email"  style="width: 250px" id="email"
                         >

                </div></div>
                <div class="form-group" >
                    <div class="col-sm-11" >  

                    <label class="control-label " for="pass1">Password:</label>
                        <input type ="password"  placeholder="Enter your password" name="pass1" id="pass1" style="width: 250px"class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least 8 character with one numeric digit, one uppercase and one lowercase letter"
                               required /> 
                  <span class="fa fa-fw fa-eye field-icon toggle-password" onmouseover="mouseoverPass();" onmouseout="mouseoutPass()"></span>
              </div>

                </div>


                <div class="form-group" style="margin-top: 125px">
                    <div class="col-sm-11" >  

                    <label class="control-label " >Address:</label>
                        <input type ="text"  placeholder="Enter your address" name="addr" style="width: 250px"class="form-control">
                    </div>
                    
                </div>
             
                

                <div class="form-group" >
                      <div class="col-sm-12 mt-2" >
                      <label for="pincode" class="control-label ">Pincode:</label>
                   
                          <input type ="text" class="form-control" placeholder="Enter the pincode" name="pin_code" id="pincode"
                                 required >
                       </div>
                </div>

                <div class="form-group" >
             <div class="col-sm-12" >

                        <label class="control-label " style="top: 100px"> Where are you currently located? </label>
                        <br>
                        <div class="container">
                        <div class="row">

                                   
                                    <select name="country" class=" form-control countries w-75" id="countryId" style="width:100px;" required>
                                        <option value="">Country</option>
                                     <option value="india">India</option>

                                     </select>

                                  
                                    <select  onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control w-75" required></select>
                                   <select name="city" id ="state" class="form-control w-75" required></select>
                    <script language="javascript">print_state("sts");</script>
 
       
                                  </div></div></div></div></div>

                          <div class="bdr col-md-1" style="left: -40px">
                           
                          </div>

                           <div class=" col-md-3" style="top: -70px;left: -40px">
                           <label class="text-center" style="color: #100690">Create, <span style="color: green">Build,</span> <span style="color: orange"> Share</span> &
                            Find Better Candidates</label>
                            <br> <br>
                            <ul style="width: 289px;color:#A9A9A9">
                              <li>It's not only FREE but also a great way to connect with job seekers</li>
                              <li>Build followers network to amplify your Reach</li>
                              <li>Share job postings with your Followers</li>
                              <li>Build your very own Personal Brand as a recruiter</li>
                              <li>Create a Ready to Hire talent pipeline for your sourcing needs</li>
                            </ul>
                           
                          </div>

                          


                                </div></div>   

                                  <div class="form-group d-flex justify-content-center">
                                     <label for="reg" class="control-label text-center">Check for errors before submitting the form!</label><br>
                                      <button class="btn btn-success" type="submit"  id="reg">Register</button>
                                      <label for="reset" class="control-label"> </label>
                                       <button class="btn btn-danger" type="reset" id="reset"> Reset </button>
                </div>

</form>

              



<br><br>









 




                </div>

</div>
<div class="page-header"> </div>

</body>
</html>
