<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id= $_SESSION['logid'];
if(isset($_SESSION['logid']))
{
    $q = "select * from login join jobseeker on login.log_id=jobseeker.log_id WHERE login.log_id = $id";

   $result = mysqli_query($conn, $q);
    $row = mysqli_fetch_array($result);
  
    $_SESSION['jsname']=$row['name'];
    $_SESSION['jsid']=$row['user_id'];


      $q1 = "select job_id from application WHERE user_id = $_SESSION[jsid]";
      $result1 = mysqli_query($conn, $q1);
     while( $row1 = mysqli_fetch_array($result1)){;
    }

}
else
{
  
}
?>
<!DOCTYPE HTML>
<html>
	 <meta charset="utf-8">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Martel:400,700" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
          <link rel="stylesheet" href="/jobportal/css/web2.css"> 

  <title></title>

    <style type="text/css" media="screen">
        tr{
            width: 100%;
        }
        input{
            width: 800px;
            border: none;
            outline: none;
            
        }
        textarea{
            width: 800px;
            resize: none;
            overflow: hidden;
            border: none;
        }
       input .breakword{
        word-break: break-word;
        word-break: break-all;
       }
        
    </style>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    
    <style type="text/css" media="screen">
  .colors1{
  color: #100690 !important;
}
</style>
<script type="text/javascript">
   $(function(){
      $("#header").load("/jobportal/navbar1.php");
    });
    </script>
<div id="header">
</div>
    <title> view Jobs </title>
</head>
<body>

   
<br><br><br><br>   
           

<div class="container">
    <center><h2 style="font-family: Times">View Profile </h2></center>
    <div class="page-header" style="background: #f4511e"></div>
<div id="tablecontent">
    <h3 style="font-family: Times"> User Details: </h3>
    <form method="POST" accept-charset="utf-8">

            
  <div class="card card-body shadow">
  <div class="container-lg">  
    <table class="table table-striped" style="font-family: 'Martel', serif;" >
        <tr>
            <td class="tbold">Full Name:</td>
            <td><input style="background-color: inherit" name="title" value='<?php echo $row['name']; ?>'required></td>
        </tr>
        <tr>
            <td class="tbold">Email:</td>
            <td><input  name="email" type="email"  pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" value='<?php echo $row['email']; ?>'required></td>
        </tr>
        <tr>
            <td class="tbold">Contact number: </td>
            <td><input style="background-color: inherit" name="cont" type="text" pattern="[1-9]{1}[0-9]{9}" value='<?php echo $row['phone']; ?>' maxlenth="10" required> </td>
        </tr>
        <tr>
            <td class="tbold">Location:</td>
            <td><input style="background-color: inherit" name="loc" value='<?php echo $row['location']; ?>'required> </td>
        </tr>       
         <tr>
            <td class="tbold">Experience:</td>
            <td><input style="background-color: inherit;width: 30px" name="exp"  value=' <?php echo $row['experience'] ; ?> 'required>Years</td>
        </tr>
        <tr>
            <td class="tbold">Basic Qualification:</td>
            <td><input  name="bq" value='<?php echo $row['basic_edu']; ?>'required></td>
        </tr>
        <tr>
            <td  class="tbold">PG Qualification:</td>            
            <td><input style="background-color: inherit" name="pgq" value='<?php echo $row['master_edu'] ?>'required></td>
        </tr>
        <tr>
            <td class="tbold"> skills:</td>
            <td><input name="skills" value='<?php echo $row['skills']; ?>'required></td>
        </tr>
        

    </table>
<table class="table"></div>
    <tr>
        <td>
            
        <center> <button class="btn btn-success w-25 my-auto" type="submit" name="update" value="Change/Edit">Click here to update</button></center>
    
        </td>
    </tr>
</form>
</table>
</div> <!-- table content -->
    <div class="page-header" />

</div>
</body>

</html>


<?php
if(isset($_POST['update']))
{
    $query1="UPDATE jobseeker SET name ='$_POST[title]',phone ='$_POST[cont]',experience ='$_POST[exp]',location ='$_POST[loc]',skills ='$_POST[skills]',basic_edu ='$_POST[bq]',master_edu ='$_POST[pgq]' WHERE user_id=$_SESSION[jsid] ";
    $query_run=mysqli_query($conn,$query1);

      
    echo "<meta http-equiv='refresh' content='0'>";
    if ($query_run) {

        echo '<script type="text/javascript"> alert("data updated")</script>';
        echo "<script>window.location.href='profile1.php';</script>";
    exit;
        

    }
    else
    {
                echo '<script type="text/javascript"> alert("data not updated")</script>';

    }
     
}

?>
