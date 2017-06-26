<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ICICI Credit Card :: RupeeBoss</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
  <link href="css/icici_css/component.css" rel="stylesheet" type="text/css"  />
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/icici_css/style-home-loan.css" rel="stylesheet" type="text/css" />
  <link href="css/icici_css/responsive-home-loan.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/icici_css/jquery.datepicker.css">
  <link rel="stylesheet" href="css/icici_css/bootstrap-material-datetimepicker.css"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="js/icici_js/jquery.min.js"></script>
  <script type="text/javascript" src="js/icici_js/material.min.js"></script>
  <script type="text/javascript" src="js/icici_js/moment-with-locales.min.js"></script>
  <script type="text/javascript" src="js/icici_js/bootstrap-material-datetimepicker.js"></script>
   
</script>
<script type="text/javascript" src="js/icici_js/jquery.datepicker.js"></script>
<script src="js/icici_js/classie.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>  
<link href="css/jquery-ui.min.css" rel="Stylesheet"></link>
<script src="js/jquery-ui.js" ></script>
    
<script src="js/jquery.mask.js"></script>
<script src="js/icici_js/jquery.validate.min.js"></script>
  <style>
  .inp-fld {margin-bottom:10px; height:50px; position:relative;}
  .emp-nat span {padding:3px 5px;}
  .txt-tlt {padding-left:5px;width:100%;text-align:center; color:#666;font-size:18px;}
  .pg-titl {padding:10px; text-transform:uppercase;}
  .redio-lft {float:left;}
  .p-padding {padding:10px;}
  .mand-fld { display:block;}
  label.error {display: none !important; }
       .error {
                    border:1px solid red;
                }
	.lble {bottom:19px;}
	
	.sbmit-btn {
    padding: 10px 30px;
    top: 0px;
    position: absolute;
    color: #fff;
    font-size: 20px;
    right: 0px;
    border: none;
    background: #0070c0;
}
  
  </style>
  </head>
  
  <body class="cbp-spmenu-push">
  <script>
$(".top").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
</script>

<form class="" id="compareform" role="form" method="POST" >
               {{ csrf_field() }}
               
<div>
       <!-- Main content -->
        <section class="container">
      <div class="row">
      <div class="col-md-12">
	  <br>
      <div id="logo" class="text-center"><img id="myImage" src="http://beta.erp.rupeeboss.com/personalloan/images/logo.png" class=""></div>
      <h4 class="text-center pg-titl">Apply For ICICI Credit Card</h4>
	  
	  <div class="col-md-3"></div>
	  <div id="hideview" class="text-center col-md-6">
                                            <div class="form-padding">
                                                <h6 class="text-center top-heading"><a id="urlweb" href="#">click here</a>
                                                to view this page in browser</h6>
                                               
                                              <div id="hideemailid" class="" style="margin-bottom: 14px; height: 50px; position: relative; display:none;">
                                                <input class="form-control inp-fld pull-center" required="" type="name" id="urlemailid">
                                                <button class="sbmit-btn pull-right" id="btnweburl">Submit</button> 
                                                  
                                                <span class="highlight"></span><span class="bar"></span>
                                                <label class="form-label-new">E-MAIL ID (PERSONAL)</label>
                                                <div class="clear"></div>
                                              </div>
                                                
                                              <h5 id="msgalert" class="top-heading text-success text-center" style="display:none;font-size:15px;font-weight:bold; margin-bottom:15px;">As per your request we have sent a mail to your email ID.</h5>
                                            </div>
                                        </div>
										
										

                <div class="tab-content">
                       <div id="home" class="tab-pane fade in active">
					  
					<form action="">   
            <div class="col-md-12">
            <div class="panel-group" id="accordion" >
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <button class="ok-btn"><span class="glyphicon glyphicon-ok"></span></button> &nbsp; PERSONAL INFORMATION
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">										


			
	  
          <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="net_annual_income" id="net_annual_income" required required>
                      <option value="">NET ANNUAL INCOME</option>
                        <option value=">2.5Lacs">2.5Lacs</option>
                        <option value=">5.0Lacs">5.0Lacs</option>
                        <option value=">10Lacs">10Lacs</option>
                        <option value=">15Lacs">15Lacs</option>
                    </select> 
          </div>

          <div class="col-xs-6 form-padding" style='display:none;' id="credit_card_type">
                    <select class="form-control inp-fld" name="your_interests" id="your_interests" required>
                      <option value="">YOUR INTERESTS</option>
                        <option  value="Lifestyle">Lifestyle</option>
                        <option  value="Travel">Travel</option>
                        <option  value="Motorsports">Motorsports</option>
                      
                    </select> 
          </div>

          <div class="col-xs-6 form-padding" style='display:none;' id="credit_card_name">
                    <select class="form-control inp-fld" name="cards" id="cards" required>Ferrari Platinum Credit Card
                    Ferrari Signature Credit Card
                      <option value="">CREDIT CARDS</option>
                      <option  value="Platinum Chip Credit Card">Platinum Chip Credit Card</option>
                      <option  value="Coral Credit Card">Coral Credit Card</option>
                      <option  value="Jet Coral Credit Card">Jet Coral Credit Card</option>
                      <option  value="Ferrari Platinum Credit Card">Ferrari Platinum Credit Card</option>
                       <option value="Rubyx Credit Card">Rubyx Credit Card</option>
                       <option value="Sapphiro Credit Card">Sapphiro Credit Card</option>
                       <option value="Jet Rubyx Credit Card">Jet Rubyx Credit Card</option>
                       <option value="Jet Sapphiro Credit Card">Jet Sapphiro Credit Card</option>
                       <option value="Ferrari Platinum Credit Card">Ferrari Platinum Credit Card</option>
                       <option value=" Ferrari Signature Credit Card"> Ferrari Signature Credit Card</option>
                      
                    </select> 
          </div>

          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="ApplicantFirstName" id="ApplicantFirstName" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">First Name</label>
                      <div class="clear"></div>
                    </div>  
                   </div>
             
             <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="ApplicantMiddleName" id="ApplicantMiddleName" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)"  >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Middle Name</label>
                      <div class="clear"></div>
                    </div>  
                             </div>
              <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="ApplicantLastName" id="ApplicantLastName" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Last Name</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
                  
            <div class="col-xs-6 form-padding">
                    <div class="form-control" style="margin-bottom:10px; height:50px; position:relative; padding: 0;">
                      <!-- <div class="input-group">
                        <input type="text" name="DateOfBirth" class="form-input-new-1" id="DateOfBirth" placeholder="Date of Birth" data-select="datepicker" data-locked="25/12/2014;1/1/2015">
                        <span class="input-group-btn" style="left:1px;">
                          <button type="button" class="btn btn-primary success-width" data-toggle="datepicker" style="height:50px;">
                          <i class="fa fa-calendar"></i></button>
                        </span>
                        <div class="clear"></div>
                      </div>   -->
                      <input type="text" class="form-control lastReporteddob" id="DateOfBirth" name="DateOfBirth" placeholder="Date of Birth*" required>
					  <i class="fa fa-calendar" style="font-size: 25px;position: absolute;top: 15px;right: 11px;color: #3f7cb3;"></i>
                    </div>
                  </div>
                  
                  <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="NameOnCard" id="NameOnCard" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Name to be printed on the card</label>
                      <div class="clear"></div>
                    </div>  
                             </div>

                             <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="MotherName" id="MotherName" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Mother's Maiden Name</label>
                      <div class="clear"></div>
                    </div>  
                             </div>

                    <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="no_of_dependents" id="no_of_dependents" required>
                      <option value="">NO OF DEPENDENTS</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="5+">5+</option>
                    </select> 
                  </div>
         

        <div class="col-xs-4 col-md-6 form-padding">
                    <div class="form-control inp-fld" style="height:50px;position: relative; padding: 0px 0px; margin-bottom:10px;">
                      <div class="padd-lef gender">
                       <div class="btn-grp" data-toggle="buttons">
                                    <span class="btn btn-primary outer-brd1 active"><input type="radio" name="Gender" checked value="Male"><img id="myImage"  src="images/male.png" class=""/></span>
                                    <span class="btn btn-primary outer-brd1"><input type="radio" name="Gender" value="Female"><img id="myImage1"  src="images/female.png" class="" ></span>
                             </div>
                        </div>
                     </div>
                  </div>
                
                <div class="col-xs-8 col-md-6 form-padding">
                    <div class="form-control inp-fld" style="height:50px; position: relative; padding: 0px 0px;">
                      <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;">Resident Status</span>
                      <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons">
                      <span class="btn btn-primary outer-brd active"><input type="radio" name="resident_status" checked value="Indian">Indian</span>
                      <span class="btn btn-primary outer-brd"><input type="radio" name="resident_status" value="NRI/Foreign_National" >NRI/Foreign National</span>
                </div>
                    </div>  
                </div>
				
				<div class="col-xs-6 form-padding">
                <div class="form-control inp-fld" style="height:50px; position: relative; padding: 0px 0px;">
                      <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;">Marital Status</span>
                      <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons">
                      <span class="btn btn-primary outer-brd active"><input type="radio" name="marital_status" checked value="Single">Single</span>
                      <span class="btn btn-primary outer-brd"><input type="radio" name="marital_status" value="Married" >Married</span>
                </div>
                    </div>  
                </div>

              <div class="col-xs-6 form-padding">
                        <div class="form-control inp-fld" style="height:50px; position: relative; padding: 0px 0px;">
                          <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;">Employment Nature</span>
                      
                      <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons">
                      <span class="btn btn-primary outer-brd active"><input type="radio" name="CustomerProfile" checked value="Salaried">Salaried</span>
                      <span class="btn btn-primary outer-brd"><input type="radio" name="CustomerProfile" value="Selfemployed" >Self-Emp</span>
                         </div>
                    </div>
                  </div>

            <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="preferred_address" id="preferred_address" required>
                      <option value="">PREFERRED MAILING ADDRESS</option>
                      <option value="Residence">Residence</option>
                      <option value="Office">Office</option>
                    </select> 
            </div>

            <div class="col-xs-6 form-padding">
                        <div class="form-control" style="height:50px; position: relative; padding: 0px 0px;">
                        <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;">I want to apply for a Supplementary Card</span>
                      
                      <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons">
                      <span class="btn btn-primary outer-brd active"><input type="radio" name="supplementary_card" checked value="Yes">Yes</span>
                      <span class="btn btn-primary outer-brd"><input type="radio" name="supplementary_card" value="No" >No</span>
                      </div>
                      </div>
            </div>
        </div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		<div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <button class="ok-btn"><span class="glyphicon glyphicon-ok"></span></button> &nbsp; COMPANY DETAILS
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
        
            <h4 class="txt-tlt pull-left hdn5">Company Details</h4> 
            
            <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" class="form-control inp-fld search_company" name="CompanyName" id="CompanyName" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Company Name</label>
                      <div class="clear"></div>
                    </div>  
            </div>
             
             <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="designation" id="designation" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Designation</label>
                      <div class="clear"></div>
                    </div>  
             </div>

             <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="work_email" name="work_email" class="form-control inp-fld" oninput="mail('work_email')"  required >
                       <span id="email" style="display:none;color: red;">Please Enter Valid Email Id.</span>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Work Email</label>
                      <div class="clear"></div>
                    </div>  
                  </div>

                  <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" class="form-control inp-fld" id="work_STDCode" name="work_STDCode"  required  onkeypress="return fnAllowNumeric(event)" maxlength="5" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Work Area STD Code</label>
                      <div class="clear"></div>
                    </div>  
                  </div>

                  <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" class="form-control inp-fld" id="work_number" name="work_number"  required  onkeypress="return fnAllowNumeric(event)" maxlength="10" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Phone Number</label>
                      <div class="clear"></div>
                    </div>  
                  </div>

                  <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="type_of_company" id="type_of_company" required>
                      <option value="">TYPE OF COMPANY</option>
                      <option value="Central Government">Central Government</option>
                      <option value="MNC">MNC</option>
                      <option value="Partnership">Partnership</option>
                      <option value="Private Limited">Private Limited</option>
                      <option value="Proprietorship">Proprietorship</option>
                      <option value="PSU">PSU</option>
                      <option value="Public Limited">Public Limited</option>
                      <option value="State Government">State Government</option>
                    </select> 
            </div>
                  
                  <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="highest_education" id="highest_education" required>
                      <option value="">HIGHEST EDUCATIONAL QUALIFICATIONS</option>
                      <option value="Under Graduate">Under Graduate</option>
                      <option value="Graduate/Diploma">Graduate/Diploma</option>
                      <option value="Post Graduate">Post Graduate</option>
                      <option value="Professional">Professional</option>
                      
                    </select> 
            </div>
             
              <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="Income" name="Income" class="form-control inp-fld" onkeypress="return fnAllowNumeric(event)"  required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Income*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="ICICIBankRelationship" id="ICICIBankRelationship" required required>
                      <option value="">ICICI BANK RELATIONSHIP</option>
                        <option value="Salary">Salary</option>
                        <option value="Saving">Saving</option>
                        <option value="Loan">Loan</option>
                        <option value="Norelationship">Norelationship</option>
                    </select> 
          </div>


          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="Total_Exp" id="Total_Exp" class="form-control inp-fld" onkeypress="return fnAllowNumeric(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Total Experience</label>
                      <div class="clear"></div>
                    </div>  
                  </div>

                   <div class="col-xs-6 form-padding">
                   
                    <input  style='display:none;' type="text" class="form-input-new form-control" name="ICICIRelationshipNumber" id="ICICIRelationshipNumber" placeholder="ICICI Relationship Number" maxlength="15" onkeypress="return fnAllowNumeric(event)"  required>
                    </div>
          <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld" style="height:50px; position: relative; padding: 0px 0px;">
                      <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;">Salary Account With Other Bank:</span>
                      
                      <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons">
      <span class="btn btn-primary outer-brd active"><input type="radio" name="SalaryAccountWithOtherBank" id="SalaryAccountWithOtherBank" checked value="Yes"  >Yes</span>
      <span class="btn btn-primary outer-brd"><input type="radio" name="SalaryAccountWithOtherBank" id="SalaryAccountWithOtherBank" value="No">No</span>
         </div>
                    </div>
                  </div>
			</div>
         </div>			


		 
		 
		 



               	<div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <button class="ok-btn"><span class="glyphicon glyphicon-ok"></span></button>&nbsp; CURRENT ADDRESS DETAILS
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">			
				  
              <h4 class="txt-tlt pull-left hdn5">Current Address Details</h4> 
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="ResidenceAddress1" id="ResidenceAddress1" class="form-control inp-fld" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Flat No / Plot No / House No*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text"  name="ResidenceAddress2" id="ResidenceAddress2" class="form-control inp-fld" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Building / Society Name</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text"  name="ResidenceAddress3" id="ResidenceAddress3" class="form-control inp-fld" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Road No / Area / Locality</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="City" id="City" class="form-control inp-fld search_citynm" required dis>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">City*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="ResidencePincode" name="ResidencePincode" class="form-control inp-fld" required onkeypress="return fnAllowNumeric(event)" maxlength="6"  >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Pincode*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="ResidenceState" id="ResidenceState" class="form-control inp-fld search_statenm" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">State*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>

          <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="type_current" id="type_current" required>
                      <option value="">RESIDENCE TYPE</option>
                     <option value="Owned_by_self/spouse">Owned by self/spouse</option>
                      <option value="Owned_by_parents/siblings">Owned by parents/siblings</option>
                      <option value="Rented_with_Family">Rented with Family</option>
                      <option value="Rented_with_Friends">Rented with Friends</option>
                      <option value="Rented_staying_alone">Rented staying alone</option>
                      <option value="Paying_guest/Hostel">Paying guest/Hostel</option>
                      <option value="Company_Provided">Company Provided</option>
                    </select> 
            </div>
			
			<div class="col-xs-12"><P style="padding:10px; display:-webkit-inline-box;" class="pull-left"><input type="checkbox" name="same" id="same_id" onclick="same_as_above('same_id');"/> &nbsp;&nbsp;Same As Above</p></div>
			
			
		</div>
		</div>
		
		
		
		
		
		
		<div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      <button class="ok-btn"><span class="glyphicon glyphicon-ok"></span></button>&nbsp; PERMANENT ADDRESS  DETAILS
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                  <div class="panel-body">
              
                  <h4 class="txt-tlt pull-left hdn5">Permanent Address Details</h4>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="PerResidenceAddress1" id="PerResidenceAddress1" class="form-control inp-fld" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">flat No / Plot No / House No*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text"  name="PerResidenceAddress2" id="PerResidenceAddress2" class="form-control inp-fld" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Building / Society Name</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text"  name="PerResidenceAddress3" id="PerResidenceAddress3" class="form-control inp-fld" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Road No / Area / Locality</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="PerCity" id="PerCity" class="form-control inp-fld search_citynm" required dis>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">City*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="PerResidencePincode" name="PerResidencePincode" class="form-control inp-fld" required onkeypress="return fnAllowNumeric(event)" maxlength="6"  >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Pincode*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="PerResidenceState" id="PerResidenceState" class="form-control inp-fld search_statenm" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">State*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>

          

            <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="per_res_type" id="per_res_type" required>
                      <option value="">RESIDENCE TYPE</option>
                      <option value="Owned_by_self/spouse">Owned by self/spouse</option>
                      <option value="Owned_by_parents/siblings">Owned by parents/siblings</option>
                      <option value="Rented_with_Family">Rented with Family</option>
                      <option value="Rented_with_Friends">Rented with Friends</option>
                      <option value="Rented_staying_alone">Rented staying alone</option>
                      <option value="Paying_guest/Hostel">Paying guest/Hostel</option>
                      <option value="Company_Provided">Company Provided</option>
                    </select> 
            </div> 

                   <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="email_id" name="email_id" class="form-control inp-fld" oninput="email('email_id')"  required >
                       <span id="mail_id" style="display:none;color: red;">Please Enter Valid Email Id.</span>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Email ID(Personal)*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
				  
				 </div>
				 </div>
				 
				 
                
         <div class="panel-heading" role="tab" id="headingFive">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      <button class="ok-btn"><span class="glyphicon glyphicon-ok"></span></button>&nbsp; CONTACT DETAILS
                    </a>
                  </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                  <div class="panel-body">		
				  
          <h4 class="txt-tlt pull-left hdn5">Contact Details</h4> 
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" class="form-control inp-fld" id="ResidencePhoneNumber" name="ResidencePhoneNumber" onkeypress="return fnAllowNumeric(event)" maxlength="10" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Telephone No</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" class="form-control inp-fld"  id="ResidenceMobileNo" name="ResidenceMobileNo" required onkeypress="return fnAllowNumeric(event)" maxlength="10" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Mobile No</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" class="form-control inp-fld" id="STDCode" name="STDCode"  required  onkeypress="return fnAllowNumeric(event)" maxlength="5" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">STD Code</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
				  
				  </div>
				  </div>
				 
				 
				 
				 
				 
				 
				 
				 
				 
			<div class="panel-heading" role="tab" id="headingSix">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
          <button class="ok-btn"><span class="glyphicon glyphicon-ok"></span></button> &nbsp;IDENTITY DETAILS
                    </a>
                  </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                  <div class="panel-body">	  
                  
          <h4 class="txt-tlt pull-left hdn5">Identity Details</h4> 
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="ApplicationNumber" name="ApplicationNumber" class="form-control inp-fld" required="" maxlength="13" minlength="13" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Application Number*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="SalaryAccountOpened" id="SalaryAccountOpened" required >
                      <option value="">SalaryAccountOpened</option>
                          <option value="Above2Months"> > 2 Months</option>
                        <option value="Below2Months"><=2 Months</option>
                        
                    </select> 
                               </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input class="form-control inp-fld"  type="text" id="PanNo" name="PanNo" required oninput="pancard('PanNo')" maxlength="10" minlength="10" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Pancard*</label>
                      <div class="clear"></div>
                      <div id="pannumber" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</div>
                    </div>  
                  </div>

                  <div class="col-xs-6 form-padding">
                        <div class="form-control" style="height:50px; position: relative; padding: 0px 0px;">
                        <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;">Do You Have A Credit Card</span>
                      
                      <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons">
                      <span class="btn btn-primary outer-brd active"><input type="radio" id="have" name="have_credit_card" checked value="Yes">Yes</span>
                      <span class="btn btn-primary outer-brd"><input type="radio" name="have_credit_card" id="not_have" value="No" >No</span>
                      </div>
                      </div>
            </div>
            <div style="display: none;" id="credit_details" >
            <h4 class="txt-tlt pull-left">Please input details of your Credit Card having Maximum Credit Limit </h4>
           
            <div class="col-xs-6 form-padding" >
                    <div>
                      <input type="text" name="previous_bank" id="previous_bank" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Select Bank</label>
                      <div class="clear"></div>
                    </div>  
                   </div>

                   <div class="col-xs-6 form-padding" >
                    <div class="form-control" style="margin-bottom:10px; height:50px; position:relative; padding: 0;">
                      
                      <input type="text" class="form-control lastReportedsince" id="credit_date" name="credit_date" placeholder="Member Since*" required>
                    </div>
                  </div>

                  <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="credit_limit" name="credit_limit" class="form-control inp-fld" onkeypress="return fnAllowNumeric(event)"  required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Credit Limit*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
                  </div>
				  
	</div>
	</div>
	
	

          <div class="col-md-12 pull-left text-justify">
            <p class="p-padding"><input type="checkbox" name="terms"  class="redio-lft"/>&nbsp; I hereby confirm that I have read and understood the Rupeeboss Terms and Conditions applicable to this service and that all the details furnished by me above are true and correct. I further provide consent to Rupeeboss and its affiliates to contact me with reference to financial products and this consent shall override any registration with DNC/NDNC.</p>
            
            <!-- <button class="sbmt-btn credit-submit dis-tbl">Confirm &amp; Continue</button> -->
            &nbsp;&nbsp;&nbsp;&nbsp;<button class="sbmt-btn icici-credit-submit dis-tbl " >Confirm & Continue<i class="icon-arrow-right"></i>


                  </button>
            <b>All <mark style="color:red">*</mark>fields are mandatory.</b>
            </div> 
			
                  
          </div>
        </div>  
      </section>    
    </div>
    </form>

    <div class="modal fade" tabindex="-1" role="dialog" id="credit_process_sorry">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5>Your Application id is <b><span id="drop"></span></b>.<br>You have been <b><span id="drop1"></span></b>.<br><b><span id="drop2"></span></b><h5></p></h4>
        
      </div>
      
      <div class="modal-footer">
        <a type="button" id="upload" name="upload" class="btn btn-primary" onclick="Redirect();" >Proceed to Document Upload</a>
        
      </div>
    </div>
  </div>
