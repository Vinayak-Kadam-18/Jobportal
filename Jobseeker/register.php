 <!DOCTYPE HTML>
    <html>
    <head>
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
  <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@500&display=swap" rel="stylesheet">
      <script src="/jobportal/js/cities.js"></script>


    <link rel="stylesheet" href="/jobportal/css/register.css">
    <link rel="stylesheet" href="/jobportal/css/web2.css">
        <title>Job Seeker Registration</title>
        
    <style type="text/css" media="screen">
   .field-icon {
  float: right;
  margin-left: 35px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}  
   </style> 
   <script  type="text/javascript" charset="utf-8" async defer>
    var check = function() {
  if (document.getElementById('passnew').value == document.getElementById('passconf').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Paaword matched';
        document.getElementById("reg").disabled = false;

  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password dose not match';
    document.getElementById("reg").disabled = true;
  }
}
  function mouseoverPass(obj) {
  var obj = document.getElementById('passnew');
  obj.type = "text";

}
function mouseoutPass(obj) {
  var obj = document.getElementById('passnew');
  obj.type = "password";
}

function mouseoverPas(obj) {
  var obj = document.getElementById('passconf');
  obj.type = "text";

}
function mouseoutPas(obj) {
  var obj = document.getElementById('passconf');
  obj.type = "password";
}


  </script>
   
    </head>
    <body style="background-color: #f0f1f0">
        <script type="text/javascript">
   $(function(){
 
      $("#header").load("../navbar1.php");
    });
    </script>
        <div id="header"></div>

<div class="container" style="margin-top: 90px">

  <div class="card shadow" style="padding: 40px">

   
<div class="row">
        <div class="col-md-6 pr-5">
    <FORM id="reguser"  METHOD="post" ACTION="register_user.php" enctype="multipart/form-data" class="form-horizontal">
       
    <h3 class="" style="color: #5a615a"> Your Details </h3>
    
 
     <div class="form-group" style="display: ">
         <label class="control-label " for="name">Mention your Full Name:</label>
                <div class="">
                    <input type="text" id="name" placeholder="Your Name" name="uname" class="form-control w-100" 
                    required> 
                </div>
         <label id="nameerror" class="error"></label>

<div class="form-group" >

        <label class="control-label " for="email" >Enter your Email ID:</label>
       <input type="email" name="useremail" placeholder="Your E-mail" class="form-control w-100" id="email" 
                        required>
        </div>
        <label id="emailerror" class="error" ></label>
     

     <div class="form-group"> 
         <label class="control-label  " for="passnew" > Create new Password:</label>
         <div class="w-100">  <input type="password" id="passnew" placeholder="New Password" name="pass1" class="form-control" 
                     pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least 8 character with one numeric digit, one uppercase and one lowercase letter" required>
         <span class="fa fa-fw fa-eye field-icon toggle-password" onmouseover="mouseoverPass();" onmouseout="mouseoutPass()"></span>
         </div>
    </div>

    <div class="form-group">
            <label class="control-label"  for="passconf">Confirm the Password:</label>
               <div class="w-100">        
                <input type="password" id="passconf" placeholder="Confirm Password" name="pass2" class="form-control" onkeyup='check();' required>
                   </div>
         <span class="fa fa-fw fa-eye field-icon toggle-password" onmouseover="mouseoverPas();" onmouseout="mouseoutPas()"></span>
          <span id='message'></span>

            </div> 


    <div class="page-header"></div>
    



        <div class="form-group">
             <label class="control-label " for="mobno">Enter your Mobile number:</label>
                 <div class="w-50"><input type="text" name="mobno" placeholder=" Mobile number" class="form-control" id="mobno" 
                    required>
                 </div>
                  <label id="mobnoerror" class="error"></label>
         </div>

         <div class="form-group">
                <label class="control-label col-sm-12" for="location"> Where are you currently located? </label>
                    <div class="row">
                        <div class="col-sm-4" id="location"> 
                      <select name="country" class=" form-control countries" id="countryId" style="width:145px;" required>
                          <option value="">Select Country</option>
                           <option value="">India</option>

                        </select>
                        </div>
                      
                      <div class="col-sm-4" id="location"> 
 
                           <select  onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control" style="width: 145px" required></select>
                            </div> 
                       <div class="col-sm-4" id="location"> 
                         <select name="city" id ="state" class="form-control" style="width: 145px" required></select>
                     <script language="javascript">print_state("sts");</script>
                      
 



                      </div>
              </div>
</div></div>
</div>




<div class="col-md-6 pl-5">
<div class="page-header"></div>    
<h3 class="h3style"style="color: #5a615a"> Your Current Employment Details </h3> 


<div class="form-group"> 
    <label for="experience" class="control-label "> How much work experience do you have:</label>
        <div class="w-75">
            <select name="experience" class="form-control" id="experience" required>
                <option value="">select </option>
                <option value="1">1 year </option>
                <option value="2">2 year </option>
                <option value="3">3 year </option>
                <option value="4">4 year </option>
                <option value="5">5 year </option>
                <option value="6">6 year </option>
                <option value="7">7 year </option>
                <option value="8">8 year </option>
                <option value="9+">9+ year </option>
         </select>
    </div>
</div>

<div class="form-group"> 
    <label class="control-label " for="skills"> What are your Key Skills:</label>
        <div class="w-50"><input type="text" name="skills" placeholder="skills" class="form-control" name="skills" id="skills"
                                     required>
        </div>
        <label id="skillerror" class="error"></label>
</div>


<div class="page-header"></div>
<h3 class="h3style" style="color: #5a615a"> Your Educational Qualifications </h3>


<div class="form-group"> 
    <label class="control-label " for="ugcourse"> Your Basic Education: </label>
     <div class="w-50"> <select name="ugcourse" id="ugcourse" class=" form-control" required>
                <option value="" label="Select">Select</option>
                <option value="Not Pursuing Graduation"> Not Pursuing Graduation</option>
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
    <label class="control-label " for="pgcourse"> Your Masters Education:</label>
        <div class="w-50"> <select name="pgcourse" id="pgcourse"  class="form-control" required>
                                <option value="">Select</option>
                                <option value="Not Pursuing Post Graduation"> Not Pursuing Post Graduation</option>
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
</div>

        

</div>
    	<div class="form-group  col-sm-12 d-flex justify-content-center" style="top:40px;">

        <button class="btn btn-success" type="submit"  id="reg" value="submit">Register</button>
        <label class="col-sm-2"></label>
        <button class="btn btn-danger" type="reset" id="reset"> Reset </button>
</div></div></div>
</FORM></div></div></div></div>
    </body>
    </html>
