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


$username=$_SESSION["username"];
$pannumber = $_SESSION["pannumber"];  
$yearlyincome = $_SESSION["yearlyincome"]; 
$aadhar = $_SESSION["aadhar"];   
$Buyeremail_ID = $_SESSION["Buyeremail_ID"];  
$Organisations = $_SESSION["Organisations"];

$coverage_amount = $_POST["coverage_amount"];  
$coverage_till = $_POST["coverage_till"]; 
$yearly_instalment_amount = $_POST["yearly_instalment_amount"]; 
$instalment_amount = $_POST["instalment_amount"]; 
$date_year = $_POST["date_year"]; 
$time = $_POST["time"]; 
$next_payment = $_POST["next_payment"]; 


$sql = "INSERT INTO policy_details (customer_Name,Aadhaar_number,Pan_number,Policy_Buyers_email,Organisation_type,Yearly_income,Cover_Amount,Coverage_Till,Yearly_instalment_amountt,Amount_Paid,Paid_On,Paid_timing,Next_Payment_date)
VALUES('$username','$aadhar','$pannumber','$Buyeremail_ID','$Organisations','$yearlyincome','$coverage_amount','$coverage_till','$yearly_instalment_amount','$instalment_amount','$date_year','$time','$next_payment')";
  
  
  if(mysqli_query($conn,$sql)){
    echo '<script type="text/javascript" language="javascript">
    alert("Payment Successful-we will contact you soon for KYC process");
    window.open("index.html","_parent");
    </script>';
  }
else {
    
  echo '<script type="text/javascript" language="javascript">
  alert("Aadhaar number already exits");
  window.open("plan_summary.html","_parent");
  </script>';
  }

$conn->close();
?>