
@extends('pages.layout')
@section('content')


<div class="col-md-4">
<p>New user?</p><br>
<h4>Sign up</h4>
<form method="post" action="{{url('/signup')}}">
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