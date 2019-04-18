
@extends('pages.layout')
@section('content')




<div class="col-md-4">

<br>
<h4>Login to your account</h4>
<form method="post" action="{{url('/login')}}">
              {{ csrf_field() }}



                <div class="form-group">
                  <label>Username or email </label>
                  <input type="text" class="form-control p_input" name="customer_email">
                  <small>{{$errors->first('customer_email')}}</small>
                </div>


                <div class="form-group">
                <label>Password </label>
                <input type="text" class="form-control p_input" name="customer_password" required="" >
                {{$errors->first('customer_password')}}
                </div>

               
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
                
                
</form>

<br>

<p class="alert-danger">
  <?php $message=Session::get('message');

     if($message){
      echo $message;
      Session::put('message',"");
     }
    
  ?>
</p>

</div>






@endsection              