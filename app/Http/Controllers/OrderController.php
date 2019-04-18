<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;
use Session;
session_start();

class OrderController extends Controller
{



public function order_confirmed(Request $request){
    //Data to store in delivery table
    $ddata=array();
    $ddata['delivery_name']=$request->delivery_name;
    $ddata['delivery_phone']=$request->delivery_phone;
    $ddata['delivery_city']=$request->delivery_city;
    $ddata['delivery_address']=$request->delivery_address;
    $ddata['payment_method']=$request->payment_method;
    $ddata['payment_account']=$request->payment_account;
    $ddata['cart_total']=$request->cart_total;

    $delivery_id=DB::table('tbl_delivery')
                      ->insertGetId($ddata);
    
    //Data to store in order table
	  $odata=array();
    $odata['order_total']=$request->cart_total;
    $odata['order_date']=date('d-m-Y');
    $odata['delivery_id']=$delivery_id;
	  $odata['customer_id']=Session::get('customer_id');

	  $order_id=DB::table('tbl_order')
                      ->insertGetId($odata);
    
    //Data to store in sell table
    $sell=array();
    $sell['order_total']=$request->cart_total; 
    $sell['order_date_month']=date('m-Y');// for getting monthly sell report
    $sell['order_date']=date('d-m-Y');//for getting daily sell report
    DB::table('tbl_sells')->insert($sell);
 
     $cart=Cart::content(); //get cart contents

     //get purchased/ordered products list from the shopping cart
     $oddata=array();

  foreach($cart as $cart){
     $oddata['order_id']=$order_id;
     $oddata['product_id']=$cart->id;
     $oddata['product_name']=$cart->name;
     $oddata['product_price']=$cart->price;
     $oddata['product_quantity']=$cart->qty;
     $oddata['total']=$cart->total;
     
     //get the purchased products current stock
     $a = DB::table('tbl_products')->where('product_id', $cart->id)->value('product_current_stock');
     //Set reduced stock after purchase or order confirmed
     
     $new_stock=$a - $cart->qty;
    
     //update reduced stock after purchase or order confirmed
     $data=array();
     $data['product_current_stock']=$new_stock;
     DB::table('tbl_products')->where('product_id',$oddata['product_id'])->update($data);
      
     //Delete product from base table when stock becomes zero 
     if($data['product_current_stock']== NULL){
       DB::table('tbl_products')->where('product_id',$oddata['product_id'])->delete();
     }
     
     //Insert purchased products detail to order_detail table
     $order_detail_id=DB::table('tbl_order_detail')
                      ->insertGetId($oddata);
  } //endforeach
     
        
                  
    //Destroy cart after order confirmed.
  Cart::destroy();

	return Redirect::to('/products');

}






//Order detail at backend 
public function manage_order(){
    $this->AuthCheck();
	$all_order=DB::table('tbl_order')

                        ->join('tbl_customer', 'tbl_order.customer_id', '=',
                        	'tbl_customer.customer_id')

                        ->select('tbl_order.*', 'tbl_customer.customer_id', 'tbl_customer.customer_name')

                        ->get();

     
 
    $manage_all_order=view('admin.manage_order')->with('all_order',$all_order);

     return view('admin.admin_layout')
     ->with('admin.manage_order',$manage_all_order);
}



public function view_order_detail($order_id)
{

$this->AuthCheck();
$order_detail=DB::table('tbl_order')
                       ->join('tbl_customer', 'tbl_order.customer_id', '=',
                        	'tbl_customer.customer_id')                       
                        ->join('tbl_delivery', 'tbl_order.delivery_id', '=',
                        'tbl_delivery.delivery_id')
                        ->where('order_id', $order_id)
                        ->first();

 $cart_detail=DB::table('tbl_order_detail')
                   ->where('order_id',$order_id)
                   ->get();
                   

 return view('admin.view_order_detail')
   ->with('cart_detail', $cart_detail)
   ->with('order_detail', $order_detail);

   
}




public function delete_order($order_id){
  $this->AuthCheck();
  DB::table('tbl_order')->where('order_id',$order_id)->delete();

  return Redirect::to('/manage_order');
}



public function AuthCheck(){

      $admin_id=Session::get('admin_id');

      if($admin_id){return;}

      else{
        return Redirect::to('/admin')->send();
      }
}

}//end main










