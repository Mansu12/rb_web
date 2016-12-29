<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Response;
class CompareController extends Controller
{
    //
    public function compare(){
    	return view('compare');
    }
    public function view_loan(){
        // if(Session::get('is_login')){
    	   return view('view-loan');
       //}else{
         //   return redirect('/');
       // }
        
    }
 	// public function emi(){
  //       //print_r("hiiiiiiiiiii");
  //   	return view('emi');
  //   }
    public function emi2(){
        return view('emi/emi');
    }
     public function emi_cal(Request $req){
        $data=$req->all();
        return view('emi/emi_cal')->with($data);
    }
    public function credit_report(){
    	return view('free-credit-report');
    }

    public function switchme(){
      return view('emi/switch_me');
    }

    public function calculation(Request $req){
      

      $getQuery=DB::table('bank_product_web_intrest')
      ->join('bank_master', 'bank_product_web_intrest.bank_id', '=', 'bank_master.Bank_id')
      ->select('bank_product_web_intrest.bank_id AS bank_id','bank_product_web_intrest.roi AS roi','bank_master.Bank_Name AS Bank_Name')
      ->where('bank_product_web_intrest.product_id','=',12)
      ->where('bank_product_web_intrest.roi','<',$req['loaninterest'])
      ->where('bank_product_web_intrest.Profession','=',$req['profession'])
      ->where('bank_product_web_intrest.roi_type','=','Floating')
      ->where('bank_product_web_intrest.amt_from','<=',$req["loanamount"])
      ->where('bank_product_web_intrest.amt_to','>=',$req["loanamount"])
      ->orderBy('bank_product_web_intrest.roi', 'ASC')

       //->take(5)
      ->get();

      $resultArray = json_decode(json_encode($getQuery), true);
      //print_r($resultArray);exit();
     // if(empty($resultArray)){
     //  echo "empty";
     // }else{
     //  echo "not empty";
     // };exit();
if (!empty($resultArray)) {
$loanamount=$req['loanamount'];
$loaninterest=$req['loaninterest']/12/100;
$loanterm=$req['loanterm'];


$amount = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
$total =(($amount*$loanterm)-$loanamount);

$ttl_payment = $loanamount+$total;

//savings//
if($getQuery[0]->roi==0){
  $getQuery[0]->roi=1;


} //remove when you have real data not containg 0.00 % roi in db
$new_rate=$getQuery[0]->roi/12/100;







  $new_amount = $loanamount * $new_rate * (pow(1 + $new_rate, $loanterm) / (pow(1 + $new_rate, $loanterm) - 1));

  $new_total =(($new_amount*$loanterm)-$loanamount);
  $new_ttl_payment = $loanamount+$new_total;
  $drop_emi= $amount-$new_amount;
  $drop_in_int=(($loaninterest*12*100)-($new_rate*12*100));
  $savings=$total-$new_total;

$test =json_decode(json_encode($getQuery),true);
//$test1 = array('bank_detail' => $test);
$user =array('loanamount' => $loanamount, 'loaninterest' => $loaninterest , 'loanterm'=> $loanterm );
// $a=array_push($test, $loaninterest,$loanamount,$loanterm);
// print_r($test);exit();


  $returnHTML = view('emi/switch_cal')->with('data', $test)->with('sata', $user)->render();
return response()->json(array('success' => true, 'amount'=>$amount, 'new_amount'=>$new_amount, 'drop_emi'=>$drop_emi,'drop_in_int'=>$drop_in_int, 'savings'=>$savings, 'html'=>$returnHTML));                            
                                  

}
else{
   
  return response()->json(array('success' => false));

}



      
    }
 

 
}
?>
