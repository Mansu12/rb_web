	@include('layout.header')
	<div class="container-fluid">
		
		<aside id="fh5co-hero">
		<div class="col-md-2"></div>
	   <div class="col-md-8 exp-pad"><h2>You hereby Appoint Rupeeboss As Your Authorised Representive to Receive Your Credit Information from Experian.</h2></div>
	    <div class="col-lg-3"></div>
		<div class="col-lg-6">
	                       <div class="exp-form">
						   
						   <form name="credit_report_otp_form" id="credit_report_otp_form" method="POST">
						       {{ csrf_field() }}
						   <h3 class="text-center">Enter your mobile number & verify using OTP</h3>
						   <input type="text" name="contact" id="mobile" class="form-control" pattern="[789][0-9]{9}" required maxlength="10" placeholder="9XXXX XXXXX" onkeypress="return fnAllowNumeric(event)">
					
						   <a class="btn btn-primary btn-lg btn-view" id="credit_report_send_otp">SEND OTP</a>
						   <div id="mobile_val" style="display: none;color: red;">Phone number should be of 10 digits.</div>
						   <div id="wait_div" style="display: none;color: red;">Sending OTP ...</div>
						   </form>


						   <form name="credit_report_verify_form" id="credit_report_verify_form" style="display:none" method="POST" onkeypress="return fnAllowNumeric(event)">
						       {{ csrf_field() }}
						   <h3>Enter your verification code sent on your number</h3>
						   <input type="text" name="verify" id="verify" class="form-control" onkeypress="return fnAllowNumeric(event)" required maxlength="6" placeholder="verify otp">
						   <hr class="hr-clr">

						   <a class="btn btn-primary btn-lg btn-view" id="credit_report_verify_otp">VERIFY OTP</a>
						   <div id="otp_val" style="display: none;color: red;">Otp is of 6 digits.</div>
						   <div id="wait_div_otp" style="display: none;color: red;">Please wait ...</div>
						   </form>
						   </div>
	                             
	                            </div>
								
							
		
		</aside>
		</div>
		
		
	@include('layout.footer')
	@include('layout.script')
	<script type="text/javascript">
		$('#credit_report_send_otp').click(function(){
			//console.log($('#mobile').val().length);
			if(($('#mobile').val().length)<10){
					$('#mobile_val').show();
					return false;
			}

				
			$('#wait_div').show();
			$('#mobile_val').hide();
			$.ajax({  
		       type: "POST",  
		       url: "{{URL::to('credit-report-send-otp')}}",
		       dataType:"json",
		       data : $('#credit_report_otp_form').serialize(),
		       success: function(data){
		         var data_1=data['data'];
		         if(data_1){
		         	$('#credit_report_otp_form').hide();
					$('#credit_report_verify_form').show();
		         	//console.log("hah");
		         }
		     }
	     });
		});

		$("#credit_report_verify_otp").click(function(){
			if($('#verify').val().length<6)
				{	$('#otp_val').show();
					return false;
				}
			$('#otp_val').hide();
			$('#wait_div_otp').show();
			$.ajax({  
		       type: "POST",  
		       url: "{{URL::to('credit-report-verify')}}",
		       dataType:"json",
		       data : $('#credit_report_verify_form').serialize(),
		       success: function(data){
		         var data_1=data['data'];
		         //return data_1;
		         if(data_1){
		         	//console.log("fine");

		         	window.location.href="{{URL::to('credit-report')}}";
		         }else{
		         	console.log("something went wrong");
		         }
		     }
	     });
		});
	</script>