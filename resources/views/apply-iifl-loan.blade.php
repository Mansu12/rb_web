@include('layout.header')
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/iifl_css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/iifl_css/icomoon.css">

<!--    <link rel="stylesheet" href="css/iifl_css/style.css">  -->
    <link rel="stylesheet" href="css/iifl_css/input/demo.css"> 
    <link rel="stylesheet" href="css/iifl_css/input/normalize.css"> 
    <link rel="stylesheet" href="css/iifl_css/input/set2.css"> 
    <!-- Chatbox  -->
    <link rel="stylesheet" href="css/iifl_css/chatbox.css">
    <link rel="stylesheet" href="build/freshslider.min.css">
    

    

                
<!-- plus a jQuery UI theme, here I use "flick" -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/flick/jquery-ui.css">
  <style>
      table {font-size:14px;}
      .input__field--nao {color: #999999;}
      .bg-success {padding:10px; font-size:14px; color:#666;}
      .lon-det li {float:left; border-right:1px solid #fff; padding:10px;list-style-type:none;vertical-align:middle;}
      .lon-det {height:92px; margin:0px; font-size:14px;}
      .content p {padding:0px;margin:0px; font-size:13px;}
      .bdr-rigt {border-right:1px dashed #fff;min-height: 50px;}
      .mrg-btm {margin-bottom:20px;}
      .mrg-tpp {margin-top:35px;}
      .bg-primary {padding:5px; font-size:16px;}
      .bg-primary:hover {color:#fff;}
      .small-txt {font-size:10px;}
      .input__field {border-radius:0px;}
      .input__label--nao {top:15px;}
      .input__field {border:1px solid #dfdfdf;height:60px;}
      label.error {display: none !important; }
        .error {
                    border:2px solid red;
                }
      h1 {font-size:40px;color:#75a8de;padding:20px; padding-bottom:0px;margin-bottom:5px;}
</style>
    <div id="fh5co-hero">
    <div class="express-lon-ban"><img src="images/express-loan-image1.jpg" class="img-responsive"/></div>
    <br>
    <div class="container animate-box">
            
    <br>
    <div class="animate-box">
    <div class="row">
    
        <div class="col-md-12 bg-white centered well pad1">
                   <div class="row" style="display: none;">
                <div class="col-md-10 col-md-offset-1">
                <hr>
                <h1 class="text-center pad">Thank You</h1>
                <h4 class="text-center">Your application is under process our representative will get in touch with to you shortly</h4>
                <p class="text-center">To learn more about IIFL Express Personal Loan <a href="javascript:void(0)">Click Here</a></p>
        
            </div>
            </div>
            
            
            
   
   
                

            <div class="row" id="error" style="display: none;">
                <div class="col-md-10 col-md-offset-1">
                <hr>
                <h1 class="text-center pad">Oooopssss</h1>
                <h4 class="text-center">Your application is under process our representative will get in touch with to you shortly</h4>
                <p class="text-center">To learn more about IIFL Express Personal Loan <a href="javascript:void(0)">Click Here</a></p>
        
            </div>
            </div>
   
            <br>
            
        <div id="iifl">
            <form id="iifl_express_loan" name="iifl_express_loan" method="POST">
                {{ csrf_field() }}
            
            <section class="content">
                <h3 class="text-uppercase exp-hed">IIFL Express Loan</h3>
                <span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Company_Name" id="Company_Name" required>
                    <label class="input__label input__label--nao" for="Company_Name">
                    <span class="input__label-content input__label-content--nao">Where Do You Work</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="Monthly_Salary"  id="Monthly_Salary"  onkeypress="return fnAllowNumeric(event)" required  />
                    <label class="input__label input__label--nao" for="Monthly_Salary">
                    <span class="input__label-content input__label-content--nao">Your Net Monthly Salary</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="Monthly_Obligation" id="Monthly_Obligation" onkeypress="return fnAllowNumeric(event)" required  />
                    <label class="input__label input__label--nao" for="Monthly_Obligation">
                    <span class="input__label-content input__label-content--nao">Total Existing EMI if Any</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
            </section>
                <h3 class="text-uppercase exp-hed">Enter your contact information to receive a copy of your loan eligibility.</h3>
            <section class="content">
                
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="Mob_Num" id="Mob_Num" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10" required />
                    <label class="input__label input__label--nao" for="Mob_Num">
                    <span class="input__label-content input__label-content--nao">Mobile No. </span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                    <div id="mobile_value" style="display: none;color: red;">Phone number should be of 10 digits.</div>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="EmailID" id="EmailID" oninput="mail('EmailID')" required />
                    <label class="input__label input__label--nao" for="EmailID">
                        <span class="input__label-content input__label-content--nao">Email Id</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                    <div id="email" style="display:none;color: red;">Please Enter Valid Email Id.</div>
                </span>
                <span class="input_exp input--nao">
                    <select class="input__field input__field--nao" name="city" id="city" required>
                    <option disabled selected value=""></option>
                    </select>
                    <label class="input__label input__label--nao" for="city">
                    <span class="input__label-content input__label-content--nao">City</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                
            </section>
            <a class="btn btn-primary btn-outline with-arrow mrg-top next" href="javascript:void(0)">NEXT<i class="icon-arrow-right"></i></a>
            </form>
            </div>
            
        <div id="Eligibility_details" style="display: none;">
            <form name="eligibility_form" id="eligibility_form" method="POST">
                      {{ csrf_field() }}
            <div class="col-md-12">
            <table class="table table-bordered" width="70%">
                <tr>
                    <td class="bg-info">Company Name: <b><span id="Name"></span></b></td>
                    <td class="bg-danger">Monthly Salary: <b>₹<span id="Salary"></span></b></td>
                    <td class="bg-info">Current EMI: <b>₹<span id="Current"></span></b></td>
                </tr>
             </table>
                <h3><i><b class="text-primary">Hurray !!</b></i>&nbsp;You are eligible for a loan of <b>₹<span id="eligible"></span></b >.Tenure for <b><span id="period"></span> years</b> & EMI is<b> ₹<span id="you_have_to_pay"></span></b ></h3>
            <br>
            </div>

            <section class="content">
             <span class="input input--nao input--filled">
                    <input class="input__field input__field--nao" type="text" name="AppliedLoan" id="AppliedLoan" onkeypress="return fnAllowNumeric(event)" minlength="6" maxlength="9" />
                    <label class="input__label input__label--nao" for="AppliedLoan">
                    <span class="input__label-content input__label-content--nao">Loan Amount</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao input--filled">
                    <input class="input__field input__field--nao" type="text" name="tenure" id="tenure" onkeypress="return fnAllowNumeric(event)" maxlength="3" />
                    <label class="input__label input__label--nao" for="tenure">
                    <span class="input__label-content input__label-content--nao">Loan Tenure</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao input--filled">
                    <input class="input__field input__field--nao" type="text" name="EMI" id="EMI" onkeypress="return fnAllowNumeric(event)" disabled  />
                    <label class="input__label input__label--nao" for="EMI">
                    <span class="input__label-content input__label-content--nao">EMI</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <div>Rate Of Interest</div>
                    <div id="int"><b><span id="interest"></span>%</b></div>
                </span>
                <span class="input input--nao">
                    <div>Proccesing Fee</div>
                    <b><span id="fee"></span>%</b>
                </span>
                <hr>
                <div class="col-md-12 text-danger mar-top"><input type="checkbox" name="check" required /> I Agree to all the terms and conditions.</div>
        </section>
            <a class="btn btn-primary btn-outline with-arrow mrg-top next_form" id="next_form" href="javascript:void(0)">NEXT<i class="icon-arrow-right"></i></a>
            </form>
            </div>
            
        <div id="Applicant_Details" style="display: none;">
            <form name="applicant_deatils" id="applicant_deatils" method="POST">
                      {{ csrf_field() }}
            <div class="col-md-12">
            <table class="table table-bordered" width="100%">
                <tr>
                    <td class="bg-info">Company Name:<b><span id="CompanyNm"></span></b></td>
                    <td class="bg-danger">Monthly Salary:<b><span id="Income"></span></b></td>
                    <td class="bg-info">Current EMI:<b><span id="Current_EMI"></span></b></td>
                </tr>
             </table>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-10 bg-primary pad mrg-btm">
            <div class="col-md-3 bdr-rigt">Loan Details</div>
                  <div class="col-md-3 bdr-rigt">
                  <p>Loan Amount:- <b>₹<span id="Amount"></span></b></p>
                  <p>Loan Tenure:- <b><span id="LoanTenure"></span></b></p>
                  </div>
                  <div class="col-md-3 bdr-rigt">
                  <p>Rate of Interest:- <b><span id="RateOfInt"></span>%</b></p>
                  <p>Processing Fees:- <b><span id="ProcessFee"></span></b></p>
                  </div>
                  <div class="col-md-3">
                  <p>EMI:- <b>₹<span id="EquatedMonthly"></span></b></p>
                  </div>
                </div>
            <div class="col-md-1"></div>
            <section class="content">
                <h3 class="col-md-12 mrg-tpp">Tell Us a Bit About YourSelf</h3>
                <input class="input__field input__field--nao" type="hidden" name="CompanyName" required id="CompanyName" onkeypress="return AllowAlphabet(event)" />
                <input class="input__field input__field--nao" type="hidden" name="MonthlySalary" required id="MonthlySalary" onkeypress="return AllowAlphabet(event)" />
                <input class="input__field input__field--nao" type="hidden" name="MonthlyObligation" required id="MonthlyObligation" onkeypress="return AllowAlphabet(event)" />
                <input class="input__field input__field--nao" type="hidden" name="AppliedLoanamount" required id="AppliedLoanamount" value="" />
                <input class="input__field input__field--nao" type="hidden" name="Tenure" required id="Tenure" value="" />
                <input class="input__field input__field--nao" type="hidden" name="Emi" required id="Emi" value="" />
                <input class="input__field input__field--nao" type="hidden" name="ROI" required id="ROI" value="" />
                <input class="input__field input__field--nao" type="hidden" name="TotalPayableAmount" required id="TotalPayableAmount" value="" />
                <input class="input__field input__field--nao" type="hidden" name="ApplicantType" required id="ApplicantType" value="Applicant" />
                <input class="input__field input__field--nao" type="hidden" name="City" required id="City" value="" />
                <input class="input__field input__field--nao" type="hidden" name="EKYCFlag" required id="EKYCFlag" value="0"/>
                <input class="input__field input__field--nao" type="hidden" name="Processingfee" required id="Processingfee" value="" />
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="FName" required id="FName" onkeypress="return AllowAlphabet(event)" />
                    <label class="input__label input__label--nao" for="FName">
                        <span class="input__label-content input__label-content--nao">First Name </span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="MName" id="MName" onkeypress="return AllowAlphabet(event)" />
                    <label class="input__label input__label--nao" for="MName">
                    <span class="input__label-content input__label-content--nao">Middle Name</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="LName" id="LName" required onkeypress="return AllowAlphabet(event)" />
                    <label class="input__label input__label--nao" for="LName">
                    <span class="input__label-content input__label-content--nao">Last Name</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="PAN" id="PAN" oninput="pan_card('PAN')" required minlength="10" maxlength="10" />
                    <label class="input__label input__label--nao" for="PAN">
                    <span class="input__label-content input__label-content--nao">Pan Card No*</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                    <div id="pan_number" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</div>
                </span>


                <span class="input input--nao">
                    <input class="input__field input__field--nao lastReporteddate1" type="text" placeholder="Date Of Birth" id="DOB" name="DOB" required />
                    <label class="input__label input__label--nao" for="input-3">
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="Gender" id="Gender" required>
                        <option disabled selected value=""></option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    <label class="input__label input__label--nao" for="Gender">
                    <span class="input__label-content input__label-content--nao">Gender</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <h3 class="col-md-12 mrg-tpp">Where Can We Reach you</h3>
                    <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="MobileNo" id="MobileNo" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10" required />
                    <label class="input__label input__label--nao" for="MobileNo">
                    <span class="input__label-content input__label-content--nao">Mobile No.</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="AlternateMobileNo" id="AlternateMobileNo" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10"/>
                    <label class="input__label input__label--nao" for="AlternateMobileNo">
                    <span class="input__label-content input__label-content--nao">Alternate MobileNo</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="PersonalEmailID" id="PersonalEmailID" required/>
                    <label class="input__label input__label--nao" for="PersonalEmailID">
                    <span class="input__label-content input__label-content--nao">Email Id</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>

                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="AadhaarNumber" id="AadhaarNumber" oninput="aadhar('AadhaarNumber')" required minlength="12" maxlength="12"  />
                    <label class="input__label input__label--nao" for="input-1">
                    <span class="input__label-content input__label-content--nao">Enter Your Aadhar No.</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                    <div id="aadhar_number" style="display:none;color: red;">Oops.Please Enter Valid Aadhar Number.!!</div>
                </span>
            </section>
            <section class="content">
            <div class="col-md-12"><h3 class="mrg-tpp">Where Do You Stay</h3></div>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CurrentAddress1" id="CurrentAddress1" required />
                    <label class="input__label input__label--nao" for="CurrentAddress1">
                    <span class="input__label-content input__label-content--nao">Address Line 1</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CurrentAddress2" id="CurrentAddress2" required" />
                    <label class="input__label input__label--nao" for="CurrentAddress2">
                    <span class="input__label-content input__label-content--nao">Address Line 2</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CurrentAddress3" id="CurrentAddress3" required/>
                    <label class="input__label input__label--nao" for="CurrentAddress3">
                    <span class="input__label-content input__label-content--nao">Address Line 3</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CurrentPin" id="CurrentPin" required minlength="6" maxlength="6" onkeypress="return fnAllowNumeric(event)" />
                    <label class="input__label input__label--nao" for="CurrentPin">
                    <span class="input__label-content input__label-content--nao">Pincode</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="CurrentState" id="CurrentState" required>
                    <option disabled selected value=""></option>
                    </select>
                    <label class="input__label input__label--nao" for="CurrentState">
                    <span class="input__label-content input__label-content--nao">CurrentState</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao input--filled">
                    <select class="input__field input__field--nao" name="CurrentCity" id="CurrentCity" required>
                    <option disabled selected value=""></option>
                    </select>
                    <label class="input__label input__label--nao" for="CurrentCity">
                    <span class="input__label-content input__label-content--nao">CurrentCity</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
            </section>
                <input type="checkbox" name="same" id="same_id" onclick="same_as_above('same_id');"/> Same As Above
                <section class="content">
                <div class="col-md-12"><h3 class="mrg-tpp">Permanent Address</h3></div>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="PermanentAddress1" id="PermanentAddress1" required />
                    <label class="input__label input__label--nao" for="PermanentAddress1">
                        <span class="input__label-content input__label-content--nao">Address Line 1</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="PermanentAddress2" id="PermanentAddress2" required" />
                    <label class="input__label input__label--nao" for="PermanentAddress2">
                    <span class="input__label-content input__label-content--nao">Address Line 2</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="PermanentAddress3" id="PermanentAddress3" required/>
                    <label class="input__label input__label--nao" for="PermanentAddress3">
                    <span class="input__label-content input__label-content--nao">Address Line 3</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="PermanentPin" id="PermanentPin" required minlength="6" maxlength="6" />
                    <label class="input__label input__label--nao" for="PermanentPin">
                    <span class="input__label-content input__label-content--nao">Pincode</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="PermanentState" id="PermanentState" required>
                        <option disabled selected value=""></option>
                    </select>
                    <label class="input__label input__label--nao" for="PermanentState">
                    <span class="input__label-content input__label-content--nao">State</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao input--filled">
                    <select class="input__field input__field--nao" name="PermanentCity" id="PermanentCity" required>
                        <option disabled selected value=""></option>
                    </select>
                    <label class="input__label input__label--nao" for="PermanentCity">
                    <span class="input__label-content input__label-content--nao">City</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
            </section>
            <section class="content">
            <div class="col-md-12"><h3 class="mrg-tpp">Residence Information</h3></div>
                <span class="input input--nao">
                    <select class="input__field input__field--nao fnt-clr" id="Residencetype" name="Residencetype" required>
                        <option selected disabled value=""></option>
                        <option value="Rented">Rented</option>
                        <option value="Owned ">Owned</option>
                    </select>
                    <label class="input__label input__label--nao" for="Residencetype">
                    <span class="input__label-content input__label-content--nao">ResidenceType</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" name="ResidenceStability" id="ResidenceStability" onkeypress="return fnAllowNumeric(event)" type="text"  minlength="2" maxlength="3" required />
                    <label class="input__label input__label--nao" for="ResidenceStability">
                    <span class="input__label-content input__label-content--nao">Period of Residence(In Months)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span> 
        </section>
        <section class="content">
            <div class="col-md-12"><h3 class="mrg-tpp">Personal Information</h3></div>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="Education" id="Education" required>
                       <option disabled selected value=""></option>
                    </select>
                    <label class="input__label input__label--nao" for="Education">
                    <span class="input__label-content input__label-content--nao">Education*</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="PurposeofLoan" id="PurposeofLoan" required>
                       <option disabled selected value=""></option>
                    </select>
                    <label class="input__label input__label--nao" for="PurposeofLoan">
                    <span class="input__label-content input__label-content--nao">PurposeofLoan*</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="MaritalStatus" id="MaritalStatus" required>
                       <option disabled selected value=""></option>
                       <option value="N">Single</option>
                       <option value="Y">Married</option>
                    </select>
                    <label class="input__label input__label--nao" for="input-3">
                    <span class="input__label-content input__label-content--nao">Marital Status*</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span> 
                </section>
                <section class="content">
                    <h3 class="col-md-12 mrg-tpp">Employment Details.</h3>
                
                <span class="input input--nao">
                    <input class="input__field input__field--nao lastReporteddate1" placeholder="Joining Date" type="text" name="joining_date" id="joining_date" required />
                    <label class="input__label input__label--nao" for="joining_date">
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>

                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CurrentWorkExp" id="CurrentWorkExp" onkeypress="return fnAllowNumeric(event)" required />
                    <label class="input__label input__label--nao" for="CurrentWorkExp">
                    <span class="input__label-content input__label-content--nao">Current Work Experience (In Months)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>

                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="TotalWorkExp" id="TotalWorkExp" onkeypress="return fnAllowNumeric(event)" required />
                    <label class="input__label input__label--nao" for="TotalWorkExp">
                    <span class="input__label-content input__label-content--nao">Total Work Experience  (In Months)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CompanyAddress1" id="CompanyAddress1" required />
                    <label class="input__label input__label--nao" for="CompanyAddress1">
                    <span class="input__label-content input__label-content--nao">Company Address1</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CompanyAddress2" id="CompanyAddress2" required />
                    <label class="input__label input__label--nao" for="CompanyAddress2">
                    <span class="input__label-content input__label-content--nao">Company Address2</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CompanyAddress3" id="CompanyAddress3" required />
                    <label class="input__label input__label--nao" for="CompanyAddress3">
                    <span class="input__label-content input__label-content--nao">Company Address3</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="OfficeEmailID" id="OfficeEmailID" oninput="office_email('OfficeEmailID')" required />
                    <label class="input__label input__label--nao" for="OfficeEmailID">
                    <span class="input__label-content input__label-content--nao">Office EmailID</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                    <div id="office_email" style="display:none;color: red;">Please Enter Valid Email Id.</div>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CompanyPin" id="CompanyPin" minlength="6" maxlength="6" required onkeypress="return fnAllowNumeric(event)" />
                    <label class="input__label input__label--nao" for="CompanyPin">
                    <span class="input__label-content input__label-content--nao">Company PinCode</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                    <div id="office_email" style="display:none;color: red;">Please Enter Valid Email Id.</div>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="CompanyState" id="CompanyState" required>
                        <option disabled selected value=""></option>
                    </select>
                    <label class="input__label input__label--nao" for="CompanyState">
                    <span class="input__label-content input__label-content--nao">Company State</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="CompanyCity" id="CompanyCity" required>
                        <option disabled selected value=""></option>
                    </select>
                    <label class="input__label input__label--nao" for="CompanyCity">
                    <span class="input__label-content input__label-content--nao">Company City</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
            </section>
               
                <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons"><h4><b>If Co-Applicant Exist :</b></h4>
                      <span class="btn btn-primary outer-brd active"><input type="radio"  name="CoapplicantFlag"  value="1">Yes</span>
                      <span class="btn btn-primary outer-brd"><input type="radio"  name="CoapplicantFlag" checked="" value="0" >No</span>
                </div>
                
            <br>
            <div class="col-md-12">
             <a class="btn btn-primary btn-outline with-arrow mrg-top applicant" id="applicant_form" href="javascript:void(0);">NEXT<i class="icon-arrow-right"></i></a>
            </div>
            </form>
            </div>

            <div id="co_applicant" style="display: none;">
                <form id="co_applicant_details" name="co_applicant_details" method="POST">
                 {{ csrf_field() }}
                <section class="content">
                <h3 class="col-md-12 mrg-tpp">Tell Us a Bit About Co-applicant</h3>
                <span class="input input--nao">
                <input class="input__field input__field--nao" type="hidden" name="CoKYCFlag" required id="CoKYCFlag" value="1"/>
                    <input class="input__field input__field--nao" type="text" name="CoCompanyName" required id="CoCompanyName" onkeypress="return AllowAlphabet(event)" />
                    <label class="input__label input__label--nao" for="CoCompanyName">
                        <span class="input__label-content input__label-content--nao">Company Name </span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoMonthlySalary" required id="CoMonthlySalary" onkeypress="return fnAllowNumeric(event)" />
                    <label class="input__label input__label--nao" for="CoMonthlySalary">
                        <span class="input__label-content input__label-content--nao">MonthlySalary</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoMonthlyObligation" required id="CoMonthlyObligation" onkeypress="return fnAllowNumeric(event)" />
                    <label class="input__label input__label--nao" for="CoMonthlyObligation">
                        <span class="input__label-content input__label-content--nao">MonthlyObligation</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="RelationwithApplicant" id="RelationwithApplicant" required>
                    <option disabled selected value="Relation With Applicant"></option>
                      <option value="Father">Father</option>
                      <option value="Mother">Mother</option>
                      <option value="Brother">Brother</option>
                      <option value="Sister">Sister</option>
                      <option value="Niece">Niece</option>
                      <option value="Nephew">Nephew</option>
                      <option value="Son">Son</option>
                      <option value="Daughter">Daughter</option>
                      <option value="Self">Self</option>
                      <option value="Spouse">Spouse</option>
                      <option value="Other">Other</option>
                    </select>
                    <label class="input__label input__label--nao" for="RelationwithApplicant">
                        <span class="input__label-content input__label-content--nao">Relation with Applicant</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoFName" required id="CoFName" onkeypress="return AllowAlphabet(event)" />
                    <label class="input__label input__label--nao" for="CoFName">
                        <span class="input__label-content input__label-content--nao">First Name </span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoMName" id="CoMName" onkeypress="return AllowAlphabet(event)" />
                    <label class="input__label input__label--nao" for="CoMName">
                        <span class="input__label-content input__label-content--nao">Middle Name</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoLName" id="CoLName" required onkeypress="return AllowAlphabet(event)" />
                    <label class="input__label input__label--nao" for="CoLName">
                        <span class="input__label-content input__label-content--nao">Last Name</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoPAN" id="CoPAN" oninput="co_pan_card('CoPAN')" required minlength="10" maxlength="10" />
                    <label class="input__label input__label--nao" for="CoPAN">
                        <span class="input__label-content input__label-content--nao">Pan Card No*</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  <div id="co_pan_number" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</div>
                </span>


                <span class="input input--nao">
                    <input class="input__field input__field--nao lastReportedcodate1" type="text" placeholder="Date Of Birth" id="CoDOB" name="CoDOB" required />
                    <label class="input__label input__label--nao" for="CoDOB">
                        <!-- <span class="input__label-content input__label-content--nao">Date of Birth</span> -->
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="CoGender" id="CoGender" required>
                    <option disabled selected value=""></option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                    <label class="input__label input__label--nao" for="CoGender">
                        <span class="input__label-content input__label-content--nao">Gender</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                
                <h3 class="col-md-12 mrg-tpp">Where Can We Reach you</h3>
                
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoMobileNo" id="CoMobileNo" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10" required />
                    <label class="input__label input__label--nao" for="CoMobileNo">
                        <span class="input__label-content input__label-content--nao">Mobile No.</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoAlternateMobileNo" id="CoAlternateMobileNo" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10"/>
                    <label class="input__label input__label--nao" for="AlternateMobileNo">
                        <span class="input__label-content input__label-content--nao">Residence Landline</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoAadhaarNumber" id="CoAadhaarNumber" oninput="co_aadhar('CoAadhaarNumber')" required minlength="12" maxlength="12"  />
                    <label class="input__label input__label--nao" for="CoAadhaarNumber">
                        <span class="input__label-content input__label-content--nao">Enter Your Aadhar No.</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                    <div id="co_aadhar_number" style="display:none;color: red;">Oops.Please Enter Valid Aadhar Number.!!</div>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoPersonalEmailID" id="CoPersonalEmailID" oninput="co_mail('CoPersonalEmailID')" required />
                    <label class="input__label input__label--nao" for="CoPersonalEmailID">
                        <span class="input__label-content input__label-content--nao">Email Id</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                    <div id="co_email" style="display:none;color: red;">Please Enter Valid Email Id.</div>
                </span>
                

                
            </section>
            <section class="content">
                    <h3 class="col-md-12 mrg-tpp">Employment Details.</h3>
                    <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoCurrentWorkExp" id="CoCurrentWorkExp" onkeypress="return fnAllowNumeric(event)" required />
                    <label class="input__label input__label--nao" for="CoCurrentWorkExp">
                        <span class="input__label-content input__label-content--nao">Current Work Experience (In Months)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>

                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoTotalWorkExp" id="CoTotalWorkExp" onkeypress="return fnAllowNumeric(event)" required />
                    <label class="input__label input__label--nao" for="CoTotalWorkExp">
                        <span class="input__label-content input__label-content--nao">Total Work Experience  (In Months)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                </section>
                <section class="content">
            <div class="col-md-12"><h3 class="mrg-tpp">Where Co-Applicant Stays</h3></div>
                
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoCurrentAddress1" id="CoCurrentAddress1" required />
                    <label class="input__label input__label--nao" for="CoCurrentAddress1">
                        <span class="input__label-content input__label-content--nao">Address Line 1</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoCurrentAddress2" id="CoCurrentAddress2" required" />
                    <label class="input__label input__label--nao" for="CoCurrentAddress2">
                        <span class="input__label-content input__label-content--nao">Address Line 2</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoCurrentAddress3" id="CoCurrentAddress3" required/>
                    <label class="input__label input__label--nao" for="CoCurrentAddress3">
                        <span class="input__label-content input__label-content--nao">Address Line 3</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoCurrentPin" id="CoCurrentPin" required minlength="6" maxlength="6" onkeypress="return fnAllowNumeric(event)" />
                    <label class="input__label input__label--nao" for="CoCurrentPin">
                        <span class="input__label-content input__label-content--nao">Pincode</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="CoCurrentState" id="CoCurrentState" required>
                    <option disabled selected value="">Select</option>
                      
                    </select>
                    <label class="input__label input__label--nao" for="CoCurrentState">
                        <span class="input__label-content input__label-content--nao">CurrentState</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="CoCurrentCity" id="CoCurrentCity" required>
                    <option disabled selected value="">Select</option>
                      
                    </select>
                    <label class="input__label input__label--nao" for="CoCurrentCity">
                        <span class="input__label-content input__label-content--nao">CurrentCity</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                
              
                </section>

                <section class="content">
            <div class="col-md-12"><h3 class="mrg-tpp">Permanent Address</h3></div>
                
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoPermanentAddress1" id="CoPermanentAddress1" required />
                    <label class="input__label input__label--nao" for="CoPermanentAddress1">
                        <span class="input__label-content input__label-content--nao">Address Line 1</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoPermanentAddress2" id="CoPermanentAddress2" required" />
                    <label class="input__label input__label--nao" for="CoPermanentAddress2">
                        <span class="input__label-content input__label-content--nao">Address Line 2</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoPermanentAddress3" id="CoPermanentAddress3" required/>
                    <label class="input__label input__label--nao" for="CoPermanentAddress3">
                        <span class="input__label-content input__label-content--nao">Address Line 3</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CoPermanentPin" id="CoPermanentPin" required minlength="6" maxlength="6" onkeypress="return fnAllowNumeric(event)" />
                    <label class="input__label input__label--nao" for="CoPermanentPin">
                        <span class="input__label-content input__label-content--nao">Pincode</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                     <select class="input__field input__field--nao" name="CoPermanentState" id="CoPermanentState" required>
                    <option disabled selected value="">Select</option>
                      
                    </select>
                    <label class="input__label input__label--nao" for="CoPermanentState">
                        <span class="input__label-content input__label-content--nao">State</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="CoPermanentCity" id="CoPermanentCity" required>
                    <option disabled selected value="">Select</option>
                      
                    </select>
                    <label class="input__label input__label--nao" for="CoPermanentCity">
                        <span class="input__label-content input__label-content--nao">City</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                
               
                </section>
                <div class="col-md-12">
             <a class="btn btn-primary btn-outline with-arrow mrg-top applicant" id="co_applicant_form" href="javascript:void(0);">NEXT<i class="icon-arrow-right"></i></a>
            </div>
                </form>
            </div>

            <br>
            <!-- <hr class="hr-sty"> -->
            <div id="otp" style="display: none;">
            <form name="aadharotp" id="aadharotp" method="POST">
             {{ csrf_field() }}
             <section class="content">
            
            <div class="col-md-12">
            <table class="table table-bordered" width="100%">
                <tr>
                    <td class="bg-info">Company Name: <b><span id="comp_name"></span></b></td>
                    <td class="bg-danger">Monthly Salary: <b><span id="salary"></span></b></td>
                    <td class="bg-info">Current EMI: <b><span id="paying_emi"></span></b></td>
                </tr>
             </table>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-10 bg-primary pad mrg-btm">
                   
                  <div class="col-md-3 bdr-rigt">Loan Details</div>
                  <div class="col-md-3 bdr-rigt">
                  <p>Loan Amount:- <b><span id="loanamt"></span></b></p>
                  <p>Loan Tenure:- <b><span id="loantenure"></span></b></p>
                  </div>
                  <div class="col-md-3 bdr-rigt">
                  <p>Rate of Intrest:- <b><span id="intrest"></span></b></p>
                  <p>Processing Fees:- <b><span id="process_fee"></span></b></p>
                  </div>
                  <div class="col-md-3">
                  <p>EMI:- <b><span id="e_m_i"></span></b></p>
                  </div>
                </div>
                <div class="col-md-1"></div>
                
                <h3 class="col-md-12 mrg-tpp">OTP to verify your Aadhar Details:</h3>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="Aadharno" id="Aadharno" oninput="aadharnum('Aadharno')" required minlength="12" maxlength="12"  />
                    <label class="input__label input__label--nao" for="input-1">
                        <span class="input__label-content input__label-content--nao">Enter Your Aadhar No.</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                    <div id="aadhar_no" style="display:none;color: red;">Oops.Please Enter Valid Aadhar Number.!!</div>
                </span>
                 
                
                <h4 class="text-danger small-txt">OTP has been sent to your Registred Mobile No.</h4>
                <div class="col-md-12"><a class="btn btn-primary btn-outline with-arrow mrg-btm otp" id="aadhar_otp" href="javascript:void(0)">Get OTP<i class="icon-arrow-right"></i></a></div>
                </section>
                <h3 class="mrg-tpp">Proceed Without aadhar Number</h3>
                <a class="btn btn-primary btn-outline with-arrow mrg-top" id="proceed_without_aadhar" href="javascript:void(0)">Click  Here<i class="icon-arrow-right"></i></a>
                </form>
                </div>
                

                <div id="confirm_otp" style="display: none;">
                <form name="confirm_aadharotp" id="confirm_aadharotp" method="POST">
                {{ csrf_field() }}
                <section>
                <div>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" name="otp" id="otp" type="text" onkeypress="return fnAllowNumeric(event)" required/>
                    <label class="input__label input__label--nao" for="otp">
                        <span class="input__label-content input__label-content--nao">Enter OTP</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <div class="col-md-12 mrg-btm"><a class="btn btn-primary btn-outline with-arrow mrg-top" id="confirm" href="javascript:void(0)">Confirm<i class="icon-arrow-right"></i></a></div>
                </div>
                
                
            </section>
            </form>
            </div>
         
            <br>
            <div id="Instant_Approve" style="display: none;">
            <form name="instant_form" id="instant_form" method="POST">
                      {{ csrf_field() }}
            <section class="content">
            <hr class="hr-sty">
            
            <div class="col-md-12">
             <h3>Congratulation<i><b class="text-primary"><span id="first_name"></span></b></i>&nbsp;You are eligible for a loan of <b><span id="maxloan"></span></b> <a class="bg-primary" href="javascript:void(0)">Apply Now</i></a></h3>
             <br>
            </div>
                
                <span class="input input--nao">
                <input class="input__field input__field--nao" type="hidden" name="TotalPayableAmount" required  value="" />
                    <input class="input__field input__field--nao" type="text" name="AppliedLoanamount"  onkeypress="return fnAllowNumeric(event)" required />
                    <label class="input__label input__label--nao" for="AppliedLoanamount">
                        <span class="input__label-content input__label-content--nao">Loan Amount</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="Tenure" id="Tenure" onkeypress="return fnAllowNumeric(event)" required />
                    <label class="input__label input__label--nao" for="Tenure">
                        <span class="input__label-content input__label-content--nao">Loan Tenure</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="Emi" id="Emi" onkeypress="return fnAllowNumeric(event)" value=""  />
                    <label class="input__label input__label--nao" for="Emi">
                        <span class="input__label-content input__label-content--nao">EMI</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                <input class="input__field input__field--nao" type="text" name="ROI"  onkeypress="return fnAllowNumeric(event)" value=""  />
                    <label class="input__label input__label--nao" for="ROI">
                        <span class="input__label-content input__label-content--nao">ROI</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                <input class="input__field input__field--nao" type="text" name="Processingfee"  onkeypress="return fnAllowNumeric(event)" value=""  />
                    <label class="input__label input__label--nao" for="Processingfee">
                        <span class="input__label-content input__label-content--nao">Processing fee</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                 <hr>
                <div class="col-md-12 text-danger mar-top"><input type="checkbox" name="check"/> I Agree to all the terms and conditions.</div>
            
            <div class="col-md-12">
             <a class="btn btn-primary btn-outline with-arrow mrg-top" id="instant_approve" href="javascript:void(0)">Get Instant Approve<i class="icon-arrow-right"></i></a>
            </div>
            </section>
            </form>
            </div>
            
            <div id="upload" style="display: none;">
            <form name="upload_details" id="upload_details" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}
            <div>
            <section class="mrg-top">
              <h1 class="text-center"><i>Congratulation</i></h1>
              <h3 class="text-info pad">Your Personal Loan of Rs.2,00,000</h3>
              
            
            <div class="col-md-12">
            <table class="table table-bordered" width="100%">
                <tbody>
                <tr>
                    <td class="bg-info">Rate of Intrest: <b>16%</b></td>
                    <td class="bg-info">Processing Fees: <b>Rs.2000</b></td>
                    <td class="bg-info">EMI: <b>Rs.4000</b></td>
                    <td class="bg-info">Loan Tenure: <b>3 Years</b></td>
                </tr>
             </tbody>
             </table>
             
             <h4>Our representive will get in touch with you. Please proceed to upload the necessary document for quick disbursal to learn more about IIFL Express loan <a href="javascript:void(0)"><b class="text-sucsess">Click here</b></a></h4>
                </div>
                </section>
                </div>
                
             <section class="content">
            <div class="col-md-2"></div>
         
            
                <div class="col-md-8 col-md-offset-2">
                <h3 class="text-center pad">Non Financial Documents</h3>
                <ul class="ull">
                   <li>Identity Proof <input type="file" name="identity_proof" id="identity_proof" class="pull-right" data-category="1" />
                   <select  name="sub_catg[1]"  required id="identity_proof_select" class="drop-arr ">
                    <option disabled selected value="">Select</option>
                      
                    </select>

                   </li>
                   
                 
                   <li>Address Proof <input type="file" name="address_proof" id="address_proof" class="pull-right" data-category="2"/>
                    <select  name="sub_catg[2]"  required id="address_proof_select" class="drop-arr ">
                    <option disabled selected value="">Select</option>
                      
                    </select>
                   </li>
                   <li>Property Ownership Proof <input type="file" name="ownership_proof" id="ownership_proof" class="pull-right" data-category="3"/>
                    <select  name="sub_catg[3]"  required id="ownership_proof_select" class="drop-arr ">
                    <option disabled selected value="">Select</option>
                      
                    </select>

                   </li>
                  
                </ul>
                <div class="col-md-12">
                    <a class="btn btn-primary btn-outline with-arrow mrg-top" id="proceed_upload">Proceed<i class="icon-arrow-right"></i></a>
                </div>
                </div>
                </section>
            </form>
            </div>
                
                <div id="financial_doc" style="display: none;" >
                <form name="financial_details" id="financial_details" enctype="multipart/form-data" method="POST">
                 {{ csrf_field() }}
                <div class="row">
                <div class="col-md-10 col-md-offset-1">
                <hr>
                <h3 class="text-center pad">Financial Documents</h3>
                
                <input type="text" name="BankName" id="BankName"  Placeholder="Name Of The Bank" class="col-md-8" required />
                <select class="col-md-8 drop-arr select-sty mrg-top" name="Accounttype" id="Accounttype" required>
                    <option disabled selected value="">Account Type</option>
                              
                 </select>
                 <div>
              <h3 class="text-left mrg-top pad1">Bank Statement</h3>
                <select class="col-md-8 drop-arr select-sty mrg-top" name="sub_catg[]" id="BankStatement" required="">
                    <option disabled selected value="">Bank Statement</option>          
                 </select>

                <div class="col-md-4 no-pad"><input type="file" name="BankStatement" /></div>
                 </div>
            
                <!-- <div class="col-md-12 mrg-top"> 
                <div class="col-md-4 no-pad"><input type="file" /></div><div class="col-md-4"><button class="btn btn-primary pull-left" >Upload</button></div> 
                </div> -->
                
                <div class="col-md-12 mrg-top">
                 <h3 class="text-left pad1">Enter The Disbursement Amount</h3>
                 <input type="text" name="IFSC" id="IFSC"  Placeholder="IFSC" class="col-md-8"/>
                 
                <!--  <input type="text"  Placeholder="Salary Slip" class="col-md-8 mrg-top"/> -->
                 
                 <select class="col-md-8 drop-arr select-sty mrg-top" name="sub_catg[]" id="SalarySatement" required>
                     <option disabled selected value="">Salary Statement</option>                
                 </select>
                 <div class="col-md-4 no-pad"><input type="file" name="SalarySatement" /></div>
                </div>
                <div class="col-md-12 mrg-top">
                <select class="col-md-8 drop-arr select-sty mrg-top" name="Statementtype" id="Statementtype" required>
                     <option disabled selected value="">Statement Type</option> 
                     <option value="E-Verify">E-Verify</option> 
                     <option value="Manual">Manual</option>                
                 </select>
                 </div>

                <div class="col-md-12 mrg-top"> 
                <div class="col-md-12">
                    <a class="btn btn-primary btn-outline with-arrow mrg-top" id="proceed">Proceed<i class="icon-arrow-right"></i></a>
                </div>
        
            </div>
            </div>
            </form>

            </div>

@include('layout.footer')
@include('layout.script')

<!-- <div class="modal fade" tabindex="-1" role="dialog" id="iifl_process">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
         <h4><p><b>Thank You For Choosing IIFL. Our Representative Will Get Back To You Soon.</b></p></h4>
        
      </div>
      
      <div class="modal-footer">
        
        
      </div>
    </div>
  </div>
</div> -->

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
  function mail(obj,val){
    // console.log(obj);
    if(obj=='EmailID' ){
                   var str =$('#EmailID').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#email').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email').show();

                    return false;
                  }
                  
  }
}
   function co_mail(obj,val){
    // console.log(obj);
    if(obj=='CoPersonalEmailID' ){
                   var str =$('#CoPersonalEmailID').val();
                   var emailPattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#co_email').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#co_email').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
  function office_email(obj,val){
    // console.log(obj);
    if(obj=='OfficeEmailID' ){
                   var str =$('#OfficeEmailID').val();
                   var emailPattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#office_email').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#office_email').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">

    

 $(document).ready(function(){
    src = "{{ route('searchajax') }}";
    $(".search_city_name").autocomplete({
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
          $(".search_city_name").val("");
          $(".search_city_name").attr("disabled", false);
         
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
          url: "{{ route('searchiiflcompanyajax') }}",
          dataType: "json",
          data: {
            term : request.term
          },
          success: function(data) {
           // console.log(data);

            response(data);
            
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
            
          $(".search_company").attr("data-value","Non CAT"); 
          $("#Company_Cat").val("Non CAT");
          // $(".search_company").attr("disabled", false);

         
        }else{
            $(".search_company").attr("data-value", ui.item.datavalue);
            $("#Company_Cat").val(ui.item.datavalue);       
          
             }
           }

        
      });
   });
</script>

<script type="text/javascript">
    function aadhar(obj,val){
        // console.log(obj);
        if(obj=='AadhaarNumber' ){
                   var str =$('#AadhaarNumber').val();
                   var aadharcardPattern = /^\d{4}\d{4}\d{4}$/;
                   var res = str.match(aadharcardPattern);
                   if(res){
                     // console.log('Aadhar No. is valid one.!!');
                        $('#aadhar_number').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Aadhar No..!!');
                    $('#aadhar_number').show();

                    return false;
                  }
                  
    }
}
        function co_aadhar(obj,val){
        // console.log(obj);
        if(obj=='CoAadhaarNumber' ){
                   var str =$('#CoAadhaarNumber').val();
                   var aadharcardPattern = /^\d{4}\d{4}\d{4}$/;
                   var res = str.match(aadharcardPattern);
                   if(res){
                     // console.log('Aadhar No. is valid one.!!');
                        $('#co_aadhar_number').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Aadhar No..!!');
                    $('#co_aadhar_number').show();

                    return false;
                  }
                  
    }
}
</script>
<script type="text/javascript">
    function pan_card(obj,val){
        // console.log(obj);
        if(obj=='PAN' ){
                   var str =$('#PAN').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                        $('#pan_number').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#pan_number').show();

                    return false;
                  }
                  
    }
    }
    function co_pan_card(obj,val){
        if(obj=='CoPAN' ){
                   var str =$('#CoPAN').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                        $('#co_pan_number').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#co_pan_number').show();

                    return false;
                  }
                  
    }

    }
</script>
<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $(".lastReporteddate1").datepicker({ dateFormat: "ddmmyy",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>
 <!-- Co-applicant Dob -->
<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $(".lastReportedcodate1").datepicker({ dateFormat: "ddmmyy",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
    var global_state='';
    // $('.otp').click(function(){
    //     alert('ok');
        

    //     var aadhar= $('#aadhar_num').val();
    //     var v_token = "{{csrf_token()}}";
    //     $.ajax({  
    //      type: "POST",  
    //      url: "{{URL::to('apply-iifl-loan-otp')}}",
    //      data: {
    //      "AadhaarNumber":aadhar,'_token': v_token},
    //      success: function(msg){
    //     console.log(msg);
            
          

    //     }  
    //   }); 



    // });

    $(document).ready(function(){
        // alert('ok');
        var v_token = "{{csrf_token()}}";
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('apply-iifl-loan-otp')}}",
         data: {
         '_token': v_token},
         success: function(msg){       
            populate_state(msg,'CurrentState');
            populate_state(msg,'PermanentState');
            populate_state(msg,'CoCurrentState');
            populate_state(msg,'CoPermanentState');
            populate_state(msg,'CompanyState');

    }

    })
        function populate_state(msg,id){
            //console.log(msg+" "+id);
             var mySelect = $('#'+id);
            $.each(msg, function(id,state) {
               
                // console.log(state.state_Name +"  " +state.state_id);
                mySelect.append(
                    $('<option></option>').val(state.state_id).html(state.state_Name)
                );
            });
        }
});
</script>
<script type="text/javascript">
   $(document).ready(function(){
    dropdown_populate_api_call('CityMaster');
    dropdown_populate_api_call('EducationMaster');
    
    dropdown_populate_api_call('PurposeofLoan');
    dropdown_populate_api_call('IDProof');
    dropdown_populate_api_call('AddressProof');
    dropdown_populate_api_call('OwnershipType');
    dropdown_populate_api_call('AccountType');
    dropdown_populate_api_call('BankStatement');
    dropdown_populate_api_call('SalarySatement');
    });
   function dropdown_populate_api_call(param){
     var v_token = "{{csrf_token()}}";
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('apply-iifl-loan-dropdown')}}?param="+param,
         data: {
         '_token': v_token},
         success: function(msg){

            // console.log(msg);
            if(param=='CityMaster'){
                populate_city_education(msg,'CurrentCity');
                populate_city_education(msg,'PermanentCity');
                populate_city_education(msg,'city');
                populate_city_education(msg,'CoCurrentCity');
                populate_city_education(msg,'CoPermanentCity');
                 populate_city_education(msg,'CompanyCity');

            }else if(param=='EducationMaster'){
                populate_city_education(msg,'Education');
            }
            else if(param=='PurposeofLoan'){
                populate_city_education(msg,'PurposeofLoan');
            }
            else if(param=='IDProof'){
                populate_city_education(msg,'identity_proof_select');
            }
            else if(param=='AddressProof'){
                populate_city_education(msg,'address_proof_select');
            }
            else if(param=='OwnershipType'){
                populate_city_education(msg,'ownership_proof_select');
            }
            else if(param=='AccountType'){
                populate_city_education(msg,'Accounttype');
            }
            else if(param=='BankStatement'){
                populate_city_education(msg,'BankStatement');
            }
            else if(param=='SalarySatement'){
                populate_city_education(msg,'SalarySatement');
            }
    }
   

    });
         function populate_city_education(msg,id){
            // console.log(id);
             var mySelect = $('#'+id);
            $.each(msg, function(id,city) {
                mySelect.append(
                    $('<option></option>').val(city.id).html(city.value)
                );
            });
        }
   }
</script>

<script type="text/javascript">
var global_eligible_amount=0;
var global_tenure=0;
    $('.next').click(function(event){
    //event.preventDefault();
    if(! $('#iifl_express_loan').valid()){
    // alert('okae');
    //      return false;
    }else{
            $('#iifl_express_loan').hide();
            $('#Eligibility_details').show();
            if(($('#Mob_Num').val().length)<10)
            {
              $('#mobile_value').show();
              return false;
            }
            var email_address = $('#EmailID').val();
            // console.log(email_address);
            $('#PersonalEmailID').val(email_address);

            var mob_number = $('#Mob_Num').val();
            $('#MobileNo').val(mob_number);

            var stay_at = $('#city').val();
            // console.log(stay_at);
            $('#CurrentCity').val(stay_at);
            $('#PermanentCity').val(stay_at);
            $('#City').val(stay_at);
            // var name= $('#Company_Name option:selected').text();
            var name = $('#Company_Name').val();
            // console.log(name);
            var company =$('#Company_Name').attr('data-value');
            $('#CompanyNm').html(name);
            $('#CompanyName').val(name);
            $('#Name').html(name);
            $('#comp_name').html(name);

            var income = $('#Monthly_Salary').val();
            $('#Income').empty().append(income);
            $('#Salary').empty().append(income);
            $('#MonthlySalary').val(income);
            $('#salary').empty().append(income);

            var emi= $('#Monthly_Obligation').val();
            $('#Current_EMI').empty().append(emi);
            $('#Current').empty().append(emi);
            $('#MonthlyObligation').val(emi);
            $('#paying_emi').empty().append(emi);

         $.ajax({  
                type: "POST",  
                url: "{{URL::to('iifl-eligibility')}}",
                data : $('#iifl_express_loan').serialize(),
                success: function(msg){
                        var data=msg[0];
                        console.log(msg);
                        var result=loan_eligibility_calc(data.Max_Tenure,data.pf,data.roi,data.foir);
                        console.log(msg);
                return false;
                        var data_1=data['data'];
                if(data_1){
                        $('#express_form').hide();
                        $('#express_loan_verify_form').show();
                    //console.log("hah");
                }else{
                        window.location.href="{{URL::to('went-wrong')}}";
                        // console.log(data_1);
                  }
    }  
      });
        }

    });
    function loan_eligibility_calc(tenure,pf,roi,foir){
        console.log(foir);
        // console.log(tenure+"  " +pf+ "  "+roi);
        var processing_fee =pf;
        $('#fee').empty().append(processing_fee);
        $('#Processingfee').val(processing_fee);
        var period =tenure*12;
        $('#period').empty().append(tenure);
        var rate =roi/12/100;
        var int =roi;
        $('#interest').empty().append(int);
        // console.log(period);
        var salary=$('#Monthly_Salary').val();
        var obligation=$('#Monthly_Obligation').val();
        // console.log(salary);
        // console.log(obligation);

        var foir_calc = (salary)*foir/100;
        // console.log(foir_calc);
        var max_emi = foir_calc-obligation;
        // console.log(max_emi);
        $('#EMI').val(max_emi);
         $('#you_have_to_pay').empty().append(max_emi);

         global_tenure=tenure;
        $('#tenure').val(tenure);
        var a =(rate*(Math.pow(1 + rate,period) / (Math.pow(1 + rate,period) - 1)));
         // console.log(a);
        var amount =max_emi/a;
        var eligible_amount=Math.round(amount);
        // console.log(eligible_amount);
        $('#eligible').empty().append(eligible_amount);
        global_eligible_amount=eligible_amount;
        $('#AppliedLoan').val(eligible_amount);

      }
</script>

<script type="text/javascript">
     
    $('#next_form').click(function(){
     
        var amount=$('#AppliedLoan').val();
       if(amount> global_eligible_amount){
        alert('Enter amount less than or equal to eligible amount');
        return false;
        }
        var divas =$('#tenure').val();
        if(divas> global_tenure){
        alert('Enter tenure less than or equal to required tenure');
        return false;
        }

        // $('#EMI').val(installment);
        // console.log(amount +" " +global_eligible_amount);
        if(! $('#eligibility_form').valid() ){
            alert("You must agree to the terms first.");
         }else{
        $('#Eligibility_details').hide();
        $('#Applicant_Details').show();

        var applied_loan=$('#AppliedLoan').val();
        console.log(applied_loan);
        $('#Amount').empty().append(applied_loan);
        $('#loanamt').empty().append(applied_loan);
        // $("input[name='AppliedLoanamount']").val(applied_loan);
        var days =$('#tenure').val();
        console.log(days);
        var no_of_days= days*12;
        $('#LoanTenure').empty().append(days);
        $('#loantenure').empty().append(days);
        // $("input[name='Tenure']").val(days);
        var a = $('#int span').html();
         $('#RateOfInt').empty().append(a);
         console.log(a);
         $('#intrest').empty().append(applied_loan);
        $('#AppliedLoanamount').val(applied_loan);
        $('#Tenure').val(days);
        $('#ROI').val(a);
         }

    });
    $('#AppliedLoan, #tenure').on('input', function () {
    var applied_loan = parseInt($('#AppliedLoan').val());
    var no_of_days = parseFloat($('#tenure').val())*12;
    var a = $('#int span').html();
    var Rate = a/12/100;
     var installment_iifl=applied_loan * Rate * (Math.pow(1 + Rate, no_of_days) / (Math.pow(1 + Rate, no_of_days) - 1));
        var installment =Math.round(installment_iifl);
        // if(isNaN( installment) || installment=='Infinity'){
        //   installment=0;
        // }
        $('#EquatedMonthly').empty().append(installment);
        $('#EMI').val(installment);
        $('#e_m_i').empty().append(installment);
        $('#Emi').val(installment);
        var total =((installment*no_of_days)-applied_loan);
        
        var ttl_payment = parseInt(applied_loan) + parseInt(total);
         $('#TotalPayableAmount').val(ttl_payment);
    
});
</script>

<script type="text/javascript">
    $('#applicant_form').click(function(){
       
        if(! $('#applicant_deatils').valid()){
            // alert('not valid');

        }else{
            var person_name =$('#FName').val();
            // console.log(person_name);
            $('#first_name').val(person_name);
            var aadhar=$('#AadhaarNumber').val();
            $('#Aadharno').val(aadhar);
            $('#Applicant_Details').hide();
           
           $.ajax({  
             type: "POST",  
             url: "{{URL::to('apply-iifl-loan-applicant1')}}",
             data : $('#applicant_deatils').serialize(),
             success: function(msg){
            // console.log(msg.head);return false;
            // console.log(msg.head);
            console.log(msg.head.status);
            if (msg.head.status != 1) {
                 if($( "input[name=CoapplicantFlag]:checked" ).val()==1){
                    $('#co_applicant').show();
                }else{
                    $('#otp').show();
                }            
            } 
            else 
            {
              // alert('Your application are in process, Our RM will get in touch with you.');
              $('#error').show();
            }
         }  
      }); 
        }

    });
</script>

<!-- Co-applicant Ajax -->
<script type="text/javascript">
    $('#co_applicant_form').click(function(){
        // alert('ok');
        if(! $('#co_applicant_details').valid()){
             // alert('not valid');

        }else{
            var aadhar=$('#AadhaarNumber').val();
            $('#Aadharno').val(aadhar);
            $('#Applicant_Details').hide();
            $('#co_applicant').hide();
            $('#otp').show();
            $.ajax({  
         type: "POST",  
         url: "{{URL::to('iifl-coapplicant')}}",
         data : $('#co_applicant_details').serialize(),
         success: function(msg){
            
         }  
      }); 
        }

    });
    
</script>
<!-- Instant Approve -->
<script type="text/javascript">
    $('#instant_approve').click(function(){
        // alert('ok');
        if(! $('#instant_form').valid()){
             // alert('not valid');

        }else{
            var amt= $("#input[name='AppliedLoanamount']").val();
            var tenure =$("#input[name='Tenure']").val();
            var days =tenure*12;
            var roi =$('#input[name=ROI]').val();
            var rate=roi/12/100;
            var emi =amt * rate * (Math.pow(1 + rate, days) / (pow(1 + rate, days) - 1));
            var total =((emi*days)-amt);
            var ttl_payment = parseInt(amt)+parseInt(total);
            $("#input[name='#TotalPayableAmount']").val(ttl_payment);
           $.ajax({  
         type: "POST",  
         url: "{{URL::to('iifl-instant-eligibility')}}",
         data : $('#instant_form').serialize(),
         success: function(msg){
            console.log(msg);
         }  
      });  
        }

    });
</script>


<!-- If Co-Applicant Exist -->
<!-- <script type="text/javascript">
  $('#have').change(function(){
 
  $("#co_applicant").show();

  });
</script>

<script type="text/javascript">
  $('#not_have').change(function(){
 
  $("#co_applicant").hide();
  });
</script> -->
<!-- aadhar oyp &verify otp -->
<script type="text/javascript">
    $('#aadhar_otp').click(function(){
     // alert('okae');
     if(! $('#aadharotp').valid()){
             // alert('not valid');

        }else{
           
           $('#confirm_otp').show();
           $.ajax({  
         type: "POST",  
         url: "{{URL::to('iifl-aadhar-otp')}}",
         data : $('#aadharotp').serialize(),
         success: function(msg){
            console.log(msg);
         }  
      });   
        }
    });
</script>
<script type="text/javascript">
    $('#confirm').click(function(){
        // alert('ok');
     if(! $('#confirm_aadharotp').valid()){
             // alert('not valid');

        }else{
           $('#Instant_Approve').show();
           $.ajax({  
         type: "POST",  
         url: "{{URL::to('iifl-aadhar-confirm-otp')}}",
         data : $('#confirm_aadharotp').serialize(),
         success: function(msg){
              console.log(msg);
           
            
         }  
      });   
        }
    });
    </script>
<script type="text/javascript">
    $('#proceed_without_aadhar').click(function(){
         $('#Instant_Approve').show();
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('iifl-offer-status')}}?_token="+"{{ csrf_token() }}",
         data : $('').serialize(),
         success: function(msg){

             var result=loan_eligibility(msg.body.ROI,msg.body.maxEmi,msg.body.maxTenure,msg.body.maxloanamt,msg.body.minTenure,msg.body.minloanamt,msg.body.processingfee,msg.body.offerstatus);
            // console.log(msg);
            console.log(msg);
            
         }  
      });   
       
    });
    function loan_eligibility(ROI,maxEmi,maxTenure,maxloanamt,minTenure,minloanamt,processingfee,offerstatus,){
          var offer=offerstatus;
          // console.log(offer);
          if(offer=="Rejected"){
            $('#Instant_Approve').hide();
         alert("Thank You For Choosing IIFL. Your application has been rejected due to internal credit policy.");
          }
      var maxloan=maxloanamt;
       //   console.log(maxloanamt);
      $('#maxloan').empty().append(maxloan);
      var rateofint=ROI;
      $("#input[name='ROI']").val(ROI);
      var processfee=processingfee;
      $("#input[name='Processingfee']").val(processingfee);
      // var max_installment=maxEmi;
      //  $('#maxEmi').empty().append(max_installment);
      g_maxloanamt=maxloanamt;
      if (g_maxloanamt>maxloanamt) {
        console.log("Loanamount should be less than maximum loanamount");
      } if(g_maxTenure>maxTenure) {
       console.log("Loanamount should be less than maximum tenure");
      }
     }
