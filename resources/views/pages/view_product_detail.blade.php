@extends('pages.layout')

@section('content')
<div class="section">
	
		<div class="container">
		
			<div class="row">
				
				<div class="product product-details clearfix">
					<div class="col-md-6">
						<div id="product-main-view">
							<div class="product-view">
								<img src="{{URL::to($view_detail->product_image)}}" alt="">
							</div>
							
						</div>
						
					</div>

                  
					<div class="col-md-3">
						<div class="product-body">
							
							<h2 class="product-name">{{$view_detail->product_name}}</h2>
							<h4 class="product-price">{{$view_detail->product_price}}
							tk per kg</h4>
							
							
							<p><strong>Product ID: </strong>{{$view_detail->product_id}}</p>
							<p><strong>Manufacture: </strong>{{$view_detail->manufacture_name}}</p>
							
							<p>{{$view_detail->product_description}}</p>
							
						<form  method="post" action="{{url('/cart')}}">
								{{csrf_field()}}
							<div class="product-btns">
								<div class="qty-input">
									<span class="text-uppercase">Quantity: </span>
									<input class="input" type="number" name="qty">
									<br><br>
								</div>
								<input type="hidden" name="product_id" value="{{$view_detail->product_id}}">


								<button class="primary-btn add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
						
							</div>
						</form>
						</div>
					</div>



				<!-- /Product Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
@endsection