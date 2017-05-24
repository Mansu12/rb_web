<!DOCTYPE html>
<html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php if(isset($title))echo $title; else echo "RupeeBoss-Apply for a Loan"; ?></title>
	<!-- <meta name="google-signin-client_id" content="752185558821-9vlmac53np7bgdo3kn9d2e5ft39t7gud.apps.googleusercontent.com"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php if(isset($description))echo $description; else echo "RupeeBoss provides all kind of loans."; ?>" />
	<meta name="keywords" content="<?php if(isset($keywords))echo $keywords; else echo "rupeeboss loans getloan expressloan"; ?>" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="{{URL::to('images/rb_fav.png')}}">
	<!-- <link rel="stylesheet" href="{{URL::to('fonts/Raleway.css')}}" type="text/css"> -->
	<!-- Animate.css -->

	<link  rel="stylesheet" type="text/css" href="{{URL::to('css/mysite.css')}}"/>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Modernizr JS -->
	<!-- <link rel="manifest" href="{{URL::to('extension/manifest.json')}}"> -->
	@if( request()->url() == url('/') )
     <link rel="canonical" href="https://www.rupeeboss.com/" />
	@else
	     <link rel="canonical" href="{!! request()->fullUrl() !!}"  />
	@endif
	
	
<meta name="google-site-verification" content="GpnTKVcLtZQjKCKHXfeaOaQGDsxzCS3XLCkTwmd4STI" />
</head>
<body>
<div class="star">
<div class="container">
<div class="col-md-3"></div>
<div class="col-md-7">

	<ul class="mag-lnk">
	   <li class="bg-none white-bg"><a href="{{URL::to('/')}}"><img src="{{URL::to('images/logo.png')}}" class="center"  alt="Rupeeboss.com " title="Rupeeboss.com " /></a></li>
	    <li><a href="{{URL::to('home-loan-transfer/home-loan')}}">HOME LOAN BALANCE TRANSFER</a></li>
		<li><a href="{{URL::to('home-loan-transfer/loan-against-property-loan')}}">LOAN AGAINST PROPERTY BALANCE TRANSFER</a></li>
		<li><a href="{{URL::to('home-loan-transfer/personal-loan')}}">PERSONAL LOAN BALANCE TRANSFER</a></li>
		<li><a href="{{URL::to('working-capital')}}">WORKING CAPITAL BALANCE TRANSFER</a></li>
		<li><a href="{{URL::to('home-loan')}}">APPLY FOR HOME LOAN</a></li>
		<li><a href="{{URL::to('personal-loan')}}">APPLY FOR PERSONAL LOAN</a></li>
		<li><a href="{{URL::to('loan-against-property')}}">APPLY FOR LOAN AGAINST PROPERTY</a></li>
		<li><a href="{{URL::to('car-loan')}}">APPLY FOR CAR LOAN</a></li>
		<li><a href="{{URL::to('business-loan')}}">APPLY FOR UNSECURED BUSINESS LOAN</a></li>
		<li><a href="{{URL::to('credit-card')}}">APPLY FOR CREDIT CARD</a></li>
        <li><button type="button" class="btn btn-danger block"  id="call_rm" name="call_rm" data-toggle="modal" data-target="#Modal" title="Call For RM(Single Day Process)">QUICK CALL MANAGER</button></li>
		
	</ul>
</div>	
	
	
</div><!-- container -->

</div>

<div class="modal fade" id="Modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Call RM</h4>
        </div>
        <div class="modal-body">
          <form name="talk_to_us_RM_form" id="talk_to_us_RM_form" method="post">
          {{ csrf_field() }}
          
                  <div>
                    <fieldset>
                      <input class="newsletter-name" name="name" placeholder="Name" required>
                    </fieldset>
                    </div>
                  <div>
                    <fieldset>
                      <input type="text" class="newsletter-name" name="contact" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
                    </fieldset>                 
                    </div>
                    <div>
                    <fieldset>
                      <input type="email" class="newsletter-name" name="email"  required  placeholder="Email ">
                    </fieldset>                 
                    </div>

                    <div>
                    <select class="form-control inp-fld" name="form" id="form_product" required>
                      <option disabled selected value="">Select Product</option>
                      <option value="Car Loan">Car Loan</option>
                      <option value="Credit Card">Credit Card</option>
                      <option value="Home Loan">Home Loan</option>
                      <option value="Home Loan Balance Transfer">Home Loan Balance Transfer</option>
                      <option value="Loan Against Property">Loan Against Property</option>
                      <option value="Loan Against Property Balance Transfer">Loan Against Property Balance Transfer</option>
                      <option value="Personal Loan">Personal Loan</option>
                      <option value="Personal Loan Balance Transfer">Personal Loan Balance Transfer</option>
                      <option value="Working Capital Balance Transfer">Working Capital Balance Transfer</option>
                      <option value="Unsecured Business Loan">Unsecured Business Loan</option>
					</select> 
                  </div><br>
                  <div>
                      <button class="btn btn-primary btn-outline with-arrow sidebar-submit">Submit<i class="icon-arrow-right"></i></button>
                  </div>
                  

            </form>
            <div class='msg displaynone' ><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err displaynone' ><p>Ooops. Something went wrong.</p></div>
        </div>
        
      </div>
      
    </div>
  </div>
<video id="my-video" class="video" autoplay="autoplay" loop="loop" style="display:none;">
  <source src="media/demo.mp4" type="video/mp4" />
  <source src="media/demo.ogv" type="video/ogg" />
  </video>
</body>
</html>

<script src="{{URL::to('js/jquery.validate.min.js')}}"></script>
<script type="text/javascript">
	
          $(".sidebar-submit").click(function(event){
          	

            event.preventDefault();
            var form='#talk_to_us_RM_form';
          //return false;
            
        

          $form=$('#talk_to_us_RM_form');
          if(! $form.valid()){
            return false;
          }else{
          $(".iframeloading").show();
          $(".sidebar-submit").hide(); 
            $.ajax({  
             type: "POST",  
             url: "{{URL::to('sidebar')}}",
             data : $('#talk_to_us_RM_form').serialize(),
             success: function(msg){
                $(".iframeloading").hide();  
              if(msg=='true'){
                $form.hide();
                var a =$('#talk_to_us_RM_form').parent().find('.msg');
                        // console.log(a);
                        $(a).show();
                        $('.msg').show();

                      
                         setTimeout(function() {
                          location.reload();
                        }, 1000);

                      }else{
                        $form.hide();
                        var b =$('#'+form).parent().find('.msg_err');
                        //console.log(a);
                        $(b).show();
                        $('msg_err').show();
                        
                      }
                      //console.log(msg);
                    }  
                  }); 
          }


        });


</script>




