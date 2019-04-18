@extends('admin.admin_layout')


@section('admin_content')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead >
							  <tr>
								  <th>Category id</th>
								  <th>Category name</th>
								  <th>Category description</th>
				                  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
                             
                             @foreach($all_category_retrive as $view_all_category_retrive)


							<tr>
								<td>{{$view_all_category_retrive->category_id}}</td>
								<td class="center">{{$view_all_category_retrive->category_name}} </td>
								<td class="center">{{$view_all_category_retrive->category_description}}</td>
							


							<td class="center">
									
									<a class="btn btn-info" href="{{URL::to('/edit_category/'. $view_all_category_retrive->category_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete_category/'. $view_all_category_retrive->category_id)}}" id="delete">
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