@extends('admin.admin_layout')


@section('admin_content')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2></i><span class="break"></span>All Brands</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead >
							  <tr>
								  <th>Manufacture id</th>
								  <th>Manufacture name</th>
								  <th>Manufacture description</th>
				                  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
                             
                             @foreach($all_manufacture_retrive as $view_all_manufacture_retrive)


							<tr>
								<td>{{$view_all_manufacture_retrive->manufacture_id}}</td>
								<td class="center">{{$view_all_manufacture_retrive->manufacture_name}} </td>
								<td class="center">{{$view_all_manufacture_retrive->manufacture_description}}</td>
							


							<td class="center">
									
									<a class="btn btn-info" href="{{URL::to('/edit_manufacture/'. $view_all_manufacture_retrive->manufacture_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete_manufacture/'. $view_all_manufacture_retrive->manufacture_id)}}" id="delete">
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