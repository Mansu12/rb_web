  <script src="{{URL::to('js/modernizr-2.6.2.min.js')}}"></script>
        <!-- jQuery -->
  <script src="{{URL::to('js/jquery.min.js')}}"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	

    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
    <script src="{{URL::to('emi/Chart.js')}}"></script>
    <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
    <script src="http://demo.expertphp.in/js/jquery.js"></script>
    <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>



 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<!-- <script src="https://apis.google.com/js/platform.js" async defer></script> -->


   
    <script>
           $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
    // Avoid following the href location when clicking
    event.preventDefault(); 
    // Avoid having the menu to close when clicking
    event.stopPropagation(); 
    // Re-add .open to parent sub-menu item
    $(this).parent().addClass('open');
    $(this).parent().find("ul").parent().find("li.dropdown").addClass('open');
});
    </script>
    <!-- function addede later -->

  <script>

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
    $('#forgot_password_form').one('submit', function() {
      $(this).find('input[type="submit"]').attr('disabled','disabled');
    });
    
  }); 

</script>

<!-- 
    <script type='text/javascript'>
  $(function(){
    $('.datepicker').datepicker({
        yearRange: '1950:2017',
        dateFormat: 'yy-dd-mm',
        });
    });
</script> -->


<script type="text/javascript">
  var d = new Date();
var year = d.getFullYear() - 18;
d.setFullYear(year);

$(".lastReporteddate").datepicker({ dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        maxDate: year,
        minDate: "-100Y",
            yearRange: '-100:' + year + '',
            defaultDate: d
     });
// $("#button").click(function(){
//         var dob = $(".lastReporteddate").val();
//         var now = new Date();
//         var birthdate = dob.split("/");
//         var born = new Date(birthdate[2], birthdate[1]-1, birthdate[0]);
//         age=get_age(born,now);
     
//         console.log(birthdate[2]+" : "+birthdate[1]+" : "+birthdate[0]);
//         console.log(age);
    
//         if (age<=18)
//         {
//        alert("Input Error - Age should be greater then or equal to 18");
//             return false;
//         }
// });


//     function get_age(born, now) {
//       var birthday = new Date(now.getFullYear(), born.getMonth(), born.getDate());
//       if (now >= birthday) 
//         return now.getFullYear() - born.getFullYear();
//       else
//         return now.getFullYear() - born.getFullYear() - 1;
//     }

</script>


