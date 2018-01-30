<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
	
	<aside id="fh5co-hero">
	<div class="col-md-12">
	
	<h2 class="align-center loan-head">Express Loan</h2>
	</div>

	<!-- <div class="flexslider col-md-8">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators 
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    
  </ol>

  <!-- Wrapper for slides 
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo e(URL::to('images/express/birla_ban.png')); ?>" alt="birla_banner">
    </div>

    <div class="item">
      <img src="<?php echo e(URL::to('images/express/tribe_bann.png')); ?>" alt="tribe_banner">
    </div>
  </div>

  <!-- Left and right controls 
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>	
	  	</div> -->

   <!-- <div class="col-md-4 red-bg1 ">
	   <div class="form-in">
              <span class="head-1 heading-bmar">Request A Call Back</span>
              <form  id="callback_form" role="form" method="POST">
              <?php echo e(csrf_field()); ?>

                <input type="hidden" name="form" value="subscribe-form">
				  <div class="has-error">
				    <div>
				      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required />
				       <input type="hidden" class="form-control" id="product" value="Express_Loan" name="product"  />
				    </div>
				  </div>
			<div class="has-error">
		    <div> 
		    <input type="text" name="contact" id="contact" class="form-control clr-ddd" onkeypress="return fnAllowNumeric(event)" 
			pattern="[789][0-9]{9}" required maxlength="10" minlength="10" placeholder="Mobile No." >
		    </div>
		  </div>
				 <div class="has-error">
		
				    <div>
				      <input type="email" class="form-control clr-ddd" id="email" name="email" placeholder="Email Id" required  />
                 
				    </div>
				  </div>
			  <div class="centr-obj"> 
			    <button class="btn btn-primary btn-outline with-arrow sidebar-submit" >Submit</button>
			   
			  </div>
			</form>
		</div>	
		<div class='msg displaynonemsg'><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err displaynonemsg'><p>Ooops. Something went wrong.</p></div>
	</div> -->
	</aside>
	</div> 

	<div id="fh5co-pricing-section">
		<div class="container">
			
			<div class="row">
				<div class="pricing pad">
				
				<div class="col-md-3 animate-box">
					   <h3 style="background:#28a0ff;color:#fff; font-size:14px; padding:10px;">Business Loan</h3>
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/tata_capital.png')); ?>" alt="Tata Capital Logo" title="Tata Capital Logo" /></div>
							<h4 class="mrg-btm">Business Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('tata-capital-business-loan')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/lendingkart.png')); ?>" alt="lendingkart Logo" title="lendingkart  Logo" /></div>
							<h4 class="mrg-btm">Business Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('lendingkart')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/birla.png')); ?>" alt="Aditya Birla Logo" title="Aditya Birla Logo" /></div>
							<h4 class="mrg-btm">Business Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" onclick="Redirect();">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/tribe.png')); ?>" alt="Tribe Logo" title="Tribe Logo" /></div>
							<h4 class="mrg-btm">Business Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('tribe')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/edelweiss.png')); ?>" alt="Edelweiss Logo" title="Edelweiss Logo" /></div>
							<h4 class="mrg-btm">Business Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('edelweiss')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/hdfc.png')); ?>" alt="HDFC Logo" title="HDFC Logo" /></div>
							<h6 class="text-center text-danger"><i>Coming Soon</i></h6>
							<h4 class="mrg-btm">Business Loan</h4>
							
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('contact-us')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/capital_first.png')); ?>" alt="Capital First Logo" title="Capital First Logo" /></div>
							<h6 class="text-center text-danger"><i>Coming Soon</i></h6>
							<h4 class="mrg-btm">Business Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('contact-us')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/capital_float.png')); ?>" alt="Capital Float Logo" title="Capital Float Logo" /></div>
							<h6 class="text-center text-danger"><i>Coming Soon</i></h6>
							<h4 class="mrg-btm">Business Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('contact-us')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>
				
				
				
				
					<div class="col-md-3 animate-box">
					   <h3 style="background:#28a0ff;color:#fff; font-size:14px; padding:10px;">Personal Loan</h3>
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/rbl.png')); ?>" alt="RBL Logo" title="RBL Logo" /></div>
							<h4 class="mrg-btm">Personal Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('rbl-personal-loan')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/kotak.png')); ?>" alt="Kotak Logo" title="Kotak Logo" /></div>
							<h4 class="mrg-btm">Personal Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('kotak-personal-loan')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/iifl.png')); ?>" alt="IIFL Logo" title="IIFL Logo" /></div>
							<h4 class="mrg-btm">Personal Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('apply-iifl-loan')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/tata_capital.png')); ?>" alt="Tata Capital Logo" title="Tata Capital Logo" /></div>
							<h6 class="text-center text-danger"><i>Coming Soon</i></h6>
							<h4 class="mrg-btm">Personal Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('contact-us')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/capital_first.png')); ?>" alt="Capital First Logo" title="Capital First Logo" /></div>
							<h6 class="text-center text-danger"><i>Coming Soon</i></h6>
							<h4 class="mrg-btm">Personal Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('contact-us')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/hdfc.png')); ?>" alt="HDFC Logo" title="HDFC Logo" /></div>
							<h6 class="text-center text-danger"><i>Coming Soon</i></h6>
							<h4 class="mrg-btm">Personal Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('contact-us')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>
					
					
					
					<div class="col-md-3 animate-box">
					   <h3 style="background:#28a0ff;color:#fff; font-size:14px; padding:10px;">Home Loan</h3>
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/kotak.png')); ?>" alt="Kotak Logo" title="Kotak Logo" /></div>
							<h4 class="mrg-btm">Home Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('kotak-home-loan')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/yesbank.png')); ?>" alt="Yes Logo" title="Yes Logo" /></div>
							<h4 class="mrg-btm">Home Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('yesbank-home-loan')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/hdfc.png')); ?>" alt="HDFC Logo" title="HDFC Logo" /></div>
							<h6 class="text-center text-danger"><i>Coming Soon</i></h6>
							<h4 class="mrg-btm">Home Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('contact-us')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/vastu.png')); ?>" alt="Vastu Logo" title="Vastu Logo" /></div>
							<h6 class="text-center text-danger"><i>Coming Soon</i></h6>
							<h4 class="mrg-btm">Home Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('contact-us')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						
					</div>
					
					
					
					
					
					
					
					
					
					<div class="col-md-3 animate-box">
					   <h3 style="background:#28a0ff;color:#fff; font-size:14px; padding:10px;">Short Term Personal Loan</h3>
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/early.png')); ?>" alt="Early Salary Logo" title="Early Salary Logo" /></div>
							<h4 class="mrg-btm">Short Term Personal Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('early-salary')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/pay.png')); ?>" alt="Pay Sense Logo" title="Pay Sense Logo" /></div>
							<h6 class="text-center text-danger"><i>Coming Soon</i></h6>
							<h4 class="mrg-btm">Short Term Personal Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('contact-us')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
						
						
						<h3 style="background:#28a0ff;color:#fff; font-size:14px; padding:10px;">POS Loan</h3>
						<div class="price-box popular1">
							<div class="center-blg"><img src="<?php echo e(URL::to('images/express/iifl.png')); ?>" alt="IIFL Logo" title="IIFL Logo" /></div>
							<h6 class="text-center text-danger"><i>Coming Soon</i></h6>
							<h4 class="mrg-btm">POS Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="<?php echo e(URL::to('contact-us')); ?>">Apply Now<i class="icon-arrow-right"></i></a>
						</div>	
					</div>
					
					
					
					

					

					
					

				</div>
			</div>
		</div>
	</div>
<!--  <div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="container">
			<div class="col-md-12">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Overview</a></li>
					<li><a data-toggle="tab" href="#menu1">Points to Consider</a></li>
					<li><a data-toggle="tab" href="#menu2">The Rupeeboss Advantage</a></li>
				</ul>

				<div class="tab-content">
	<div id="home" class="tab-pane fade in active">
    <div class="row">
				
				<div class="col-md-12 animate-box">
					<a href="#" class="item-grid">
						
						<div>
							<div class="v-align">
								<h3 class="title">Real people, Real care</h3>
								<P class="p-clr">Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.
								Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.
								Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.
								Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.
								Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.
								Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.</P>
							</div>
						</div>
					</a>
				</div>
				
			</div>
  </div>
</div> 
</div>
</div>
</div> -->

<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script type="text/javascript">
	function Redirect() 
          {
            
            window.location="http://www.abfldirect.com?utm_source=RUPEEBOSS&utm_medium=DSA&utm_campaign=DirectSME";
            
          }
</script>

