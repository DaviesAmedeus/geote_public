<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- Vendor CSS Files -->
  <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <link href="assets/img/geote.png" rel="icon">
    <link href="assets/img/geote.png" rel="apple-touch-icon">

    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>

    <link rel="stylesheet" href="{{ url('assets/vendor/custom/login.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
     <!-- Template Main CSS File -->
  <link href="{{ url('assets/css/main.css') }}" rel="stylesheet">
</head>
<body class="text-center">
   
            @yield('content')
       
 <!-- Vendor JS Files -->
 <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
 <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
 <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
 <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
 <script src="{{ url('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
 <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>

 <!-- Template Main JS File -->
 <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
