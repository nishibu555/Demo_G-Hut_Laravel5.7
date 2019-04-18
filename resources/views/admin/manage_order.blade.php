@extends('admin.admin_layout')


@section('admin_content')


<div class="box span12">
	<p>One customer can make one order at a time. This table shows individual shopping cart id (order id), date of making that order and customer name and id who make this order<br></p>
					
					<div class="box-header" data-original-title>
						<h2><span class="break"> All Order(Cart)</span> </h2>

						<div class="box-icon">
							
						</div>
					</div>

   
   
<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead >
							  <tr>
								
								  <th>Order ID (Shopping cart ID)</th> 
								  <th>Total Ammount (Cart total)</th>
								  <th>Date of order</th>
								  <th>Customer Name</th>
								  
								  
				                  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
                             
                             @foreach($all_order as $all_order )


							<tr>
								<td>{{$all_order->order_id}}</td>
								<td>{{$all_order->order_total}}</td>
								<td>{{$all_order->order_date}}</td>
								<td>{{$all_order->customer_name}}   [ ID: {{$all_order->customer_id}} ]</td>
								
								
								
						




							<td class="center">

								   <a class="btn btn-info" href="{{URL::to('/view_order_detail/'.$all_order->order_id)}}">
										<i>View detail</i>  
									</a>	
								<!--<a class="btn btn-info" href="{{URL::to('/edit_order/'.$all_order->order_id)}}">
										<i>Edit</i>-->  
									</a>
								<a class="btn btn-danger" href="{{URL::to('/delete_order/'.$all_order->order_id)}}" id="delete">
										<i>Delete</i> 
									</a>
							</td>
							
						</tr>
							@endforeach
							
						  </tbody>
					  </table>            
</div><!--Box Content--->   







</div>

@endsection