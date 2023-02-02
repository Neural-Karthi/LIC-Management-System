<!DOCTYPE html>
<html>
    <head>
        <title>
           View_policy-page-LIC.com
        </title>
        <link rel="stylesheet" href="view_policy.css">
        <style>
            #field9{
                background-color: #222121c0;
                height: 150px;
                border-radius: 10px;
                border:none;
            }
            #logo{
                float: left;
                margin-top: 5px;
                width: 350px;
                height: 125px;
                align-items:center;
                display: flex;   
            }
            #slogan{
                position: relative;
                top: 20px;
                margin-right: 80px;
                color:rgb(255, 255, 255);
                font-family: Mistral;
                font-size: 55px;
                text-shadow:2px 2px 4px rgb(0, 0, 0);
            }
            
             .btn-grad5 {background-color: rgb(255, 72, 0);}
            .btn-grad5{
              margin-left: 5px;
               padding: 13px 30px;
               font-size: 15px;
               text-align: center;
               text-transform: uppercase;
               background-size: 200% auto;
               color: rgb(253, 253, 253);     
               font-size: 17px;
               font-family: Arial, Helvetica, sans-serif;
               border-radius: 12px;
              border: 1px rgb(255, 255, 255);
            
             }
            
             .btn-grad5:hover {
               background-position: right center; /* change the direction of the change here */
               color: rgb(255, 255, 255);
               font-size: 20px;
               font-family: Arial, Helvetica, sans-serif;
            
             } 
                    </style>
    </head>
<body id="body">
<div>
            <fieldset id="field9">
                <img src="image/LIC Logo Vector.png" id="logo">
                <h1>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                  <span id="slogan">Your welfare is our responsibility</span>  &emsp;&emsp;&emsp;&emsp;&emsp;
                  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; <button class="btn-grad5" target="_parent" onclick="back()">Back</button>
                  <a href="PhoneHelpLine.html" id="ancourtag" target="_blank"><button class="btn-grad5">Support</button></a></h1>
            </fieldset>
            <script>
              function back() {
                window.open("index.html","_parent");
              }  
              
              </script>
            </div>
<fieldset id="fieldset1">
<form name="formvalidation" method="post" action="view_policy1.php"  >
<input type="text" id="input_fields" class="Aadhaar_number"  name="Aadhaar_number" placeholder="Enter Aadhaar number" maxlength="15">   
<button onclick="return input1()" class="btn-grad ">Click ok</button>
</form>
<script>
    function input1(){
        var regexp = /^[2-9]{1}[0-9]{3}\s[0-9]{4}\s[0-9]{4}$/; 
        var aadharnum=document.formvalidation.Aadhaar_number.value;
     if(aadharnum==null || aadharnum=="" ){
               alert("Aadhaar Card number field is empty!");  
               return false; 
            }
            else if(!regexp.test(aadharnum)){
               alert("invalid pan card number \nExample:'1234 5678 9012' make sure in this format");
               return false;
            }
    }
</script>
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

   
  
$username=$_POST["Aadhaar_number"];

$sql = "SELECT * FROM policy_details WHERE Aadhaar_number='$username'";
$result = mysqli_query($conn,$sql);
?>
<?php

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($result)) {
        
?>
<fieldset id="display_content"><br><br>
    <table border="1px" id="table">
    <th> 
        <td></td>
        <td  style="color:black">customer_Name</td>
        <td style="color:black">Aadhaar_number</td>
        <td style="color:black">Pan_number</td>
        <td style="color:black">Policy_Buyers_email</td>
        <td  style="color:black">Cover_Amount</td>
        <td  style="color:black">Coverage_Till</td>
        <td  style="color:black">Yearly_instalment_amountt</td>
        <td  style="color:black">Amount_Paid</td>
        <td  style="color:black">Paid_On</td>
        <td  style="color:black">Next_Payment_date</td>
    </th>
    <tr><td  style="color:black">1<td>
        <td style="color:black"><?php echo  $row["customer_Name"] ?></td>
        <td  style="color:black"><?php echo  $row["Aadhaar_number"] ?></td>
        <td  style="color:black"><?php echo  $row["Pan_number"] ?></td>
        <td style="color:black" ><?php echo  $row["Policy_Buyers_email"] ?></td>
        <td  style="color:black"><?php echo  $row["Cover_Amount"] ?></td>
        <td  style="color:black"><?php echo  $row["Coverage_Till"] ?></td>
        <td  style="color:black"><?php echo  $row["Yearly_instalment_amountt"] ?></td>
        <td  style="color:black"><?php echo  $row["Amount_Paid"] ?></td>
        <td  style="color:black"><?php echo  $row["Paid_On"] ?></td>
        <td  style="color:black"><?php echo  $row["Next_Payment_date"] ?></td>
    </tr>
    </table>
</fieldset>
  
<?php  }
} else {
    echo "0 results";
}

$conn->close();


?>
</fieldset>


    </body>
</html>