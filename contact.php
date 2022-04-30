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

if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Textarea'])){
$name = $_POST['Name'];
$email= $_POST['Email'];
$text= $_POST['Textarea'];
$type= $_POST['type'];


  
$sql = mysqli_query($conn,"INSERT INTO contact (`name`, `email`, `type`, `message`) VALUES ('$name', '$email','$type', '$text')");

$conn->close();}
?>


<!DOCTYPE html>
<html >
<head>
	<title>Contact us</title>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<link rel="stylesheet" href="css/contact.css">
  
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    

 
  </head>

   
<body><script type="text/javascript">
   $(function(){
      $("#header").load("../jobportal/navbar1.php");
    });
    </script>

    <div id="header">
      
    </div>
    <div class="jumbotron j1">
      <h1>We'd love to hear from you</h1>
       <h4> If you have a question or any query, Our team is here to help!</h4>
     </div>


  <div class="container">
    <div class="card shadow">
     <div class="card-body  ">




<form class="text-center"  method="POST" id="myform">

   <h1> <p class=" mt-3 mb-5" >Contact us</p></h1>
   <div class="row">
   <div class="col-md-8 pl-5">

    <input type="text" name="Name" class="form-control mb-4 " placeholder="Name" required>

    <input type="email" name="Email" class="form-control mb-4" placeholder="E-mail" required>

    <!-- Subject -->
    
    <select class="browser-default custom-select mb-4" name="type">
        <option value="" disabled selected>Choose an option</option>
        <option value="Feedback" >Feedback</option>
        <option value="Report a bug">Report a bug</option>
        <option value="Feature request">Feature request</option>
    </select>

    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control rounded-0" name="Textarea" rows="3" placeholder="Message" required></textarea>
    </div>

    <!-- Copy -->
    <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
        <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
    </div>

    <!-- Send button -->
    <button type="submit" class="btn btn-info btn-block ml-auto"  onclick="validation()">Send</button>
    
</form>


</div>
<div class="col-md-4 text-center mt-5">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-map-marker fa-2x"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>contact@Jobhunt.com</p>
                </li>
            </ul>
        </div>

    </div>
  </div>

</div>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</body>
</html>