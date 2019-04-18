<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Green Hut</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}" />
	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="{{asset('front/css/slick.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('front/css/slick-theme.css')}}" />
	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="{{asset('front/css/nouislider.min.css')}}" />
	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('front/css/style.css')}}" />

</head>



<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
					<span>greenhut555@gmail.com</span>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
						<li><a href="#"></a>Contact : 019589932939</li>										
					</ul>
				</div>
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="{{URL::to('/products')}}">
							<img src="{{asset('front/img/logo2.png')}}" alt="">
						</a>
					</div>
					<!-- /Logo -->
					<!-- Search -->
					<div class="header-search">
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
							</div>
							<a href="{{URL::to('/signup_page')}}" class="text-uppercase">Sign up</a> 
							<ul class="custom-menu">

                                <?php 
                                $customer_id=Session::get('customer_id');
                                ?>
                                @if($customer_id !=NULL)

								<li><a href="{{URL::to('/customer_logout/'.$customer_id)}}"><i class="fa fa-user-o"></i>Logout</a></li>

                                <li><a href="{{URL::to('/account_setting/'.$customer_id)}}"><i class="fa fa-user-o"></i>Account setting</a></li>
								@else

                                <li><a href="{{URL::to('/login_page')}}"><i class="fa fa-user-o"></i>Login</a></li>
                                @endif
							</ul>
						</li>
						<!-- /Account -->

						<!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									
								</div>
							<strong class="text-uppercase">My Cart </strong>
								<br>
								<span>{{Cart::total()}} tk</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
								
									<div class="shopping-cart-btns">

										<a href="{{URL::to('/my_cart')}}"><button class="main-btn">View Cart</button></a>
                                      

                                        @if($customer_id !=NULL && Cart::total() >0 )
										<a href="{{URL::to('/delivery_detail')}}">
										<button class="primary-btn">Place Order<i class="fa fa-arrow-circle-right"></i></button>
                                        </a>
                                        @elseif($customer_id !=NULL && Cart::total()==0)
                                        <a href="{{URL::to('/shopping_guid')}}">
										<button class="primary-btn">Shopping guid<i class="fa fa-arrow-circle-right"></i></button>
                                        </a>

                                        @elseif($customer_id ==NULL && Cart::total()>0)
                                         <a href="{{URL::to('/customer_login_or_signup')}}">
										<button class="primary-btn">Place Order<i class="fa fa-arrow-circle-right"></i></button>
                                        </a>
                                        @else
                                        <a href="{{URL::to('/shopping_guid')}}">
										<button class="primary-btn">Shopping guid<i class="fa fa-arrow-circle-right"></i></button>
                                        </a>

                                        @endif

									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->


	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				    <?php
                    $all_category=DB::table('tbl_category')->get();                       
                    ?>
				<div class="category-nav show-on-click">
					<span class="category-header">Filter <i class="fa fa-list"></i></span>
					<ul class="category-list">
                         
                     @foreach($all_category as $view_all_category)

						<li class="dropdown side-dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{$view_all_category->category_name}}<i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">

								<div class="row">
									<div class="col-md-4">
							        
                                            <?php $sub_category=DB::table('tbl_sub_category')
                                             ->where('category_id',$view_all_category->category_id)
                                             ->get(); ?>
      

										<ul class="list-links">
											
											@foreach($sub_category as $sub_category)
                                           
                                            <?php  $count_s=DB::table('tbl_products')
                                             ->where('category_id',$view_all_category->category_id)
                                             ->where('sub_category_id',$sub_category->sub_category_id)
                                             ->count();  ?> 

											<li>
											<a href="{{URL::to('/product_by_sub_category/'.$sub_category->sub_category_id)}}">{{$sub_category->sub_category_name}}
											({{$count_s}})
											</a></li>
											@endforeach

										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
								</div><!--row-->

							</div>
						</li>
                    @endforeach
                    </ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						
						<li><a href="{{URL::to('/products')}}">Home</a></li>
						
						<li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Top manufacturer <i class="fa fa-caret-down"></i></a>
							<div class="custom-menu">
								<div class="row">

                                   <?php
                                   $top_manufacture=DB::table('tbl_top_manufacture')->get();
                                    ?>
                                @foreach($top_manufacture as $top_manufacture)
								<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
										<a class="banner banner-1" href="{{URL::to('')}}">
										  <img src="{{URL::to($top_manufacture->top_manufacture_image)}}"
										  height="180px" width="180px">
											</a>
											<hr>
										</div>
									<ul class="list-links">
										<li>
											<h4 class="list-links-title">{{$top_manufacture->top_manufacture_name}}</h4></li>
											
										<li>{{$top_manufacture->top_manufacture_city}}</li>

										<li>{{$top_manufacture->top_manufacture_address}}
											</li>

										<li>{{$top_manufacture->top_manufacture_phone}}
											</li>

											
										</ul>
									</div>

									@endforeach
									
								</div>
							</div>
						</li>


						<li><a href="{{URL::to('/about_us')}}">About us</a></li>

						
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

