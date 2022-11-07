<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ url('assets/admin/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('assets/admin/images/favicon.png') }}" type="image/x-icon">
    <title>Admin Login</title>
    
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/admin/css/fontawesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/admin/css/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/admin/css/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/admin/css/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/admin/css/feather-icon.css') }}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/admin/css/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/admin/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ url('assets/admin/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/admin/css/responsive.css') }}">
    <!--laravel notify message css -->  
  </head>
  <body>   
    <!-- page-wrapper Start-->
    <section>         
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12">
            <div class="login-card">
              <form class="theme-form login-form" action="{{ url('admin/login') }}" method="POST">
                @csrf                
                <h4>Login</h4>
                <h6>Welcome back! Log in to your account.</h6>
                @if(Session::has('error_message'))
                <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                  <strong>Error: </strong> {{ Session::get('error_message')}}
                  <button class="btn-close" type="button" data-bs-dismiss="alert"
                   aria-label="Close" data-bs-original-title="" title="">
                  </button>
                </div>
                @endif

                {{-- @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif --}}

                <div class="form-group">
                  <label>Email Address</label> 
                  <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                    <input class="form-control" type="email" name="email" placeholder="email">
                  </div>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                    <input class="form-control" type="password" name="password" placeholder="*********">
                    <div class="show-hide"><span class="show"> </span> </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="checkbox">
                    <input id="checkbox1" type="checkbox">
                    <label for="checkbox1">Remember password</label>
                  </div><a class="link" href="forget-password.html">Forgot password?</a>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                </div>  
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- page-wrapper end-->    
    <!-- latest jquery-->
    <script src="{{ url('assets/admin//js/jquery-3.5.1.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ url('assets/admin//js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ url('assets/admin//js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ url('assets/admin//js/sidebar-menu.js') }}"></script>
    <script src="{{ url('assets/admin//js/config.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ url('assets/admin//js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ url('assets/admin//js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ url('assets/admin//js/script.js') }}"></script>
    <!-- login js-->
    <!-- Plugin used-->
   

  </body>
</html>