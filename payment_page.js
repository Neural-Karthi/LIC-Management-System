var yearly=localStorage.getItem("yearly_payment");
document.getElementById("plan_price").innerHTML =yearly;

var Gst= localStorage.getItem("GSt");
document.getElementById("Gst_price").innerHTML =Gst;

document.getElementById("year_payment1").innerHTML = localStorage.getItem("total");


var coveramount=localStorage.getItem("coveramunt");
var valid_year=localStorage.getItem("year");
var yearly_downpaymnet=localStorage.getItem("yearly_payment");
var gst_amount=localStorage.getItem("GSt");
var total_amount=localStorage.getItem("total");
    
    console.log("coverage amount:",coveramount)
    console.log("valid upto year",valid_year)
    console.log("yearly Down payment",yearly_downpaymnet)
    console.log("GSt amount",gst_amount)
    console.log("total",total_amount)
    
    var date=new Date();
    var tdate=date.getDate();
    var month=date.getMonth()+1;
    if(tdate<10){
        tdate='0' + tdate;
    }
    if(month<10){
        month='0' + month;
    }
    var year=date.getUTCFullYear();
    var minDate=year+"-"+month+"-"+tdate;


    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

    var date=new Date();
    var tdate=date.getDate();
    var month=date.getMonth()+1;
    if(tdate<10){
        tdate='0' + tdate;
    }
    if(month<10){
        month='0' + month;
    }
    var year1=date.getUTCFullYear()+1;
    var minDate1=year1+"-"+month+"-"+tdate;

document.getElementById("coverage_amount").value=coveramount;
document.getElementById("coverage_till").value=valid_year;
document.getElementById("yearly_instalment_amount").value=yearly_downpaymnet;
document.getElementById("instalment_amount").value=total_amount+"-Paid";
document.getElementById("date_year").value=minDate;
document.getElementById("time").value=time;
document.getElementById("next_payment").value=minDate1;


var date=new Date();
var tdate=date.getDate();
var month=date.getMonth()+1;
if(tdate<10){
    tdate='0' + tdate;
}
if(month<10){
    month='0' + month;
}
var year=date.getUTCFullYear();
var year=year;
var month=month;
console.log(year);
console.log(month);

function payment(){
    letters=/^[A-Za-z]+$/;
    var phoneno = /^\d{12}$/;
    if(document.pnameForm.Name.value==""||document.pnameForm.Name.value==null){
        alert("Name field is empty!");
        return false;
    }
    else if(!letters.test(document.pnameForm.Name.value)){
        alert("name should contain alphabets only!");
        return false;
    }else  if(document.pnameForm.card.value==""||document.pnameForm.card.value==null){
        alert("card field is empty!");
        return false;
    }else  if(!document.pnameForm.card.value.match(phoneno)){
        alert("card numebr is invaild!");
        return false;
    }
    else if(document.pnameForm.Month.value==""||document.pnameForm.Month.value==null){
        alert("Month field is empty!");
        return false;
    }
    else if(isNaN(document.pnameForm.Month.value))
    {
        alert("Month must bee Number only");
        return false;
    }
   
    else if(document.pnameForm.Year.value==""||document.pnameForm.Year.value==null){
        alert("Year field is empty!");
        return false;
    }
    else if(isNaN(document.pnameForm.Year.value))
    {
        alert("Year must bee Number only");
        return false;
    }
    else if(document.pnameForm.Year.value<year){
        alert("your card is experied");
        return false;
    }
    else if(document.pnameForm.Year.value<year && document.pnameForm.Month.value<month){
        alert("your card is experied");
        return false;
    }

    else if(document.pnameForm.cvv.value==""||document.pnameForm.cvv.value==null){
        alert("cvv field is empty!");
        return false;
    }
    else if(isNaN(document.pnameForm.cvv.value))
    {
        alert("cvv number must bee Number only");
        return false;
    }
    else{
        alert("We will contact you soon for KYC process")
    }

}