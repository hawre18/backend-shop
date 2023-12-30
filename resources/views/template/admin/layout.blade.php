<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> داکتریس - سیستم رزرو نوبت پزشک </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template">
    <meta name="keywords" content="Appointment, Booking, System, Dashboard, Health">
    <meta name="author" content="Shreethemes">
    <meta name="email" content="support@shreethemes.in">
    <meta name="website" content=" ">
    <meta name="Version" content="v1.2.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">
    <!-- Bootstrap -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- simplebar -->
    <link href="{{asset('admin/assets/css/simplebar.css')}}" rel="stylesheet" type="text/css">
    <!-- Select2 -->
    <link href="{{asset('admin/assets/css/select2.min.css')}}" rel="stylesheet">
    <!-- Icons -->
    <link href="{{asset('admin/assets/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/remixicon.css')}}" rel="stylesheet" type="text/css">

    <!-- Iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="{{asset('admin/assets/css/unicons.iconscout.com/release/v3.0.6/css/line.css')}}" rel="stylesheet">
    <!-- Css -->
    <link href="{{asset('admin/assets/css/style-rtl.min.css')}}" rel="stylesheet" type="text/css" id="theme-opt">
    <link href="{{asset('admin/assets/css/tiny-slider.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/slick-theme.css')}}" rel="stylesheet">
    @yield('styles')
</head>

<body>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->
@include('template.admin.header')
@yield('content')
    @include('template.admin.footer')
    </main>
    <!--End page-content" -->
</div>
<!-- page-wrapper -->
<!-- Modal end -->

<!-- javascript -->

@yield('scripts')
<script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- simplebar -->
<script src="{{asset('admin/assets/js/simplebar.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('admin/assets/js/select2.min.js')}}"></script>
<script src="{{asset('admin/assets/js/select2.init.js')}}"></script>
<!-- Icons -->
<script src="{{asset('admin/assets/js/feather.min.js')}}"></script>
<!-- Main Js -->
<script src="{{asset('admin/assets/js/app.js')}}"></script>

<script src="{{asset('admin/assets/js/tiny-slider.js')}}"></script>
<script src="{{asset('admin/assets/js/tiny-slider-init.js')}}"></script>
<script src="{{asset('admin/assets/js/slick.min.js')}}"></script>
<script src="{{asset('admin/assets/js/slick.init.js')}}"></script>
</body>

</html>