</div>



    
    
    
    <script>
    $(document).ready( function(){
    
      $('.income-source > div').click(function(){
        $('.income-source > div').removeClass('income-source-active');
        $(this).toggleClass('income-source-active');
      });
      
      $('.scenario > div').click(function(){
        $('.scenario > div').removeClass('scenario-active');
        $(this).toggleClass('scenario-active');
      });
    });
      
  </script>
  
  
  
  

    <!-- <script>
      var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
      showRightPush = document.getElementById( 'showRightPush' ),
      body = document.body;

      showRightPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toleft' );
        classie.toggle( menuRight, 'cbp-spmenu-open' );
        disableOther( 'showRightPush' );
      };

      function disableOther( button ) {
        if( button !== 'showRightPush' ) {
          classie.toggle( showRightPush, 'disabled' );
        }
      }
    </script> -->
  
    
    <script>
    function toggleChevron(e) {
      $(e.target)
        .prev('.panel-heading,.panel-heading1,.panel-heading2')
        .find("i.indicator")
        .toggleClass('glyphicon-minus glyphicon-plus');
    }
    $('#accordion').on('shown.bs.collapse', toggleChevron);
    $('#accordion').on('hidden.bs.collapse', toggleChevron);
    </script>
    
    <script>
      $(window, document, undefined).ready(function() {

        $('input').blur(function() {
        var $this = $(this);
        if ($this.val())
          $this.addClass('used');
        else
          $this.removeClass('used');
        });

        var $ripples = $('.ripples');

        $ripples.on('click.Ripples', function(e) {

        var $this = $(this);
        var $offset = $this.parent().offset();
        var $circle = $this.find('.ripplesCircle');

        var x = e.pageX - $offset.left;
        var y = e.pageY - $offset.top;

        $circle.css({
          top: y + 'px',
          left: x + 'px'
        });

        $this.addClass('is-active');

        });

        $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
        $(this).removeClass('is-active');
        });

      });
    </script>

