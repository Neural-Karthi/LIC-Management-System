function formvalidation(){

    var fname=document.newregistration.fname.value;
    var lname=document.newregistration.lname.value;
    var phone_number=document.newregistration.phone_number.value;
    var Address=document.newregistration.Address.value;
    var City=document.newregistration.City.value;
    var pincode=document.newregistration.pincode.value;
    var password=document.newregistration.password.value;
    var Rpassword=document.newregistration.Rpassword.value;



    letters=/^[A-Za-z]+$/;
    date_regeemail_id = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/;
    phoneno = /^\d{10}$/;
    pincode_validation = /^\d{6}$/;
    validate = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    passw= /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/; 

            //firstname field
                            if(fname==null || fname=="" ){
                               alert("Firstname field is empty!");  
                               return false; 
                            }
                            else if(!letters.test(fname)){
                               alert("FirstName should contain alphabets only!");
                               return false;
                            }
            //Secondname field      
                            else if(lname==null || lname=="" ){
                               alert("Lastname field is empty!");  
                               return false; 
                            }             
                            else if(!letters.test(lname)){
                               alert("Lastname should contain alphabets only!");
                               return false;
                            }
            //Gender field   
                            else  if ( (document.newregistration.gender[0].checked == false ) && (document.newregistration.gender[1].checked == false ) ) 
                             {
                                alert ( "Please choose your Gender: Male or Female" ); 
                                return false;
                            }
            //phone number field   
                            else  if(phone_number==null || phone_number=="" ){
                                alert("Phone Number field is empty!");  
                                return false; 
                             }
                            else  if(!phone_number.match(phoneno))
                            {
                               alert("Not a valid Phone Number");
                                return false;
                             }
             //Address field
                            else if(Address==null || Address=="" ){
                                alert("Please enter your Address");  
                                return false; 
                             }
            //City
                            else if(City==null || City=="" ){
                                 alert("Please enter your City Name");  
                                 return false; 
                              }
            //state
                            else if(document.newregistration.state.selectedIndex==0){
                              alert("Please select Your State");
                              return false;
                            }
            //Pincode
                            else  if(pincode==null || pincode=="" ){
                              alert("Pincode field is empty!");  
                              return false; 
                            }
                            else  if(!pincode.match(pincode_validation))
                            {
                               alert("Not a valid Pincode");
                               return false;
                            }
       //Education and Occupation
                            else if( (document.newregistration.Education_and_Qualification[0].checked == false ) && (document.newregistration.Education_and_Qualification[1].checked == false) &&
                                     (document.newregistration.Education_and_Qualification[2].checked == false ) && (document.newregistration.Education_and_Qualification[3].checked == false) &&
                                     (document.newregistration.Education_and_Qualification[4].checked == false ) && (document.newregistration.Education_and_Qualification[5].checked == false)){
                              alert ( "Please Select your Education and Qualification" ); 
                              return false;
                            }
      //Occupation
                           else if( (document.newregistration.Occupationtype[0].checked == false ) && (document.newregistration.Occupationtype[1].checked == false) &&
                                    (document.newregistration.Occupationtype[2].checked == false ) && (document.newregistration.Occupationtype[3].checked == false)){
                              alert ( "Please Select your Occupation type" ); 
                              return false;
                           }
      //Annual income
                           else if( (document.newregistration.Annual_income[0].checked == false ) && (document.newregistration.Annual_income[1].checked == false) &&
                                    (document.newregistration.Annual_income[2].checked == false ) && (document.newregistration.Annual_income[3].checked == false)){
                              alert ( "Please Select your Annual Income range" ); 
                              return false;
                           }
//email field
      else if(document.newregistration.Email.value==null || document.newregistration.Email.value=="" ){
         alert("Please enter your Email ID");  
         return false; 
         }
      else if (!document.newregistration.Email.value.match(validate)) {
         alert("EMail ID format is not approved!");
         return false;
         }
//repeat Email id

      else if(document.newregistration.Remail.value==null || document.newregistration.Remail.value==""){
         alert("Please enter your repeat Email ID");  
         return false;
      }
      else if(document.newregistration.Email.value!=document.newregistration.Remail.value){
         alert("Entered EmailID is not same!");
         return false;
      }
//password field
      else if(password==null || password=="" ){
         alert("Password field is empty!");  
         return false;
      }
      else if(!passw.test(password)){
         alert("To check a password between 8 to 15 characters, which should contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character,");
         return false;
      }
//repeat Email
      else if(Rpassword==null || Rpassword==""){
         alert("Confirm Password field is empty!");  
         return false;
      }
      var today = new Date();
      var year = today.getFullYear()-18;
      Dom= dateofbirth.substr(0,4);
      if(year<Dom){
        alert("make sure your date of birth field in 'YYYY/mm/dd' and 18+ in infants Table "+i);  
        return false; 
       }
}
//password visiblity
function myFunction() {

   var x =document.newregistration.password;
   if (x.type == "password") {
     x.type = "text";
   } else {
     x.type = "password";
   }
 }