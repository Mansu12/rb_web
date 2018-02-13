<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;
class bank_quote_api_request extends Model
{
    //
    protected $table='bank_quote_api_request';
    protected $fillable = ['PropertyID', 'PropertyCost', 'LoanTenure', 'LoanRequired', 'City','ApplicantNme','ApplicantGender','ApplicantSource','ApplicantIncome','ApplicantObligations','ApplicantDOB','CoApplicantYes','CoApplicantGender','CoApplicantSource','CoApplicantIncome','CoApplicantObligations','CoApplicantDOB','Turnover','ProfitAfterTax','Depreciation','DirectorRemuneration','CoApplicantTurnover','CoApplicantProfitAfterTax','CoApplicantDepreciation','CoApplicantDirectorRemuneration','empcode','BrokerId','ProductId','created_at', 'updated_at','api_source'];
    public function store(Request $request)
    {
        $table = new bank_quote_api_request();
         $input = $request->all();
   		 $id = $table::create($input)->id;
   		 return $id;
    }
    
    public function save_liza(Request $request)
    {
             $fillable = ['status','property_cost','loan_tenure','loan_amount','gender','income','obligation','dob','have_co_applicant','CoApplicantIncome','co_applicant_obligation','Turnover','profit_after_tax','depreciation','remuneration','co_applicant_turnover','co_applicant_profit_after_tax','co_applicant_depreciation','co_applicant_remuneration','emp_detail_id','product_id','created_at', 'updated_at','api_source'];
        $name=Session::get('name')?Session::get('name'):"";
        //print_r($request->all());exit();
       // unset($request['_token']);
        $table = new bank_quote_api_request();
        //print_r($request->BrokerId);exit();   
        $table->status ='pending';
        $table->PropertyID = $request->PropertyID;
        $table->PropertyCost = $request->property_cost;
         $table->LoanTenure = $request->loan_tenure;
         $table->LoanRequired = $request->loan_amount ;
         $table->City  = $request->city_name ;
         $table->ApplicantNme  = $name ;
         $table->ApplicantGender  = $request->gender ;
         $table->ApplicantSource  = $request->emp_detail_id ;
         $table->ApplicantIncome  = $request->income ;
         $table->ApplicantObligations  = $request->obligation ;
         $table->ApplicantDOB   = $request->dob  ;
         $table->CoApplicantYes   = $request->have_co_applicant  ;
         $table->CoApplicantGender   = $request->CoApplicantGender  ;
         $table->CoApplicantSource   = $request->co_emp_detail  ;
         $table->CoApplicantIncome   = $request->co_applicant_income  ;
         $table->CoApplicantObligations   = $request->co_applicant_obligation  ;
         $table->CoApplicantDOB   = $request->co_dob  ;
         $table->Turnover    = $request->Turnover   ;
         $table->ProfitAfterTax    = $request->profit_after_tax   ;
         $table->Depreciation    = $request->depreciation   ;
         $table->DirectorRemuneration    = $request->remuneration   ;
         $table->CoApplicantTurnover    = $request->co_applicant_turnover   ;
         $table->CoApplicantProfitAfterTax    = $request->co_applicant_profit_after_tax   ;
         $table->CoApplicantDepreciation    = $request->co_applicant_depreciation   ;
         $table->CoApplicantDirectorRemuneration    = $request->co_applicant_remuneration;
         $table->brokerID    = 0;
         $table->empcode =0;
         $table->ProductId    = $request->product_name;
         $table->Email    = Session::get('email')?Session::get('email'):"";
         $table->Contact =Session::get('contact')?Session::get('contact'):"";
         $table->api_source=$request->api_source?$request->api_source:NULL;

         $table->save();
         $LastInsertId = $table->id;
         return $LastInsertId;
    }


public function update_liza_quote($quote_id){
    $update_quote=DB::table('bank_quote_api_request')
            ->where('id', $quote_id)
            ->update(['Contact' => Session::get('contact'), 'ApplicantNme' => Session::get('name'),'Email' => Session::get('email')]);
            return $update_quote;
}
 
    public function store_bt_req(Request $request)
    {
        //print_r($this->getAttribute('fillable'));exit();
       $fillable = ['status',  'LoanRequired', 'ProductId','LoanTenure','ApplicantNme','Email','Contact','BrokerId','api_source','created_at', 'updated_at',];
        $input = $request->all();
        $table = new bank_quote_api_request();
        $id = $table::forceCreate($input)->id;
        return $id;

}
}