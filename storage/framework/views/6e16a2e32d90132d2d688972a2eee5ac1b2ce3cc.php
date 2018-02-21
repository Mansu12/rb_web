<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<style>
 .img-center {margin:0 auto; display:block;padding:10px;}
 label {font-size:11px;}
 .yellow-bg {background:#ffc000; font-size:13px; color:#333; padding:10px 10px; margin:0 auto;display:block; border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;}
 .gray-bg {background:#666; font-size:13px; color:#fff; padding:10px 10px; margin:0 auto;display:block;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px; }
 .yellow-bg:hover {background:#eab102;}
 .pad-btm {padding-bottom:18px;}
 .blu-head-bg {background:#28a0ff; padding:15px; display:block;float:left; width:100%; text-align:center; color:#fff;font-size:16px;}
 .mrg-tp-btm {margin:15px auto;}
 .step1, .step2, .step3, .step4, .step5, .step6, .step7, .step8, .step9 {float:left;margin-bottom:20px;}
 .center-div {margin:0 auto; display:block;}
  th {text-align:center;}
  .form-control {height: 38px !important;border-radius: 0px !important;}
 @media  only screen and (max-width: 768px) 
 {
 .step1, .step2, .step3, .step4, .step5, .step6, .step7, .step8, .step9, .step10, .step11 {float:none;}
 }
</style>
<br>
<div id="fh5co-hero">
<div class="container">

<div class="col-md-4 col-md-offset-4" style="display:block;">
<form id="lenden_otp" name="lenden_otp" method="POST">
 <?php echo e(csrf_field()); ?>

	<div class="step1 white-bg box-shadow pad-btm">
	<img src="images/lenden_logo.jpg" class="img-center"/>

	<input type="hidden" name="request_type" id="request_type" value="send_otp">
	<div class="col-md-12">
	<label>Full Name</label>
	<input name="fname" id="fname" type="text" class="form-control"  required="">
	</div>

	<div class="col-md-12">
	<label>Mobile</label>
	<input name="mobile_number" id="mobile_number" maxlength="10" type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Email Id</label>
	<input name="email" id="email" oninput="mail('email')" type="text" class="form-control"  required="">
	<span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span>
	</div>
	
	<div class="col-md-12">
	<label>Password</label>
	<input name="password" id="password" type="password" class="form-control"  required="">
	</div>
	
	<div class="col-md-12"></div>
	
	<div class="col-md-12">
	
	<a class="yellow-bg" id="continue">CONTINUE</a>
	</div>
	</div>
	</form>
	</div>
	
	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step2 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Your Loan Requirements</h4>

	
	<div class="col-md-12">
	<label>Enter the loan Amount you Require</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Select the Purpose of your loan</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Enter the loan tenure in Months</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Please write the description of the loan</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<br>
	<button class="yellow-bg">NEXT</button>
	</div>
	</div>
	</div>
	
	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step3 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Pan Details</h4>
	<div class="col-md-8 col-xs-8">
	<label>Enter the loan Amount you Require</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	<div class="col-md-12">
	
	<button class="yellow-bg mrg-tp-btm">Read Pan Data</button>
	</div>
	<div class="col-md-12">
	<label>PAN Number</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Full Name</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Father's Name</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Residing in India</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<br>
	<button class="yellow-bg">NEXT</button>
	</div>
	</div>
	</div>
	
	
	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step4 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Aadhar Details</h4>
	<div class="col-md-8 col-xs-8">
	<label>Upload your Aadhar front side</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	
	
	<div class="col-md-8 col-xs-8">
	<label>Upload your Aadhar Back side</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	
	
	<div class="col-md-12">
	<label>Gender</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Aadhar UID Number</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Indian National</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Residing in India</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12"><input type="checkbox" /> &nbsp; Check if your Provided mobile number is linked to Aadhar</div>
	
	<div class="col-md-12">
	<label>Aadhar Registered Mobile Number</label>
	<input type="number" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<br>
	<button class="yellow-bg">NEXT</button>
	</div>
	</div>
	</div>

	
	
	<div style="display:block;">
	<div class="col-md-4 col-md-offset-2">
	<div class="step5 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Address Details</h4>

	<div class="col-md-12">
	<label>Address </label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>City</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>State</label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option>Maharashtra</option>
	</select>
	</div>
	
	<div class="col-md-12">
	<label>Pincode</label>
	<input type="number" class="form-control"  required="">
	</div>
	
	
	
	<div class="col-md-12">
	<label>Rent Amount per Month (Disabled)</label>
	<input type="number" class="form-control" disabled  required="">
	</div>
	
	<div class="col-md-12">
	<label>Country</label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option>India</option>
	</select>
	</div>
	
	<div class="col-md-12">
	<label>Landmark</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12"><input type="checkbox" />Communication Address is same as permanent address</div>
	
	</div>
	</div>
	
	
	
	
	<div class="col-md-4">
	
	<div class="step5 white-bg box-shadow pad-btm">
     <br>
	<div class="col-md-12">
	<label>Address </label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>City</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>State</label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option>Maharashtra</option>
	</select>
	</div>
	
	<div class="col-md-12">
	<label>Pincode</label>
	<input type="number" class="form-control"  required="">
	</div>
	
	
	
	<div class="col-md-12">
	<label>Rent Amount per Month (Disabled)</label>
	<input type="number" class="form-control" disabled  required="">
	</div>
	
	<div class="col-md-12">
	<label>Country</label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option>India</option>
	</select>
	</div>
	
	<div class="col-md-12">
	<label>Landmark</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<br>
	<button class="gray-bg pull-left">BACK</button>
	<button class="yellow-bg">NEXT</button>
	</div>
	
	</div>
	</div>
	</div>
	
	
	

	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step4 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Personal Details</h4>
	
	
	<div class="col-md-12">
	<label>Qualification</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Specialization</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Parent's/Spouse's Name</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Marital Status</label>
	<select class="form-control block drop-arr select-sty" >
	 <option>single</option>
	</select>
	</div>
	
	
	<div class="col-md-12">
	<label>Personal Reference Email (Parent/Spouse)</label>
	<input type="text" class="form-control"  required="">
	</div>
	<div class="col-md-12">
	<label>Personal Reference Conatact Number (Parent/Spouse)</label>
	<input type="number" class="form-control"  required="">
	</div>
	<div class="col-md-6">
	<label>Total Family Members</label>
	<input type="number" class="form-control"  required="">
	</div>
	<div class="col-md-6">
	<label>Total Earning Members</label>
	<input type="number" class="form-control"  required="">
	</div>
	
	<div class="col-md-8 col-xs-8">
	<label>Click Here to Upload Your Photograph</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	
	<div class="col-md-12">
	<br>
	<button class="gray-bg pull-left">BACK</button>
	<button class="yellow-bg pull-right">CONTINUE</button>
	</div>
	</div>
	</div>
	
	
	
	
	<div style="display:block;">
	<div class="col-md-4 col-md-offset-2">
	<div class="step6 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Professional Details</h4>
     <p class="col-md-12">Please fill up your employment Details</p>
	<div class="col-md-12">
	<label>Designation</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Professional Email ID</label>
	<input type="emial" class="form-control"  required="">
	</div>
	<div class="col-md-12">
	<label>Website</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-6">
	<label>Occupation </label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option></option>
	</select>
	</div>
	<div class="col-md-6">
	<label>Gross Annual Income</label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option></option>
	</select>
	</div>
	
	<div class="col-md-12">
	<label>Industry Type</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<p class="col-md-12">experience in current company</p>
	
	<div class="col-md-6">
	<label>Years</label>
	<input type="text" class="form-control"  required="">
	</div>
	<div class="col-md-6">
	<label>Months</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<p class="col-md-12">Total Work Experience</p>
	
	<div class="col-md-6">
	<label>Years</label>
	<input type="text" class="form-control"  required="">
	</div>
	<div class="col-md-6">
	<label>Months</label>
	<input type="text" class="form-control"  required="">
	</div>

	
	</div>
	</div>
	
	
	
	
	<div class="col-md-4">
	
	<div class="step6 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Employer Address</h4>
     <br>
	<div class="col-md-12">
	<label>Address </label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-6">
	<label>City</label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option>Mumbai</option>
	</select>
	</div>
	
	<div class="col-md-6">
	<label>State</label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option>Maharashtra</option>
	</select>
	</div>
	
	<div class="col-md-12">
	<label>Country</label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option>India</option>
	</select>
	</div>
	
	<div class="col-md-12">
	<label>Landmark</label>
	<input type="number" class="form-control"  required="">
	</div>
	
	
	<div class="col-md-6">
	<label>Pin Code</label>
	<input type="text" class="form-control"  required="">
	</div>
	<div class="col-md-6">
	<label>Landline Number</label>
	<input type="text" class="form-control"  required="">
	</div>
	<p class="col-md-12">Professional Preference</p>
	
	<div class="col-md-12">
	<label>Reference Full Name</label>
	<input type="text" class="form-control"  required="">
	</div>
	<div class="col-md-12">
	<label>Designation</label>
	<input type="text" class="form-control"  required="">
	</div>
	<div class="col-md-12">
	<label>Email</label>
	<input type="email" class="form-control"  required="">
	</div>
	<div class="col-md-12">
	<label>Phone Number</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	
	<div class="col-md-12">
	<br>
	<button class="gray-bg pull-left">BACK</button>
	<button class="yellow-bg pull-right">NEXT</button>
	</div>
	
	</div>
	</div>
	</div>
	
	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step7 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Financial Details</h4>
	<div class="col-md-8 col-xs-8">
	<label>Click here to upload your June Payslip</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	<div class="col-md-8 col-xs-8">
	<label>Click here to upload your July Payslip</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	
	<div class="col-md-6">
	<label>June Salary</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-6">
	<label>July Salary</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-6">
	<label>Incentive Type</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
     </select>
	</div>
	
	<div class="col-md-6">
	<label>Incentive Amount</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<br>
	<button class="gray-bg pull-left">BACK</button>
	<button class="yellow-bg pull-right">NEXT</button>
	</div>
	</div>
	</div>
	
	
	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step8 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Financial Details</h4>
	<p class="col-md-12">Please Upload Your Cheque</p>
	<div class="col-md-8 col-xs-8">
	<label>Click here to upload your cheque</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	<div class="col-md-8 col-xs-8">
	<label>Upload your Bank Statement</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	<div class="col-md-8 col-xs-8">
	<label>Upload your bank Statement</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	
	<div class="col-md-6 col-xs-12">
	<label>Bank Account Number</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-6 col-xs-12">
	<label>Bank</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
      </select>
	</div>
	
	<div class="col-md-6 col-xs-12">
	<label>IFSC Code</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
     </select>
	</div>
	
	<div class="col-md-6 col-xs-12">
	<label>Account Type</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
      </select>
	</div>
	
	<div class="col-md-6 col-xs-12">
	<label>Name as on Bank Account</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<br>
	<button class="gray-bg pull-left">BACK</button>
	<button class="yellow-bg pull-right">NEXT</button>
	</div>
	</div>
	</div>
	
	
	
	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step8 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Assets Details</h4>
	<p class="col-md-12">Please Provide the details of active loans have</p>
	
	<div class="col-md-12 col-xs-12">
	<label>Type of Asset</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
      </select>
	</div>
	
	<div class="col-md-6 col-xs-12">
	<label>Owner</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
      </select>
	</div>
	
	<div class="col-md-6 col-xs-12">
	<label>Any Loan</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
     </select>
	</div>
	
	<div class="col-md-12">
     <div class="pull-right">
	<button type="button"  class="btn btn-default btn-xs">Reset</button>
	<button type="button" class="btn btn-default btn-xs">ADD ASSET</button>
	</div>
		<br>
	</div>

	<div class="col-md-12">
	<div class="table-responsive mrg-top">
	 <table class="table table-striped">
	    <tr>
		 <th>Asset Type</th>
		 <th>Owner</th>
		 <th>Any Loan</th>
		</tr>
		<tr>
		 <td>&nbsp;</td>
		 <td>No Record Added Yet</td>
		 <td>&nbsp;</td>
		</tr>
	 </table>
	</div>
	</div>
	
	<div class="col-md-12">
	<button class="gray-bg pull-left">BACK</button>
	<button class="yellow-bg pull-right">NEXT</button>
	</div>
	</div>
	</div>
	
	
	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step8 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Active Loan Details</h4>
	<p class="col-md-12">Please Provide the details of active loans have</p>
	
	<div class="col-md-12 col-xs-12">
	<label>Type of Loan</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
      </select>
	</div>
	<div class="col-md-12">
	<label>Amount </label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-6 col-xs-12">
	<label>EMI</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
      </select>
	</div>
	
	<div class="col-md-6 col-xs-12">
	<label>Outstanding</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
     </select>
	</div>
	
	<div class="col-md-12">
     <div class="pull-right">
	<button type="button"  class="btn btn-default btn-xs">Reset</button>
	<button type="button" class="btn btn-default btn-xs">ADD LOAN</button>
	</div>
		<br>
	</div>

	<div class="col-md-12">
	<div class="table-responsive mrg-top">
	 <table class="table table-striped">
	    <tr>
		 <th>Loan Type</th>
		 <th>Amount</th>
		 <th>EMI</th>
		 <th>OutStanding</th>
		</tr>
		<tr>
		 <td>&nbsp;</td>
		 <td>No Record Added Yet</td>
		 <td>&nbsp;</td>
		 <td>&nbsp;</td>
		</tr>
	 </table>
	</div>
	</div>
	
	<div class="col-md-12">
	<button class="gray-bg pull-left">BACK</button>
	<button class="yellow-bg pull-right">NEXT</button>
	</div>
	</div>
	</div>
	
	
	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step8 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Upload Documents</h4>
	<p class="col-md-12">Please Upload any additional documents if any</p>
	
	<div class="col-md-12 col-xs-12">
	<label>Type of Document</label>
	<select class="form-control block drop-arr select-sty"  >
	 <option></option>
      </select>
	</div>
	
	<div class="col-md-12">
	<label>Click here to upload a supporting document</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
     <div class="pull-right">
	<button type="button"  class="btn btn-default btn-xs">Reset</button>
	<button type="button" class="btn btn-default btn-xs">ADD</button>
	</div>
		<br>
	</div>

	<div class="col-md-12">
	<div class="table-responsive mrg-top">
	 <table class="table table-striped">
	    <tr>
		 <th>Type</th>
		 <th>File</th>
		</tr>
		<tr>
		 <td>&nbsp;</td>
		 <td>&nbsp;</td>

		</tr>
	 </table>
	</div>
	</div>
	
	<div class="col-md-12">
	<button class="gray-bg pull-left">BACK</button>
	<button class="yellow-bg pull-right">NEXT</button>
	</div>
	</div>
	</div>
      
	

</div>
</div>



<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script type="text/javascript">
  function mail(obj,val){
    // //console.log(obj);
    if(obj=='email' ){
                   var str =$('#email').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // //console.log('Pancard is valid one.!!');
                      $('#email_id').hide();

                  }else{
                    // //console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email_id').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
	$('#continue').click(function(){
      alert('okae');
      if (!$('#lenden_otp').valid()) 
      {
      	return false;
      }else{
      	 $.ajax({  
         type: "POST",  
         url: "<?php echo e(URL::to('lenden-otp')); ?>",
         data : $('#lenden_otp').serialize(),
         success: function(msg){
         

					
					  
      }   
     });
      }
	});
</script>

