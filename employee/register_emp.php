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






$email=$_POST['email'];
$password=$_POST['pass1'];
$name=$_POST['compname'];
$type=$_POST['comtype'];
//echo $type;
$industry=$_POST['indtype'];
//echo $industry;
$addr=$_POST['addr'];
$pin=$_POST['pin_code'];
$person=$_POST['person'];
$phone=$_POST['phone'];
$countryid=$_POST['country'];
$stateid=$_POST['state'];
$cityid=$_POST['city'];



$location=$cityid.",".$stateid.",".$countryid;


$query4="INSERT INTO login (email,password,usertype,status) VALUES ('$email','$password','employer',0)";
    $result1 = mysqli_query($conn,$query4) or die("Cant Register , The user email may be already existing");
$query5 =  "INSERT INTO employer (log_id,ename,phone,locations,etype,address,pincode,executive,industry)
                VALUES ((SELECT log_id FROM login WHERE email='$email'),'$name','$phone','$location','$type','$addr','$pin','$person','$industry')";

 //$result2 = mysqli_query($db1,$query5);
if (!mysqli_query($conn,$query5))
{
    echo("Error description: " . mysqli_error($conn));
}
else{

	
	echo "<script>alert ('Registered Syucessfully');
    	window.location.href='../employee/login.html';
		</script>";
}
?>