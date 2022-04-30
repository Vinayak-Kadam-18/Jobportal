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
$q = mysqli_query($conn,"select * from jobseeker join login on login.log_id=jobseeker.log_id WHERE jobseeker.user_id = $_GET[jsid]");
$row=mysqli_fetch_array($q);
?>
<!DOCTYPE HTML>
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
    <title>view Jobseeker</title>
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Karla:400,700|Martel:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Karla:400,700|Zilla+Slab:300" rel="stylesheet">
 
    <link href="../css/main.css" rel="stylesheet">
    <style type="text/css">
        #insidenav{
            background: #dd4814;
            color: white;
            font-size: 13px;
        }
        nav a{
            font-size: 16px;
            font-family: ubuntu;
            color: white;
        }
        nav ul li {
            font-size: 16px;
            font-family: ubuntu;
        }
        nav ul li.active{
            background: whitesmoke;
        }
        nav ul li.active a{
            color:#dd4814;;
        }
        table.table{
            background: transparent;
        }
        td.tbold{
            font-weight: bold;
        }
        table{
            background: transparent;
        }
        #viewmain{
            margin-top: 30px;
        }
        span.badge{
            background: white;
            color: black;
        }
        
 .thumbnail {
    width: 100;
    height: 100;
   background: transparent;
   border:none;

}

.thumbnail img-circle {
    display: block;
    width: 100;
    height: 100;
    border:none;
    
}
    </style>
</head>
 <script type="text/javascript">
   $(function(){
      $("#header").load("/jobportal/employee/navbar_emp.php");
    });
    </script>
  
    <title style="margin-top: 80px">Welcome <?php echo $row['ename']; ?></title>
</head>
<body >

<div id="header"></div>
<!-- /.container-fluid -->
<body>
<div class="container-fluid" id="content" style="margin-top: 100px">
<!-- ---------------------------------------------- nav ends ----------------------------------------------------------------------------->
<div class="row">
    <aside class="col-sm-3" role="complementary">
        <div class="region region-sidebar-first well" id="sidebar">
            <h3 style="color: #009999" class="text-center" > User:<?php echo " ".$row['name']; ?> </h3>
        </div>

        <!-- profile pic -->
   
    <div class="thumbnail text-center">
        <div class="img thumbnail">
           <?php if($row['photo']!="") {
              echo "<img src = '../uploads/images/".$row['photo']."' height=180 >";
             }else echo" <img src='../uploads/images/fallbacklogo.jpg' height=180>";
           ?>
        </div>
         <strong><?php echo $row['name']; ?> </strong>

            <p> <?php if($row['Resume']!="") {
                    echo "<button type='button' class='btn bg-primary w-75' ><a href = '../uploads/resume/".$row['Resume']."' style='color:white;' >
                    Download Resume File </a ></button>";
                }?>
                <!-- profile pic --->
    </aside>

    <aside class="col-sm-7">
        <div id="details"  >
            <h3 style="font-family: times"> User Details:</h3>
            <table class="table table-striped" style="font-family: 'Martel', serif;"  >
                <tr >
                    <td class="tbold">Full Name:</td>
                    <td><?php echo $row['name']; ?></td>

                </tr>
                <tr>
                    <td class="tbold">Email:</td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
                <tr>
                    <td class="tbold">Phone:</td>
                    <td><?php echo $row['phone']; ?></td>
                </tr>
                <tr>
                    <td class="tbold">Location:</td>
                    <td><?php echo $row['location']; ?></td>
                </tr>
                <tr>
                    <td class="tbold">Experience (Years):</td>
                    <td><?php echo $row['experience']; ?></td>
                </tr>
                <tr>
                    <td class="tbold">Skills:</td>
                    <td><?php echo $row['skills']; ?></td>
                </tr>
                <tr>
                    <td class="tbold">UG Qualification:</td>
                    <td><?php echo $row['basic_edu']; ?></td>
                </tr>
                <tr>
                    <td class="tbold">PG Qualification:</td>
                    <td><?php echo $row['master_edu']; ?></td>
                </tr>
            </table><hr>
        </div> <!-- profile -->

    </div></aside>
</div>

</body>

</html>
