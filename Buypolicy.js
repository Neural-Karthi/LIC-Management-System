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


function myfunction1(){
//cover amount 
    localStorage.setItem("coveramunt", "25,00,000");
//coverage valid year
    var total_plan_valid_year=year+40;
    localStorage.setItem("year", total_plan_valid_year);
    localStorage.setItem("yearly_payment", "Rs.4299.00");
    localStorage.setItem("GSt", "Rs.500.00");
    localStorage.setItem("total","Rs.4799.00")
    window.open('plan_summary.html',"_self");
}

function myfunction2(){
//cover amount 
    localStorage.setItem("coveramunt", "50,00,000");
    localStorage.setItem("yearly_payment", "");
//coverage valid year
    var total_plan_valid_year=year+45;
    localStorage.setItem("year", total_plan_valid_year);
    localStorage.setItem("yearly_payment", "Rs.4599.00");
    localStorage.setItem("GSt", "Rs.500.00");
    localStorage.setItem("total","Rs.5099.00")
    window.open('plan_summary.html',"_self");
   
}

function myfunction3(){
//cover amount 
    localStorage.setItem("coveramunt", "75,00,000");
//coverage valid year
    var total_plan_valid_year=year+50;
    localStorage.setItem("year", total_plan_valid_year);
    localStorage.setItem("yearly_payment", "Rs.5999.00");
    localStorage.setItem("GSt", "Rs.800.00");
    localStorage.setItem("total","Rs.6799.00")
    window.open('plan_summary.html',"_self");
   
}

function myfunction4(){
//cover amount 
    localStorage.setItem("coveramunt", "1,00,00,000");
//coverage valid year
    var total_plan_valid_year=year+60;
    localStorage.setItem("year", total_plan_valid_year);
    localStorage.setItem("yearly_payment", "Rs.7499.00");
    localStorage.setItem("GSt", "Rs.800.00");
    localStorage.setItem("total","Rs.8299.00")
    window.open('plan_summary.html',"_self");
   
}
