<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from radiustheme.com/demo/html/redchili/redchili/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Jul 2018 06:31:15 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SpicyBite|@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}front-end/assets/img/favicon.png">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front-end/assets/css/normalize.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front-end/assets/css/main.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front-end/assets/css/bootstrap.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front-end/assets/css/animate.min.css">

    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="{{asset('/')}}front-end/assets/css/font-awesome.min.css">

    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front-end/assets/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front-end/assets/vendor/OwlCarousel/owl.theme.default.min.css">

    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front-end/assets/css/meanmenu.min.css">

    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front-end/assets/vendor/slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('/')}}front-end/assets/vendor/slider/css/preview.css" type="text/css" media="screen" />

    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front-end/assets/css/jquery.datetimepicker.css">

    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front-end/assets/css/switch-style.css">
 <!-- toastr Style CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front-end/assets/vendor/toastr/toastr.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front-end/assets/css/style.css">

    <style>

        .table-reservation1-area {

            background: url("{{asset('/front-end/assets/img/table-reservation1.jpg')}}");

        }
        .inner-page-banner-area {
            text-align: left;
            background: url("{{asset('/front-end/assets/img/inner-page-banner.jpg')}}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            display: block;
            padding: 86px 0 95px;
        }

        .special-dish-area {
            padding: 85px 0 70px;
            background: url("{{asset('/front-end/assets/img/special-dishes-back.jpg')}}");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>

    <!-- Modernizr Js -->
    <script src="{{asset('/')}}front-end/assets/js/modernizr-2.8.3.min.js"></script>

</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
<div class="wrapper">
    <!-- Header Area Start Here -->
        @include('front-end.layouts.includes.header')
    <!-- Header Area End Here -->
   @yield('content')
    <!-- Footer Area Start Here -->
   @include('front-end.layouts.includes.footer')
    <!-- Footer Area End Here -->
</div>
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<!-- Style Switch Start Here -->
<!-- Style Switch End Here -->
<!-- jquery-->
<script src="{{asset('/')}}front-end/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>

<!-- Plugins js -->
<script src="{{asset('/')}}front-end/assets/js/plugins.js" type="text/javascript"></script>

<!-- Bootstrap js -->
<script src="{{asset('/')}}front-end/assets/js/bootstrap.min.js" type="text/javascript"></script>

<!-- WOW JS -->
<script src="{{asset('/')}}front-end/assets/js/wow.min.js"></script>

<!-- Nivo slider js -->
<script src="{{asset('/')}}front-end/assets/vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="{{asset('/')}}front-end/assets/vendor/slider/home.js" type="text/javascript"></script>

<!-- Owl Cauosel JS -->
<script src="{{asset('/')}}front-end/assets/vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>

<!-- Meanmenu Js -->
<script src="{{asset('/')}}front-end/assets/js/jquery.meanmenu.min.js" type="text/javascript"></script>

<!-- Srollup js -->
<script src="{{asset('/')}}front-end/assets/js/jquery.scrollUp.min.js" type="text/javascript"></script>

<!-- jquery.counterup js -->
<script src="{{asset('/')}}front-end/assets/js/jquery.counterup.min.js"></script>
<script src="{{asset('/')}}front-end/assets/js/waypoints.min.js"></script>

<!-- Switch js -->
<script src="{{asset('/')}}front-end/assets/js/switch-style.js" type="text/javascript"></script>

<!-- Date Time Picker Js -->
<script src="{{asset('/')}}front-end/assets/js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>

<!-- Isotope js -->
<script src="{{asset('/')}}front-end/assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
<!-- Validator js -->
<script src="{{asset('/')}}front-end/assets/js/validator.min.js" type="text/javascript"></script>
<!-- toastr js -->
<script src="{{asset('/')}}front-end/assets/vendor/toastr/toastr.min.js"></script>


<!-- Custom Js -->
<script src="{{asset('/')}}front-end/assets/js/main.js" type="text/javascript"></script>
{!! Toastr::message() !!}

</body>

<!-- Mirrored from radiustheme.com/demo/html/redchili/redchili/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Jul 2018 06:32:03 GMT -->
</html>
