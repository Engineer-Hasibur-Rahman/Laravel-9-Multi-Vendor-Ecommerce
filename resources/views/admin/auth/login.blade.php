<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link rel="stylesheet" href=" {{ asset('assets/backend/assets/css/main/app.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/backend/assets/css/pages/auth.css') }}">
    <link rel="shortcut icon" href=" {{ asset('assets/backend/assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href=" {{ asset('assets/backend/assets/images/logo/favicon.png') }}" type="image/png">
</head>

<body>
    <div id="auth">        
<div class="row h-100">
    <div class="col-lg-2 col-md-2 col-xl-2 col-12"> </div>
    <div class="col-lg-8 col-md-8 col-xl-8 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="index.html"><img src="{{ asset('assets/backend/assets/images/logo/logo.svg') }}" alt="Logo"></a>
            </div>
            <h3 class="auth-title">Log in.</h3>

          
         
            <form action="{{ url('admin/login') }}" method="POST">
                @csrf

                @if(Session::has('error_message'))
                <div class="alert alert-warning"><i class="bi bi-exclamation-triangle"></i>{{ session::get('error_message')}}</div>
               @endif 

                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="email" class="form-control form-control-xl" name="email" placeholder="email">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" name="password" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-check form-check-lg d-flex align-items-end">
                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        Keep me logged in
                    </label>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
            </form>   
        </div>
    </div>   

    <div class="col-lg-2 col-md-2 col-xl-2 col-12"> </div>

</div>

    </div>
</body>

</html>
