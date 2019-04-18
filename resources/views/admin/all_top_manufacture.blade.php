@extends('admin.admin_layout')


@section('admin_content')

<div class="row-fluid sortable">

		

				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><span class="break"></span>Top Manufacture</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead >
							  <tr>
								
								  <th>Id</th> 
								   <th>Name</th>
								  <th>City</th>
								  <th>Address</th>
								  
						
								 
								  <th>Image</th>
				                  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
                             
                             @foreach($all_top_manufacture as $all_top_manufacture)


							<tr>
								<td>{{$all_top_manufacture->top_manufacture_id}}</td>
								<td>{{$all_top_manufacture->top_manufacture_name}}</td>
								<td>{{$all_top_manufacture->top_manufacture_city}}</td>
								<td>{{$all_top_manufacture->top_manufacture_address}}</td>
								
								
								<td><img src="{{URL::to($all_top_manufacture->top_manufacture_image)}}" style="height: 50px; width: 50px"></td>
							


							<td class="center">
									
									
									<a class="btn btn-danger" href="{{URL::to('/delete_top_manufacture/'. $all_top_manufacture->top_manufacture_id)}}" id="delete">
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