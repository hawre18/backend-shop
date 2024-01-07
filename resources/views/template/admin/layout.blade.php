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

    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
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

<div class="page-wrapper doctris-theme toggled">
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content" data-simplebar="" style="height: calc(100% - 60px);">
            <div class="sidebar-brand">
                <a href="index.html">
                    <img src="{{asset('admin/assets/images/logo-dark.png')}}" height="24" class="logo-light-mode" alt="">
                    <img src="{{asset('admin/assets/images/logo-light.png')}}" height="24" class="logo-dark-mode" alt="">
                </a>
            </div>

            <ul class="sidebar-menu pt-3">
                <li><a href="index.html"><i class="uil uil-dashboard ms-2 d-inline-block"></i>داشبرد</a></li>
                <li><a href="appointment.html"><i class="uil uil-stethoscope ms-2 d-inline-block"></i>نوبت دهی</a></li>

                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)"><i class="uil uil-user ms-2 d-inline-block"></i>پزشکان</a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="doctors.html">پزشکان</a></li>
                        </ul>
                    </div>
                </li>
                </ul>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->
    </nav>
    <!-- sidebar-wrapper  -->

    <!-- Start Page Content -->
    <main class="page-content bg-light">
        <div class="top-header">
            <div class="header-bar d-flex justify-content-between border-bottom">
                <div class="d-flex align-items-center">
                    <a href="#" class="logo-icon">
                        <img src="{{asset('admin/assets/images/logo-icon.png')}}" height="30" class="small" alt="">
                        <span class="big">
                            <img src="{{asset('admin/assets/images/logo-dark.png')}}" height="24" class="logo-light-mode" alt="">
                            <img src="{{asset('admin/assets/images/logo-light.png')}}" height="24" class="logo-dark-mode" alt="">
                        </span>
                    </a>
                    <a id="close-sidebar" class="btn btn-icon btn-pills btn-soft-primary me-2" href="#">
                        <i class="uil uil-bars"></i>
                    </a>
                    <div class="search-bar p-0 d-none d-lg-block me-2">
                        <div id="search" class="menu-search mb-0">
                            <form role="search" method="get" id="searchform" class="searchform">
                                <div>
                                    <input type="text" class="form-control border rounded-pill" name="s" id="s" placeholder="جستجو کلیدواژه...">
                                    <input type="submit" id="searchsubmit" value="Search">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <ul class="list-unstyled mb-0">
                    <li class="list-inline-item mb-0 me-1">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="mail" class="fea icon-sm"></i></button>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">4 <span class="visually-hidden">پیام های خوانده نشده</span></span>

                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 px-2 py-2" data-simplebar="" style="height: 320px; width: 300px;">
                                <a href="#" class="d-flex align-items-center justify-content-between py-2">
                                    <div class="d-inline-flex position-relative overflow-hidden">
                                        <img src="{{asset('admin/assets/images/client/02.jpg')}}" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <small class="text-dark mb-0 d-block text-truncat ms-3"> یک ایمیل جدید دریافت کردید <b> جولیا </b> <small class="text-muted fw-normal d-inline-block">1 ساعت قبل</small></small>
                                    </div>
                                </a>
                               </div>
                        </div>
                    </li>

                    <li class="list-inline-item mb-0 me-1">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('admin/assets/images/doctors/01.jpg')}}" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                <a class="dropdown-item d-flex align-items-center text-dark" href="profile.html">
                                    <img src="{{asset('admin/assets/images/doctors/01.jpg')}}" class="avatar avatar-md-sm rounded-circle border shadow ms-2" alt="">
                                    <div class="flex-1 ">
                                        <span class="d-block mb-1" >کلوین کارلو</span>
                                        <small class="text-muted"> ارتوپدی </small>
                                    </div>
                                </a>
                                <a class="dropdown-item text-dark" href="index.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-dashboard align-middle h6"></i></span>داشبرد</a>
                                <a class="dropdown-item text-dark" href="dr-profile.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span>تنظیمات پروفایل</a>
                                <div class="dropdown-divider border-top"></div>
                                <a class="dropdown-item text-dark" href="lock-screen.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-sign-out-alt align-middle h6"></i></span> خروج</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">




@yield('content')
                <!-- Footer Start -->
                <footer class="bg-white shadow py-3">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="text-sm-start text-center">
                                    <p class="mb-0 text-muted"> © داکتریس - ارائه <i class="mdi mdi-heart text-danger"></i> از <a href="" target="_blank" class="text-reset">آفرید تیم<p>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </footer><!--end footer-->
                <!-- End -->
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

<script>
       classicEditor
                     .create(document.querySelector('#comments'))
                     .catch(error =>{
                         console.error(error);
                     });

</script>

</body>

</html>

