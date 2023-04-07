<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/backend/assets/css/main/app.css')}}">
    <link rel="shortcut icon" href="{{ asset('assets/backend/assets/images/logo/favicon.svg" type="image/x-icon')}}">
    <link rel="shortcut icon" href="{{ asset('assets/backend/assets/images/logo/favicon.png" type="image/png')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    @yield('style')

</head>
<body>
    <div id="app">
      @include('admin.layout.sidebar')
      <div id="main" class='layout-navbar'>
        @include('admin.layout.header')
        <div id="main-content">
        @yield('content')
        @include('admin.layout.footer')
       </div>
      </div>
    </div>

    @yield('script')
    <script src="{{ asset('assets/backend/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/app.js') }}"></script>
   
</body>
</html>
