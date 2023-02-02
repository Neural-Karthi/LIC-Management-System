function loginvalidation(){

var emailid=document.loginform.EmailID.value;
var password=document.loginform.password.value;

validate = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
passw= /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/; 

//email field
  if(emailid==null || emailid=="" ){
    alert("Please enter your Email ID");  
    return false; 
    }
   else if (!emailid.match(validate)) {
    alert("EMail ID format is not approved!");
    return false;
    }
//password field
   else if(password==null || password=="" ){
    alert("Password field is empty!");  
    return false;
    }
}
function myFunction() {

    var x =document.loginform.password;
    if (x.type == "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
function opensignupform(){
    window.open("Registration.html");
}