</script>

<!-- Document upload -->
<script type="text/javascript">
    $('#proceed_upload').click(function(){
        // alert('ok');
       if(! $('#upload_details').valid()){
             // alert('not valid');

        }else{
            $('#financial_doc').show();
        $.ajax({
          url:"{{URL::to('iifl-doc-upload')}}" ,  
          data:new FormData($("#upload_details")[0]),
          dataType:'json',
          async:false,
          type:'POST',
          processData: false,
          contentType: false,
          success: function(msg){
                 console.log(msg);
            }
        });
     } 
    });
</script>
<script type="text/javascript">
    $('#proceed').click(function(){
        // alert('ok');
       if(! $('#financial_details').valid()){
             // alert('not valid');

        }else{
           
        $.ajax({
          url:"{{URL::to('iifl-finanacial-doc-upload')}}" ,  
          data:new FormData($("#financial_details")[0]),
          dataType:'json',
          async:false,
          type:'POST',
          processData: false,
          contentType: false,
          success: function(msg){
                 console.log(msg);
            }
        });
     } 
    });
</script>
<script type="text/javascript">
  function same_as_above(obj,val){

     // console.log(obj);
     var atLeastOneIsChecked = $('#same_id:checkbox:checked').length > 0;
     // console.log(atLeastOneIsChecked);
    if (atLeastOneIsChecked == true) {
      // alert("ok");

    $('#PermanentAddress1').val($('#CurrentAddress1').val());
     $('#PermanentAddress2').val($('#CurrentAddress2').val());
     $('#PermanentAddress3').val($('#CurrentAddress3').val());
     $('#PermanentPin').val($('#CurrentPin').val());

     $('#PermanentState').val($('#CurrentState').val());
     }else{

     $('#PermanentAddress1').val('');
     $('#PermanentAddress2').val(''); 
     $('#PermanentAddress3').val('');
      $('#PermanentPin').val('');
    }
}
</script>





