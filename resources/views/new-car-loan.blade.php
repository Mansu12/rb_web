@include('layout.header')
<div class="container ">
 <aside id="fh5co-hero">
  
 <!-- <div class="col-md-12 white-bg pad1 mrg-btm">
<img src="{{URL::to('images/9.png')}}" alt="Tribe Logo" class="img-responsive" />

 </div> -->
 <br>
 <div class="col-md-12 white-bg pad box-shadow">
 <h1 class="text-center loan-head">Car Loan</h1>
<div class="col-md-8" id="mod">
<form name="car_loan_process_form" id="car_loan_process_form" action="{{URL::to('loan-submit')}}" method="POST" >
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<input type="hidden" id="product" name="product_name" value="4">
 <input type="hidden" name="empid" class="empid" value=" <?php echo Session::get('empid')?Session::get('empid'):'';?>">
          <input type="hidden" name="brokerid" class="brokerid" value="<?php echo Session::get('brokerid')?Session::get('brokerid'):'';?>">
          <input type="hidden" name="source" class="source" value="<?php echo Session::get('source')?Session::get('source'):'';?>"> 
          <input type="hidden" name="refapp" class="refapp" value="<?php echo Session::get('refid')?Session::get('refid'):'';?>"> 
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Car Information<i class="icon-minus pull-right more-less"></i></a>
     
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
    
    
    

  <div class="col-md-12">
<center><div class="type-cover"><span>Car Type</span></div></center>
     
            <div class="col-xs-12 col-md-4 form-padding">
     <input type="text" class="form-input-new form-control" id="car_cost" name="car_cost" placeholder="On Road Price" required onkeypress="return fnAllowNumeric(event)" minlength="6"  maxlength="9">
  </div>
  <div class="col-xs-12 col-md-4 form-padding">
     <input type="text" class="form-input-new form-control" name="loan_amount" id="loan_amount" placeholder="Loan Required" required onkeypress="return fnAllowNumeric(event)"  value="">
  </div>
  <div class="col-xs-12 col-md-4 form-padding">
     <input type="text" class="form-input-new form-control search_city" name='city_name' placeholder="Enter City" required >
  </div>
  
     </div>

   
  
     
     
    
    </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" >
        <h4 class="panel-title"> 
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span id="valid"></span> Applicant Details<i class="icon-plus pull-right more-less"></i></a>
      
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse applicant_add">
        <div class="panel-body">
    
    <div class="col-xs-12 col-md-6 form-padding">
  
     <select class="block drop-arr select-sty"  name="loan_tenure" id="loan_tenure" required>
    <option value="">LOAN TENURE</option>
      <option value="1">1 Year</option>
    <option value="2">2 Year</option>
    <option value="3">3 Year</option>
    <option value="4">4 Year</option>
    <option value="5">5 Year</option>
 
  </select>
  </div>
    
    
    
    <div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control" name="applicantname" placeholder="Applicant Name"  required>
  </div>
  
  <div class="col-xs-12 col-md-6 form-padding">
   <div class="btn-grp form-control pad-no border-none" data-toggle="buttons">
                                    <span class="btn btn-default outer-brd1 active"><input type="radio" value="M" name="gender"  ><img id="myImage" src="images/male.png" class=""></span><span class="hidden-xs">Male</span>
                                   <span class="btn btn-default outer-brd1 "><input type="radio" value="F" name="gender" ><img id="myImage1" src="images/female.png" class=""></span> <span class="hidden-xs">Female</span>
                        <input type="hidden" class="clr-blue"   name="emp_detail_id" value="1" >
                                    
           </div>      
     </div>
     
     <div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control lastReporteddate"  name="dob"  placeholder="Date of Birth" required>
  </div>
    <div class="col-xs-12 col-md-6 form-padding">
     <div class="btn-grp form-control border-none pad-no" data-toggle="buttons">
      <span class="btn btn-default outer-brd btn-blu active"><input type="radio" id="sala_DI" value="salaried" name="emp_detail"  > Salaried</span>
      <span class="btn btn-default outer-brd btn-blu"><input type="radio" id="self_DI" value="self-employed" name="emp_detail"  >Self-Emp</span>
 

         </div>
     </div>

     <div  style="display: none;" id="self-employed_ID"> 
       
       <div class="col-xs-12 col-md-6 form-padding">
          <input type="text" class="form-input-new form-control " name="turnover" placeholder="Annual turnover" required  onkeypress="return fnAllowNumeric(event)">
      </div>

       <div class="col-xs-12 col-md-6 form-padding">
          <input type="text" class="form-input-new form-control " name="profit_after_tax" placeholder="Profit after tax" required  onkeypress="return fnAllowNumeric(event)">
      </div>
      <div class="col-xs-12 col-md-6 form-padding">
          <input type="text" class="form-input-new form-control " name="depreciation" placeholder="Depreciation"  required onkeypress="return fnAllowNumeric(event)">
      </div>
       <div class="col-xs-12 col-md-6 form-padding">
          <input type="text" class="form-input-new form-control " name="remuneration" placeholder="Director Remuneration"  required onkeypress="return fnAllowNumeric(event)">
      </div>

     </div>

     
     <div class="col-xs-12 col-md-6 form-padding" id="income_ID">
     <input type="text" class="form-input-new form-control"  id="income" name="income"  placeholder="Monthly Income" required onkeypress="return fnAllowNumeric(event)">
  </div>
  
  <div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control"   name="obligation" placeholder="Existing EMI (If Any)"  onkeypress="return fnAllowNumeric(event)"> 
  </div>
    

    
    
    </div>
      </div>
    </div>

   <br>
  
              <!-- <a class="btn btn-primary btn-outline with-arrow top-mrg product_name product_ID" id="btn_refresh_co1" >Get Best Quotes<i class="icon-arrow-right"></i></a>  -->

                <a class="btn btn-primary btn-outline with-arrow top-mrg product_name product_ID"   >Get Best Quotes<i class="icon-arrow-right mrg-btm"></i></a> 
             
  </div> 
  <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
  </form>
