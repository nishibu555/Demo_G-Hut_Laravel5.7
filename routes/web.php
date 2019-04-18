<?php

Route::get('/', function () {
    return view('welcome');
});



/*......................................................
  Get Started
......................................................*/
//Go To Front-end Home Page
Route::get('/products', 'FrontController@index' );//show home page

//Go To Back-end, Admin Login Page for 
Route::get('/admin', 'AdminController@index' );//show admin_login page 





/*......................................................
  BACK END 
......................................................*/
// Route::get('/admin', 'AdminController@index' );//show admin_login page 
Route::post('/admin_dashbord', 'AdminController@admin_dashbord' );//login to admin dashbord
Route::get('/dashbord', 'SuperAdminController@dashbord' );//auth check 
Route::get('/logout', 'SuperAdminController@logout' );//admin_logout

//Sell report
Route::get('/sell_report', 'SellController@index' );

//Orders
Route::get('/manage_order', 'OrderController@manage_order' );
Route::get('/view_order_detail/{order_id}','OrderController@view_order_detail' );
Route::get('/delete_order/{order_id}', 'OrderController@delete_order' );

//Products
Route::get('/add_product', 'ProductController@add_product' );
Route::get('/all_product', 'ProductController@all_product' );
Route::post('/save_product', 'ProductController@save_product' ); 
Route::get('/all_product', 'ProductController@all_product' );
Route::get('/edit_product/{product_id}', 'ProductController@edit_product' );
Route::post('/update_product/{product_id}', 'ProductController@update_product' );
Route::get('/delete_product/{product_id}', 'ProductController@delete_product' );

//Category
Route::get('/add_category', 'CategoryController@index' );//add category 
Route::get('/all_category', 'CategoryController@all_category' );
Route::post('/save_category', 'CategoryController@save_category' );//save category
Route::get('/edit_category/{category_id}', 'CategoryController@edit_category');
Route::get('/delete_category/{category_id}', 'CategoryController@delete_category');
Route::post('/update_category/{category_id}', 'CategoryController@update_category');

//SUB category
Route::get('/add_sub_category', 'CategoryController@add_sub_category' );
Route::post('/save_sub_category', 'CategoryController@save_sub_category' );

//Manufacturer
Route::get('/add_manufacture', 'ManufactureController@add_manufacture' );
Route::get('/all_manufacture', 'ManufactureController@all_manufacture' );
Route::post('/save_manufacture', 'ManufactureController@save_manufacture' );
Route::get('/edit_manufacture/{manufacture_id}', 'ManufactureController@edit_manufacture' );
Route::post('/update_manufacture/{manufacture_id}', 'ManufactureController@update_manufacture' );
Route::get('/delete_manufacture/{manufacture_id}', 'ManufactureController@delete_manufacture');

//TOP manufacture
Route::get('/top_manufacture', 'ManufactureController@top_manufacture' );
Route::post('/save_top_manufacture', 'ManufactureController@save_top_manufacture');
Route::get('/all_top_manufacture', 'ManufactureController@all_top_manufacture' );
Route::get('/delete_top_manufacture/{top_manufacture_id}', 'ManufactureController@delete_top_manufacture' );

//Slider if needed
Route::get('/add_slider', 'SliderController@add_slider' );
Route::get('/all_slider', 'SliderController@all_slider' );
Route::post('/save_slider', 'SliderController@save_slider' );
Route::get('/delete_slider/{slider_id}', 'SliderController@delete_slider' );




/*......................................................
  FRONT END 
......................................................*/
//Pages
// Route::get('/products', 'FrontController@index' );//returns home page
Route::get('/product_by_category/{category_id}', 'FrontController@product_by_category' );//category wise product show
Route::get('/product_by_sub_category/{sub_category_id}', 'FrontController@product_by_sub_category' );//sub categry wise show product
Route::get('/product_by_manufacture/{category_id}', 'FrontController@product_by_manufacture' );//Manufacture wise prouct show
Route::get('/view_product_detail/{product_id}', 'FrontController@view_product_detail');//View Product detail


//Nav Bar links
Route::get('/customer_logout/{customer_id}', 'UserLoginController@customer_logout');
Route::get('/signup_page', 'UserLoginController@signup_page');
Route::post('/signup', 'UserLoginController@signup');
Route::get('/login_page', 'UserLoginController@login_page');
Route::post('/login', 'UserLoginController@login');
Route::get('/about_us', 'FrontController@about_us');
Route::get('/shopping_guid', 'FrontController@shopping_guid');


//Customer login or sign up links for controlling authentication of various operations
Route::get('/customer_login_or_signup', 'UserLoginController@index');
Route::post('/customer_signup', 'UserLoginController@customer_signup');
Route::post('/customer_login', 'UserLoginController@customer_login');
Route::get('/account_setting/{customer_id}', 'UserLoginController@account_setting');


//Shopping Cart
Route::post('/cart', 'CartController@index' );
Route::get('/my_cart', 'CartController@my_cart' );
Route::get('/delete_cart/{rowId}', 'CartController@delete_cart' );
Route::post('/update_cart_qty', 'CartController@update_cart_qty' );


//Order related links
Route::get('/delivery_detail/{cart_total}', 'UserLoginController@delivery_detail');
Route::post('/order_confirmed', 'OrderController@order_confirmed');

























