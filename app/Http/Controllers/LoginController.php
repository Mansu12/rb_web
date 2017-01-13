<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use App\registrationModel;
use Validator;
use Redirect;
use Session;
use URL;
use Mail;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
      public function login(Request $request){
         
  
          $query=new registrationModel();
          $value=$query->where('email','=',$request->email_login)
          ->where('password','=',md5($request->login_pass))
          ->first();
          	if($value!=''){ 
		          	  $request->session()->put('email',$value->email);
		          	  $request->session()->put('contact',$value->contact);
		              $request->session()->put('user_id',$value->id);
		              $request->session()->put('name',$value->username);
		              $request->session()->put('is_login',1);

		             

		          	  $error="right";
          	     echo $error;
                }else{
               	      $error="email";
               	 echo $error;
               	 // Session::flush(); 
                }


       }


      public function register_form(Request $req){


 $val =Validator::make($req->all(), [
                'name' => 'required|min:5',
                'contact' => 'required|regex:/^[0-9]{10}+$/',
                'email' => 'required|email|unique:user_registration',
                'password' =>'required|min:5',
                'password_confirm' => 'required|min:5|same:password',
                            ]);

           if ($val->fails()){

              return response()->json($val->messages(), 200);
           }else{


             $query=new registrationModel();
                  $query->username=$req->name;
                  $query->email=$req->email;
                  $query->contact=$req->contact;
                  $query->password=md5($req->password);
                  $query->provider_user_id=0;
                  $query->provider=0;
                  $query->created_at=date('Y-m-d H:i:s');

               if($query->save()) {
                  $req->session()->put('email',$query->email);
                  $req->session()->put('contact',$query->contact);
                  $req->session()->put('user_id',$query->id);
                  $req->session()->put('name',$query->username);
                  $req->session()->put('is_login',1);
                  $error="1";
                  echo $error;
        }
     }
 }
      //added by manish to logout
        public function logout(Request $req){
          $req->session()->flush();

   // google logout function 
    
          return redirect('/');
        }



        public function forgot_password(Request $req){
             $query=new registrationModel();
              $val =Validator::make($req->all(), [
                'email' => 'required|email',
                            ]);
           if ($val->fails()){
              return response()->json($val->messages(), 200);
           }else{
              $value=$query->where('email','=',$req->email)
              ->first();
              if($value!=''){
                           
                    $password = mt_rand(100000, 999999);
                $data ="Please use ".$password." as password to login for ur email ".$req->email."";
                $email = $req->email;
                $mail = Mail::send('email_view',['data' => $data], function($message) use($email) {
                $message->from('wecare@rupeeboss.com', 'RupeeBoss');
                $message->to($email)
                ->subject('Your New Password');
                });
                    print_r($mail);
                    if(Mail::failures()){
                            $error=3;
                            echo $error;
                    }else{

                    $query=DB::table('user_registration')
                              ->where('email', $req->email)
                              ->update(['password' => md5($password)]);
                            $error=2;
                            echo $error;
                    }
                       
                       // $error=2;
                       //       echo $error;
                 }else{
                  
                    $error=1;
                    echo $error;
                 }

                }
        }
}