</div>



    <div class="col-md-4">
     <div class="border" id="mi_ID">

        <!--      <form class="" id="compareform" role="form" method="POST" action=""> -->
         <p id="err" style="display:none;" ><span style="color: red;font-size: 20px;display: block;text-align: center;">Sorry, No quotes found for your given requirements.</span></p>  
          
          <div class="inp-hig">
            <label class="form-label-new">Loan Amount</label>
              <input type="text" class="form-control" id="loanamount" name="name" value="" placeholder="" required class="clr-ddd" readonly />
            </div>

            <div class="inp-hig">
          <label class="form-label-new">Best ROI</label>
              <input type="text" class="form-control" id="rate" name="name" value="" placeholder="" required class="clr-ddd" readonly />
            </div>

            <div class="inp-hig">
            <label class="form-label-new">Tenure</label>
                 <input type="text" class="form-control" id="term" name="name" value="" placeholder="" required class="clr-ddd" readonly>
            </div>

            <div class="inp-hig">
          <label class="form-label-new">Processing Fee </label>
              <input type="text" class="form-control" id="processfee" name="name" placeholder="" required class="clr-ddd" readonly />
            </div>
         <br>
        <div> 
          
         <!-- <a id="apply_new" type="button" class="btn btn-info disblk" title="Experience New Digital Era In Loans">Apply Digitally</a> -->

          @if(Session::get('is_login'))
          <a id="apply_new" type="button" class="btn btn-info disblk" title="Experience New Digital Era In Loans">Apply Digitally</a>
           @else
           <a   data-toggle="modal" data-target="#login_process" class="btn btn-info disblk apply_digitally " title="Experience New Digital Era In Loans">Apply Digitally</a>
           @endif  


        <!--  <button id="eligibility" class="btn btn-info disblk" title="See Bankwise Eligibility And Apply Amongst Best Bank">Check Bankwise Eligibility</button> -->

 <button id="eligibility"  class="btn btn-info disblk" title="See Bankwise Eligibility And Apply Amongst Best Bank" disabled>Check Bankwise Eligibility </button>


         <button type="button" class="btn btn-info block"  id="call_rm" name="call_rm" data-toggle="modal" data-target="#Modal" title="Call For RM(Single Day Process)">Call Manager</button>
         
        </div>
      <!-- </form> -->
    </div>  

    <!-- <p id="err" style="display:none;" ><span style="color: red;font-size: 20px;display: block;text-align: center;">Sorry, No quotes found for your given requirements.</span></p>  -->
  </div>


