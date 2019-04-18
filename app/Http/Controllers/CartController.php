<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use Session;
session_start();

class CartController extends Controller
{
   

public function index(Request $request){

 
  $product_id=$request->product_id;

  $product_detail=DB::table('tbl_products')
                            ->where('product_id', $product_id)
                            ->first();


  $data=array();

  $data['qty']=$request->qty; 
  $data['id']=$product_detail->product_id;
  $data['name']=$product_detail->product_name;
  $data['price']=$product_detail->product_price;
  $data['options']['product_stock']=$product_detail->product_stock;
 
  $data['options']['image']=$product_detail->product_image;

  Cart::add($data);
  return Redirect::to('/my_cart');
 
  
}


public function my_cart(){

	return view('pages.my_cart');
}



public function delete_cart($rowId){

Cart::update($rowId,0);
return Redirect::to('/my_cart');
}


public function update_cart_qty(Request $request){

$qty=$request->qty;
$rowId=$request->rowId;	

Cart::update($rowId,$qty);
return Redirect::to('/my_cart');
}


}


