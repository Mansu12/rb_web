@include('layout.header')

<div class="container" id="fh5co-hero">
			<div class="row">
			<div class="sbi-banner"><img src="images/header-img.png" /></div>
				<div class="col-md-12 white-bg mrg-tp-minus box-shadow">
					<form id="sbi_cc" name="sbi_cc" method="POST">
                    {{ csrf_field() }}

					<div class="form-group">
					<div class="col-md-12"><h4 class="hdr pad1 text-center">Personal Details</h4>
                     <input type="text" name="prod" class="prod" style="background: #0095d9;color: #fff;margin:0 auto; margin-bottom:10px;font-size:18px;border:1px solid #eee;display:block;margin-top:10px; padding:10px; text-align:center;" 
                      value="<?php if(isset($_GET['prod'])){
                        echo str_replace("_"," ",$_GET["prod"]);
                        }else{
                          echo "0";
                          }?>"> 
						  </div>
					<div class="col-md-3">
					<label>Name <i style="color:red"> *</i></label>
					<input type="text" id="first_name" name="first_name" class="form-control" onkeypress="return AllowAlphabet(event)"  required="">

					</div>
					<div class="col-md-3">
					<label>Middle Name</label>
					<input type="text" id="middle_name" name="middle_name" class="form-control" onkeypress="return AllowAlphabet(event)">
					</div>
					<div class="col-md-3">
					<label>Last Name<i style="color:red"> *</i></label>
					<input type="text" id="last_name" name="last_name" class="form-control" onkeypress="return AllowAlphabet(event)"  required="">
					</div>
					<div class="col-md-3">
					<label>Date Of Birth<i style="color:red"> *</i></label>
					<input type="text" id="dob" name="dob" class="form-control date"  required="">
					</div>
					<div class="col-md-3">
					<label>Pan card No<i style="color:red"> *</i></label>
					<input type="text" id="pan_number" name="pan_number" class="form-control" oninput="pan_card('pan_number')" maxlength="10"  required="">
                    <span id="pan_num" style="display:none;color: red; font-size: 10px">Oops.Please Enter Valid Pan Number.!!</span>
					</div>
					<div class="col-md-3">
					<label>Current Residence Address<i style="color:red"> *</i></label>
					<input type="text" id="residence_address" name="residence_address" class="form-control"  required="">
					</div>
					<hr>
					<div class="col-md-3">
					<label>Landmark</label>
					<input type="text" id="landmark" name="landmark" class="form-control">
					</div>
                    <div class="col-md-3">
                    <label>City</label>
                    <input type="text" id="city" name="city" required class="form-control">
                    </div>
                    <div class="col-md-3">
                    <label>State</label>
                    <input type="text" id="state" name="state" required class="form-control">
                    </div>
					<div class="col-md-3">
					<label>Pincode<i style="color:red"> *</i></label>
					<input type="text" class="form-control" maxlength="6" onkeypress="return fnAllowNumeric(event)"  required="">
					</div>
					<div class="col-md-3">
					<label>Mobile No<i style="color:red"> *</i></label>
					<input type="text" id="mobile_no" name="mobile_no" pattern="[789][0-9]{9}" class="form-control" maxlength="10" onkeypress="return fnAllowNumeric(event)"  required="">
					</div>
					<div class="col-md-3">
					<label>Email Id<i style="color:red"> *</i></label>
					<input type="text" id="email" name="email" class="form-control" oninput="mail('email')"  required="">
                    <span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span>
					</div>
					<div class="col-md-12"><h4 class="hdr pad1 text-center">Office Details</h4></div>
					<div class="col-md-3">
					<label>Occupation type<i style="color:red"> *</i></label>
					<select class="form-control" name="occupation" id="occupation" required="">
                      <option disabled selected  value="">Occupation type</option>
					  <option value="Homemaker">Homemaker</option>
					  <option value="Retired/Pensioner">Retired/Pensioner</option>
					  <option value="Salaried">Salaried</option>
					  <option value="Self Employed">Self Employed</option>
                      <option value="Student">Student</option>
					</select>
					</div>
					<div class="col-md-3">
					<label>Designation<i style="color:red"> *</i></label>
					<input type="text" id="designation" name="designation" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Company Name<i style="color:red"> *</i></label>
					<input type="text" id="company_name" name="company_name" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Office Address<i style="color:red"> *</i></label>
					<input type="text" id="office_address" name="office_address" class="form-control"  required="">
					</div>
                    <div class="col-md-3">
                    <label>City</label>
                    <input type="text" id="off_city" name="off_city" required class="form-control">
                    </div>
                    <div class="col-md-3">
                    <label>State</label>
                    <input type="text" id="off_state" name="off_state" required class="form-control">
                    </div>
					<div class="col-md-3">
					<label>Pincode<i style="color:red"> *</i></label>
					<input type="text" id="pin_code" name="pin_code" class="form-control" maxlength="6" onkeypress="return fnAllowNumeric(event)"  required="">
					</div>
					<div class="col-md-3">
					<label>Gross Income</label>
					<input type="text" id="income" name="income" onkeypress="return fnAllowNumeric(event)"  class="form-control" minlength="5" maxlength="9">
					</div>
					<div class="col-md-3">
					<label>Annual Income<i style="color:red"> *</i></label>
					<input type="text" class="form-control" id="annual_income" name="annual_income" minlength="5" maxlength="9" required="">
					</div>
					
					
					
					
					<!-- Column 2 End -->
					
					
				
					
					
			       <hr>
				   <div class="col-md-12">
                    The fields marked with <i style="color:red"><b> *</b></i> are <i style="color:red"><b>mandatory</b>.</i>
					<div class="grup-btn-center flt-left ">
					<a class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated" id="submit">Submit<i class="icon-arrow-right"></i></a>

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


@include('layout.footer')
@include('layout.script')

<!-- script -->
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
    var d = new Date();
    var year = d.getFullYear()-21 ;
    d.setFullYear(year);

    $("#dob").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-70Y",
      yearRange: '-70:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
    function pan_card(obj,val){
        // console.log(obj);
        if(obj=='pan_number' ){
                   var str =$('#pan_number').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                        $('#pan_num').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#pan_num').show();

                    return false;
                  }
                  
    }
    }
    </script>

    <script type="text/javascript">
  function mail(obj,val){
    // console.log(obj);
    if(obj=='email' ){
                   var str =$('#email').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#email_id').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email_id').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
    $('#submit').click(function(){
    // alert('okae');
    if(! $('#sbi_cc').valid())
       {
              
        }
        else
        {     
         $.ajax({  
         type: "POST",  
         url: "{{URL::to('sbi-cc-submit')}}",
         data : $('#sbi_cc').serialize(),
         success: function(msg){
            
                    
                      
      }   
     });
        }

    });
</script>

<script type="text/javascript">
    

 $(document).ready(function(){
      // alert('okae');
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


