@include('layout.header')
<div class="container ">
 <aside id="fh5co-hero">
	<div class="col-md-12">
	<h2 class="align-center loan-head">Home Loan</h2>
	</div>
 <div class="col-md-12 white-bg pad1 mrg-btm">
<img src="{{URL::to('images/9.png')}}" alt="Tribe Logo" class="img-responsive" />

 </div>
 <div class="col-md-12 white-bg pad">
<div class="col-md-8">
<form name="home_loan_process_form" id="home_loan_process_form" action="{{URL::to('loan-submit')}}" method="POST" >
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<input type="hidden" id="product" name="product_name" value=12>
	<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Property Information</a>
		 <i class="icon-plus pull-right more-less"></i>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
		
	  
	  

	<div class="col-md-12">
<center><div class="type-cover"><span>PROPERTY TYPE</span></div></center>
						
						<div class="text-center flt-lft btn-grp" data-toggle="buttons">
							<div class="scenario">
								<div class="col-xs-4 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="propery_types" value="ready"  class="radio1"  checked >READY</a></div>
								<div class="col-xs-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="propery_types" value="searching" class="radio1">SEARCHING</a></div>
								<div class="col-xs-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="propery_types" value="underconst" class="radio1">UNDERCONST</a></div>
								<div class="col-xs-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="propery_types" value="resale" class="radio1">RESALE</a></div>
								<div class="col-xs-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="propery_types" value="constuction" class="radio1">CONSTRUCTION</a></div>
								<div class="col-xs-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="propery_types" id="others" class="radio1">OTHER</a></div>
								
							</div>
						</div> 
						
						<div class="col-xs-4 form-padding">
     <input type="text" class="form-input-new form-control" name="property_cost" placeholder="Property Cost" required onkeypress="return fnAllowNumeric(event)">
	</div>
	<div class="col-xs-4 form-padding">
     <input type="text" class="form-input-new form-control" name="loan_amount" placeholder="Loan Required" required onkeypress="return fnAllowNumeric(event)">
	</div>
	<div class="col-xs-4 form-padding">
     <input type="text" class="form-input-new form-control search_city" name='city_name' placeholder="Enter City" required >
	</div>
	
     </div>

	 
	
	   
	   
		
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" >
        <h4 class="panel-title"> 
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span id="valid"></span> Applicant Details</a>
		  <i class="icon-plus pull-right more-less"></i>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
		<div class="loan-tenure">
			<center>
				<div class="type-cover">
						  <span>LOAN TENURE</span>
				</div>
			</center>
			<div class="scaling-slider">
			 <div class="tenure offset5 pad">
                  <div  id="unranged-value" value="" style="width:100%; height:10px;"></div>
				</div>
			<input  type="hidden" id="loan_tenure" name="loan_tenure" value="0" />
		</div>

	 </div>
    <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="applicantname" placeholder="Applicant Name"  required>
	</div>
	
	<div class="col-xs-6 form-padding">
	 <div class="btn-grp form-control border-none" data-toggle="buttons">
                                    <span class="btn btn-primary outer-brd1 active"><input type="radio" value="M" name="gender"  ><img id="myImage" src="images/male.png" class=""></span><span class="hidden-xs">Male</span>
                                   <span class="btn btn-primary outer-brd1 "><input type="radio" value="F" name="gender" ><img id="myImage1" src="images/female.png" class=""></span> <span class="hidden-xs">Female</span>
                        <input type="hidden" class="clr-blue"   name="emp_detail_id" value="1" >
                                    
           </div>		   
	   </div>
	   
	   <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control lastReporteddate"  name="dob"  placeholder="Date of Birth" required>
	</div>
		<div class="col-xs-6 form-padding">
     <div class="btn-grp form-control border-none" data-toggle="buttons">
      <span class="btn btn-primary outer-brd btn-blu active"><input type="radio" value="salaried" name="emp_detail"  > Salared</span>
      <span class="btn btn-primary outer-brd btn-blu"><input type="radio" value="self-employed" name="emp_detail"  >Self-Emp</span>
 

         </div>
	   </div>
	   
	   <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control"  name="income"  placeholder="Monthly Income" required onkeypress="return fnAllowNumeric(event)">
	</div>
	
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control"   name="obligation" placeholder="Exsisting EMI (If Any)" required onkeypress="return fnAllowNumeric(event)">
	</div>
		
		
		<!-- Rounded switch -->
		<label class="switch"> <input type="checkbox" id="co_applicant_DI"><div class="slider round"><span class="co-applicant"> ADD CO-APPLICANT</span></div></label>
		
		
		
		</div>
      </div>
    </div>
    <div class="panel panel-default" id="coapplicant_display" style="display: none;">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Co-Applicant Details</a>
		  <i class="icon-plus pull-right more-less"></i>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
		
		<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="co_applicantname"  placeholder="Co-Applicant Name" >
	</div>
	
	<div class="col-xs-6 form-padding">
	 <div class="btn-grp form-control border-none" data-toggle="buttons">
                                    <span class="btn btn-primary outer-brd1 active"><input type="radio" name="cogender" value="M" ><img id="myImage" src="images/male.png" class=""></span><span class="hidden-xs">Male</span>
                                   <span class="btn btn-primary outer-brd1 "><input type="radio" name="cogender" value="F"><img id="myImage1" src="images/female.png" class=""></span> <span class="hidden-xs">Female</span>
           </div>		   
	   </div>
	   
	   <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control lastReporteddate" name="co_dob" placeholder="Date of Birth"  >
	</div>
		<div class="col-xs-6 form-padding">
     <div class="btn-grp form-control border-none" data-toggle="buttons">
      <span class="btn btn-primary outer-brd btn-blu active"><input type="radio" value="salaried"   name="co_emp_detail"  > Salared</span>
      <span class="btn btn-primary outer-brd btn-blu"><input type="radio"  value="self-employed"  name="co_emp_detail"  >Self-Emp</span>
         </div>
	   </div>
	   
	   <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="co_applicant_turnover" placeholder="Turnover/Topline"  onkeypress="return fnAllowNumeric(event)">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="co_applicant_profit_after_tax" placeholder="Profit After Tax"  >
	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="co_applicant_depreciation" placeholder="Deprication"  >
	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="co_applicant_remuneration" placeholder="Partner Remuneration"  >
	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control"  name="co_applicant_income"  placeholder="Monthly Income" onkeypress="return fnAllowNumeric(event)" >
	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control"  name="co_applicant_obligation" placeholder="All Existing EMI"   onkeypress="return fnAllowNumeric(event)">
	</div>
	   		 	
		</div>
      </div>
    </div>