<script>
			(function() {
				
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}
		        

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
			
			
			
			
			
		</script>
		<script>
			(function() {
				
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'select.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}
		        

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
			
			
			
			
			
		</script>
        <script type="text/javascript">
        function getAge(dateString) {
            var day=dateString.slice(0,2);
            var mon=dateString.slice(2,4);
            var yr=dateString.slice(4,8);
            var today = new Date();
            var new_dateString=mon+"/"+day+"/"+yr;
            var date_of_joining = new Date(new_dateString);
            console.log(new_dateString+" "+date_of_joining+" "+today);
            if(date_of_joining > today || date_of_joining=='Invalid Date'){
                 $('#CurrentWorkExp').val('');
                 $('#CurrentWorkExp').closest( "span" )
                    .removeClass( "input--filled" );
                return false;
            }
            var experience = today.getFullYear() - yr;
            console.log(today.getDay());
            //as month start from 0 in js
            var m = today.getMonth()+1 - mon;
            var exp=[experience,m];
            if (m < 0 || (m === 0 && today.getDate() < date_of_joining.getDate())) {
               exp[0]--;
               exp[1]+=12;
            }

            return exp;
            }
            $('#joining_date').change(function(){

                var exp= getAge($('#joining_date').val());
                console.log(exp);
                if(exp){

                    $('#CurrentWorkExp').val((exp[0]*12)+exp[1]);
                     $('#CurrentWorkExp').closest( "span" ).addClass( "input--filled" );
                 }
            });
          
        </script>
        








