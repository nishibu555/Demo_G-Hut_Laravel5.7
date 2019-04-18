<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Session;
session_start();

class SuperAdminController extends Controller
{
    public function logout()
    {
       Session::flush();

      return Redirect::to('/admin');
    }



    public function dashbord(){


        $this->AuthCheck();
    	
        return Redirect('/all_product');
    }


    public function AuthCheck(){

    	$admin_id=Session::get('admin_id');

    	if($admin_id){return;}

    	else{
    		return Redirect::to('/admin')->send();
    	}
    }
}
