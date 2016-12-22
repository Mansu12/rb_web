<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Response;
class ApiController extends Controller
{
	public function comman(Request $req){
		//print "<pre>";
		//print_r($req->all());
		if($req['req_for']=='product'){
			$data=DB::table('Product_Master')
			->select('Product_Id','Product_Name')
			->where('Is_Active','=','True')
			->get();
		}else if($req['req_for']=='bank'){
			$data=DB::table('Bank_Master')
			->select('Bank_Id','Bank_Name')
			->where('Is_Active','=','True')
			->get();
		}else if($req['req_for']=='city'){
			$data=DB::table('City_Master')
			->select('City_Id','City_Name','state_id')
			->where('Is_Active','=','1')
			->get();
		}
		//print_r($data);
		return Response::json(array(
                            'data' => $data,
                        ));
	}


	public function compare(Request $req){
		//API to get bank quote

		$req_all= implode(',',$req->all());
		$log=DB::table('api_log')
			 ->insertGetId(['api_name'=>'GetHomeLoanQuotes',
			 		   'status'=>'Pending',
			 		   'request'=>$req_all,			 		   
			 		   'error'=>'0',
			 		   'created_at'=>date("Y-m-d H:i:s"),
			 		   'updated_at'=>date("Y-m-d H:i:s")

			 	]);
		$insert=DB::table('bank_quote_api_request')->insertGetId([
			'PropertyID' =>$req['PropertyID'],
			'PropertyCost' =>$req['PropertyCost'],
			'LoanTenure' =>$req['LoanTenure'],
			'LoanRequired' =>$req['LoanRequired'],
			'City' =>$req['City'],
			'ApplicantNme' =>$req['ApplicantNme'],
			'ApplicantGender'=>$req['ApplicantGender'],
			'ApplicantSource' =>$req['ApplicantSource'],
			'ApplicantIncome' =>$req['ApplicantIncome'],
			'ApplicantObligations'=>$req['ApplicantObligations'],
			'ApplicantDOB' =>$req['ApplicantDOB'],
			'CoApplicantYes' =>$req['CoApplicantYes'],
			'CoApplicantGender' =>$req['CoApplicantGender'],
			'CoApplicantSource' =>$req['CoApplicantSource'],
			'CoApplicantIncome' =>$req['CoApplicantIncome'],
			'CoApplicantObligations'=>$req['CoApplicantObligations'],
			'CoApplicantDOB' =>$req['CoApplicantDOB'],
			'Turnover' =>$req['Turnover'],
			'ProfitAfterTax' =>$req['ProfitAfterTax'],
			'Depreciation'=>$req['Depreciation'],
			'DirectorRemuneration' =>$req['DirectorRemuneration'],
			'CoApplicantTurnover' =>$req['CoApplicantTurnover'],
			'CoApplicantProfitAfterTax' =>$req['CoApplicantProfitAfterTax'],
			'CoApplicantDepreciation' =>$req['CoApplicantDepreciation'],
			'CoApplicantDirectorRemuneration' =>$req['CoApplicantDirectorRemuneration'],	
			'brokerID' =>$req['brokerID'],
			'called_at'=>date("Y-m-d H:i:s"),
			'status'=>'pending'
			]);


		$data=DB::select('call  usp_get_bank_quot ("'.$req['PropertyCost'].'","'.$req['LoanTenure'].'","'.$req['LoanRequired'].'","'.$req['ApplicantGender'].'","'.$req['ApplicantIncome'].'","'.$req['ApplicantObligations'].'","'.$req['ApplicantDOB'].'","'.$req['CoApplicantYes'].'","'.$req['CoApplicantIncome'].'","'.$req['CoApplicantObligations'].'","'.$req['Turnover'].'","'.$req['ProfitAfterTax'].'","'.$req['Depreciation'].'","'.$req['DirectorRemuneration'].'","'.$req['CoApplicantTurnover'].'","'.$req['CoApplicantProfitAfterTax'].'","'.$req['CoApplicantDepreciation'].'","'.$req['CoApplicantDirectorRemuneration'].'","'.$req['ApplicantSource'].'")');

		if($data){
			$status="Success";
		
		}else{
			$status="Failure";
		}

			 $status_update=DB::table('bank_quote_api_request')
			 ->where('ID','=',$insert)
			 ->update(['status'=>$status]);

			 $log_update=DB::table('api_log')
			 ->where('id','=',$log)
			 ->update(['status'=>$status,'updated_at'=>date("Y-m-d H:i:s")]);

		//return $insert;


		 return Response::json(array(
                            'data' => $data,
                        ));
	}
	//by DP
	public function GetHomeLoanQuotes(Request $req){
					   $data=DB::table('bank_product')
								->where('Product_Id','=',$req['PropertyID'])
								//->where('PropertyCost','=',$req['PropertyCost'])
								->where('Max_Tenure','=',$req['LoanTenure'])
								->where('guarantor_required','=',$req['LoanRequired'])
							//	->where('City','=',$req['City'])
								->orWhere('Min_Income_Salary','=',$req['ApplicantSource'])
								//->where('ApplicantIncome','=',$req['ApplicantIncome'])
							//	->where('ApplicantObligations','=',$req['ApplicantObligations'])
							//	->where('CoApplicantIncome','=',$req['CoApplicantIncome'])
							//	->where('CoApplicantObligations','=',$req['CoApplicantObligations'])
								->get();
       return Response::json(array(
                            'data' => $data,
                        ));
    }
    public function test(Request $req){
		$a = $req->all();
		$jsonText = $a;
		$myArray = json_decode($jsonText, true);
		print_r($myArray);
       // return Response::json(array(
       //                      'data' => $data,
       //                  ));
    }





    
}