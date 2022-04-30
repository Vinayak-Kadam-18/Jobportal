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
$q1=mysqli_query($conn,"select * from application where job_id=$_GET[jobid]");
$q3=mysqli_query($conn,"select * from jobs where jobid = $_GET[jobid]");
$q3row=mysqli_fetch_array($q3);
$emp_id=$_SESSION['eid'];
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="/jobportal/css/web2.css"> 

  <title>All Applicants</title>
    </head>

<body>


<script type="text/javascript">
   $(function(){
      $("#header").load("/jobportal/employee/navbar_emp.php");
    });
    </script>
    <div id="header"></div>
<!-- ----------------------------------------- contents -------------------------------------------------------------------------- -->
    <h3 class="text-center" style="margin-top: 140px;font-family: times">These users have applied for the job : <?php echo $q3row['title'];?></h3>
    <h4 class="text-center" style="font-family: times">You can view their profile, select or reject them.</h4>
    <div class="page-header" style="background: steelblue"></div>
    <?php if(mysqli_num_rows($q1)>0) { ?>
      <div class="container-fluid">
        <table class="text-center table table-striped  w-100" style="margin-top: 30px;">
            <th>SI NO:</th>
            <th>Full Name:</th>
            <th>Qualification</th>
            <th>Skills</th>
            <th>Applied Date</th>
            <th>Status</th>


            <th colspan="4">Actions</th>

            <?php
             $x=1;
            while($row=mysqli_fetch_array($q1)) {
                
                $user_id=$row['user_id'];
                $q2=mysqli_query($conn,"select * from jobseeker where user_id = $user_id");

                while ( $result = mysqli_fetch_array($q2) ) {
                    $qsel=mysqli_query($conn,"select * from selection where job_id=$_GET[jobid] and user_id= $result[user_id]");
                    //$ressel=mysqli_fetch_array($qsel);
                    echo " <tr> ";
                    echo "<td>".$x."</td>";
                    echo "<td> <a style='color:purple;font-size:17px' href='viewjobseeker.php?jsid=" . $result['user_id'] . "'>".$result['name']."</a></td>";
                    echo "<td> <b>Basic Education: </b> " . $result['basic_edu'].",<br>  <b>Master Education: </b> ".$result['master_edu']."</td>";
                    echo "<td>" . $result['skills'] . "</td>";
                    echo "<td>" . $row['date_applied']."</td>";
                    $x++;
                    if(mysqli_num_rows($qsel)==0) {
                        
                        $qrej=mysqli_query($conn,"select * from application where job_id=$_GET[jobid] and user_id= $result[user_id] ");
                        $rowrej=mysqli_fetch_array($qrej);
                        if($rowrej['status']==2){
                            echo "<td> <h4 style='color: red'>Rejected</h4> </td>";
                        }
                        else{

                        echo "<td> <h4 style='color: blue'>Pending</h4> </td>";
                        echo "<td class='ml-5'><a href='select.php?jobid=". $_GET['jobid'] . "&user=". $user_id . "&emp_id=". $emp_id ."'> <button type='button' class='btn btn-success' >Select </button> </td>";
                        echo "<td><a href='Reject.php?jobid=".      $_GET['jobid'] . "&user=". $user_id . "&emp_id=". $emp_id ."'> <button type='button' class='btn btn-danger' >Reject </button> </td>";



                    }
                    }
                    elseif(mysqli_num_rows($qsel)>0){
                        $qrej=mysqli_query($conn,"select * from application where job_id=$_GET[jobid] and user_id= $result[user_id] ");
                        $rowrej=mysqli_fetch_array($qrej);
                        if($rowrej['status']==2){
                            echo "<td> <h4 style='color: red'>Rejected</h4> </td>";
                        }
                       
                        elseif($rowrej['status']==1){
                        echo "<td> <h4 style='color: green'>Selected</h4> </td>";
                        //<a href='/Jobportal/conferencing-master/live-demo/web/login.html'>
                        echo "<td> <button type='button' class='btn btn-info w-75 h-100' data-toggle='modal' data-target='#changelogo'>Schedule interview</button> </td>";
                         echo "<td><button type='button' class='btn btn-info w-75' data-toggle='modal' data-target='#createmeet'>Meeting</button> </td>";
                         echo "</tr>"
                        ?>
     <div class="modal fade" id="changelogo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
           <p> <h4 class="modal-title mr-auto" id="myModalLabel">Schedule your Meeting</h4></p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
           <?php 
          echo "<form method='POST' action='/jobportal/employee/interview.php?jobid=". $_GET['jobid'] . "&user=". $user_id . "&emp_id=". $emp_id ."' enctype='multipart/form-data'>"
           ?> <div class="form-group">
           <p class="modal-title mr-auto" id="myModalLabel"> Candidate will recive notification of date and timing your schedulded meeting</p><br>

                    <label for="">Date:&nbsp;&nbsp;&nbsp;</label>
                    <select class="w-50 border" name="date">
                   <?php
                  for($i=0; $i<=6; $i++){

                $date= date('d-m-Y',strtotime("$i day"));


                     echo "<option value='$date' text-center> $date </option>";

                    }?>

                        </select>

                    
                </div>
                <div class="form-group">
                    Hours:&nbsp;
                    <select class="w-25 border" name="hrs">
                        <?php for($i = 0; $i < 13; $i++): ?>
                          <option value="<?= $i; ?>"><?= $i  ?>:00  </option>
                        <?php endfor ?>
                </select>
                Minutes:
                 <select class="w-25 border" name="min">
                        <?php for($i = 0; $i < 59; $i++): ?>
                          <option value="<?= $i; ?>"><?= $i  ?>  </option>
                        <?php endfor ?>
                </select>
                   <select class=" border" name="typ">
                    <option value="PM">PM</option>
                   <option value="AM">AM</option>}

                 </select>
                </div>
                 
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" id="submit" name="submit" class="btn btn-primary">Send </button>
            </form>
          </div>
        </div>
      </div>                        <?php
                        }
                        else{
                        echo "<td><a href='select.php?jobid=". $_GET['jobid'] . "&user=". $user_id . "&emp_id=". $emp_id ."'> <button type='button' class='btn btn-success ' >Select </button> </td>";
                        echo "<td><a href='Reject.php?jobid=". $_GET['jobid'] . "&user=". $user_id . "&emp_id=". $emp_id ."'> <button type='button' class='btn btn-danger' >Reject </button> </td>";
                          }

                    }
                    
                }
                $i++;
            }
            ?>
        </table>
        </div>
    <?php } else {  echo " <div class='container'> <div class='alert alert-warning alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Note:</strong> No one applied for this job yet!</p>
        </div> </div>";
    }
    ?>
      <div class="modal fade" id="createmeet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title mr-auto" id="myModalLabel">Create your Meeting</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body mx-5">
           
              <a href="https://zoom.us/signin"> <img src="/jobportal/img/zoom.svg" alt="" title='Zoom'></a>
               <a href="https://www.skype.com/en/free-conference-call/"> <img src="/jobportal/img/skype.svg" alt="" title='Skype'></a>
               <a href="https://www.microsoft.com/en-ww/microsoft-teams/online-meetings">  <img src="/jobportal/img/teams.svg" alt="" height="60px" title='Teams'></a>
              <a href="https://duo.google.com/?web&utm_source=marketing_page_button_main"> <img src="/jobportal/img/duo.svg" class="ml-4" alt="" height="60px" title='Duo'></a>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      
</div>
<!-- --------------------------------------------------------- contents end --------------------------------------------------------------------- -->
</body>


