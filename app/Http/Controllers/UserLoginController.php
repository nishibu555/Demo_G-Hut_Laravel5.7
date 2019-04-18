<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use Session;
session_start();

class UserLoginController extends Controller
{
    public function index(){

    	return view('pages.customer_login');

    }



public function customer_signup(Request $request){

 $validate = $request->validate([
        'customer_name' => 'required|string|min:3|max:20',
        'customer_email' => 'required|email',
        'customer_password' => 'required|string|min:4|max:12',
    ]);

 $data=array();

 $data['customer_name']=$request->customer_name;
 $data['customer_email']=$request->customer_email;	
 $data['customer_password']=md5($request->customer_password);	

 $customer_id=DB::table('tbl_customer')->insertGetId($data);

 Session::put('customer_id', $customer_id);

 
 return Redirect::to('/my_cart');	
 	
}

//place order e click korle jodi user id null hoy confirm order page
public function customer_login(Request $request){

     $validate = $request->validate([
        'customer_email' => 'required|email',
        'customer_password' => 'required|string|min:4|max:12',
    ]);

$customer_email=$request->customer_email;
$customer_password=$request->customer_password;

$result=DB::table('tbl_customer')
        ->where('customer_email', $customer_email)
        ->where('customer_password', $customer_password)
        ->first();

if($result){

Session::put('customer_id', $result->customer_id);
return Redirect::to('/my_cart');

}        

else
{
return Redirect::to('/customer_login_or_signup');
}
	
}



public function login_page(){

    return view('pages.login');
}

public function login(Request $request){
 $validate = $request->validate([
        'customer_email' => 'required|email',
        'customer_password' => 'required|string|min:4|max:12',
    ]);

$customer_email=$request->customer_email;
$customer_password=md5($request->customer_password);

$result=DB::table('tbl_customer')
        ->where('customer_email', $customer_email)
        ->where('customer_password', $customer_password)
        ->first();

if($result){

Session::put('customer_id', $result->customer_id);
return Redirect::to('/products');

}

else{

Session::put('message', ' Invalid email or password     ');
return Redirect::to('/login_page');
            
}
}



public function account_setting($customer_id){

return view ('pages.account_setting');
}


public function customer_logout($customer_id){
    
     
	 Session::flush();
	return Redirect::to('/products');
	
}







public function delivery_detail($cart_total){


return view('pages.delivery_detail')->with('cart_total', $cart_total);
}


public function signup_page(){
    return view('pages.signup_page');
}

public function signup(Request $request){
  $validate = $request->validate([
        'customer_name' => 'required|string|min:3|max:20',
        'customer_email' => 'required|email',
        'customer_password' => 'required|string|min:4|max:12',
    ]);
  
$data=array();

 $data['customer_name']=$request->customer_name;
 $data['customer_email']=$request->customer_email;  
 $data['customer_password']=md5($request->customer_password);   

 $customer_id=DB::table('tbl_customer')->insertGetId($data);

 Session::put('customer_id', $customer_id);
 return Redirect::to('/products');   
    
}




}
