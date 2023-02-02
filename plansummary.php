<?php

session_start();

$username=$_POST["username"]; 
$yearpayment =$_POST["pan_number"]; 
$pannumber = $_POST["pan_number"]; 
$yearlyincome =$_POST["yearly_income"]; 
$aadhar =$_POST["aadharnum"];   
$Buyeremail_ID =$_POST["Buyer_email_ID"];  
$Organisations =$_POST["Organisation"];  

$_SESSION["username"] =   $username;
$_SESSION["pannumber"]  = $pannumber;
$_SESSION["yearlyincome"]  = $yearlyincome;
$_SESSION["aadhar"]  = $aadhar;
$_SESSION["Buyeremail_ID"]  = $Buyeremail_ID;
$_SESSION["Organisations"]  = $Organisations;


echo'
<script> 
        window.open("payment_page.html","_self");
 </script>
 ';

?>