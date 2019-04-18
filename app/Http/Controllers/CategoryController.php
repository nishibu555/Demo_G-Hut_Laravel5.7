<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class CategoryController extends Controller
{
 

   public function index(){
    $this->AuthCheck();
    return view('admin.add_category');
   }


    public function add_sub_category(){
    $this->AuthCheck();
    return view('admin.add_sub_category');
   }

   public function save_sub_category(Request $request){
    
    $data=array();

    $data['category_id']=$request->category_id;
    $data['sub_category_name']=$request->sub_category_name;
   


    DB::table('tbl_sub_category')->insert($data);

   
    return Redirect::to ('/add_sub_category');
   }



public function all_category(){
     $this->AuthCheck();
     $all_category_retrive=DB::table('tbl_category')->get();

     return view('admin.all_category')->with('all_category_retrive',$all_category_retrive);
}




public function save_category(Request $request){
    $this->AuthCheck();

   	$data=array();

   	$data['category_id']=$request->category_id;
   	$data['category_name']=$request->category_name;
   	$data['category_description']=$request->category_description;
   	 

    DB::table('tbl_category')->insert($data);

    Session::put('message','Category added');
    return Redirect::to ('/add_category');
   }



public function edit_category($category_id){

      $this->AuthCheck();
      $category_edit=DB::table('tbl_category')
      ->where('category_id',$category_id)
      ->first();
     
     $manage_edit_category=view('admin.edit_category')->with('category_edit',$category_edit);

     return view('admin.admin_layout')->with('admin.edit_category',$manage_edit_category); 
}


public function update_category(Request $request, $category_id){

    $this->AuthCheck();
    $data=array();

     $data['category_name']=$request->category_name;
     $data['category_description']=$request->category_description;

     DB::table('tbl_category')->where('category_id',$category_id)->update($data);

     Session::get('message','Category Updated Successfully');
     return Redirect::to('/all_category');
}



public function delete_category($category_id){
           $this->AuthCheck();
          DB::table('tbl_category')->where('category_id',$category_id)->delete();
          Session::get('message','Category Deleted  Successfully');
          return Redirect::to('/all_category');

}





public function AuthCheck(){

      $admin_id=Session::get('admin_id');

      if($admin_id){return;}

      else{
        return Redirect::to('/admin')->send();
      }
}
    

}
