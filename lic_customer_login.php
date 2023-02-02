<?php

session_start();


$servername = "localhost";
$username = "root";
$password =  NULL;
$dbname = "lic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
 
    $username = $_POST["EmailID"];  
    $userpassword = $_POST["password"];  
	$getusername = "NULL";
	$getuserpassword = "NULL";

	$_SESSION["username"] =   $username;

	$sql = "Select Email,password from lic_customer_registration WHERE Email =  '$username'";
	$getuserdata = $conn->query($sql);
	if ($getuserdata->num_rows > 0) {
	  // output data of each row
	  while($row = $getuserdata->fetch_assoc()) 
	  {
		 $getusername=$row["Email"];
		 $getuserpassword=$row["password"];
	  }
	} 
	else {
        echo'
		<script>
	
		confirm("Invalid Email id");
		window.open("login.html","_parent");
	
		</script>';
	}
	
	if($getusername==$username && $getuserpassword==$userpassword)
	{
		header("Location: home.html");
	}
	else
	{
		echo'
		<script>
	
		  confirm("Incorrect Email or Password");
		  window.open("index.html","_parent");
		</script>';
	}


$conn->close();
?>