@yield('slider')

	<!-- BREADCRUMB -->
	<!--<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Products</li>
			</ul>
		</div>
	</div>-->
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ASIDE -->
				<div id="aside" class="col-md-2">
					

                

				

					<!-- aside widget -->
                    
                    
					<div class="aside">
						<h3 class="aside-title">Category</h3>

						@foreach($all_category as $v_all_category)
						<ul class="list-links">

                        <?php 
                        $count_c=DB::table('tbl_products')
                                ->where('category_id',$v_all_category->category_id)
                                ->count();
                         ?>	

						<li><a href="{{URL::to('/product_by_category/'. $v_all_category->category_id)}}">
						{{$v_all_category->category_name}} ({{$count_c}})</a></li>	



						</ul>
						@endforeach
					</div>
					<!-- /aside widget -->

					<!-- aside widget -->
                   
                    <?php
                    $all_manufacture=DB::table('manufacture')->get();  
                                            
                    ?>
					<div class="aside">
						<h3 class="aside-title">Manufacture</h3>

						@foreach($all_manufacture as $v_all_manufacture)
						<ul class="list-links">

						<?php 
                        $count_m=DB::table('tbl_products')
                                ->where('manufacture_id',$v_all_manufacture->manufacture_id)
                                ->count();
                         ?>

					   <li><a href="{{URL::to('/product_by_manufacture/'. $v_all_manufacture->manufacture_id)}}">

						{{$v_all_manufacture->manufacture_name}} ({{$count_m}})</a></li>	


						</ul>
						@endforeach
					</div>
					<!-- /aside widget -->

				
					
					<!-- /aside widget -->
				</div>
				<!-- /ASIDE -->
	
<!-- MAIN -->
	

@yield('content')

<!-- /MAIN -->





			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-7 col-sm-6 col-xs-8">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="{{URL::to('/products')}}">
		            <img src="front/img/logo2.png" alt="">
		          </a>
						</div>
						

						<p>We sell fresh fruit,vegitables and tree from various nurseries or personal firm all over the country. Have a good experience of shopping And If you have your own firm,nursery or personal garden and you want  to sell your product ,please contact us.  </p>

				
							
							
							
					
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-2 col-sm-6 col-xs-4">
					<div class="footer">
						<h3 class="footer-header">Contact Us</h3>
						<ul class="list-links">
							<li>+88 01882405636</li>
							<p>greenhut555@gmail.com </p>
							
						
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-4">
					<div class="footer">
						<h3 class="footer-header">Customer Service</h3>
						<ul class="list-links">
							
							<li><a href="{{URL::to('/shopping_guid')}}">Shoping Guide</a></li>
							<li><a href="{{URL::to('/about_us')}}">About Us</a></li>
							
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<!--<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Any Suggestion</h3>
						<p>If you have any suggetion for us, please let us know.</p>
						<form>
							<div class="form-group">
								<input type="textarea" row="3" placeholder="Write suggestion">
							</div>
							<button class="primary-btn">send e-mail</button>
						</form>
					</div>
				</div>-->
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{asset('front/js/jquery.min.js')}}"></script>
	<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('front/js/slick.min.js')}}"></script>
	<script src="{{asset('front/js/nouislider.min.js')}}"></script>
	<script src="{{asset('front/js/jquery.zoom.min.js')}}"></script>
	<script src="{{asset('front/js/main.js')}}"></script>

</body>

</html>