<script>
     function changeTest(obj,val){

        //alert(obj.options[obj.selectedIndex].value);

        document.getElementById(val).style.display='block';
        
        $('#pop1').empty();
        if(val=='q2'){
        $('#pop1').append( "<p>Enter the amount you want</p>" );
        }else if(val=='q4'){
          $('#pop1').append( "<p>Any loan taken in past</p>" );
        }else if(val=='q5'){
          $('#pop1').append( "<p>Any credit card you have</p>" );
        }else if(val=='q6'){
          $('#pop1').append( "<p>Ever delayed EMI?</p>" );
        }else if(val=='m_sal'){
          $('#pop1').append( "<p>You net salary</p>" );
        }else if(val=='stay_in'){
           $('#pop1').append( "<p>You stay with</p>" );
        }else if(val=='dob'){
           $('#pop1').append( "<p>Enter your birthdate.!!</p>" );//now if else from car -praveen
        }else if(val=='manufacture'){
        document.getElementById('preferred').style.display='none';
        document.getElementById('work_at').style.display='none';
        document.getElementById('takehome_sal').style.display='none ';
        document.getElementById('exp').style.display='none ';
        document.getElementById('total_exp').style.display='none';
        document.getElementById('salary_by').style.display='none';
        document.getElementById('salary_deposit').style.display='none';
        document.getElementById('amt_borrow').style.display='none';
        document.getElementById('car_step1').style.display='none';

        $('#pop1').append( "<p>Which car you want(manufacture-year)</p>" );
        }else if(val=='preferred'){
          if(obj.value=="New Car"){
            document.getElementById('manufacture').style.display='none  ';

          }
          $('#pop1').append( "<p>Your Dream Car</p>" );
        }else if(val=='living_currently'){
          $('#pop1').append( "<p>Where do yo reside</p>" );
        }else if(val=='work_at'){
          $('#pop1').append( "<p>Where do you work</p>" );

        }else if(val=='takehome_sal'){
          $('#pop1').append( "<p>Your monthly takehome salary!!</p>" );
        }else if(val=='exp'){
          $('#pop1').append( "<p>Your experience in the above company is</p>" );
           }else if(val=='salary_deposit'){
          $('#pop1').append( "<p>Where your money/salary get deposit into</p>" );
        }else if(val=='amt_borrow'){
          $('#pop1').append("<p>Amount to be borrowed</p>");
        }
        else if(val=='living_in'){
          $('#pop1').append( "<p>You stay with</p>" );
        }else if(val=='birth'){
           $('#pop1').append( "<p>Enter your birthdate.!!</p>" );
        }else if(val=='type_of_profession'){ //business loan script
          //console.log(val);

          document.getElementById('type_of_emp_profession').style.display='none';
          $('#type_of_emp_profession').value="";
          document.getElementById('gross_annual').style.display='none';
           $('#gross_annual').value="";
          document.getElementById('desired_amt').style.display='none';
           $('#desired_amt').value="";
          document.getElementById('residence').style.display='none';
            $('#residence').value="";
          document.getElementById('btn_step1').style.display='none';
           $('#pop1').append( "<p>Select your business</p>" );
        }else if(val=='turnover'){
          //console.log(val);
           $('#pop1').append( "<p>Enter your gross annual sales/turnover</p>" );
        }else if(val=='emi_pay'){
           $('#pop1').append( "<p>How much total EMI you pay currently</p>" );
        }else if(val=='pan_card'){
           $('#pop1').append( "<p>Please enter your pan card number</p>" );
        }else if(val=='type_of_emp_profession'){
          //console.log(val);
          document.getElementById('type_of_profession').style.display='none';
          $('#type_of_profession').value="";
          document.getElementById('turnover').style.display='none';
           $('#turnover').value="";
          document.getElementById('desired_amt').style.display='none';
          $('#desired_amt').value="";
          document.getElementById('residence').style.display='none';
             $('#residence').value="";
          document.getElementById('btn_step1').style.display='none';
           $('#pop1').append( "<p>Select your profession</p>" );
        }else if(val=='gross_annual'){
           $('#pop1').append( "<p>Enter your gross annual reciept</p>" );
        }else{
           $('#pop1').append( "<p>Please Proceed</p>" );

        }
        return false;
      }


       function changeDiv(prv,nxt){

        //alert(obj.options[obj.selectedIndex].value);

        document.getElementById(prv).style.display='none';
        document.getElementById(nxt).style.display='block';
        $('#pop1').empty();
        if(nxt=='step-2'){
          $('#pop1').append( "<p>Where do you work?</p>" );   
        }else if(nxt=='step-3'){
          $('#pop1').append( "<p>Tell us about the your residence</p>" );   
        }else if(nxt=='start-2'){
          $('#pop1').append( "<p>Living in city since?</p>" );   //of car loan by praveen
        }else{
          $('#pop1').append( "<p>Great! please fill this form too</p>" );
        }
        window.scrollTo(0, 0);
        return false;
      }

  function yr_months(yr,mnth,obj){

        //alert(obj.options[obj.selectedIndex].value);
        var m=$("#"+mnth).val();
        var y= parseInt($("#"+mnth).val(),10) /12;
        var new_y=parseInt(y,10);
        if(m>=12)
          {
            var new_m=parseInt($("#"+mnth).val(),10) % 12;
            $('#'+yr).empty();
            $('#'+yr).val(parseInt($("#"+yr).val(),10)+new_y);
            $('#'+mnth).empty();
            $('#'+mnth).val(new_m);
            $('#pop1').empty();
            $('#pop1').append( "<p>1 year has 12 months only</p>" );
            }else if(obj=='sal_rcv_by' || obj=='salary_by'){
              $('#pop1').empty();
            $('#pop1').append( "<p>How you get your Vitamin M(money/salary)</p>" );
            }else{
            $('#pop1').empty();
            $('#pop1').append( "<p>Great!! tell us more</p>" );
          }
          
          document.getElementById(obj).style.display='block';
          return false;
      }
      
      function changeText(obj,val){
        $("#"+obj).keyup(function() {
            //pan card validation code 
            if(obj=='card'){
               var str =$('#card').val();
               var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
               var res = str.match(pancardPattern);
               if(res){
                $('#pop1').empty();
                $('#pop1').append( "<p>Great!! tell us more</p>" );
                 document.getElementById(val).style.display='block';
               }else{
                $('#pop1').empty();
                $('#pop1').append( "<p>Enter correct pan card number</p>" );
                document.getElementById(val).style.display='none';
               }
               return false;
            }

          //Rest code for text fields with numbers
            var x=$(this).val().length ;
            if (((obj=='total_sal' || obj=='loan') && x>6) ||(x>=5 && x<=8) ) {
              document.getElementById(val).style.display='block';
            return false;
          }
          else {
            if(x>8){
            $('#pop1').empty();
            $('#pop1').append( "<p>We dont provide that much of loan.</p>" );
            } if(obj=='annual_receipt' ||  obj=='total_emi'){
                document.getElementById(val).style.display='block';
                $('#pop1').empty();
                $('#pop1').append( "<p>Please Proceed</p>" );
            }if(x<5){
            document.getElementById(val).style.display='none';
           }if(obj=='pincode'){
                document.getElementById(val).style.display='block';
                $('#pop1').empty();
                $('#pop1').append( "<p>Enter your  pincode</p>" );
            }if(x<6){
            document.getElementById(val).style.display='none';
           }
            return false;
          }
           
      });

      $('#pop1').empty();
      if(val=='q3'){
           $('#pop1').append( "<p>Have any existing loan</p>" );
        }else if(val=='exp'){
          $('#pop1').append( "<p>Entr your expierience in current company</p>" );
        }else if(val=='total_exp'){
          $('#pop1').append( "<p>Entr your total expierience</p>" );
        }else if(val=='desired_amt'){ 
        //business loan script//
          $('#pop1').append( "<p>Enter your desired loan amount</p>" );
        }else if(val=='residence'){
          $('#pop1').append( "<p>Where do you reside and since when</p>" );
        }else if(val=='date_birth'){
          $('#pop1').append( "<p>Enter your birthdate.!!</p>" );
        }else if(val=='residence_pincode'){
          $('#pop1').append( "<p>Enter your residence pincode</p>" );
        }else{
          $('#pop1').append( "<p>Please go on</p>" );
        }
}

      function fnAllowNumeric(evt) {
      evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode > 31 && (charCode < 48 || charCode > 57)) {

              return false;
          }
        return true;
      }

</script>
<script>

