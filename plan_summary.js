 document.getElementById("coveramountdisplay").innerHTML = localStorage.getItem("coveramunt");
 document.getElementById("valid_upto").innerHTML ="Year "+localStorage.getItem("year");
 document.getElementById("year_payment1").innerHTML =localStorage.getItem("yearly_payment");




 function planform_validation(){
   var username=document.plan_summary.username.value;
    var pan_number=document.plan_summary.pan_number.value;
    var yearly_income=document.plan_summary.yearly_income.value;
    var aadharnum=document.plan_summary.aadharnum.value;
    var Buyer_email_ID=document.plan_summary.Buyer_email_ID.value;
var letters=/^[A-Za-z]+$/;
var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
var regexp = /^[2-9]{1}[0-9]{3}\s[0-9]{4}\s[0-9]{4}$/; 
var validate = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    //pan card number
           if(username==null || username=="" ){
                               alert("Firstname field is empty!");  
                               return false; 
                            }
                            else if(!letters.test(username)){
                               alert("FirstName should contain alphabets only!");
                               return false;
                            }
            if(pan_number==null || pan_number=="" ){
               alert("Pan Card number field is empty!");  
               return false; 
            }
            else if(!regpan.test(pan_number)){
               alert("invalid pan card number");
               return false;
            }
    //yearly income
            else  if(yearly_income==null || yearly_income=="" ){
               alert("yearly income field is empty!");  
               return false; 
            }
    //Aadhaar card number
            else if(aadharnum==null || aadharnum=="" ){
               alert("Aadhaar Card number field is empty!");  
               return false; 
            }
            else if(!regexp.test(aadharnum)){
               alert("invalid pan card number");
               return false;
            }
    //email field
            else if(Buyer_email_ID==null || Buyer_email_ID=="" ){
                alert("Please enter your Email ID");  
                return false; 
            }
            else if (!Buyer_email_ID.match(validate)) {
                alert("EMail ID format is not approved!");
                return false;
            }
    //organisation
            else if(document.plan_summary.Organisation.selectedIndex==0){
                alert("Please select Your Organisation type");
                return false;
            }
   //declaration
            else if( !document.plan_summary.checkbox1.checked ){
                              alert ( "Please tick the Declarations cheackbox's" ); 
                              return false;
                       }
                         else if( !document.plan_summary.checkbox2.checked ){
                                     alert ( "Please tick the Declarations cheackbox's" ); 
                                     return false;
                          }
                               else if(!document.plan_summary.checkbox3.checked ){
                                       alert ( "Please tick the Declarations cheackbox's" ); 
                                       return false;
                                   }
                                  
 }