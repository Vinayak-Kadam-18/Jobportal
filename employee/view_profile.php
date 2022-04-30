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
$id= $_SESSION['elogid'];
//echo $id;
if(isset($_SESSION['elogid']))
{
    $q = "select * from login join employer on login.log_id=employer.log_id WHERE login.log_id = $id";
//echo $q;
   $result = mysqli_query($conn, $q);// or die("Selecting user profile failed");
$row = mysqli_fetch_array($result);
  //  echo $row['log_id'];
    $_SESSION['ename']=$row['ename'];
    $_SESSION['eid']=$row['eid'];

   // header('location:../login.php?msg=please_login');
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
      $("#header").load("navbar_emp.php");
    });
    </script>
<!-- /.container-fluid -->
<div id="header">
</div>
    <title> view Jobs </title>
</head>
<body>

   
<!-- /.container-fluid -->
<br><br><br><br>   
           

<div class="container">
    <center><h2 style="font-family: Times">View Profile </h2></center>
    <div class="page-header" style="background: #f4511e"></div>
<div id="tablecontent">
    <h3 style="font-family: Times"> User Details: </h3>
    <form method="POST" accept-charset="utf-8">

            
  <div class="card card-body shadow">
  <div class="container-lg">  
    <table class="table table-striped" >
        <tr>
            <td class="tbold">Company Name:</td>
            <td><input style="background-color: inherit" name="cname" value='<?php echo $row['ename']; ?>'required></td>
        </tr>
        <tr>
            <td class="tbold">Type:</td>
            <td><input name="type" value='<?php echo $row['etype']; ?>'></td>
        </tr>
        <tr>
            <td class="tbold">Industry: </td>
            <td><input style="background-color: inherit" name="ind" type="text" value='<?php echo $row['industry']; ?>' maxlenth="10" required> </td>
        </tr>
        <tr>
            <td class="tbold">Address:</td>
            <td><input style="background-color: inherit" name="add" value='<?php echo $row['address']; ?>'required> </td>
        </tr>       
         <tr>
            <td class="tbold">Pincode:</td>
            <td><input style="background-color: inherit;" name="pin"  value=' <?php echo $row['pincode'] ; ?> 'required></td>
        </tr>
        <tr>
            <td class="tbold">Executive Name:</td>
            <td><input  name="exe" value='<?php echo $row['executive']; ?>'required></td>
        </tr>
        <tr>
            <td  class="tbold">Contact:</td>            
            <td><input style="background-color: inherit" name="cont" value='<?php echo $row['phone'] ?>'required></td>
        </tr>
        <tr>
            <td class="tbold"> Email:</td>
            <td><input name="email" value='<?php echo $row['email']; ?>'required></td>
        </tr>
        <tr>
            <td class="tbold"> Main Location:</td>
            <td><input style="background-color: inherit" name="loc" value='<?php echo $row['locations']; ?>'required></td>
        </tr>
        <tr>
            <td class="tbold"> About Company:</td>
            <td><input name="abt" value='<?php echo $row['profile']; ?>'required></td>
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
    $query1="UPDATE employer SET ename ='$_POST[cname]',etype ='$_POST[type]',executive ='$_POST[exe]',locations ='$_POST[loc]',industry ='$_POST[ind]',address ='$_POST[add]',pincode ='$_POST[pin]', phone='$_POST[cont]', profile='$_POST[abt]' WHERE eid=$_SESSION[eid] ";
    $query_run=mysqli_query($conn,$query1);

      
    echo "<meta http-equiv='refresh' content='0'>";
    if ($query_run) {

        echo '<script type="text/javascript"> alert("data updated")</script>';
        echo "<script>window.location.href='profile.php';</script>";
    exit;
        

    }
    else
    {
                echo '<script type="text/javascript"> alert("data not updated")</script>';

    }
     
}

?>
