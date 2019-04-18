

@section('slider')

<?php 
$all_slider=DB::table('tbl_slider')->get();
?>

                   
<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					<!-- banner --> 
					@foreach($all_slider as $all_slider)
					<div class="banner banner-1">
						<img src="{{URL::to($all_slider->slider_image)}}" height="500px" width="80%">
						<div class="banner-caption text-center">
							<!-- <h1>Bags sale</h1>
							
							<button class="primary-btn">Shop Now</button>-->
						</div>
					</div>
					@endforeach
					<!-- /banner -->					
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->

@endsection

