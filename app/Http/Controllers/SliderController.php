<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;



class SliderController extends Controller
{
    public function add_slider(){
  return view('admin.add_slider');
}



 public function save_slider(Request $request){
 

    $this->AuthCheck();
    $data=array();

    $image=$request->file('slider_image');


   	        if($image){

   	 	       $image_name=str_random(30);
   	 	       $ext=strtolower($image->getClientOriginalExtension());

   	 	       $image_full_name=$image_name.'.'.$ext;



   	 	       $upload_path='slider/';

   	 	       $image_url=$upload_path.$image_full_name;
   	 	       $success=$image->move($upload_path,$image_full_name);

   	 	               //if($success){
   	 	       	        $data['slider_image']=$image_url;
               
   	 	       	        DB::table('tbl_slider')->insert($data);
   	 	       	        return Redirect::to('/add_slider');
   	 	              // }
   	 	               echo "<pre>";
   	 	       print_r($image_full_name);
   	 	       echo "</pre>";
   	 		//return Redirect::
   	        }
            else echo 'no image';
            //$data['slider_image']='';

   	 		//DB::table('tbl_slider')->insert($data);
   	 		

             // to('/add_slider');

   }//function end











public function all_slider(){

 //$this->AuthCheck();
     $all_slider_retrive=DB::table('tbl_slider')->get();

     $manage_all_slider=view('admin.all_slider')->with('all_slider_retrive',$all_slider_retrive);

     return view('admin.admin_layout')->with('admin.all_slider',$manage_all_slider);

     // return view('admin.all_category')->with('all_category_retrive',$all_category_retrive);

	
}


    public function delete_slider($slider_id){

    	 $this->AuthCheck();

          DB::table('tbl_slider')->where('slider_id',$slider_id)->delete();
          Session::get('message','Slider Deleted  Successfully');
          return Redirect::to('/all_slider');

     }//function end

public function AuthCheck(){

    	$admin_id=Session::get('admin_id');

    	if($admin_id){return;}

    	else{
    		return Redirect::to('/admin')->send();
    	}
    }
}