<!--     <script>
      var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
      showRightPush = document.getElementById( 'showRightPush' ),
      body = document.body;

      showRightPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toleft' );
        classie.toggle( menuRight, 'cbp-spmenu-open' );
        disableOther( 'showRightPush' );
      };

      function disableOther( button ) {
        if( button !== 'showRightPush' ) {
          classie.toggle( showRightPush, 'disabled' );
        }
      }
    </script> -->
  
    <script>
      $(window, document, undefined).ready(function() {

        $('input').blur(function() {
        var $this = $(this);
        if ($this.val())
          $this.addClass('used');
        else
          $this.removeClass('used');
        });

        var $ripples = $('.ripples');

        $ripples.on('click.Ripples', function(e) {

        var $this = $(this);
        var $offset = $this.parent().offset();
        var $circle = $this.find('.ripplesCircle');

        var x = e.pageX - $offset.left;
        var y = e.pageY - $offset.top;

        $circle.css({
          top: y + 'px',
          left: x + 'px'
        });

        $this.addClass('is-active');

        });

        $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
        $(this).removeClass('is-active');
        });

      });
    </script>
    
    
  <!-- <script>
  $(function() {                       //run when the DOM is ready
  $(".outer-brd").click(function() {  //use a class, since your ID gets mangled
    $(this).addClass("active1");      //add the class to the clicked element
  });
   $(".outer-brd").dblclick(function() {  //use a class, since your ID gets mangled
    $(this).removeClass("active1");      //add the class to the clicked element
  });
});
</script>