<br>
    <?php if(Session::get('is_login')) {?>
							  <?php if(Session::get('contact')!=''){ Session::get('contact'); ?>
							<button class="btn btn-primary btn-outline with-arrow top-mrg product_name " >Get Best Quotes<i class="icon-arrow-right"></i></button>
							<?php }else{?> 
							  <a  class="btn btn-primary btn-outline with-arrow top-mrg product_name" data-toggle="modal" data-target="#contact_id">Get Best Quotes<i class="icon-arrow-right"></i></a>
				              <?php }?>
						<?php }else{?>
						<button  style="display:none" class="btn btn-primary btn-outline with-arrow top-mrg product_name " id="btn_refresh_co">Get Best Quotes<i class="icon-arrow-right"></i></button>

							<a class="btn btn-primary btn-outline with-arrow top-mrg product_name" id="btn_refresh_co1" data-toggle="modal" data-target="#login_process">Get Best Quotes<i class="icon-arrow-right"></i></a>
						<?php } ?>

						 
						 
  </div> 
  </form>
</div>



		<div class="col-md-4">
	   <div class="border">

        <!--      <form class="" id="compareform" role="form" method="POST" action=""> -->
				  
				  
				  <div class="inp-hig">
            <label class="form-label-new">Loan Amount</label>
              <input type="text" class="form-control" id="loanamount" name="name" value="" placeholder="" required class="clr-ddd" />
            </div>

            <div class="inp-hig">
          <label class="form-label-new">Best ROI</label>
              <input type="text" class="form-control" id="rate" name="name" value="" placeholder="" required class="clr-ddd" />
            </div>

            <div class="inp-hig">
            <label class="form-label-new">Tenure</label>
                 <input type="text" class="form-control" id="term" name="name" value="" placeholder="" required class="clr-ddd">
            </div>

            <div class="inp-hig">
          <label class="form-label-new">Processing Fee</label>
              <input type="text" class="form-control" id="processfee" name="name" placeholder="" required class="clr-ddd" />
            </div>

        <div> 
          
         <a id="apply_new" type="button" class="btn btn-info" title="Experience New Digital Era In Loans">Apply Now</a>
         <button id="eligibility" class="btn btn-info" title="See Bankwise Eligibility And Apply Amongst Best Bank">Eligibility</button>
         <button type="button" class="btn btn-info"  id="call_rm" name="call_rm" data-toggle="modal" data-target="#Modal" title="Call For RM(Single Day Process)">Call RM</button>
         
        </div>
			<!-- </form> -->
		</div>	
	</div>


	 <div id ="test123" class="col-md-8" ></div>
	</div>
	</aside>
 
	</div>

	<div  id="form_ID"></div>

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


 

$(".btn-primary").click(function(e){
   e.preventDefault();
    if(!$('#home_loan_process_form').valid()){

    	$('#valid').empty().append('<span class="icon-remove text-danger" id="tt2"></span>');
            return false;
          }else{
 
              $.ajax({  
             type: "POST",  
             url: "{{URL::to('loan-submit')}}",
           data : $("#home_loan_process_form").serialize(),
        //   data: {_token :_token,username:username,password:password},
             success: function(msg){
                    
                           if(msg.success ==true){
                           $("#form_ID").empty().append(msg.html);


   // console.log(loan_eligible);
                            var loan_eligible = msg.loan_eligible;
                             $('#loanamount').val(loan_eligible);
                            var roi = msg.roi;
                            $('#rate').val(roi);
                          var LoanTenure = msg.LoanTenure;
                            $('#term').val(LoanTenure);
                    var processingfee = msg.processingfee;
                    $('#processfee').val(processingfee);
                    var Bank_id = msg.Bank_Id;
                    $('#bank').val(Bank_id);
                     var url = "apply-lead-online?qoutid=0&BankId="+Bank_id+"&product=9&processing_fee="+processingfee+"&loan_eligible="+loan_eligible+"&roi_type="+roi+"";
                     $("#apply_new").attr("href", url);
                  
                  }

                             
                        
                    }  
                  });

          }


});

});

 

</script>