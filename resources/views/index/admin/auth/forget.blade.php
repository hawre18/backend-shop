
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
    <!-- Icons -->
    <link href="{{asset('admin/assets/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/remixicon.css')}}" rel="stylesheet" type="text/css">

    <!-- Iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="{{asset('admin/assets/css/unicons.iconscout.com/release/v3.0.6/css/line.css')}}" rel="stylesheet">
    <!-- Css -->
    <link href="{{asset('admin/assets/css/style-rtl.min.css')}}" rel="stylesheet" type="text/css" id="theme-opt">

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

<div class="back-to-home rounded d-none d-sm-block">
    <a href="index.html" class="btn btn-icon btn-primary"><i data-feather="home" class="icons"></i></a>
</div>

<!-- Hero Start -->
<section class="bg-home d-flex bg-light align-items-center" style="background: url('{{asset('admin/assets/images/bg/bg-lines-one.png')}}') center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <img src="{{asset('admin/assets/images/logo-dark.png')}}" height="24" class="mx-auto d-block" alt="">
                <div class="card login-page bg-white shadow mt-4 rounded border-0">
                    <div class="card-body">
                        <h4 class="text-center">بازیابی حساب</h4>
                        <form class="login-form mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="text-muted">لطفا آدرس ایمیل خود را وارد کنید.شما یک پیوند برای ایجاد یک رمز عبور جدید از طریق ایمیل دریافت خواهید کرد.</p>
                                    <div class="mb-3">
                                        <label class="form-label">آدرس ایمیل <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" placeholder="آدرس ایمیل خود را وارد کنید" name="email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">ارسال</button>
                                    </div>
                                </div>
                                <div class="mx-auto">
                                    <p class="mb-0 mt-3"><small class="text-dark me-2">رمز عبور خود را به یاد داشته باشید ?</small> <a href="login.html" class="text-dark h6 mb-0">ورود</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!---->
            </div> <!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- javascript -->
<script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Icons -->
<script src="{{asset('admin/assets/js/feather.min.js')}}"></script>
<!-- Main Js -->
<script src="{{asset('admin/assets/js/app.js')}}"></script>

</body>

</html>