<script>
  $(function() {                       //run when the DOM is ready
  $(".padd-lef img").click(function() {  //use a class, since your ID gets mangled
    $(this).addClass("img-brd");      //add the class to the clicked element
  });
   $(".padd-lef img").mouseenter(function() {  //use a class, since your ID gets mangled
    $(this).removeClass("img-brd");      //add the class to the clicked element
  });
});
</script> -->


<script>
$(document).ready(function($){
    $("#phone").mask("(99) 9999-9999"); 
    $("#telf1").mask("(99) 9999*-9999");    
    $("#telf2").mask("(99) 9999?-9999"); 
});
</script>
 
 

<script>
$(document).ready(function(){

  
  // fade in #back-top
  $(function () {
    

    // scroll body to 0px on click
    $('.top').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      
    });
  });

});
</script>
  </body>
</html>
    
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

<script type="text/javascript">
  function fnAllowNumeric(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {

              return false;
            }
            return true;
          }
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#ICICIBankRelationship').on('change', function() {
      console.log(this.value);
      if ( this.value == 'Salary')
      {
        $("#ICICIRelationshipNumber").show();
      }
      else
      {
        $("#ICICIRelationshipNumber").hide();
      }
    });
});
</script>

<script type="text/javascript">

  

 $(document).ready(function(){
    src = "{{ route('searchajax') }}";
    $(".search_citynm").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: src,
          dataType: "json",
          data: {
            term : request.term
          },
          success: function(data) {
           

            response(data);
            
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
          $(".search_citynm").val("");
          $(".search_citynm").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>

<script type="text/javascript">
  

 $(document).ready(function(){
    
    $(".search_statenm").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: "{{ route('searchstateajax') }}",
          dataType: "json",
          data: {
            term : request.term
          },
          success: function(data) {
           

            response(data);
            
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
          $(".search_statenm").val("");
          $(".search_statenm").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>

<script type="text/javascript">
  

 $(document).ready(function(){
    
    $(".search_company").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: "{{ route('searchcompanyajax') }}",
          dataType: "json",
          data: {
            term : request.term
          },
          success: function(data) {
           

            response(data);
            
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
          $(".search_company").val("");
          $(".search_company").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>

<script type="text/javascript">
  function pancard(obj,val){
    // console.log(obj);
    if(obj=='PanNo' ){
                   var str =$('#PanNo').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#pannumber').hide();
                      // $('.credit-submit').show();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#pannumber').show();
                    // $('.credit-submit').hide();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
  $(".icici-credit-submit").click(function(event){
    //alert("okae");
    event.preventDefault();
      //var form=$(this).closest("form").attr('id');
      //console.log($('#compareform'));
      //var form=$('#compareform');
      if(!  $('#compareform').valid()){
        return false;
      }else{
        //var s=$('#'+form).serialize();
        //console.log($('#compareform'));
        $(".iframeloading").show();
        // $(".icici-credit-submit").hide(); 
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('icici-credit-submit')}}",
         data : $('#compareform').serialize(),
         dataType: 'json',
         success: function(msg){
         $(".iframeloading").hide();  
        
         //console.log(.id);
          if(msg==2){
            // alert("OKAE");
             alert("Something Went Wrong");

           
            // $('#credit_process').modal('show');        
          } 
          else{
            //console.log(msg);
            // alert(" Your Application id is "+msg.id+".Decision is "+msg.Decision+"Thank you for your interest in ICICI Bank Credit Cards. Our representative will get in touch with you within 3 working days subject to your application meeting the eligibility criteria");
            if (msg.Decision =='Declined') {
              $('#upload').hide();

            }
             $('#drop').empty().append(msg.id);
              $('#drop1').empty().append(msg.Decision);
              $('#drop2').empty().append(msg.Reason);
             $('#credit_process_sorry').modal('show');
          }

        }  
      }); 
      }

    });


</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $(".lastReporteddob").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
  function email(obj,val){
    // console.log(obj);
    if(obj=='email_id' ){
                   var str =$('#email_id').val();
                   var emailPattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#mail_id').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#mail_id').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
  function mail(obj,val){
    // console.log(obj);
    if(obj=='work_email' ){
                   var str =$('#work_email').val();
                   var emailPattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#email').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#emai').show();

                    return false;
                  }
                  
  }
}
</script>


<script type="text/javascript">
          function Redirect() 
          {
          window.location="http://beta.erp.rupeeboss.com/Credit_Card_Upload_Docs.aspx?App_Id=drop&CardType=ICICI";
          }
</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $(".lastReportedsince").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
  $('#have').change(function(){
 
  $("#credit_details").show();
  });
</script>

<script type="text/javascript">
  $('#not_have').change(function(){
 
  $("#credit_details").hide();
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){

    $('#net_annual_income').on('change', function() {
      //console.log(this.value);
      //resetting dropdown as all dropdown based on first one
      $('#your_interests').get(0).selectedIndex = 0;
      $('#cards').get(0).selectedIndex = 0;
      if ( this.value == '>2.5Lacs')
      {
        $("#credit_card_type").show();
        $("#your_interests option[value='Travel']").hide();
        $("#your_interests option[value='Motorsports']").hide();
       
      }
      else if(this.value == '>5.0Lacs' || this.value == '>10Lacs' || this.value == '>15Lacs')
      {
        $("#credit_card_type").show();
        $("#your_interests option[value='Travel']").show();
        $("#your_interests option[value='Motorsports']").show();
      }
    });

    $('#your_interests').on('change', function() {
       //resetting cards dropdown as changing intrest changs cards
      $('#cards').get(0).selectedIndex = 0;
      var net_annual_income=$('#net_annual_income').find(":selected").val();
      var your_interests=$('#your_interests').find(":selected").val();
     // console.log(net_annual_income);
      $("#credit_card_name").show();
      $("#cards option[value='Platinum Chip Credit Card']").hide();
      $("#cards option[value='Coral Credit Card']").hide();
      $("#cards option[value='Jet Coral Credit Card']").hide();
      $("#cards option[value='Ferrari Platinum Credit Card']").hide();
      $("#cards option[value='Rubyx Credit Card']").hide();
      $("#cards option[value='Sapphiro Credit Card']").hide();
      $("#cards option[value='Jet Rubyx Credit Card']").hide();
      $("#cards option[value='Jet Sapphiro Credit Card']").hide();
      $("#cards option[value=' Ferrari Signature Credit Card']").hide();
      if ( your_interests == 'Lifestyle')
      {
       
        $("#cards option[value='Platinum Chip Credit Card']").show();
      }
      if (( your_interests == 'Lifestyle' && net_annual_income == '>5.0Lacs'))
      {
       
        $("#cards option[value='Coral Credit Card']").show();
      }
      if (( your_interests == 'Lifestyle' && net_annual_income == '>10Lacs'))
      {
        $("#cards option[value='Rubyx Credit Card']").show();
      }
      if (( your_interests == 'Lifestyle' && net_annual_income == '>15Lacs'))
      {
        $("#cards option[value='Sapphiro Credit Card']").show();
      }
      if (( your_interests == 'Travel' && net_annual_income == '>5.0Lacs'))
      {
       $("#cards option[value='Jet Coral Credit Card']").show();
      }
      if (( your_interests == 'Travel' && net_annual_income == '>10Lacs'))
      {
         $("#cards option[value='Jet Rubyx Credit Card']").show();
      }
      if (( your_interests == 'Travel' && net_annual_income == '>15Lacs'))
      {
        $("#cards option[value='Jet Sapphiro Credit Card']").show();
      }
      if (( your_interests == 'Motorsports' && net_annual_income == '>5.0Lacs'))
      {
           $("#cards option[value='Ferrari Platinum Credit Card']").show();
      }
      if (( your_interests == 'Motorsports' && net_annual_income == '>10Lacs'))
      {
         $("#cards option[value=' Ferrari Signature Credit Card']").show();
      }
      if (( your_interests == 'Motorsports' && net_annual_income == '>15Lacs'))
      {
         $("#cards option[value=' Ferrari Signature Credit Card']").show();
      }
    });
});
</script>

<script type="text/javascript">
  function same_as_above(obj,val){

     // console.log(obj);
     var atLeastOneIsChecked = $('#same_id:checkbox:checked').length > 0;
     // console.log(atLeastOneIsChecked);
    if (atLeastOneIsChecked == true) {
      // alert("ok");

    $('#PerResidenceAddress1').val($('#ResidenceAddress1').val());
     $('#PerResidenceAddress2').val($('#ResidenceAddress2').val());
     $('#PerResidenceAddress3').val($('#ResidenceAddress3').val());
     $('#PerResidenceState').val($('#ResidenceState').val());

     $('#PerCity').val($('#City').val());
     $('#PerResidencePincode').val($('#ResidencePincode').val());
     $('#Persearch_statenm').val($('#search_statenm').val());
     $('#per_res_type').val($('#type_current').val());
     }else{

     $('#PerResidenceAddress1').val('');
     $('#PerResidenceAddress2').val(''); 
     $('#PerResidenceAddress3').val('');
      $('#PerResidenceState').val('');

     $('#PerCity').val('');
     $('#PerResidencePincode').val('');
     $('#Persearch_statenm').val('');
     $('#per_res_type').val('');
  }
}
</script>




