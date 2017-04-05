<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\credit_card_form_req;
class CreditcardController extends CallApiController
{
	 public function credit_card_form(){
	 		return view('credit-card-form');
	 }

	 public function credit_form_submit(Request $req){
    $save=new credit_card_form_req(); 
    $id=$save->store($req);
    $newDob = date("d-m-Y",strtotime(str_replace('-','/', $req['DateOfBirth'])));
    $newDate = date("d-m-Y",strtotime(str_replace('-','/', $req['SalaryAcOpenDate'])));
    $req['DateOfBirth']=str_replace('-', '/',$newDob);
    $req['SalaryAcOpenDate']=str_replace('-', '/',$newDate);
    $data=$req->all();
    // print_r($req->all());exit();
 	$data['UserID']='ICICI_CC_RupeeBoss';
 	$data['Password']='Password@123';
 	$data['ChannelType']='RupeeBoss';
 	$post_data=json_encode($data);
	 	  // print "<pre>";
	 	  // print_r($post_data);exit();
	$url = "http://api.rupeeboss.com/BankAPIService.svc/PostIciciBank";
    $result=$this->call_json_data_api($url,$post_data);
    $http_result=$result['http_result'];
    $error=$result['error'];
    $st=str_replace('"{', "{", $http_result);
    $s=str_replace('}"', "}", $st);
    $m=$s=str_replace('\\', "", $s);
   // print_r($id);exit();
    $update_user='';
    $obj = json_decode($m);
    print_r($http_result);exit();
    if ($http_result) 
    {
        $update_user=DB::table('credit_card_form_req')
         ->where('id',$id)
         ->update(['ApplicationId'=>$obj->ApplicationId]);
    }
    
    if(!$update_user){

        $error=2;
    echo $error;

    }else{
        

      $error=1;
      echo $error;

    }

   
	
}
}