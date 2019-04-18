
@extends('pages.layout')
@section('content')




<div class="col-md-4">

<h4 align="center">Edit Account</h4>

<form method="post" action="{{url('/save_account_setting')}}">
              {{ csrf_field() }}



               


                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Save</button>
                </div>

                
               
               
</form>
</div>


@endsection              