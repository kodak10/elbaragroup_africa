<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<head>


    <title>ElbaraGroup Africa</title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Font -->
  <link rel="stylesheet" href="{{asset('assets/fonts/fonts.css')}}">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css"/>

  <!-- swiper slider -->
  <link rel="stylesheet" href="{{asset('assets/stylesheets/swiper-bundle.min.css')}}" />

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Theme Style -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/shortcodes.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/dashboard.css')}}">

  <!-- Responsive -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/responsive.css')}}">

  <!-- Favicon and Touch Icons  -->
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">
  <link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/favicon.png')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  
</head>

<body class="dashboard show ">
  <a id="scroll-top"></a>

  <!-- preloade -->
  <div class="preload preload-container">
    <div class="preload-logo">
      <div class="spinner"></div>
    </div>
  </div>

  @include('dashboard.entreprises.layouts.navbar-mobile')

  @include('dashboard.entreprises.layouts.navbar-desktop')

  <!-- ========== Left Sidebar ========== -->
  @include('dashboard.entreprises.layouts.sidebar')
  <!-- left sidebar end -->



  <div class="dashboard__content">
    @yield('content')
  </div>



  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="{{asset('assets/javascript/jquery.min.js')}}"></script>
  <script src="{{asset('assets/javascript/jquery.cookie.js')}}"></script>
  <script src="{{asset('assets/javascript/swiper-bundle.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<!-- Inclure Bootstrap Select Picker JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
  <script src='{{asset('assets/javascript/wow.min.js')}}'></script>
  <script src="{{asset('assets/javascript/main.js')}}"></script>
  <script src="{{asset('assets/javascript/countto.js')}}"></script>
  <script src="{{asset('assets/javascript/area-datetime.js')}}"></script>
  <script src="{{asset('assets/javascript/dropdown.js')}}"></script>
  <script src="{{asset('assets/javascript/dashboard-menu.min.js')}}"></script>
  <script src="{{asset('assets/javascript/dashboard-menu.js')}}"></script>
  <script src="{{asset('assets/javascript/password-addon.js')}}"></script>




</body>


</html>
