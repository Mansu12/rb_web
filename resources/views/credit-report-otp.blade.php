@include('layout.header')
<div class="container-fluid exp-bg">
	
	<aside id="fh5co-hero">
   <div class="col-md-7 exp-pad"><h2>You hereby Appoint <b>RUPEEBOSS</b> As Your Authorised Representive to Receive Your Credit Information from Experian.</h2></div>
    <div class="col-lg-4">
                       <div class="exp-form">
					   
					   <form name="credit_report_otp_form" id="credit_report_otp_form" method="POST">
					       {{ csrf_field() }}
					   <h3>Enter your mobile number & verify using OTP</h3>
					   <input type="text" name="contact" id="mobile" class="form-control" pattern="[789][0-9]{9}" required maxlength="10" placeholder="9XXXX XXXXX" onkeypress="return fnAllowNumeric(event)">
					   <hr class="hr-clr">
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
					   <div id="otp_val" style="display: none;color: red;">Please wait ...</div>
					   <div id="wait_div_otp" style="display: none;color: red;">Please wait ...</div>
					   </form>
					   </div>
                             
                            </div>
							
	
	</aside>
	</div>
	
	
	<div class="container">
	 <div class="row">
	 <br>
	   <div class="col-md-12">
		<div class="pad1 white-bg text-justify">
	   <p class="text-lowercase"><span class="text-capitalize">You</span> HEREBY IRREVOCABLY AND UNCONDITIONALLY CONSENT TO SUCH CREDIT INFORMATION BEING PROVIDED BY EXPERIAN TO YOU AND RUPEEBOSS AND YOU HEREBY AGREE, ACKNOWLEDGE AND ACCEPT THE TERMS AND CONDITIONS SET FORTH HEREIN.
YOU HEREBY ALSO AGREE AND ACKNOWLEDGE THAT FOR RUPEEBOSS TO SERVICE YOU AS A CUSTOMER, 
THE CREDIT INFORMATION SHALL BE SHARED BY EXPERIAN WITH YOU AND RUPEEBOSS ON A MONTHLY BASIS FOR A PERIOD OF 12 MONTHS CONTINUOUSLY TO ENSURE THAT YOU ARE ABLE TO HAVE AN ANNUAL VIEW OF YOUR CREDIT HISTORY. YOU FURTHER ALSO AGREE AND CONSNET TO RECEIVE SUCH CREDIT INFORMATION DIRECTLY FROM EXPERIAN AND ALSO THROUGH YOUR RUPEEBOSS ACCOUNT ASPER YOUR INDEPENDENT REGISTRATION WITH RUPEEBOSS.</p>
 
	   <p>Please read the Terms and Conditions of this document carefully before accepting. By clicking on the "I ACCEPT" button below, you are expressly agreeing to access the Experian Credit Information Report and Credit Score (as defined in the Important Information Section below) (together referred as "Credit Information") and share a copy of the Credit Information with RupeeBoss in the "as is" format. Please click on the link below to read and understand the 
	   Important Information section below.</p>
	   <p>** This document is an electronic record in terms of the Information Technology Act, 2000 and Rules made there under, and the amended provisions pertaining to electronic records.</p>
	   <hr>
	   <h3>Information Collection, Use, Confidentiality, No-Disclosure and Data Purging</h3>
	   <p>RUPEEBOSS/ We/ Us can only access your Credit Information as your authorized representative and we shall use the Credit Information for limited end use purpose consisting of and in relation to the services proposed to be availed by you from us on the Website. We shall not aggregate, retain, store, copy, reproduce, republish, upload, post, transmit, sell or rent the Credit Information
	   to any other person and the same cannot be copied or reproduced other than as agreed herein.</p>
	   <p>We shall protect and keep confidential the Credit information both online and offline and use best in class security measures in line with applicable laws.</p>
	   <p>The Credit Information shared by You, or received on your behalf shall be destroyed, purged, erased promptly upon the earlier of: (i) your written request to terminate this relationship with RupeeBoss (ii) the completion of provision of the Services by us to you. </p>
	   <hr>
	   <h3>Governing Law and Jurisdiction</h3>
	   <p>The relationship between you and the Parties shall be governed by laws of India and all claims or disputes arising there from shall be subject to the exclusive jurisdiction of the courts of [Mumbai].</p>
	   <hr>
	   <h3>Definitions:</h3>
	   <p>Capitalised terms used herein but not defined above shall have the following meanings:</p>
	   <p>"Business Day" means a day (other than a public holiday) on which banks are open for general business in [Mumbai].</p>
	   <p>"Credit Information Report" means the credit information / scores / aggregates / variables or reports which shall be generated by Experian;</p>
	   <p>"Credit Score" means the score which shall be mentioned on the Credit Information Report which shall be computed by Experian.</p>
	   
	   <p>"CICRA" shall mean the Credit Information Companies (Regulation) Act, 2005 read with the Credit Information Companies Rules, 2006 and the Credit Information Companies Regulations, 2006, 
	   and shall include any other rules and regulations prescribed thereunder.</p>
	   <p class="text-lowercase">PLEASE READ THE ABOVE MENTIONED IMPORTANT INFORMATION AND CLICK ON "ACCEPT" FOLLOWED BY THE LINK BELOW TO COMPLETE THE AUTHORISATION PROCESS FOR SHARING OF YOUR CREDIT INFORMATION BY EXPERIAN WITH YOU AND RUPEEBOSS, IN ITS CAPACITY AS YOUR AUTHORISED REPRESENTATIVE.</p>
	   <p class="text-lowercase">BY CLICKING "ACCEPT" YOU AGREE AND ACCEPT THE DISCLAIMERS AND TERMS AND CONDITIONS SET OUT HEREIN.THE TERMS AND CONDITIONS MENTIONED HEREIN MAY CHANGE IN ORDER TO COMPLY WITH GOVERNING LAWS OF THE COUNTRY AND THE CONSUMER SHALL BE BOUND TO ANY CHANGES TO THIS AGREEMENT</p>
	   </div>
	   <br>
	 </div>
	 </div>
	</div>
	
@include('layout.footer')
@include('layout.script')
<script type="text/javascript">
	$('#credit_report_send_otp').click(function(){
		console.log($('#mobile').val().length);
		if(($('#mobile').val().length)<10){
				$('mobile_val').show();
				return false;
		}

			
		$('#wait_div').show();
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
			{	$('otp_val').show();
				return false;
			}
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