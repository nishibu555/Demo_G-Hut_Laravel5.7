<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Panel</title>


  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin_login/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_login/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('admin_login/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin_login/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.html" />



</head>

<body class="sidebar-dark">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>



<p class="alert-danger"><?php

$ex=Session::get('ex');
if($ex){
  echo $ex;
  Session::put('ex',null);
}

?></p>



              <form method="post" action="{{url('/admin_dashbord')}}">
              {{ csrf_field() }}



                <div class="form-group">
                  <label>Username or email </label>
                  <input type="text" class="form-control p_input" name="admin_email">
                </div>
                <div class="form-group">
                  <label>Password </label>
                  <input type="text" class="form-control p_input" name="admin_password" >
                </div>
               
                 
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
                
                <p>Don't have an Account?
                <a href="admin_signup"><b>Sign Up</b></a><br><br><br>
                <a href="">Forget password?</a>
                </p>
              </form>

              <small style="color:red">Dami data:<br>username: nusrat5911@gmail.com <br>Password: 123456</small>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
 <script src="{{asset('admin_login/node_modules/jquery/dist/jquery.min.js')}}"></script>
      <script src="{{asset('admin_login/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
      <script src="{{asset('admin_login/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('admin_login/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
      <script src="{{asset('admin_login/js/off-canvas.js')}}"></script>
      <script src="{{asset('admin_login/js/hoverable-collapse.js')}}"></script>
      <script src="{{asset('admin_login/js/misc.js')}}"></script>
      <script src="{{asset('admin_login/js/settings.js')}}"></script> 

  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->
</html>
