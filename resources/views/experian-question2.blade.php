<?php if($result->questionToCustomer!=null){ ?> 
			<form id="generate_question2" name="generate_question1"> 
			{{ csrf_field()}}
				<label>
					<?php echo $result->questionToCustomer->question;
					?>

				</label>
				<select name="qs1">
					@foreach($result->questionToCustomer->optionsSet1 as $qs1)
					<option>
						<?php echo $qs1;	?>
					</option>
					@endforeach
				</select>
				<select name="qs2">
					@foreach($result->questionToCustomer->optionsSet2 as $qs2)
					<option>
						<?php echo $qs2;	?>
					</option>
					@endforeach
				</select>
				<input type="hidden" name="stage1hitid" value={{$stage1hitid}}>
				<input type="hidden" name="stage2hitid" value={{$stage2hitid}} >
				<input type="hidden" name="stage2sessionid" value={{$stage2sessionid}}>
				<input type="hidden" name="question_count" value=<?php echo ($qs+1);?>>
				
				<?php 
				$str= $result->responseJson;
				
				?>
				<br>
				<a class="btn btn-primary btn-outline with-arrow next_qest1" >submit<i class="icon-arrow-right"></i></a>


			</form>
			<?php }else if($result->responseJson!="passedReport"){?>
			<p>Sorry To Inform, but something went wrong	.<br> 
			 Response :: {{$result->responseJson}}</p>
			<?php
				if($result->responseJson=="passedReport"){
					//refer http://php.net/manual/en/domdocument.getelementbyid.php

					$html_data=$result->showHtmlReportForCreditReport;
					print_r($html_data);
					$doc = new DomDocument;
					 $doc->validateOnParse = true;
					 libxml_use_internal_errors(true);
					$doc->loadHTML($html_data);
					libxml_use_internal_errors(false);
					
					//  $xml=$doc->getElementsByTagName('input')->item(0);
					//  $xml_doc = new DomDocument;
					//  $xml_doc->validateOnParse = true;
					// $xml_doc->loadXML($xml);
					print_r($doc);exit();
					//print_r($html_data);// "<h1> Your Credit Score is :: ".serialize($xml)."</h1>";
				}

			 }?>
<script type="text/javascript">
  $('.next_qest1').click(function(){
    //alert("new qstn1");
    $.ajax({  
               type: "POST",  
               url: "{{URL::to('gen-qstn')}}",
               data : $('#generate_question2').serialize(),
               success: function(msg){
                //console.log(msg);  
                if(msg.success==true){
                $('#generate_question').hide();
                $('#nxt_qstn').html("");
                $('#nxt_qstn').html(msg.html);
                }else{
                  
                }
              
               }  
               }); 
  });
</script>