$(document).ready(function(){
    $(".callclass").click(function(){
      $(".sidebar").hide("fast");
        $(".arrow-don").show("fast");
    });
    $(".hide-dv").click(function(){
        $(".sidebar").hide("fast");
        $(".arrow-don").show("fast");
    });
    $(".arrow-don").click(function(){
        $(".sidebar").show("fast");
        $(".arrow-don").hide("fast");
        $(".sidebar1").hide("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $(".tp-dwn").click(function(){
        $(".sidebar1").toggle("fast");

    });
});
</script>
<script>
$(document).ready(function(){
    $(".chat").click(function(){
        $(".chat-win").toggle();
     });
    });
  </script> 
  <script>
   $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    </script>
	<!-- jQuery Easing -->
	<script src="{{URL::to('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{URL::to('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{URL::to('js/jquery.waypoints.min.js')}}"></script>
	<!-- Owl Carousel -->
	<script src="{{URL::to('js/owl.carousel.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{URL::to('js/jquery.flexslider-min.js')}}"></script>
    <script src="{{URL::to('js/chatbox.js')}}"></script>
    	<!-- ChatBox -->
	<!-- MAIN JS -->
	<script src="{{URL::to('js/main.js')}}"></script>

<script type='text/javascript'>
    $.fn.bootstrapCarousel = $.fn.carousel;
    delete $.fn.carousel;
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.pop_up').click(function(){
       // console.log($(this).closest("form").attr('id'));
       var span_name=$(this).parent().find('input').attr('id');
       var modal_name=$(this).parent().find('a').attr('data-target');
       var form_name=$(modal_name).find('form').attr('id');
        $('#'+form_name +' input').on('change', function() {
       var input_name=$('#'+form_name).find('input').attr('name');

       var append=$('input[name='+input_name+']:checked','#'+form_name).val();
       var input_name_id=$('input[name='+input_name+']:checked','#'+form_name).attr('data-value');
         //console.log(input_name_id);
        $('#'+span_name).val(append);
        $('#'+span_name+'_id').val(input_name_id);
        $(modal_name).modal('hide');
        
      });
    });

     $(".sidebar-submit").click(function(event){
    event.preventDefault();
    var form=$(this).closest("form").attr('id');
    //return false;
  

    $form=$('#'+form);
    if(! $form.valid()){
      return false;
    }else{
      
      $.ajax({  
               type: "POST",  
               url: "{{URL::to('sidebar')}}",
               data : $('#'+form).serialize(),
               success: function(msg){
                if(msg=='true'){
                  $form.hide();
                 var a =$('#'+form).parent().find('.msg');
                  //console.log(a);
                  $(a).show();
                  $('.msg').show();
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


// by dp

$(".login-submit").click(function(event){
    event.preventDefault();
    var form=$(this).closest("form").attr('id');
    //console.log(form);return false;
         $form=$('#'+form);
         if(! $form.valid()){
         }else{
          var s=$('#'+form).serialize();

             $.ajax({  
               type: "POST",  
               url: "{{URL::to('login')}}",
               data : $('#'+form).serialize(),
               success: function(msg){
              
                     $("#login_form").show();
                     if(msg=="email"){

            $("#msg").text("Your email or password is incorrect. please try again?");               
                     }else if(msg=="right"){
                     // window.location="{{ URL::previous() }}";
                      //window.location.href ="{{URL::to('profile')}}";

                       $("#log_popup").modal('hide');
                       $("#refreshID").load(location.href + " #refreshID");
                       
                       
                        $('#btn_refresh').show();
                        $('#btn_refresh1').hide();
                        $('.btn_refresh1').hide();
                        $('#no_co_app').hide();
                        // Co-Applicant
                        $('#btn_refresh_co').show();
                        $('#btn_refresh_co1').hide();
                        

                     }


               }  
           }); 
   }

 });

// ...registration_form...dp..
$(".registration-submit").click(function(event){
    event.preventDefault();
    var form=$(this).closest("form").attr('id');
    //console.log(form);return false;
         $form=$('#'+form);
         if(! $form.valid()){
         }else{
          $.ajax({  
               type: "POST",  
               url: "{{URL::to('registration')}}",
               dataType: 'json',
               data : $('#'+form).serialize(),

               success: function(msg){
                   if(msg.name){
                      $("#errorName").text(msg.name);
                  }else{
                     $("#errorName").text('');
                  }
                    $("#errorEmail").text(msg.email);
                   if(msg.email){
                      $("#errorEmail").text(msg.email);
                  }else{
                     $("#errorEmail").text('');
                  }
                  
                   if(msg.contact){
                      $("#errorcontact").text(msg.contact);
                  }else{
                     $("#errorcontact").text('');
                  }

                  if(msg.password){
                      $("#errorpassword").text(msg.password);
                  }else{
                     $("#errorpassword").text('');
                  }
                
                if(msg.password_confirm){
                      $("#errorpasswordconfirm").text(msg.password_confirm);
                  }else{
                     $("#errorpasswordconfirm").text('');
                  }
                  
                 if(msg=='1'){
                  $form.hide();
                  $('.msg').show();
                  $('#Login-here').hide();
                //  window.location="{{ URL::previous() }}";

                       $("#log_popup").modal('hide');
                       $("#refreshID").load(location.href + " #refreshID");
                        $('#btn_refresh').show();
                        $('#btn_refresh1').hide();
                        $('.btn_refresh1').hide();
                        $('#no_co_app').hide();
                        // Co-Applicant
                        $('#btn_refresh_co').show();
                        $('#btn_refresh_co1').hide()


                 }
              


               }  
           }); 

         }
    
   });


  $("#forgotps").click(function(event){
    $("#forgotpassword").show();
    $("#registration1").hide();
    $("#login").hide();

   });

$("#f_password").click(function(event){

     event.preventDefault();
    var form=$(this).closest("form").attr('id');
        $form=$('#'+form);
         if(! $form.valid()){
         }else{

             $.ajax({  
               type: "POST",  
               url: "{{URL::to('forgot-password')}}",
               data : $('#'+form).serialize(),
               dataType: 'json',
               success: function(msg){

                   if(msg==1){
                    $("#forgotpass").text("Email does not exist in our database!!!");
                   }else if(msg.email){
                    $("#forgotpass").text(msg.email);
                   }else if(msg==2){
                       $(".forgotps").text("Email sent on your registered email id, Please check it and come back soon.");
                   //$form.hide();
                  $('.forgotps').show();
                  $('#forgot_password_form').hide();
                   }else{
                    $("#forgotpass").text("Oops somthing went wrong!!!");
                    
                   }
                     
                     
                     

               }  
           });
       
      }
 
});



//   change password ......

$(".change_password_form").click(function(event){
event.preventDefault();
    var form=$(this).closest("form").attr('id');
    var contact=$(this).closest("form").find("input[name=contact]").val();

         $form=$('#'+form);
         if(! $form.valid()){

         }else{
         $.ajax({  
               type: "POST",  
               url: "{{URL::to('change-password')}}",
               data : $('#'+form).serialize(),
              // dataType: 'json',
               success: function(msg){
            
                        
                    if(msg.currentpassword){
                      $("#currentp").text(msg.currentpassword);
                     }else{
                      $("#currentp").text('');
                     }
                     if(msg.password){
                       $("#newpass").text(msg.password);
                     }else{
                      $("#newpass").text('');
                     }
                      if(msg.confirmpassword){
                       $("#confirmpass").text(msg.confirmpassword);
                     }else{
                      $("#confirmpass").text('');
                     }
                     if(msg==1){
                       $("#success").text('Your password has been changed successfully.');
                       
                     }else{
                       $("#success").text('');
                     }
                    if(msg==2){
                      $("#success1").text("your password does not match");
                     }else{
                        $("#success1").text('');
                     }
                     

               }  
           });
             
         }

});


       //end by dp


    // my profile details 
    $(".profile-details").click(function(event){

    event.preventDefault();
    var form=$(this).closest("form").attr('id');
    var contact=$(this).closest("form").find("input[name=contact]").val();

         $form=$('#'+form);
         if(! $form.valid()){

         }else{
          var s=$('#'+form).serialize();
             $.ajax({  
               type: "POST",  
               url: "{{URL::to('profile/update')}}",
               data : $('#'+form).serialize(),
               dataType: 'json',
               success: function(msg){

               //alert(msg.contact); 
              
                 if(msg==1){
                   $("#errorphon").text("Successfully updated ");

                 }else{
                  
                   $("#errorphon").text(msg.contact);

                 }


               }  
           }); 
   }

 });

    /// profile extra details

  $(".extradetailsbtn").click(function(event){
    event.preventDefault();
    var form=$(this).closest("form").attr('id');
         $form=$('#'+form);
         if(! $form.valid()){
         }else{
          var s=$('#'+form).serialize();
             $.ajax({  
               type: "POST",  
               url: "{{URL::to('profile/extradetails')}}",
               data : $('#'+form).serialize(),
               success: function(msg){
              
              if(msg==1){
              $("#errordetails").text("Record inserted successfully");
              }else if(msg==2){ 
              $("#errordetails").text("Successfully updated ");
              }

               }  
           }); 
   }

 });



////////



});

$('document').ready(function(){
        /* $('#search-input').attr('autocomplete', 'on');*/
        $("#q").autocomplete({
        source : "{{ URL('search/autocomplete') }}",
        minlength: 3,
       select: function(event,ui){
           $('#q').val(ui.item.value);

            }
      });


});

   $(document).ready(function(){
    src = "{{ route('searchajax') }}";
     $(".search_city").autocomplete({
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
        min_length:3,
       
    });

});

$(document).ready(function(){
   $("#send_otp_button").click(function(event){
    event.preventDefault();
    if($('#set_pwd_confirm').val()!=$('#set_pwd').val()){
      $('#pwd_match').show();
      //alert("ped ");
      return false;
    }
    var form=$(this).closest("form").attr('id');   
    $form=$('#'+form);
    if(! $form.valid()){
      return false;
    }else{
      $('#send_otp_button').hide();
    $('#pls_wait').show();
    $('#pwd_match').hide();
    $('#msg_err_email').hide();
      $.ajax({  
               type: "POST",  
               url: "{{URL::to('otp')}}",
               dataType:"json",
               data : $('#'+form).serialize(),
               success: function(data){
                 var data_1=data['data'];
                 var emailID=data['emailID'];
                if(data_1==true){
                    $('#otp_modal').modal('toggle');
                    $('#login_process').modal('hide');
                    $('#msg_err_email').hide();
                  }else if(emailID==true){
                      $('#login_process').modal('show');
                      $('#send_otp_button').show();
                      $('#pls_wait').hide();
                       $('#pwd_match').hide();
                       $('#msg_err').hide();
                          
                        $('#msg_err_email').show();
                        
                  }else{
                    $('#msg_err').show();
                    $('#msg_err_email').hide();
                     
                  }
               }  
      }); 
    }
  });

   $("#verify_otp").click(function(event){
    event.preventDefault();
    var form=$(this).closest("form").attr('id');
    $('#wait').show();
    $('#verify_otp').hide();
    $form=$('#'+form);
    if(! $form.valid()){
      return false;
    }else{
      $.ajax({  
               type: "POST",  
               url: "{{URL::to('otp_verify')}}",
               dataType:"json",
               data : $('#'+form).serialize(),
               success: function(data){
                 var data_1=data['data'];
                if(data_1==true){
                     var form_name=$('#elem').parent().find('form').attr('id');
                     //$.post('loan-submit', $('#'+form_name).serialize());
                    $('#'+form_name).submit();
                    $('#otp_modal').modal('hide');
                  }else{
                    $('#otp_err').show();
                    $('#wait').hide();
                    $('#verify_otp').show();
                  }
               }  
      }); 
    }
  });

  $('.product_name').click(function (){
    var prod_name=$('#product').val();
    $('#product_login').val(prod_name);
  });

  
  


    });
  
  //get location of the person on load chrome
//   window.onload = function() {
//   var startPos;
//   var geoSuccess = function(position) {
//     startPos = position;
//     var lat= startPos.coords.latitude;
//     var log = startPos.coords.longitude;
//    // console.log(lat);
//  // console.log(log);
//   };
//   navigator.geolocation.getCurrentPosition(geoSuccess);


// };


</script>
<!-- //emi scripts started -->
<script type="text/javascript">

  $(document).ready(function(){
    $("#Month").change(function(){
      var amt = $("#loanterm").val();
      var month = amt *12;
      //console.log(month);
      $('#loanterm').val(month);
    });
    $("#Year").change(function(){
      var amt1 = $("#loanterm").val();
      var yr = amt1 / 12;
      //console.log(year);
      $('#loanterm').val(yr);
    });
    });
</script>

<script type="text/javascript">

  function myfun(){
    var lm = $("#loanamount").val().length;
       var lin = $("#loaninterest").val().length;
       var lt = $("#loanterm").val().length;
       if(lm >0 && lin >0 && lt>0){
      //  var loanamount = $("#loanamount").val();
      //  var loaninterest = $("#loaninterest").val();
      //  var loanterm = $("#loanterm").val();

      //  var monthlyInterestRatio = (loaninterest/100)/12;
  
      //  var top = Math.pow((1+loaninterest),loanterm);
      //  var bottom = top -1;
      //  var sp = top / bottom;
      //  var emi = ((loanamount * monthlyInterestRatio) * sp);
      //  console.log(emi);
      var loanamount = $("#loanamount").val();
      var loaninterest = $("#loaninterest").val();
      

      if ($("#Year").prop("checked")) {
        var loanterm1 = $("#loanterm").val();
        var loanterm = loanterm1*12;
      }else{
        var loanterm = $("#loanterm").val();
      }
      //console.log(loanterm);
      var v_token = "{{csrf_token()}}";
      $.ajax({  
               type: "POST",  
               url: "{{URL::to('emi_cal')}}",
               dataType:'json',
               data : { 'loanamount': loanamount , 'loaninterest': loaninterest ,'loanterm' :loanterm, '_token': v_token},
               success: function(msg){
               //console.log(msg);
                change(msg.amount,msg.ttl_pay,msg.ttl_payment);
                emibreakup(msg.amount,loanamount,loaninterest,loanterm);
                 var numb = msg.amount.toFixed();
                  $('#emi').empty().append(numb);
                  var numb1 = msg.ttl_pay.toFixed();
                  $('#emi1').empty().append(numb1);
                   var numb2 = msg.ttl_payment.toFixed();
                  $('#emi2').empty().append(numb2);
                   $("#1").show();
                   $("#2").show();
                   $("#3").show();
                   //console.log(msg.saving);
               }  
               }); 
        //myfun1(document.getElementById('emi').innerHTML,document.getElementById('emi1').innerHTML,document.getElementById('emi2').innerHTML);
        
        $("#err").hide();
      }else{
        $("#err").show();
      }
    
  }
  function change(a,b,c){
    //console.log(a);
      var ctx = $("#mycanvas").get(0).getContext("2d");
      //console.log(a);
        //pie Chart data
        //sum of values = 360
        var data = [
          {
            value: a,
            color: "#c2da6b",
            highlight: "#c2da6b",
           
          },
          {
            value: b,
            color: "#00B9B9",
            highlight: "#00B9B9",
      
          },
          {
            value: c,
            color: "#4A9ACF",
            highlight: "#4A9ACF",
            
          }
        ];

        //alert("draw")
        var piechart = new Chart(ctx).Pie(data);
      }
       var month=new Array();

  month[0]="Jan",month[1]="Feb",month[2]="Mar",month[3]="Apr",month[4]="May",month[5]="Jun",month[6]="Jul",month[7]="Aug",month[8]="Sep",month[9]="Oct",month[10]="Nov",month[11]="Dec";
function emibreakup(E,P,r,n)

{// console.log(E);console.log(P);console.log(r);console.log(n);
    var start=new Date(),
    myArray = [], int =r/100, mir=int/12, mi='', map='',lP=P,
    xd='',
    tempDate = start, 
    monthCount = 1,
  fdr='<table><h2 class="text-center" style="margin:0 auto;padding:20px ">Schedule showing payments:</h2><tr><th bgcolor="#c2da6b" class="mthy bg-clr-tbl">Month-Year</th><th bgcolor="4A9ACF" class="pa bg-clr-tbl">Principal(A)</th><th bgcolor="2DC6D1" class="int bg-clr-tbl">Interest(B)</th><th bgcolor="BF5850" class="tp bg-clr-tbl">Total Payment(A + B)</th><th bgcolor="D8BC31" class="tbal bg-clr-tbl">Balance</th></tr><tbody>';
     
    var color='white';
    for(var i=0;i<n;i++)
    {

      if (tempDate.getFullYear()%2==0) 
      {
        //console.log(tempDate.getFullYear());

        color='#f9f9f9';
      }
      else
      {
        //console.log("in else");
        color='#e4f2f9';
      }

        var e=tempDate.getMonth()+1;
        mi=lP*mir;
        map=E-mi;
        lP=lP-map;
        fdr+='<tr style="background-color:'+color+'"><td class="mthy">'+month[tempDate.getMonth()]+'-'+tempDate.getFullYear()+'</td><td class="pa"><span class="WebRupee"> ₹ </span>'+CommaFormatted(Math.round(E-mi))+'</td><td class="int"><span class="WebRupee">₹ </span>'+CommaFormatted(Math.round(mi))+'</td><td class="tp"><span class="WebRupee">₹ </span>'+CommaFormatted(Math.round(E))+'</td><td class="tbal"><span class="WebRupee"> ₹ </span>'+CommaFormatted(Math.round(lP))+'</td></tr>';
        tempDate.setMonth(e);
    }

    fdr+='</tbody></table>';
    $('#emipaymenttable').html(fdr);
}
  function CommaFormatted(amount) {
    var numberStr = amount.toString();
    var thousandsMatcher = /(\d+)(\d{3})$/;
    var thousandsAndRest = thousandsMatcher.exec(numberStr);
    if (!thousandsAndRest) return numberStr;
        return thousandsAndRest[1].replace(/\B(?=(\d{2})+(?!\d))/g, ",") + "," + thousandsAndRest[2];
    }
  </script>
<!-- emi scripts end -->

<!-- adding new scripts for loan form process -->
<script>
     function changeTest_new(obj,val){
        document.getElementById(val).style.display='block';
        $('#pop1').empty();
        //console.log(obj+" "+val);
        if(val=='q2'){
          $('#self_q').hide();
          $('#self_q2').hide();
          $('#self_q3').hide();
          $("#q2_year").hide();
          $('#profit').val('');
          $('#depreciation').val('');
          $('#remuneration').val('');
          $("#income_year").val('');
          $('#pop1').append( "<p>Enter your net Income</p>" );
        }else  if(val=='q4'){
          $('#pop1').append( "<p>Any existing loan history</p>" );
        }else  if(val=='q5'){
            $('#pop1').empty();
            $('#pop1').append( "<p>Loan amount you wants to borrow</p>" );
            $("#q4").hide();
        }else if(val=='date_birth'){
          $('#pop1').append( "<p>Enter your birthdate.!!</p>" );
        }else  if(val=='q2_year'){
          $('#pop1').append( "<p>Enter your net turnover</p>" );
          $("#q2").hide();
          $('#income').val('');
        }else if(val=='co_sal'){
           $('#co_self').hide();
          $('#co_self_q2').hide();
          $('#co_self_q3').hide();
          $('#co_profit_all').hide();
          $('#co_profit').val('');
          $('#co_depreciation').val('');
          $("#co_income_year").val('');
          $('#co_remuneration').val('');
          $('#pop1').empty();
          $('#pop1').append( "<p>and monthly Salary is</p>" );
        }else if(val=='co_obl_emi'){
          $('#pop1').empty();
          $('#pop1').append( "<p>co-applicant EMI is</p>" );
        }else if(val=='last_button' && obj!='co_obligation'){
          $('#pop1').empty();
          $('#pop1').append( "<p>Great go on!!!</p>" );
          $('#co_obligation').val('');
          $('#co_obl_emi').hide('');
          
        }else if(val=='co_self'){
          $('#co_sal').hide();
          $('#income').val('');
          $('#pop1').empty();
          $('#pop1').append( "<p>Turnover of your co-applicant</p>" );
        }
        else if(val=='q8'){
          $('#pop1').append( "<p>Enter your valid pancard number</p>" )
        }else{
            $('#pop1').append( "<p>Please Proceed</p>" );
        }
        return false;
      }


       function changeDiv_new(prv,nxt){

       //alert(prv+nxt);

        document.getElementById(prv).style.display='none';
        document.getElementById(nxt).style.display='block';
        $('#pop1').empty();
        if(nxt=='step-2'){
          $('#pop1').append( "<p>Where do you work?</p>" );   
        }else if(nxt=='step-2_co'){
          $('#pop1').append( "<p>The profession of your co-applicant is</p>" );   
        }else if(nxt=='step-3'){
          $('#pop1').append( "<p>Tell us about the your residence</p>" );   
        }else if(nxt=='start-2'){
          $('#pop1').append( "<p>Living in city since?</p>" );   //of car loan by praveen
        }else{
          $('#pop1').append( "<p>Great! please fill this form too</p>" );
        }
        window.scrollTo(0, 0);
        return false;
      }

            function changeText_new(obj,val){
            $("#"+obj).keyup(function() {
            //pan card validation
            
                  if(obj=='card'){
                   var str =$('#card').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                        $('#pop1').empty();
                        $('#pop1').append( "<p>Great!! tell us more</p>" );
                         document.getElementById(val).style.display='block';
                   }else{
                        $('#pop1').empty();
                        $('#pop1').append( "<p>Enter correct pan card number</p>" );
                        document.getElementById(val).style.display='none';
                   }
                   return false;
                  }
                
                //Rest code for text fields with numbers
                  var x=$(this).val().length ;
                  if ((obj=='loan_tenure') || ((obj=='total_sal' || obj=='loan') && x>6) || (x>=3 && x<=8) ) {
                   
                    
                      document.getElementById(val).style.display='block';
                      return false;
                  }
                else {
                  if(x>8){
                        $('#pop1').empty();
                        $('#pop1').append( "<p>Thats a lot of money.</p>" );
                  } if(obj=='annual_receipt' ||  obj=='total_emi'){
                        document.getElementById(val).style.display='block';
                        $('#pop1').empty();
                        $('#pop1').append( "<p>Please Proceed</p>" );
                  }if(x<5){
                        document.getElementById(val).style.display='none';
                  }if(obj=='pincode'){
                        document.getElementById(val).style.display='block';
                        $('#pop1').empty();
                        $('#pop1').append( "<p>Enter your  pincode</p>" );
                  }if(x<6){
                        document.getElementById(val).style.display='none';
                  }
                  return false;
                }
                 
            });

      $('#pop1').empty();
      if(val=='q3'){
           $('#pop1').append( "<p>Do you have any existing loan</p>" );
        }else  if(val=='q_prop'){
           $('#pop1').append( "<p>Your property price is</p>" );
        }else  if(val=='q5'){
           $('#pop1').append( "<p>Where do you reside</p>" );
        }else if(val=='exp'){
          $('#pop1').append( "<p>Entr your expierience in current company</p>" );
        }else if(val=='total_exp'){
          $('#pop1').append( "<p>Entr your total expierience</p>" );
        }else if(val=='desired_amt'){ 
        //business loan script//
          $('#pop1').append( "<p>Enter your desired loan amount</p>" );
        }else if(val=='residence'){
          $('#pop1').append( "<p>Where do you reside and since when</p>" );
        }else if(val=='date_birth'){
          $('#pop1').append( "<p>Enter your birthdate.!!</p>" );
        }else if(val=='residence_pincode'){
          $('#pop1').append( "<p>Enter your residence pincode</p>" );
        }else if(val=='q6'){
          $('#pop1').append( "<p>Enter your loan tenure</p>" );
        }else if(val=='q7'){
          $('#pop1').append( "<p>Have special offers for female</p>" );
        }else if(val=='co_obl_yes'){
          $('#pop1').append( "<p>Co-Applicant have any existing loan?</p>" );
        }else if(val=='self_q'){
          $('#pop1').append( "<p>Your total profit after tax is</p>" );
        }else if(val=='self_q2'){
          $('#pop1').append( "<p>Your depreciation is</p>" );
        }else if(val=='self_q3'){
          $('#pop1').append( "<p>Director remuneration is</p>" );
        }else if(val=='co_profit_all'){
          $('#pop1').append( "<p>co-applicant profit after tax </p>" )
        }else if(val=='co_self_q2'){
          $('#pop1').append( "<p>co-applicant depreciation  </p>" )
        }else if(val=='co_self_q3'){
          $('#pop1').append( "<p>co-applicant Director remuneration  </p>" )
        }else{
          $('#pop1').append( "<p>Please go on</p>" );
        }
}

</script>
<!-- new process script ends -->
<!-- co applicant script for new process -->
<script>

$(document).ready(function(){
    $("#co_button").click(function(){
        $("#have_co_applicant").val("yes");
    });
    $("#no_co_app").click(function(){
        $("#have_co_applicant").val("no");
    });
});
</script>
<script type="text/javascript">

 var today = new Date();
 var expire = new Date();
  function SetCookie(cookieName,cookieValue,nDays) {
  //console.log(cookieName);console.log(cookieValue);console.log(nDays); 
 if (nDays==null || nDays==0) nDays=1;
 expire.setTime(today.getTime() + 3600000*24*nDays);
 document.cookie = cookieName+"="+escape(cookieValue)
                 + ";expires="+expire.toGMTString();
}


 $("#dob").change(function(){
 var cookieValue=document.getElementById("dob").value;
  var nDays=1;
  if (nDays==null || nDays==0) nDays=1;
    expire.setTime(today.getTime() + 3600000*24*1);
    document.cookie ="dob"+"="+escape(cookieValue)
                 + ";expires="+expire.toGMTString();
});

$("#city_name").on("autocompletechange", function(event,ui) {
  var cookieValue=document.getElementById("city_name").value;
  var nDays=1;
  if (nDays==null || nDays==0) nDays=1;
    expire.setTime(today.getTime() + 3600000*24*nDays);
    document.cookie ="city_name"+"="+escape(cookieValue)
                 + ";expires="+expire.toGMTString();

//$('#step_3_btn').show();
           //  if(cookieValue.length>2){
           //   $('#pop1').empty();
           //   $('#pop1').append("<p>Get loan.");
           //   $('#step_3_btn').show();
           // }else{
           //   $('#pop1').empty();
           //   $('#pop1').append( "<p>The city name must be at least 5 characters" );
           //    $('#step_3_btn').hide();
           // }
    });

</script>
<script type="text/javascript">
  function SetCookie_pop(cookieName,cookieValue,nDays) {
    //console.log(cookieName);console.log(cookieValue);console.log(nDays);
 var today = new Date();
 var expire = new Date();
 if (nDays==null || nDays==0) nDays=1;
 expire.setTime(today.getTime() + 3600000*24*nDays);
 if(cookieName == 'salaried'){
    document.cookie = cookieName+"="+escape(cookieValue)
                 + ";expires="+expire.toGMTString();
    document.cookie = cookieName_id+"_id"+"="+escape('1')
                 + ";expires="+expire.toGMTString();
 }else{

    document.cookie = cookieName+"="+escape(cookieValue)
                 + ";expires="+expire.toGMTString(); 
    document.cookie = cookieName+"_id"+"="+escape('2')
                 + ";expires="+expire.toGMTString();
 }
 
}
</script>

<!--scroll up function  -->
<script type='text/javascript'>
$(document).ready(function(){ 
$('.close1').click(function(){
  location.reload();
});

    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 400) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
</script>
<!-- scroll up ends -->

<!-- co script ends -->
<!-- credit card function -->

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

<!-- credit card ends -->

<!-- facebook and loagin function-->
<script>
window.fbAsyncInit = function() {
    // FB JavaScript SDK configuration and setup
    FB.init({
      appId      : '1780983575495725', // FB App ID
      cookie     : true,  // enable cookies to allow the server to access the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.8' // use graph api version 2.8
    });
    
    // Check whether the user already logged in
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            //display user data
           // getFbUserData();
        }
    });
};

// Load the JavaScript SDK asynchronously
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Facebook login with JavaScript SDK
function fbLogin() {
    FB.login(function (response) {
        if (response.authResponse) {
            // Get and display the user profile data
            getFbUserData();
        } else {
            alert('User cancelled login or did not fully authorize.');
        }
    }, {scope: 'email'});
}

// Fetch the user profile data from facebook
function getFbUserData(){
    FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
    function (response){
         $.ajax({
            type: "POST",
            dataType: 'json',
            data: {response,"_token": "{{ csrf_token() }}"},
            url: "{{url('facebook/login')}}",
            success: function(msg) {
             if(msg.error==1){
              
                  $("#log_popup").modal('hide');
                  $("#refreshID").load(location.href + " #refreshID");
                 
                        $('#btn_refresh').show();
                        $('#btn_refresh1').hide();
                        $('.btn_refresh1').hide();
                        $('#no_co_app').hide();
                        // Co-Applicant
                        $('#btn_refresh_co').show();
                        $('#btn_refresh_co1').hide()
                     
                   //  var getdata=$('#'+form_name).serialize();
                   //  console.log(getdata);
                   //$('#'+form_name).submit();
             }
           
             if(msg.error==2){
                       $("#log_popup").modal('hide');
                       $("#refreshID").load(location.href + " #refreshID");
                        
                        $('#btn_refresh').show();
                        $('#btn_refresh1').hide();
                        $('.btn_refresh1').hide();
                        $('#no_co_app').hide();
                        // Co-Applicant
                        $('#btn_refresh_co').show();
                        $('#btn_refresh_co1').hide()

               }
           }

         });
    });
}
</script>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


<script type="text/javascript">
 
function logout()
{
    gapi.auth.signOut();
    location.reload();
}
function login() 
{
  var myParams = {
    'clientid' : '745040401282-v3tgmfba303mqqn1vi0dg8ejql6p40gm.apps.googleusercontent.com',
    'cookiepolicy' : 'single_host_origin',
    'callback' : 'loginCallback',
    'approvalprompt':'force',
    'scope' : 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read'
  };
  gapi.auth.signIn(myParams);
}
 
function loginCallback(result)
{
    if(result['status']['signed_in'])
    {
        var request = gapi.client.plus.people.get(
        {
            'userId': 'me'
        });
        request.execute(function (resp)
        {
            var email = '';
            if(resp['emails'])
            {
                for(i = 0; i < resp['emails'].length; i++)
                {
                    if(resp['emails'][i]['type'] == 'account')
                    {
                        email = resp['emails'][i]['value'];
                    }
                }
            }



             $.ajax({
            type: "POST",
             dataType: 'json',
             data: {resp,"_token": "{{ csrf_token() }}"},
            url: "{{url('google/login')}}",
            success: function(msg) {


                   if(msg.error==1){

                     $("#log_popup").modal('hide');
                     $("#refreshID").load(location.href + " #refreshID");
            
                        $('#btn_refresh').show();
                        $('#btn_refresh1').hide();
                        $('.btn_refresh1').hide();
                        $('#no_co_app').hide();
                        // Co-Applicant
                        $('#btn_refresh_co').show();
                        $('#btn_refresh_co1').hide()

             }
             if(msg.error==2){
                       $("#log_popup").modal('hide');
                       $("#refreshID").load(location.href + " #refreshID");
                       
                        $('#btn_refresh').show();
                        $('#btn_refresh1').hide();
                        $('.btn_refresh1').hide();
                        $('#no_co_app').hide();
                        // Co-Applicant
                        $('#btn_refresh_co').show();
                        $('#btn_refresh_co1').hide()

               }

            }

          });
 
 
        });
 
    }
 
}
function onLoadCallback()
{
    gapi.client.setApiKey('AIzaSyBiEtoXD9F-CZPBVeg3JSsXb-_IQGezk4o');
    gapi.client.load('plus', 'v1',function(){});
}
 
    </script>
 
<script type="text/javascript">
      (function() {
       var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
       po.src = 'https://apis.google.com/js/client.js?onload=onLoadCallback';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
     })();
</script>


<script>
function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }

