<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use Session;
session_start();


class AdminController extends Controller
{
        
// login page e nibe  alt=admin_login
public function index(){

  return view('admin.admin_login');
}




//password email check kore dashbord e nibe
public function admin_dashbord(Request $request){

    $email=$request->admin_email;
    $password=$request->admin_password;
    
    $result=DB::table('tbl_admin')
    ->where('admin_email' , $email)
    ->where('admin_password', $password)
    ->first();

      
       if($result){
           Session::put('admin_email', $result->admin_email);
           Session::put('admin_id', $result->admin_id);
           return Redirect::to('/dashbord');
       }
       else{
         Session::put('ex', '    Invalid email or password     ');
         return Redirect::to('/admin');
       }
}



}
