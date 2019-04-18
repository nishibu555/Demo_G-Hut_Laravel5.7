<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;


use DB;
use Session;

class FrontController extends Controller
{
    
 
//frontend page with products show from backend
 public function index(){

 $all_product=DB::table('tbl_products')
            ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
            ->join('manufacture',  'tbl_products.manufacture_id', '=', 'manufacture.manufacture_id')
             ->select('tbl_products.*' ,  'tbl_category.category_name' ,'manufacture.manufacture_name')                   
             ->paginate(6);
 
$manage_all_product=view('pages.products_page')->with('all_product',$all_product);
 
return view('pages.layout')->with('pages.products_page', $manage_all_product);  
             
 }


// //Category wise product dekhabe
public function product_by_category($category_id){

	$product_by_category=DB::table('tbl_products')
                        ->join('tbl_category', 'tbl_products.category_id', '=',
                        	'tbl_category.category_id')
                        ->select('tbl_products.*' ,  'tbl_category.category_name') 
                        ->where('tbl_category.category_id',$category_id)
                        ->paginate(6);

   
   $manage_product_by_category=view('pages.product_by_category')->with('product_by_category',$product_by_category);

   return view('pages.layout')->with('pages.product_by_category', $manage_product_by_category); 
   //echo "<pre>";
   //print_r($product_by_category);  
   //echo "</pre>";                  
}


public function product_by_sub_category($sub_category_id){

  $product_by_sub_category=DB::table('tbl_products')
                        ->join('tbl_category', 'tbl_products.category_id', '=',
                          'tbl_category.category_id')
                        ->join('tbl_sub_category', 'tbl_products.sub_category_id', '=',
                          'tbl_sub_category.sub_category_id')

                        ->select('tbl_products.*' ,  'tbl_category.category_name') 
                        ->where('tbl_sub_category.sub_category_id',$sub_category_id)
                        ->paginate(6);
   
   $manage_product_by_sub_category=view('pages.product_by_sub_category')->with('product_by_sub_category',$product_by_sub_category);

   return view('pages.layout')->with('pages.product_by_sub_category', $manage_product_by_sub_category); 
                    
}



public function  product_by_manufacture($manufacture_id) {

$product_by_manufacture=DB::table('tbl_products')
                        ->join('manufacture', 'tbl_products.manufacture_id', '=', 'manufacture.manufacture_id')
                        ->select('tbl_products.*', 'manufacture.manufacture_name')
                        ->where('manufacture.manufacture_id', $manufacture_id)
                        ->paginate(6);

return view('pages.product_by_manufacture')->with('product_by_manufacture',$product_by_manufacture);             

} 


public function view_product_detail($product_id){

  $view_detail=DB::table('tbl_products')
                        ->join('tbl_category', 'tbl_products.category_id', '=',
                           'tbl_category.category_id')
                        ->join('manufacture',  'tbl_products.manufacture_id', '=', 'manufacture.manufacture_id')
                        ->select('tbl_products.*' ,  'tbl_category.category_name','manufacture.manufacture_name') 
                        ->where('tbl_products.product_id',$product_id)     
                        ->first();

   $manage_detail=view('pages.view_product_detail')->with('view_detail',$view_detail);
   return view('pages.layout')->with('pages.view_product_detail', $manage_detail);


}



}
