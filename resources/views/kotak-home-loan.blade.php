@include('layout.header')
<div id="fh5co-hero">
  <img src="{{URL::to('images/kotak_banner.jpg')}}" alt="Kotak Home Loan Banner" title="Kotak Home Loan" class="img-responsive">

  <div class="container">
    <br>
<div class="row">
		

				<div class="row">
				                  
									<div class="form-group title-1">
									 
										<h3 class="hdr col-md-12 text-center">Kotak Home Loan</h4>
										<div class="col-md-2"></div>
										<div class="col-md-8 white-bg pad1 box-shadow">
										<div class="col-md-4">
										<span>Loan Purpose</span>
										     <select class="block drop-arr select-sty" name="" id="" required>
						                      <option>Loan Purpose</option>
						                    </select> 
						                 </div>
										 <div class="col-md-4">
										 <span>Employee Type</span>
										     <select class="block drop-arr select-sty" name="" id="" required>
						                      <option>Employee Type</option>
						                    </select> 
						                 </div>
										<div class="col-md-4">
										<span>First Name</span>
											<input type="text" class="form-control" placeholder= "First Name*" name="" id="" required>
										</div>
										
										
										<div class="col-md-4 lst-nam">
										<span>Last Name</span>
											<input type="text" class="form-control" placeholder="Last Name*" name="" id=""  required>
										</div>
										<div class="col-md-4 lst-nam">
										<span>Company Name</span>
											<input type="text" class="form-control" placeholder="Company Name*" name="" id=""  required>
										</div>

										<div class="col-md-4">
										<span>Contact Person</span>
											<input type="text" class="form-control lastReporteddob" id="" name="" placeholder="Contact Person" required>
										</div>
                                        <div class="col-md-12"><hr></div>
                                         <div class="col-md-4">
										 <span>Loan Amount</span>
											<input type="text" class="form-control " id="" name="" placeholder="Loan Amount*"  required>
										</div>
										<div class="col-md-4">
                                             <span>Tenure Years</span>
										     <select class="block drop-arr select-sty" name="" id="" required>
						                      <option>Tenure Years</option>
						                       
						                    </select> 
						                    </div>
									  <div class="col-md-4">
										 <span>Pan Card</span>
											<input type="text" class="form-control " id="" name="" placeholder="Pan Card*"  required>
										</div>
										<div class="col-md-4">
										 <span>Residence City</span>
											<input type="text" class="form-control " id="" name="" placeholder="Residence City*"  required>
										</div>
										
										<div class="col-md-4">
										 <span>Residence City Area</span>
											<input type="text" class="form-control " id="" name="" placeholder="Residence City Area*"  required>
										</div>
										
										
										<div class="col-md-12">
										<div class="col-md-4"></div>
										<div class="col-md-4"><button class="btn  btn-primary btn-outline animate-box fadeInUp animated lendingkart-submit dis-tbl">Submit</button></div>
										</div>
									</div>
			</div>				
		</div>
		</div>
		<br>
		
	</div>

</div>
<br>
@include('layout.footer')
@include('layout.script')

