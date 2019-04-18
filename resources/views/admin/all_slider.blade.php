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
						<h2><span class="break"></span>All Slider </h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead >
							  <tr>
								
								  <th>Slider id</th> 
								  <th>Image</th>
							
				                  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
                             
                             @foreach($all_slider_retrive as $view_all_slider_retrive)


							<tr>
								<td>{{$view_all_slider_retrive->slider_id}}</td>
								
								<td><img src="{{URL::to($view_all_slider_retrive->slider_image)}}" style="height: 120px; width: 200px"></td>
							


							<td class="center">
									
									
									<a class="btn btn-danger" href="{{URL::to('/delete_slider/'. $view_all_slider_retrive->slider_id)}}" id="delete">
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