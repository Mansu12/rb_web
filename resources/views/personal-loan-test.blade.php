@include('layout.header')

    <!--- liza Step First   - -->
	    <div class="container" id='elem'>
	    <form name='personal_loan_process_form' id='personal_loan_process_form' action={{URL::to('loan-submit')}} method="POST">
	    	  {{ csrf_field() }}
              <?php $loan_name="Personal";?>
			@if (isset($sme))
			 <?php $loan=6 ; $loan_name="SME"?>
		    @else
			 <?php $loan=9 ?>
		    @endif
	 <input type="hidden" id="product" name="product_name" value="<?php echo $loan;?>">
	 <div class="liza col-md-8" id="step-1">

                        
		   <div class="col-md-12 text-center"><h4>Apply for an Easy <?php echo $loan_name;?> Loan in 30 seconds</h4></div>
		   <p class="text-center">Step 1 of 3</p>

		   
			<div class="col-md-12 text-center animate-box cont" id="q1">
             <h3>I am a
			 <a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page1" ><input type="text" style="color:000;" class="clr-blue" id="emp_detail" name="emp_detail"  placeholder="Select" readonly>
			 <input type="hidden" class="clr-blue" id="emp_detail_id" name="emp_detail_id"  placeholder="Select" readonly></a>
			professional </h3> 
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display: none;" id="q2">
             <h3>my monthly income is
			 <input type="tel" id="income" name="income" onkeyup="changeText('income','q3')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
			 </h3> 
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display: none;" id="q2_year">
             <h3>my yearly income is
			 <input type="tel" id="income_year" name="turnover" onkeyup="changeText('income','q3')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
			 </h3> 
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display: none;" id="q3">
			<h3>I
			<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page2" ><input type="text" style="color:000;" class="clr-blue" id="exst_loan_detail" name="exst_loan_detail" readonly placeholder="Select"></a>
			have existing loan(s)</h3> 
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display: none" id="q4">
             <h3>remaining loan amount is
			 <input type="tel" id="obligation" name="obligation"  onkeyup="changeText('obligation','q5')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
			 </h3> 
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display: none" id="q5">
             <h3>Loan required
			 <input type="tel" id="loan_amount" name="loan_amount"  onkeyup="changeText('loan_amount','q6')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
			 </h3> 
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display: none" id="q6">
             <h3>Loan tenure
			 <input type="tel" id="loan_tenure" name="loan_tenure"  onkeypress="changeText('loan_tenure','q7')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="20" tabindex="1" maxlength="2" >
			 </h3> 
			</div>
			<div class="col-md-12 text-center animate-box cont1" style="display: none" id="q7"><h3>My date of birth is
			<input type="date" id="dob" name="dob" class="input-pad company-nm1" onchange="changeTest(this,'q8')">

			</h3>
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="q8" >
					<h3>Your Pan Card number
					<input type="tel" id="card" name="pan_number" onkeyup="changeText('card','step_3_btn')"   class="input-pad" placeholder="Pan Card" maxlength="10" minlength="10" tabindex="1">
					.</h3>
			</div>
			<div class="text-center" id="step_3_btn">
			
			<a class="btn btn-primary btn-outline with-arrow animate-box product_name" data-toggle="modal" data-target="#login_process">Get me a Loan<i class="icon-arrow-right"></i></a>
			</div>
	 </div>

	 </form>
	  <!-- POP Up code start -->
	   <div class="col-md-4 liza1">
		<div class="text-center guid nl-form-errors" id='pop1'>Select your professional!</div>

        <div class="text-center img1"><img src="{{URL::to('images/photo.jpg')}}"></div>
		</div>
		<!-- POP Up code end -->
		</div>

	 </div>

@include('layout.footer')
@include('layout.personal-loan-modal-test')
@include('layout.script_test')