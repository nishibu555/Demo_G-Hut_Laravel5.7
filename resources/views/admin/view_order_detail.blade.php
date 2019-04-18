@extends('admin.admin_layout')


@section('admin_content')




<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><span class="break">Order(cart) </span> </h2>

						<div class="box-icon">
							
						</div>
					</div> 

						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead >
						  	
							  <tr>
								
								  <th>Order(cart) ID</th> 
								  <th>Customer ID</th>
								  <th>Customer Name</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
                           
                            
                           
							<tr>
								<td>{{$order_detail->order_id}}</td>
								<td>{{$order_detail->customer_id}}</td>
								<td>{{$order_detail->customer_name}}</td>

						    </tr>
						   
						  
						  </tbody>
					  </table>            
  
</div>



<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><span class="break">Order Detail (all purchased products of cart: <b>{{$order_detail->order_id}}</b> )</span> </h2>

						<div class="box-icon">
							
						</div>
					</div>  
<div class="box-content">

						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead >
						   	  <tr>
								
								  
								  <th>Product ID</th>
								  <th>Product Name</th>
								  <th>Price</th>
								  <th>Qty</th>
								  <th>Total</th>
								  

							  </tr>
						  </thead>   
						  <tbody>
						  	<?php 
                             $total=0;
						  	?>
                             @foreach($cart_detail as $cart_detail)
                            <tr>
                            	<td>{{$cart_detail->product_id}}</td>
                            	<td>{{$cart_detail->product_name}}</td>
                            	<td>{{$cart_detail->product_price}}</td>
                            	<td>{{$cart_detail->product_quantity}}</td>
                            	<td>{{$cart_detail->total}}</td>
                             <?php 
                               $total=$total+$cart_detail->total;
                             ?>
                            </tr>
                            @endforeach
                            
                            <tr>
                             <td colspan="5" style="text-align: right;"><b>Order Total : {{$total}}<b></td>
                            </tr>	
                       

							
						  </tbody>
					  </table>            
</div><!--Box Content--->   
</div>


<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><span class="break">Delivery Detail</span> </h2>

						<div class="box-icon">
							
						</div>
					</div>  
<div class="box-content">

						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead >
							  <tr>
								
								  <th>Delivery ID</th> 
								  <th>Whom to delivery</th>
								  <th>Contact</th>
								  <th>City</th>
								  <th>Address</th>
								  <th>Payment Method</th>


							  </tr>
						  </thead>   
						  <tbody>
                             
                           

							<tr>
								<td>{{$order_detail->delivery_id}}</td>
								<td>{{$order_detail->delivery_name}}</td>
								<td>{{$order_detail->delivery_phone}}</td>
								<td>{{$order_detail->delivery_city}}</td>
								<td>{{$order_detail->delivery_address}}</td>
								<td>{{$order_detail->payment_method}}<br>{{$order_detail->payment_account}}</td>
								
						    </tr>
							
						 
						  </tbody>
					  </table> 

</div><!--Box Content--->   
</div>



@endsection