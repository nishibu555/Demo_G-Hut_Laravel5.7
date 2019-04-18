@extends('admin.admin_layout')


@section('admin_content')

<div class="row-fluid sortable">


<p class="alert-success">
	<?php $message=Session::get('message'); 
     if($message){
     	echo $message;
        Session::put('message',"NULL");
     }
    
	?>


</p>		


				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><span class="break"></span>All Product Detail </h2>
						<div class="box-icon">
							
						</div>
					</div>
					
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead >
							  <tr>
								
								  <th>Product id</th> 
								   <th>Name</th>
								   <th>Category</th>
			                       <th>Manufacturer</th>
								  
								  <th>Unit</th>
								  <th>Price per unit</th>
								  <th>Purchase cost</th>
								  <th>Initial Stock</th>
								  <th>Current Stock</th>
								
								  <th>Image</th>
				                  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
                             
                             @foreach($all_product_retrive as $view_all_product_retrive)


							<tr>
								<td>{{$view_all_product_retrive->product_id}}</td>
								<td>{{$view_all_product_retrive->product_name}}</td>
								<td>{{$view_all_product_retrive->category_name}}</td>
								<td>{{$view_all_product_retrive->manufacture_name}}</td>
								<td>{{$view_all_product_retrive->product_unit}}</td>

								<td>{{$view_all_product_retrive->product_price}}</td>

								<td>{{$view_all_product_retrive->product_purchase_cost}}</td>
								<td><b>{{$view_all_product_retrive->product_stock}} </b> <small>{{$view_all_product_retrive->product_unit}}</small> </td>

								<td><b style="color:red">{{$view_all_product_retrive->product_current_stock}}</b>  <small>{{$view_all_product_retrive->product_unit}}</small></td>
								
								<td><img src="{{URL::to($view_all_product_retrive->product_image)}}" style="height: 50px; width: 50px"></td>
							


							<td class="center">
									
									<a class="btn btn-info" href="{{URL::to('/edit_product/'. $view_all_product_retrive->product_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete_product/'. $view_all_product_retrive->product_id)}}" id="delete">
										<i class="halflings-icon white trash"></i> 
									</a>
							</td>
							
						</tr>
							@endforeach
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div>


@endsection