
@extends('pages.layout')
@section('content')

<?php 
$content=Cart::content();
?>


					<div class="col-md-10">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">My Cart</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th class="text-center">Product</th>
										<th class="text-center">Detail</th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($content as $v_content)
									<tr>
										<td class="thumb">
										<img src="{{URL::to($v_content->options->image)}}"></td>
										<td class="details">
											<a href="#">{{$v_content->name}}</a>
											<p>Product ID : {{$v_content->id}} </p>
											
										</td>
										<td class="price text-center">{{$v_content->price}}tk per kg<strong></strong><br></td>

                                        <!--form to update quantity-->
                                        <form method="post" action="{{url('/update_cart_qty')}}">
                                        	{{csrf_field()}}
										<td class="qty text-center">
										<input class="input" type="number" name="qty" value="{{$v_content->qty}}">

										<input  type="hidden" name="rowId" value="{{$v_content->rowId}}">

                                        <input type="submit" name="submit" value="Update">

										</td>
                                        </form>


										<td class="total text-center"><strong class="primary-color">{{$v_content->total}}tk</strong></td>



										<td class="text-right">
											
											<a href="{{URL::to('/delete_cart/'.$v_content->rowId)}}">Delete</a>
										    
										</td>
									</tr>
                                  @endforeach
									
								</tbody>

								<tfoot>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total">{{Cart::total()}}</th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPING</th>
										<td colspan="2">Free Shipping</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total">{{Cart::total()}}</th>
									</tr>
								</tfoot>
							</table>
							
						</div>
 

<?php 
$customer_id=Session::get('customer_id');
$cart_total=Cart::total();
?>
                @if($customer_id !=NULL)
				<div class="pull-right">

                <a href="{{URL::to('/delivery_detail/'.$cart_total)}}">
				<button class="primary-btn" type="submit">Place Order</button>
                </a>
                </div>
                @else

                <div class="pull-right">

                <a href="{{URL::to('/customer_login_or_signup')}}">
				<button class="primary-btn" type="submit">Place Order</button>
                </a>
                </div>

                @endif


</div>




					
					


@endsection