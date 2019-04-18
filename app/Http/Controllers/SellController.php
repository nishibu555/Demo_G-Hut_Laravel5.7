<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class SellController extends Controller
{
    public function index(){
    $this->AuthCheck();
     $sell_daily = DB::table('tbl_sells')
        ->select('order_date', DB::raw("SUM(order_total) as order_total"))
	    ->groupBy('order_date')
	    ->orderBy('order_date')
	    ->get();

     

     $sell_monthly = DB::table('tbl_sells')
        ->select('order_date_month', DB::raw("SUM(order_total) as order_total"))
	    ->groupBy('order_date_month')
	    ->orderBy('order_date_month')
	    ->get();

	 
    return view('admin.sell_report')->with('sell_daily', $sell_daily)->with('sell_monthly', $sell_monthly);
    }

    

public function AuthCheck(){

      $admin_id=Session::get('admin_id');

      if($admin_id){return;}

      else{
        return Redirect::to('/admin')->send();
      }
}

}
