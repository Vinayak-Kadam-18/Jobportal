<?php
session_start();





?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@500&display=swap" rel="stylesheet">
 
  <title></title>
<nav class="navbar navbar-expand fixed-top navbar-dark bg-custom" id="navbar">
    
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link colors1" href="/jobportal/admin/home.php">LOGO</a>
            </li>
            
           </ul>

       <ul class=" nav navbar-nav mr-auto"> 
      
           


           <li class="nav-item dropdown pr-2">           
               <a class="nav-link text-light colors1" href="/jobportal/admin/managejobseeker.php" id="navbardrop" >
      Manage jobseeker
      </a>
    
         </li>   

            <li class="nav-item  pr-2">           
               <a class="nav-link text-light colors1" href="managejob.php">
       Manage jobs
      </a></li>
                      
    <li class="nav-item  pr-2">           
               <a class="nav-link text-light colors1" href="/jobportal/logout.php">
       Log out
      </a></li>
    </li>
        <link rel="stylesheet" href="/jobportal/css/web2.css"> 

</nav>
<!-- /.container-fluid -->
<br><br><br><br>
<div class="container">

<?php

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


$query = "select * from jobseeker Order by name" ;
$row1 = mysqli_query($conn, $query);

if (mysqli_num_rows($row1) == 0)
    {
        echo " <div class='alert alert-danger alert-dismissible' role='alert'>
                <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                        aria-hidden='true'>&times;</span></button>
               <p style='font-size: 20px'><strong>Sorry!</strong> No jobs found matching your search, try something else</p>
            </div>";
    }
    else {
      ?>
    <div class="container" id="viewmain">
      <div class="table-responsive" style="margin-top: 50px">
        <table class="table table-responsive table-striped">
            <th>Name</th>
            <th>Skills</th>
            <th>Experience</th>
            <th >Location</th>
            <th>Basic education</th>
            <th>Master education</th>
            <th>Contact</th>
            <th>Action</th>
        <?php
        while($result=mysqli_fetch_array($row1)){
      

        echo" <tr> ";
           
            echo "<td>".$result['name']."</td>";
            echo "<td>".substr($result['skills'],0,130)." </td>";
            echo "<td>".$result['experience']."</td>";
            echo "<td > " .$result['location']."</td>";
            echo "<td> " .$result['basic_edu']."</td>";
            echo "<td> " .$result['master_edu']."</td>";
            echo "<td> " .$result['phone']."</td>";
             echo "<td>  <a style='color: whitesmoke;'  href='delete.php?jid=". $result['user_id'] ."'><button type='button' class='btn btn-danger'>Delete</button></a> </td>";;
            echo "</tr>";
        }
  }

    ?>
        </table>
        </div>
    </div>
</body>
</html>
<?php

?>