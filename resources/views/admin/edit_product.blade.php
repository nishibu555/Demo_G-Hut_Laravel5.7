
@extends('admin.admin_layout')


@section('admin_content')

			<div class="container-fluid-full">
		<div class="row-fluid">
				
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2></i><span class="break"></span>Add New Product</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">

<p class="alert-success">
	<?php $message=Session::get('message'); 
     if($message){
     	echo $message;
         Session::put('message',"NULL");
     }
    
	?>

</p>


                    <form class="form-horizontal" method="post" action="{{ url('/update_product/'. $edit_product->product_id)}}" enctype="multipart/form-data">

							{{csrf_field()}}
                              	  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Product Name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="product_name" value="{{$edit_product->product_name}}">
							  </div>
							</div>

							<div class="control-group">
								<label class="control-label" for="selectError3">Category</label>

								
                             <?php    $front_category=DB::table('tbl_category')->get();?>
                                    
                             
                                
								<div class="controls">
								 <select id="selectError3" name="category_id">

								  	 @foreach ($front_category as $view_front_category)
                                      <option value="{{$view_front_category->category_id}}"> {{$view_front_category->category_name}}</option>
                                      @endforeach
                                        
                                 </select>
                                
								</div>
								
							</div>


							<div class="control-group">
								<label class="control-label" for="selectError3">Sub Category</label>

								
                             <?php    $sub_category=DB::table('tbl_sub_category')->get();?>
                                    
                             
                                
								<div class="controls">
								 <select id="selectError3" name="sub_category_id">

								  	 @foreach ($sub_category as $sub_category)
 
                                      <option value="{{$sub_category->sub_category_id}}"> {{$sub_category->sub_category_name}}</option>
                                      
                                      @endforeach
                                       
                                 </select>
                                
								</div>
								
							</div>
                              
                                       
                            

                            <div class="control-group">
								<label class="control-label" for="selectError3">Manufacture</label>
								<div class="controls">

								  <select id="selectError3" name="manufacture_id">

								  	<?php 
                                    $front_manufacture=DB::table('manufacture')->get();
                             
                                     foreach ($front_manufacture as $view_manufacture) {?>
 
                                      <option value="{{$view_manufacture->manufacture_id}}"> {{$view_manufacture->manufacture_name}}</option>
                                                       
                                     <?php  } ?>
									
									
								  </select>
								</div>
							 </div>



							          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="product_description" >{{$edit_product->product_description}}</textarea>
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="date01">Unit</label>
							  <div class="controls">
							  <input type="text" class="input-xlarge" name="product_unit" value="{{$edit_product->product_unit}}"></div>
							</div>                   

                            <div class="control-group">
							  <label class="control-label" for="date01">Price per unit</label>
							  <div class="controls">
							  <input type="text" class="input-xlarge" name="product_price" value="{{$edit_product->product_price}}"></div>
							</div>
                          
                            <div class="control-group">
							  <label class="control-label" for="date01">Purchase cost</label>
							  <div class="controls">
							  <input type="text" class="input-xlarge" name="product_purchase_cost" value="{{$edit_product->product_purchase_cost}}"></div>
							</div>

                          
                            <div class="control-group">
							  <label class="control-label" for="date01">Stock</label>
							  <div class="controls">
							  <input type="text" class="input-xlarge" name="product_stock" value="{{$edit_product->product_stock}}"></div>
							</div>


                           <div class="control-group">
							  <label class="control-label" for="fileInput">Upload Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="product_image" type="file" value="{{$edit_product->product_image}}">
							  </div>
							</div>


							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update</button>
							</div>
						  </fieldset>
						
					        
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection