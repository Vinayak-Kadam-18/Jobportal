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
$jobid=$_GET['jid'];

$query=mysqli_query($conn,"select * from jobs where jobid = $jobid");
$result=mysqli_fetch_array($query);

$title=$result['title'];
$date=$result['postdate'];
$vacc=$result['vacno'];
$decs=$result['jobdesc'];
$exp=$result['experience'];
$pay=$result['basicpay'];
$farea=$result['fnarea'];
$loc=$result['location'];
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
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Karla:400,700|Martel:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Karla:400,700|Zilla+Slab:300" rel="stylesheet">
 
 
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
.txtx{
  
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
    <title> view Jobs </title>
</head>
<body><script type="text/javascript">
   $(function(){
      $("#header").load("/jobportal/employee/navbar_emp.php");
    });
    </script>

<div id="header">
   
</div><!-- /.container-fluid -->
<br><br><br><br>   
           

<div class="container">
<div class="card card-body shadow">
  <div class="container-fluid">
    <div class="page-header" style="background: #f4511e"></div>
<div id="tablecontent">
   <center> <h3 style="font-family: times"> Job Details: </h3></center>
    <form method="POST" accept-charset="utf-8">

            
    
    <table class="table table-striped" style="font-family: 'Martel', serif;">
        <tr>
            <td class="tbold">Designation:</td>
            <td><input style="background-color: inherit" name="title" value='<?php echo $result['title']; ?>'></td>
        </tr>
        <tr>
            <td class="tbold">Date of Posting:</td>
            <td><input name="date" value='<?php echo $result['postdate']; ?>'></td>
        </tr>
        <tr>
            <td class="tbold">Number of Vacancies: </td>
            <td><input style="background-color: inherit" name="vacc" value='<?php echo $result['vacno']; ?>'> </td>
        </tr>
        <tr>
            <td class="tbold">Job Description:</td>
            <td><input class="txtx" name="decs" value='<?php echo $result['jobdesc']; ?>'> </td>
        </tr>       
         <tr>
            <td class="tbold">Required Experience:</td>
            <td><input class="w-25" style="background-color: inherit" name="exp"  value=' <?php echo $result['experience'] ; ?> '>Years</td>
        </tr>
        <tr>
            <td class="tbold">Basic Pay:</td>
            <td><input name="pay" value='<?php echo $result['basicpay']; ?>'></td>
        </tr>
        <tr>
            <td class="tbold">Functional Area:</td>
            <td><input style="background-color: inherit" name="farea" value='<?php echo $result['fnarea']; ?>'></td>
        </tr>
        <tr>
            <td class="tbold"> Location:</td>
            <td><input name="location" value='<?php echo $result['location']; ?>'></td>
        </tr>
        <tr>
            <td class="tbold">Industry:</td>
            <td><input style="background-color: inherit" name="ind" value='<?php echo $result['industry']; ?>'></td>
        </tr>
        <tr>
            <td class="tbold">Required UG Qualification:</td>
            <td><input name="ugqua" value='<?php echo $result['ugqual']; ?>'></td>
        </tr>
        <tr>
            <td class="tbold">Required PG Qualification:</td>
            <td><input style="background-color: inherit" name="pgqual" value='<?php echo $result['pgqual']; ?>'></td>
        </tr>
        <tr>
            <td class="tbold">Desired Candidate Profile:</td>
            <td><input name="prof" value='<?php echo $result['Profile']; ?>'></td>
        </tr>

    </table>
<table class="table">
    <tr>
        <td>
            <button type="button"  class="btn btn-danger w-25"  onclick="deletejob(<?php echo $result['jobid']; ?>)">
                Delete Job</button>
          <button class="btn btn-success w-25 my-auto" type="submit" name="update" value="Change/Edit">Edit/Update</button>
    
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
    $query1="UPDATE jobs SET title ='$_POST[title]',jobdesc ='$_POST[decs]',vacno ='$_POST[vacc]',experience ='$_POST[exp]',basicpay ='$_POST[pay]',fnarea ='$_POST[farea]',location ='$_POST[location]',industry ='$_POST[ind]',ugqual ='$_POST[ugqua]',pgqual ='$_POST[pgqual]',Profile ='$_POST[prof]',postdate ='$_POST[date]' WHERE jobid=$jobid ";
    $query_run=mysqli_query($conn,$query1);

    echo "<meta http-equiv='refresh' content='0'>";
    if ($query_run) {

        echo '<script type="text/javascript"> alert("data updated")</script>';

    }
    else
    {
                echo '<script type="text/javascript"> alert("data not updated")</script>';

    }
}

?>