<!--   <div id ="test123" class="col-md-8" ></div> -->
  </div>
  </aside>
 
  </div>

  <div  id="form_ID"></div>

  
    <div class="container">
  <div class="col-md-12 mrg-top white-bg pad1 box-shadow">
	 <hr>
	 <p>car loan is a short term loan for 3 to 5 years of tenure which all banks and non banking financial institution offer to the clients . Interest rates varies for personal and commercial use of car .</p>
	    <div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse106">Documents Required  </a>
      </h4>
    </div>
    <div id="collapse106" class="panel-collapse collapse">
      <div class="panel-body">
	  
	  
	  <ul>
	     <li>salaried individual </li>
		 <li>minimum 21 years of age </li>
		 <li>minimum net annual salary of 240000 p.a </li>
		 <li>latest 3 month salary slips and Form 16</li>
		 <li>credit score </li>
		 <li>bank statement for last 6 month </li>
	  </ul>
	  <h3>self -employed </h3>
	  <ul>
	      <li>Proof of continuation: Trade license /Establishment /Sales Tax certificate </li>
		  <li>ITR for latest 3 year along with balance sheet ,P&L account,computation of income.</li>
		  <li>Current account statement for last 6 month </li>
	  </ul>
	  <p><b>ID Proof & Address proof for both the above given category </b></p>
	  </div>
      
    </div>
    </div>
   </div>
	 </div>
	 </div>
	 <br>
@include('layout.footer')
@include('layout.script')

<script type="text/javascript">
$(document).ready(function(){
    $('#co_applicant_DI').change(function(){
        if(this.checked)
           $('#coapplicant_display').show();
        else
         $('#coapplicant_display').hide();
    });

//    applicacnt 
  $('#sala_DI').change(function(){
   $("#self-employed_ID").hide();
   $("#income_ID").show();
  });

  $('#self_DI').change(function(){
  $("#income_ID").hide();
  $("#self-employed_ID").show();
  });

  // applicant end
  // co applicant 
 $('#co_sala_DI').change(function(){
 $("#co_self-employed_ID").hide();
     $("#co_income_ID").show();
  });

  $('#co_self_DI').change(function(){
  $("#co_income_ID").hide();
  $("#co_self-employed_ID").show();
  });

  

 

$(".product_ID").click(function(e){
   e.preventDefault();
    if(!$('#car_loan_process_form').valid()){
     // $('#valid').empty().append('<span class="icon-remove text-danger" id="tt2"></span>');
            return false;
          }else{
           
               var property_cost=$('#car_cost').val();
               var obligation=$('#obligation').val();
      if(property_cost!='' && obligation!=''){
         $('#login_process').attr( 'id', 'login_process');
             $(".iframeloading").show();
              $.ajax({  
             type: "POST",  
             url: "{{URL::to('loan-submit')}}",
           data : $("#car_loan_process_form").serialize(),
        //   data: {_token :_token,username:username,password:password},
             success: function(msg){
                            $(".iframeloading").hide();                   
                             if(msg.success ==true){
                              var quote=msg.quote;
                            var loan_eligible = msg.loan_eligible;
                             if (loan_eligible>0) {
                             $("#form_ID").empty().append(msg.html);
                             $('#loanamount').val(loan_eligible);
                           var roi = msg.roi;
                             $('#rate').val(roi);
                           var LoanTenure = msg.LoanTenure;
                             $('#term').val(LoanTenure);
                           var processingfee = msg.processingfee;
                             $('#processfee').val(processingfee);
                           var Bank_id = msg.Bank_Id;
                             $('#bank').val(Bank_id);
                           // var url = "apply-lead-online?qoutid="+quote+"&BankId="+Bank_id+"&product=12&processing_fee="+processingfee+"&loan_eligible="+loan_eligible+"&roi_type="+roi+"";

                             var url="thank-you";
                             $("#apply_new").attr("href", url);
                             $('#mi_ID').show();
                             $('#err').hide();
                             // $(window).scrollTop($('#form_ID').offset().top-20);

                              $('#eligibility').prop('disabled', false);
                         }else{

                               $('#eligibility').prop('disabled', true);

                                $('#err').show();
                                $('#loanamount').val("");
                                $('#rate').val("");
                                $('#term').val("");
                                $('#processfee').val("");
                                $('#bank').val("");
                                $('#apply_new').hide();
                                // $('#mi_ID').hide();
                                $("#form_ID").empty();
                                
                                
                         }
                  
               }                    
           }  
       });

}else{
 $('#login_process').removeAttr('id');
  alert("This field is required.");

  
}

     }
  

  });

});

 

</script>

<script type="text/javascript">
$("#eligibility").click(function() {
  $(window).scrollTop($('#form_ID').offset().top-20);
});



</script>

<script type="text/javascript">
  $(document).ready(function()
{
    function update()
    {
      if(! $("#car_cost").val()){
          $("#loan_amount").val('');
      }else{
        var cost = parseFloat($("#car_cost").val());
        // console.log(cost);
        var total = (cost)*90/100;
        // var total = total.toFixed(2);
        // console.log(total);
        $("#loan_amount").val(total);
      }
    }
    $(document).on("change, keyup", "#car_cost", update);
});
</script>

 
