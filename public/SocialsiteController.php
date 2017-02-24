<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Contracts\User as ProviderUser;
use Illuminate\Http\Request;

use App\Http\Requests;
//use App\Http\Controllers\Controller;
use Socialite;
use App\registrationModel;
use Validator;
use Redirect;
use Session;
use URL;
use DB;
class SocialsiteController extends InitialController{
     public function  facebook(){
     	 return Socialite::driver('facebook')->redirect();
     }

      public function  callback(){ 	

         $query=new registrationModel();
            try {
                  $user = Socialite::driver('facebook')->user();
                 }catch (Exception $e){
                  return redirect('facebook');
                 }
                  $authUser = $this->findOrCreateUser($user);
        
                  // $query->username($authUser, true);
                //  return Redirect::back();
                    
                     if($authUser){
                      
                      return Redirect::back();

                     }else{
                    return Redirect::back();

                     }

               //auth()->login($user);
             //  return redirect()->to('/home');
                    
     }

 
     public function  google(){     
                  return Socialite::driver('google')->redirect();
     }

      public function  Googlecallback(){
      try {
          $user = Socialite::driver('google')->user();
         
          }catch (Exception $e) {
                  return redirect('google');
          }
          $authUser = $this->findOrCreateUser($user);
                 // return Redirect::back();

               
                  if($authUser){
                      
                      return Redirect::back();

                     }else{
                    return Redirect::back();

                     }

          }



          private function findOrCreateUser($facebookUser){
             $query=new registrationModel();
             $authUser =$query->where('provider_user_id', $facebookUser->id)->first();
         if ($authUser){

                       Session::put('email', $authUser->email);
                       Session::put('user_id', $authUser->id);
                       Session::put('name', $authUser->username);
                       Session::put('is_login', 1);
               
             return $authUser->username;
        }else{
 
        //  $query->create([
        //     'username' => $facebookUser->name,
        //     'email' => $facebookUser->email,
        //     'contact' =>0,
        //     'password' =>0,
        //     'created_at'=>date('Y-m-d H:i:s'),
        //     'provider_user_id' => $facebookUser->id,
        //     'provider' => $facebookUser->avatar
        // ]);

   
                  $query->username=$facebookUser->name;
                  $query->email=$facebookUser->email;
                  $query->contact='';
                  $query->password='';
                  $query->provider_user_id=$facebookUser->id;
                  $query->provider=$facebookUser->avatar;
                  $query->created_at=date('Y-m-d H:i:s');

               if($query->save()) {
                  Session::put('email',$query->email);
                  Session::put('contact',$query->contact);
                  Session::put('user_id',$query->id);
                  Session::put('name',$query->username);
                  Session::put('is_login',1);
               
        }

      
}

return  $authUser;

          
    }



    public function facebooklogin(Request $res){
                      $vale=$res->response;
                      $this->mail($vale['email']);
                   
             $query=new registrationModel();
             $authUser =$query->where('provider_user_id',$vale['id'])->first();
               if ($authUser){
                       Session::put('email', $authUser->email);
                       Session::put('user_id', $authUser->id);
                       Session::put('name', $authUser->username);
                       Session::put('is_login', 1);
               $arr = array('error' => 1);
               echo json_encode($arr);
        }else{

                  $query->username=$vale['first_name'];
                  $query->email=$vale['email'];
                  $query->contact='';
                  $query->password=md5($this->random_password());
                  $query->provider_user_id=$vale['id'];
                  $query->provider=$vale['link'];
                  $query->created_at=date('Y-m-d H:i:s');

               if($query->save()) {
                  Session::put('email',$query->email);
                  Session::put('contact',$query->contact);
                  Session::put('user_id',$query->id);
                  Session::put('name',$query->username);
                  Session::put('is_login',1);
                  DB::table('customer_details')->insert(['user_id' =>$query->id]);
               
        }

                $arr = array('error' => 2);
               echo json_encode($arr);


        }

    }




 public function googlelogin(Request $res){
                      $vale=$res->resp;
                      $str=$vale['image']['url'];
                      $email='';
                      $length=count($vale['emails']);

                for($i = 0; $i < $length; $i++){
                    if($vale['emails'][$i]['type'] == 'account')
                    {
                        $email = $vale['emails'][$i]['value'];

                    }
                }
      
             $this->mail($email);
             $query=new registrationModel();
             $authUser =$query->where('provider_user_id',$vale['id'])->first();

               if ($authUser){
                       Session::put('email', $authUser->email);
                       Session::put('user_id', $authUser->id);
                       Session::put('name', $authUser->username);
                       Session::put('is_login', 1);
               $arr = array('error' => 1);
               echo json_encode($arr);
        }else{

                  $query->username=$vale['displayName'];
                  $query->email=$email;
                  $query->contact='';
                  $query->password=md5($this->random_password());
                  $query->provider_user_id=$vale['id'];
                  $query->provider=$str;
                  $query->created_at=date('Y-m-d H:i:s');

               if($query->save()) {
                  Session::put('email',$query->email);
                  Session::put('contact',$query->contact);
                  Session::put('user_id',$query->id);
                  Session::put('name',$query->username);
                  Session::put('is_login',1);
                  DB::table('customer_details')->insert(['user_id' =>$query->id]);
               
        } 

                $arr = array('error' => 2);
                 echo json_encode($arr);


        }

    }


   public function random_password() {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = substr( str_shuffle( $chars ), 0,6);
    return $password;
}

public function mail($data){
                //$headers="Content-Type: text/html; charset=ISO-8859-1\r";
                $email ='wecare@rupeeboss.com';
                $mail = Mail::send('email_view_upload',['data' => $data], function($message) use($email) {
                $message->from('software.support@rupeeboss.com', 'RupeeBoss');
                $message->to($email)
                ->subject('Loan application submitted');

                });
}

}
