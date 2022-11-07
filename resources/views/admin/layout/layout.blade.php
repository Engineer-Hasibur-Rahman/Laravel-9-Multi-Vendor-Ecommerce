<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ url('assets/admin/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('assets/admin/images/favicon.png') }}" type="image/x-icon">
    <title>Admin Template</title>
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
    <link rel="stylesheet" type="text/css" href="{{ url('assets/admin/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/admin//css/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/admin//css/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/admin//css/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/admin//css/vector-map.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/admin/css/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/admin/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ url('assets/admin/css/color-1.css" media="screen') }}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/admin/css/responsive.css') }}">
   
  </head>
  <body>
    <!-- Loader starts-->
  <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div> 
    <!-- Loader ends-->
    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper"> 

      <!-- Page Header Ends-->
      @include('admin.layout.header')
      <!-- Page Body Start-->

      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
         @include('admin.layout.sidebar')
        <!-- Page Sidebar Ends-->

        <div class="page-body">
          <!-- Container-fluid starts-->
          @yield('content')
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
       @include('admin.layout.footer')
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ url('assets/admin/js/jquery-3.5.1.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ url('assets/admin/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ url('assets/admin/js/sidebar-menu.js') }}"></script>
    <script src="{{ url('assets/admin/js/config.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ url('assets/admin/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/bootstrap/bootstrap.min.js') }}"></script>

   <!-- custome js file -->
   <script src="{{ url('assets/admin/custome.js') }}"></script>  

    <!-- Plugins JS start-->
    <script src="{{ url('assets/admin/js/chart/chartist/chartist.js') }}"></script>
    <script src="{{ url('assets/admin/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ url('assets/admin/js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/chart/knob/knob-chart.js') }}"></script>
    <script src="{{ url('assets/admin/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ url('assets/admin/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ url('assets/admin/js/prism/prism.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/counter/counter-custom.js') }}"></script>
    <script src="{{ url('assets/admin/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ url('assets/admin/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ url('assets/admin/js/vector-map/map/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ url('assets/admin/js/vector-map/map/jquery-jvectormap-uk-mill-en.js') }}"></script>
    <script src="{{ url('assets/admin/js/vector-map/map/jquery-jvectormap-au-mill.js') }}"></script>
    <script src="{{ url('assets/admin/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js') }}"></script>
    <script src="{{ url('assets/admin/js/vector-map/map/jquery-jvectormap-in-mill.js') }}"></script>
    <script src="{{ url('assets/admin/js/vector-map/map/jquery-jvectormap-asia-mill.js') }}"></script>
    <script src="{{ url('assets/admin/js/dashboard/default.js') }}"></script>
    <script src="{{ url('assets/admin/js/notify/index.js') }}"></script>
    <script src="{{ url('assets/admin/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ url('assets/admin/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ url('assets/admin/js/datepicker/date-picker/datepicker.custom.js') }}"></script> 
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ url('assets/admin/js/script.js') }}"></script>
    <script src="{{ url('assets/admin/js/theme-customizer/customizer.js') }}"></script>
    <!-- login js-->
    <!-- Plugin used-->    
 
  </body>
</html>