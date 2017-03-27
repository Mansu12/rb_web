<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tribeController extends CallApiController
{
    public function tribe(){
		$post='';
        
	    $url = "http://api.rupeeboss.com/BankAPIService.svc/GetTribeLoan";
	    $result=$this->call_json_data_get_api($url,$post);
	    $http_result=$result['http_result'];
	    $error=$result['error'];
	    if($error){
	    	return view('went-wrong');
	    }else{
	    $temp_data=json_decode(json_decode($http_result))->response;
	    $data['data']=json_decode(json_encode($temp_data));
	    //  print "<pre>";
	    // print_r($data);exit();
	     
	    return view('tribe')->with($data);		
	    }
	    
	}
	public function save_tribe_form(Request $req){
	
	$data=$req->all();
	//company_address
	// doc_pan doc_aadhar doc_dl doc_passport doc_voter doc_electricity_bill doc_leave_license doc_reg_certification doc_tax_registration doc_comapny_it_returns doc_company_pan doc_vat_return doc_it_returns doc_other
		
		$doc = array('docpan','doc_aadhar','doc_dl');
        $request=$req;
        $response=0;
        for( $i=0;$i<3;$i++){
                $str=$doc[$i];               
                $imageName = time().'.'.$req->$str->getClientOriginalExtension();
                $extension=$req->$str->getClientOriginalExtension();
                $filename = $req->$str->getpathName();//Image path
                $file =fopen($filename, "rb");
                $contents = fread($file, filesize($filename));
                $byteArray = unpack("C*",$contents); 
                $data=array_values(($byteArray));
                $post="[".implode(',',$data)."]";
                $post_data='{"docType":"'.$doc[$i].'","docextension":"'.$extension.'",
                            "refFBAId":"'.$request->app_id.'","bytes":'.$post.'}';
                // $url = "http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/uploadCustLoanDoc";
                            print_r($post_data);
                            print_r($request->all()); exit();
   
				}
							                      
	$data['middle_name']=isset($data['middle_name'])?$data['middle_name']:'""';
	$data['agent_name']=isset($data['agent_name'])?$data['agent_name']:'""';
	$data['social']=isset($data['social'])?$data['social']:'""';
	$data['partners_count']=isset($data['partners_count'])?$data['partners_count']:'""';
	$data['directors_count']=isset($data['directors_count'])?$data['directors_count']:'""';
	$data['proprietorship_type']=isset($data['proprietorship_type'])?$data['proprietorship_type']:'""';
	$data['taxation_details']=isset($data['taxation_details'])?$data['taxation_details']:'""';
	$data['online_sale_channel']=isset($data['online_sale_channel'])?$data['online_sale_channel']:'""';
	$data['business_run_by']=isset($data['business_run_by'])?$data['business_run_by']:0;
	$data['business_run_by_pan_div']=isset($data['business_run_by_pan_div'])?$data['business_run_by_pan_div']:'""';

	//print_r($data);exit();
// director_count,loan_purpose,nature_of_business,online_sales_channels,ownership,partner_count,product_sell,proprietorship_type,registration_details,turnover,loan_tenure,loan_type,aggregated_type,education,family_details,mobile_number,mobile_number,repayment_frequency
			$post_data='{"agentname":"'.$data['agent_name'].'",
		"business_details":{
			"address":[{
				"work":"'.$data['agent_name'].'"
			}],
			"director_count":'.$data['directors_count'].',
			"employess_count":"'.$data['employee_count'].'",
			"is_offline_sales":'.$data['offline_sale'].',
			"is_online_sales":'.$data['online_sale'].',
			"know_about_us":"'.$data['reached_us_via'].'",
			"loan_purpose":'.$data['loan_purpose'].',
			"nature_of_business":'.$data['business_type'].',
			"online_sales_channels":['.$data['online_sale_channel'].'],
			"ownership":'.$data['owner_name'].',
			"pan_number":'.$data['business_run_by_pan_div'].',
			"partner_count":'.$data['partners_count'].',
			"product_sell":['.$data['selling_product'].'],
			"proprietorship_type":'.$data['business_run_by'].',
			"registration_details":'.$data['registration_detail'].',
			"taxation_details":["'.$data['taxation_details'].'"],
			"turnover":'.$data['turnover'].'
		},
		"documents":[{
			"data":"'.$data['agent_name'].'",
			"title":"'.$data['agent_name'].'",
			"type":"'.$data['agent_name'].'"
		}],
		"is_loan_distributor":true,
		"loan_amount":"'.$data['loan_amount'].'",
		"loan_tenure":'.$data['loan_tenure'].',
		"loan_type":'.$data['agent_name'].',
		"loandistributorid":"'.$data['agent_name'].'",
		"name":"'.$data['agent_name'].'",
		"online_ids":[{
			"aggregated_type":'.$data['online_ids'].',
			"credential":{
				"access_key":"'.$data['access_key'].'",
				"secret_key":"'.$data['secret_key'].'",
				"username":"'.$data['username'].'",
				"vendor_id":"'.$data['vendor_id'].'"
			}
		}],
		"owner_details":[{
			"email":"'.$data['owner_email'].'",
			"name":"'.$data['owner_name'].'"
		}],
		"personal_details":{
			"DOB":"'.$data['dob'].'",
			"aadhaar_number":"'.$data['aadhar_no'].'",
			"address":[{
				"work":"'.$data['address'].'"
			}],
			"education":'.$data['education'].',
			"email":"'.$data['email'].'",
			"family_details":'.$data['family_detail'].',
			"first_name":"'.$data['first_name'].'",
			"income_details":"'.$data['annual_income'].'",
			"last_name":"'.$data['last_name'].'",
			"mobile_number":'.$data['mobile'].'
		},
		"reference_details":{
			"email":"'.$data['ref_email'].'",
			"first_name":"'.$data['ref_first_name'].'",
			"last_name":"'.$data['ref_last_name'].'",
			"middle_name":"'.$data['ref_middle_name'].'",
			"mobile_number":'.$data['ref_mobile'].'
		},
		"repayment_frequency":'.$data['repayment_frequency'].',
		"secret":"'.$data['agent_name'].'"}';

		print_r($post_data);exit();
		$url = "http://api.rupeeboss.com/BankAPIService.svc/createTribeLoan";
	    $result=$this->call_json_data_api($url,$post_data);
	    $http_result=$result['http_result'];
	    $error=$result['error'];
	    if($http_result){
	        return $http_result;
	    }else{
	        return 'false';
	    }
	      
	    }
	
}
