<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();


class ManufactureController extends Controller
{
     //for showing brands to the front end layout 
public function add_manufacture(){
$this->AuthCheck();
        return view('admin.add_manufacture');
}
    



public function all_manufacture(){
$this->AuthCheck();
    $all_manufacture_retrive=DB::table('manufacture')->get();
    return view('admin.all_manufacture')->with('all_manufacture_retrive',$all_manufacture_retrive);
}

    
public function save_manufacture(Request $request){
$this->AuthCheck();
   	  $data=array();

   	 $data['manufacture_id']=$request->manufacture_id;
   	 $data['manufacture_name']=$request->manufacture_name;
   	 $data['manufacture_description']=$request->manufacture_description;
   	 
     DB::table('manufacture')->insert($data);

    Session::put('message','Manufacture added');
    return Redirect::to ('/add_manufacture');
   }


public function edit_manufacture($manufacture_id){
$this->AuthCheck();
      $manufacture_edit=DB::table('manufacture')
      ->where('manufacture_id',$manufacture_id)
      ->first();
     
    $manage_edit_manufacture=view('admin.edit_manufacture')->with('manufacture_edit',$manufacture_edit);

     return view('admin.admin_layout')->with('admin.edit_manufacture',$manage_edit_manufacture);       
     
}




public function update_manufacture(Request $request, $manufacture_id){
$this->AuthCheck();
    $data=array();
     
     $data['manufacture_name']=$request->manufacture_name;
     $data['manufacture_description']=$request->manufacture_description;

     DB::table('manufacture')->where('manufacture_id',$manufacture_id)->update($data);

     Session::get('message','Brands Updated Successfully');
     return Redirect::to('/all_manufacture');
     
}

public function delete_manufacture($manufacture_id){
     $this->AuthCheck();
          DB::table('manufacture')->where('manufacture_id',$manufacture_id)->delete();
          Session::get('message','Brand Deleted  Successfully');
          return Redirect::to('/all_manufacture');
}



public function top_manufacture(){

return view('admin.top_manufacture');
}


public function save_top_manufacture(Request $request){
  
  $data=array();

     $data['top_manufacture_id']=$request->top_manufacture_id;
     
     $data['top_manufacture_name']=$request->top_manufacture_name;
     $data['top_manufacture_city']=$request->top_manufacture_city;
     $data['top_manufacture_address']=$request->top_manufacture_address;
     $data['top_manufacture_phone']=$request->top_manufacture_phone;

$image=$request->file('top_manufacture_image');

            if($image){

             $image_name=str_random(30);
             $ext=strtolower($image->getClientOriginalExtension());

             $image_fullname=$image_name.'.'.$ext;

             $upload_path='image/';

             $image_url=$upload_path.$image_fullname;
             $success=$image->move($upload_path,$image_fullname);

                     if($success){
                      $data['top_manufacture_image']=$image_url;
               
                      DB::table('tbl_top_manufacture')->insert($data);
                      return Redirect::to('/top_manufacture');
                     }
            }

            $data['top_manufacture_image']='';

        DB::table('tbl_top_manufacture')->insert($data);
        return Redirect::to('top_manufacture');

  }


public function all_top_manufacture(){

     $all_top_manufacture=DB::table('tbl_top_manufacture')
                        ->get();

     return view('admin.all_top_manufacture')->with('all_top_manufacture',$all_top_manufacture);

}



public function delete_top_manufacture($top_manufacture_id){

       $this->AuthCheck();

          DB::table('tbl_top_manufacture')->where('top_manufacture_id',$top_manufacture_id)->delete();
          
          return Redirect::to('/all_top_manufacture');
}



   public function AuthCheck(){

    	$admin_id=Session::get('admin_id');

    	if($admin_id){return;}

    	else{
    		return Redirect::to('/admin')->send();
    	}
    }

}
