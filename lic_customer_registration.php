<?php
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $gender=$_POST['gender'];
  $phone_number=$_POST['phone_number'];
  $Address=$_POST['Address'];
  $City=$_POST['City'];
  $state=$_POST['state'];
  $pincode=$_POST['pincode'];
  $Education_and_Qualification=$_POST['Education_and_Qualification'];
  $Occupationtype=$_POST['Occupationtype'];
  $Annual_income=$_POST['Annual_income'];
  $Email=$_POST['Email'];
  $password=$_POST['password'];

  
  $con=mysqli_connect("localhost","root","","lic");

  $query=mysqli_query($con,"SELECT * FROM lic_customer_registration WHERE Email='$Email'");

  $result = mysqli_num_rows($query);
  if($result>0){
    echo '<script type="text/javascript" language="javascript">
    alert("Email ID already use");
    window.open("Registration.html","_parent");
    </script>';
  }

  else{
  $sql="INSERT INTO lic_customer_registration(fname,lname,gender,phone_number,Address,City,state,pincode,Education_and_Qualification,Occupationtype,Annual_income,Email,password)
   values('$fname','$lname','$gender','$phone_number','$Address','$City','$state','$pincode','$Education_and_Qualification','$Occupationtype','$Annual_income','$Email','$password')";
  if(mysqli_query($con,$sql)){
    echo '<script type="text/javascript" language="javascript">
    alert("Successfully Registered");
    window.open("index.html","_parent");
    </script>';
  }
  else{
    echo '<script type="text/javascript" language="javascript">
    alert("registration Details NOT ADDED");
    window.open("Registration.html","_parent");
    </script>';

  }
}
?>