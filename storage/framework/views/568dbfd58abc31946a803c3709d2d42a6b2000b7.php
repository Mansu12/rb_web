<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<style>
    .ull {background:#fff; font-size:13px; display:block; border:1px solid #ccc;}
	.ull li {list-style-type:none; display:block;padding:2px;border-bottom:1px dashed #eee;}
	.sbi-banner {background: url("images/sbi-banner.jpg"); width:100%; height:500px;box-shadow: 1px 0px 2px 1px #666; }
	.grup-btn-center {width: 342px;margin-left: 30%;margin: 30px 0px;display: block !important;}
	label {font-size:11px;margin: 0px;}
	h4 {text-transform:uppercase;}
	.mrg-top{margin-top:20px; display:block;}
	.flt-left {float:left;}
	.hdr { margin-bottom:20px;}
	.hdr b {border-bottom:2px solid #f1f1f1; padding:10px 20px;}
	.obj-center {margin:0 auto; display:block;}
	.mrg-btm {margin-bottom:20px;}
  </style>


	<div id="fh5co-hero">
	<div class="express-lon-ban"><img src="images/rectify-banner.png" class="img-responsive"/></div>
		<div class="container">
			<div class="row">
			<br>
			<div class="col-md-1"></div>
				<div class="col-md-10 white-bg mrg-tp-minus box-shadow">
					
					<div class="form-group">
					<form id="rectify_credit_form" name="rectify_credit_form" role="form" method="POST">
					<div class="col-md-12"><h4 class="hdr pad1 text-center"><b>Personal Details</b></h4></div>
					<div class="col-md-4">
					<label>Full Name*</label>
					<input name="FName" id="FName" type="text" class="form-control" onkeypress="return AllowAlphabet(event)" required="">
					</div>
					<div class="col-md-4">
					<label>Date Of Birth</label>
					<input name="DateOfBirth" id="DateOfBirth" type="text" class="form-control"  required="">
					</div>
					<div class="col-md-4">
					<label>Pan No</label>
					<input name="PanNum" id="PanNum" type="number" class="form-control"  required="">
					</div>
					<div class="col-md-4">
					<label>Aadhar No.</label>
					<input type="number" class="form-control"  required="">
					</div>
					
					<div class="col-md-4">
					<label>Mobile No</label>
					<input type="number" class="form-control"  required="">
					</div>
					<div class="col-md-4">
					<label>Email Id</label>
					<input type="email" class="form-control"  required="">
					</div>
					<hr>
					<div class="col-md-4">
					<label>Address</label>
					<input type="text" class="form-control"  required="">
					</div>
					<div class="col-md-4">
					<label>City</label>
					<select class="form-control">
					  <option>- Select City -</option>
					  <option>Mumbai</option>
					</select>
					</div>
					<div class="col-md-4">
					<label>State</label>
					<select class="form-control">
					  <option>- Select State -</option>
					  <option>Mumbai</option>
					</select>
					</div>
					<div class="col-md-4">
					<label>Pincode</label>
					<input type="number" class="form-control"  required="">
					</div>
					
					<div class="col-md-12"><h4 class="hdr pad1 text-center"><b>Upload Document</b></h4></div>
					<div class="col-md-4"></div>
					<div class="col-md-4">
					<label>Upload Credit Report Here</label>
					<input type="file" class="form-control"  required="">
					</div>
					
					
					
					<div class="col-md-12"><h4 class="hdr pad1 text-center"><b>Financial Details</b></h4></div>
					<div class="col-md-4">
					<label>Loans / Bank from Financial Institutions *</label>
					<select class="form-control block drop-arr select-sty">
					  <option>NA</option>
					</select>
					</div>
					<div class="col-md-4">
					<label>Loans from Family / Friends *</label>
					<select class="form-control block drop-arr select-sty">
					  <option>NA</option>
					</select>
					</div>
					<div class="col-md-4">
					<label>Total number of loans*</label>
					<select class="form-control block drop-arr select-sty">
					  <option>NA</option>
					</select>
					</div>
					<div class="col-md-4">
					<label>Total Monthly Income *</label>
					<select class="form-control block drop-arr select-sty">
					  <option>NA</option>
					</select>
					</div>
					<div class="col-md-4">
					<label>My average Monthly Credit Card Payment *</label>
					<select class="form-control block drop-arr select-sty">
					  <option>NA</option>
					</select>
					</div>
					<div class="col-md-4">
					<label>My contribution to Monthly Family Expenses *</label>
					<select class="form-control block drop-arr select-sty">
					  <option>NA</option>
					</select>
					</div>
					<div class="col-md-4">
					<label>Total Monthly EMI *</label>
					<select class="form-control block drop-arr select-sty">
					  <option>NA</option>
					</select>
					</div>
					
					
					
					<div class="col-md-12"><h4 class="hdr pad1 text-center"><b>Education Qalification</b></h4></div>
					<div class="col-md-4">
					<label>Highest Degree</label>
					<input type="text" class="form-control"  required="">
					</div>
					<div class="col-md-4">
					<label>Name of University & Collage</label>
					<input type="text" class="form-control"  required="">
					</div>
					<div class="col-md-4">
					<label>Year of Passing</label>
					<input type="text" class="form-control"  required="">
					</div>
					
					
					<div class="col-md-12"><h4 class="hdr pad1 text-center"><b>Employment Details</b></h4></div>
					<div class="col-md-4">
					<label>Name of Current Employer</label>
					<input type="text" class="form-control"  required="">
					</div>
					<div class="col-md-4">
					<label>Total Years of Work Expesrience</label>
					<input type="text" class="form-control"  required="">
					</div>
					<div class="col-md-4">
					<label>Current Designation</label>
					<input type="text" class="form-control"  required="">
					</div>
					<div class="col-md-4">
					<label>Total No. of Jobs Done</label>
					<input type="text" class="form-control"  required="">
					</div>
					<div class="col-md-4">
					<label>Longest Job in years</label>
					<input type="text" class="form-control"  required="">
					</div>
					
					
					
				   <div class="col-md-12 mrg-top">
					<button class="btn btn-primary btn-outline obj-center mrg-btm">SUBMIT</button>
					</div>
					</form>
				</div>
			</div>
		</div>	
		<br>
	</div>



<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script type="text/javascript">
  function AllowAlphabet(e)
{
  isIE = document.all ? 1 : 0
  keyEntry = !isIE ? e.which : event.keyCode;
  if (((keyEntry >= '65') && (keyEntry <= '90')) || ((keyEntry >= '97') && (keyEntry <= '122')) || (keyEntry == '46') || (keyEntry == '32') || keyEntry == '45')
     return true;
  else
{
    // alert('Please Enter Only Character values.');
    return false;
      }
}
</script>

