<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;
session_start();

class ProductController extends Controller
{
     
   public function add_product(){
   $this->AuthCheck();
   	return view('admin.add_product');
   }





   public function all_product(){
   	$this->AuthCheck();

     $all_product_retrive=DB::table('tbl_products')
                        ->join('tbl_category', 'tbl_products.category_id', '=',
                        	'tbl_category.category_id')
                        ->join('tbl_sub_category', 'tbl_products.sub_category_id', '=',
                          'tbl_sub_category.sub_category_id')

                        ->join('manufacture',  'tbl_products.manufacture_id', '=', 'manufacture.manufacture_id')

                        ->get();

     
 
     $manage_all_product=view('admin.all_product')->with('all_product_retrive',$all_product_retrive);

     return view('admin.admin_layout')
     ->with('admin.all_product',$manage_all_product);

    // return view('admin.all_category')->with('all_category_retrive',$all_category_retrive);
 // echo "<pre>";
    //  print_r($all_product_retrive);
     //echo "</pre>";

   }

  

   public function save_product(Request $request){
   $this->AuthCheck();

    $validate = $request->validate([
        'product_name' => 'required|min:3|max:50',
        'product_description' => 'required',
        'product_unit' => 'required|string',
        'product_price' => 'required|integer|min:2|max:3',
        'product_stock' => 'required|integer|min:1',
        'product_purchase_cost' => 'required|integer|min:2',
        'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);



   	$data=array();

     $data['product_name']=$request->product_name;
   	 $data['category_id']=$request->category_id;
     $data['sub_category_id']=$request->sub_category_id;
   	 $data['manufacture_id']=$request->manufacture_id;
   	 
   	 $data['product_description']=$request->product_description;
     $data['product_unit']=$request->product_unit;
   	 $data['product_price']=$request->product_price;
     $data['product_stock']=$request->product_stock;
     $data['product_purchase_cost']=$request->product_purchase_cost;
     $data['product_current_stock']=$request->product_stock;
   

   	 $image=$request->file('product_image');

   	        if($image){

   	 	       $image_name=str_random(30);
   	 	       $ext=strtolower($image->getClientOriginalExtension());

   	 	       $image_fullname=$image_name.'.'.$ext;

   	 	       $upload_path='image/';

   	 	       $image_url=$upload_path.$image_fullname;
   	 	       $success=$image->move($upload_path,$image_fullname);

   	 	               if($success){
   	 	       	        $data['product_image']=$image_url;
               
   	 	       	        DB::table('tbl_products')->insert($data);
   	 	       	        return Redirect::to('/add_product');
   	 	               }
   	        }

            $data['product_image']='';

   	 		DB::table('tbl_products')->insert($data);
   	 		return Redirect::to('/add_product');

   }//function end

//edit

public function edit_product($product_id){

      $this->AuthCheck();
      $edit_product=DB::table('tbl_products')
      ->where('product_id',$product_id)
      ->first();
     
     return view('admin.edit_product')->with('edit_product',$edit_product); 
}

//update 
public function update_product(Request $request, $product_id){
    
    $old_data=DB::table('tbl_products')->where('product_id', $product_id)->first();

    $this->AuthCheck();
    $data=array();

     $data['product_name']=$request->product_name;
     $data['category_id']=$request->category_id;
     $data['sub_category_id']=$request->sub_category_id;
     $data['manufacture_id']=$request->manufacture_id;
     
     $data['product_description']=$request->product_description;
     $data['product_unit']=$request->product_unit;
     $data['product_price']=$request->product_price;
     $data['product_purchase_cost']=$request->product_purchase_cost;
     $data['product_stock']=$request->product_stock;
     
     $stock_difference=$data['product_stock']-$old_data->product_stock;

     $data['product_current_stock']=$old_data->product_current_stock + $stock_difference;
   

     $image=$request->file('product_image');

            if($image){

             $image_name=str_random(30);
             $ext=strtolower($image->getClientOriginalExtension());

             $image_fullname=$image_name.'.'.$ext;

             $upload_path='image/';

             $image_url=$upload_path.$image_fullname;
             $success=$image->move($upload_path,$image_fullname);

                     if($success){
                      $data['product_image']=$image_url;
               
                      DB::table('tbl_products')->where('product_id',$product_id)->update($data);
                      return Redirect::to('/all_product');
                     }
            }

            $data['product_image']='';

    
     DB::table('tbl_products')->where('product_id',$product_id)->update($data);

     Session::get('message','product Updated Successfully');
     return Redirect::to('/all_product');
}

  

public function delete_product($product_id){

       $this->AuthCheck();

          DB::table('tbl_products')->where('product_id',$product_id)->delete();
          Session::get('message','Product Deleted  Successfully');
          return Redirect::to('/all_product');

     }//function end




public function AuthCheck(){

      $admin_id=Session::get('admin_id');

      if($admin_id){return;}

      else{
        return Redirect::to('/admin')->send();
      }
}

    


}
