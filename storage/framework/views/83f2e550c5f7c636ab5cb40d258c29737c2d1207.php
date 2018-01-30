<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container" id="fh5co-hero">
			<div class="row">
			<div class="sbi-banner"><img src="images/header-img.png" /></div>
				<div class="col-md-12 white-bg mrg-tp-minus box-shadow">
					<form id="compareform" role="form" method="POST" action="">
					<div class="form-group">
					<div class="col-md-12"><h4 class="hdr pad1 text-center">Personal Details</h4></div>
					<div class="col-md-3">
					<label>Name</label>
					<input type="text" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Middle Name</label>
					<input type="text" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Last Name</label>
					<input type="text" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Date Of Birth</label>
					<input type="date" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Pan card No.</label>
					<input type="number" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Current Residence Address</label>
					<input type="text" class="form-control"  required="">
					</div>
					<hr>
					<div class="col-md-3">
					<label>Landmark</label>
					<input type="text" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Pincode</label>
					<input type="number" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Mobile No.</label>
					<input type="number" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Email Id.</label>
					<input type="email" class="form-control"  required="">
					</div>
					<div class="col-md-12"><h4 class="hdr pad1 text-center">Office Details</h4></div>
					<div class="col-md-3">
					<label>Occupation type</label>
					<select class="form-control">
					  <option></option>
					  <option></option>
					  <option></option>
					  <option></option>
					</select>
					</div>
					<div class="col-md-3">
					<label>Designation</label>
					<input type="text" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Company Name</label>
					<input type="text" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Office Address</label>
					<input type="text" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Pincode</label>
					<input type="number" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Gross Income</label>
					<input type="text" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Net Income</label>
					<input type="text" class="form-control"  required="">
					</div>
					
					
					
					
					<!-- Column 2 End -->
					
					
				
					
					
			       <hr>
				   <div class="col-md-12">
					<div class="grup-btn-center flt-left ">
					<button class="btn btn-primary btn-outline center-obj">Submit</button>
					<!-- <button class="btn btn-primary btn-outline">Back</button>
					<button class="btn btn-primary btn-outline">Save As Draft</button>
					<button class="btn btn-primary btn-outline">Clear</button> -->
					</div>
					</div>
					</div>
					</form>
				</div>
				
				
			</div>
		</div>
		<br>


<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

