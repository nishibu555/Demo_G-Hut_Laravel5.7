@extends('pages.layout')

@section('content')




<div class="col-md-8">

<form method="post" action="{{url('/order_confirmed')}}">
	{{csrf_field()}}

						<div class="billing-details"><br><br>
							
							<div class="section-title">
								<h3 class="title">Delivery Details</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="delivery_name" placeholder="Full Name" required="">
							</div>
							
						
							<div class="form-group">
								<input class="input" type="tel" name="delivery_phone" placeholder="Contact Number" required="">
							</div>
							
							<div class="form-group">
								<input class="input" type="text" name="delivery_city" placeholder="City" required="">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="delivery_address" placeholder="Detail Address" required="">
							</div>


  
							


                         <div class="shiping-methods">

	                        <br><br><br><br>
							<div class="section-title">
								<h4 class="title">Payments Methods</h4>
							</div>
							
							<div class="input-checkbox">
								<input type="radio" name="payment_method" value="bkash" >
								<label for="shipping-1">Bkash</label>
								
							</div>
							
						     <div class="input-checkbox">
								<input type="radio" name="payment_method" value="rocket" >
								<label for="shipping-1">Rocket</label>
								
						     </div>
							
							
							
                         </div><!--shipping method-->
                             <div class="form-group">
								<input class="input" type="text" name="payment_account" placeholder="Bkash/Roket account number" required="">
							</div>


							<div class="form-group">
								<input type="hidden" name="cart_total" value="{{$cart_total}}">
							</div>


				<div class="pull-left">

                <a href="{{URL::to('/order_confirmed')}}">
				<button class="primary-btn" type="submit">Confirm Order</button>
                </a>

			
				</div>

	</form>

	</div>
</div>  

@endsection