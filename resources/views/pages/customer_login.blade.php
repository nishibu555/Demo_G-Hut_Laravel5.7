
@extends('pages.layout')
@section('content')


<p><br><br>Dear customer, thanks for being with us.<br>If you already have an account ,login please . If you are new, sign up and make an account. </p>
<br><br> 

<div class="col-md-4">

<p>Already have an account?</p><br>
<h4>Login</h4>
<form method="post" action="{{url('/customer_login')}}">
              {{ csrf_field() }}



                <div class="form-group">
                  <label>Username or email </label>
                  <input type="text" class="form-control p_input" name="customer_email" required="">{{$errors->first('customer_email')}}
                </div>


                <div class="form-group">
                <label>Password </label>
                <input type="text" class="form-control p_input" name="customer_password" required="" >{{$errors->first('customer_password')}}
                </div>

               
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
                
                
</form>
</div>



<div class="col-md-2"></div>


<div class="col-md-4">
<p>New user?</p><br>
<h4>Sign up</h4>
<form method="post" action="{{url('/customer_signup')}}">
              {{ csrf_field() }}



                <div class="form-group">
                
                  <input type="text" class="form-control p_input" name="customer_name" placeholder="Full Name" required="">{{$errors->first('customer_name')}}
                </div>

                <div class="form-group">
                  
                  <input type="text" class="form-control p_input" name="customer_email"  placeholder="E-mail" required="">{{$errors->first('customer_email')}}
                </div>

                <div class="form-group">
                  <input type="password" class="form-control p_input" name="customer_password" placeholder="Password" required="" >{{$errors->first('customer_password')}}
                </div>


                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Sign up</button>
                </div>

                
               
               
</form>
</div>


@endsection              