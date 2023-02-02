<!DOCTYPE html>
<html>
    <head>
        <title>
           Payment-page-LIC.com
        </title>
        <link rel="stylesheet" href="your_details.css">
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

$sql = "SELECT * FROM lic_customer_registration WHERE Email='$username'";
$result = mysqli_query($conn,$sql);
?>
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
                window.open("home.html","_parent");
              }  
              
              </script>
            </div><br>
            <fieldset id="fieldset1">
               <fieldset id="title1"><h1>Your Account Details</h1></fieldset> <br>
               <fieldset id="main_box"><br><br>
<?php

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($result)) {
        
?>
<fieldset id="ps1">

                       <h2 id="ht">Your Personal Details</h2><br>
    <table><tr>
                    <td id="Firstname" class="styles">Firstname : <span id="output"><?php echo  $row["fname"] ?></span></td>
                    <td id="Lastname" class="styles">Lastname : <span id="output"><?php echo  $row["lname"] ?></span></td>
                    <td id="gender" class="styles">Gender : <span id="output"><?php echo  $row["gender"] ?></span></td>
    </tr>
    <tr>
                    <td id="Phonenumber" class="styles">Phone Number : <span id="output"><?php echo  $row["phone_number"] ?></span></td>
                    <td id="Address"class="styles" colspan="2" >Address : <span id="output"> <?php echo  $row["Address"] ?></span></td>
    </tr>
                    <td id="City" class="styles">City : <span id="output"> <?php echo  $row["City"] ?></span></td>
                    <td id="State" class="styles">State :  <span id="output"><?php echo  $row["state"] ?></span></td>
                    <td  id="pincode" class="styles">Pincode :  <span id="output"><?php echo  $row["pincode"] ?></span></td></tr>
    </table>
                   </fieldset><br>
                   <fieldset id="eq1">
    
                    <h2 id="ht">Education and Occupation</h2><br>
     <table><tr>
                    <td  id="Eduaction" class="styles">Eduaction and Qualification :  <span id="output"><?php echo  $row["Education_and_Qualification"] ?></span></td>
                     <td  id="Occupationtype" class="styles">&nbsp;Occupation :  <span id="output"><?php echo  $row["Occupationtype"] ?></span></td>
                     <td id="Annual_income" class="styles">&nbsp;Annual income :  <span id="output"><?php echo  $row["Annual_income"] ?></span></td>
    </tr></table>
                   </fieldset><br>
                   <fieldset id="eq1">
                    <h2 id="ht">Education and Occupation</h2><br>
     <table><tr>
                    <td  id="Emailid" class="styles">Your Email ID : <span id="output"><?php echo  $row["Email"] ?></span></td>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                    <td> <button class="btn-grad5" target="_parent" onclick="logout()">Logout</button></td>
                    </tr></table>
                   </fieldset>
                   <script>
              function logout() {
                window.open("index.html","_parent");
              }  
              
              </script>
   <?php  }
} else {
    echo "0 results";
}

$conn->close();


?>
               </fieldset>
            </fieldset>
        </div>
    </body>
</html>