</script>

<!--- Login & Regitration -->
<script>
   $(function() {

    $('#login-form-link').click(function(e) {
    $(".login-form").delay(100).fadeIn(100);
    $(".register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(".social-ico").fadeIn(100);
    $(".forgot-form").fadeOut(100);
    $(this).addClass('active');
    e.preventDefault();
  });
    $('#register-form-link').click(function(e) {
    $(".register-form").delay(100).fadeIn(100);
    $(".login-form").fadeOut(100); 
    $(".social-ico").fadeOut(100);
     $(".forgot-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

  $('#forgot-form-link').click(function(e) {
    $(".forgot-form").delay(100).fadeIn(100);
    $(".login-form").fadeOut(100); 
    $(".social-ico").fadeOut(100);
    $("#forgot-password-hide").fadeOut(100);
    $("#forgot-password-show").delay(100).fadeIn(100);
    $('#login-form-link').removeClass('active');
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

 $('#back_id').click(function(e) {
    $(".login-form").delay(100).fadeIn(100);
    $(".register-form").fadeOut(100);
    $("#forgot-password-hide").delay(100).fadeIn(100);
    $("#forgot-password-show").fadeOut(100);
    $(".social-ico").fadeIn(100);
    $(".forgot-form").fadeOut(100);
    $(this).addClass('active');
    e.preventDefault();
  });


});

</script>



<!-- post end -->

	</body>
</html>
<!-- login Start-->

<div id="login_process" class="modal fade" role="dialog">
<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      
        <h4 class="modal-title text-center"><b>Registration Form</b></h4>
      </div>
     <br>
	
   <div id="send_otp">  
   
    <form class="form-horizontal" id="login_form_process" method="POST">
	
     {{ csrf_field() }}
   
    <div class="form-group">
    
    <label for="name" class="col-sm-3 control-label">Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="name" name="name" placeholder="your good name" autofocus="autofocus" required>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="contact" class="col-sm-3 control-label">Contact</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact number"  pattern="[789][0-9]{9}" required maxlength="10" minlength="10" onkeypress="return fnAllowNumeric(event)">
    </div>
  </div>
  <div class="form-group">
     <label for="set_pwd" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="set_pwd" name="set_pwd" placeholder="Password" required maxlength="10" minlength="6" >
      </div>
  </div>
  <div class="form-group">
     <label for="set_pwd_confirm" class="col-sm-3 control-label">Confirm Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="set_pwd_confirm" name="set_pwd_confirm" placeholder="Confirm Password" required maxlength="10" minlength="6" >
      </div>
  </div>
  <div class="form-group">
    
    <div class="col-sm-6">
     <span id='msg_err' style="display: none;color:red;">oops something went wrong</span>
     <span id='pls_wait' style="display: none;color: red;">Please wait .....</span>
     <span id='pwd_match' style="display: none; color:red;">Password do not match.</span>

     <span id="msg_err_email"  style="display: none; color:red;"><center>Email id already exists.</center></span>
    </div>

  </div>
  <div class="form-group ">
    <div class="col-sm-offset-3 col-sm-6">
    <input type="hidden" name="product" id="product_login" value="">
      <button class="btn btn-default"  id="send_otp_button"  >Send OTP</button>
	  <a class="btn btn-default"  id="already_user" data-toggle="modal" data-target="#log_popup" data-dismiss="modal" >Already User</a>
    </div>
 
      
    </div>
 
  </form>
  
  </div>
      
    </div>
   
  </div>
</div>

<!-- login end-->
<!-- otp Start-->
<div id="otp_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Enter OTP</h4>
        <form id="otp_form" class="form-horizontal">
         {{ csrf_field() }}
         <input type="text" class="form-control" name="otp" id="otp" minlength="6" maxlength="6" required onkeypress="return fnAllowNumeric(event)">
         <span id='otp_err' style="display: none; color: red">oops!! OTP is wrong</span><br>
         <button class="btn btn-default"  class="form-control" id="verify_otp" >Verify</button><br>
         </form>
      </div>
    </div>
  </div>
</div>


@include('layout.modal')

