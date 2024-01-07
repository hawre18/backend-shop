<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>فروشگاه اینترنتی</title>
    <link rel="stylesheet" href="{{asset('users/assets/vendor/fontawesome/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('users/assets/vendor/swiper/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('users/assets/vendor/slicknav/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('users/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('users/assets/css/mediaq.css')}}">
</head>
<body>
<header>
    <section class="top-head container">
        <div class="right-head">
            <div class="logo">
                <a href="index.html"><img src="{{asset('users/assets/images/logo.svg')}}" ></a>
            </div>
            <form action="#">
                <button><i class="fa fa-search"></i></button>
                <input type="text" placeholder="جستجو در تک شاپ ...">
            </form>
        </div>
        <div class="left-head">
            <div class="login-box">
                <div class="log-reg" id="logreg">
                    <i class="fa fa-user"></i>
                    <a href="login.html"> ورود به حساب کاربری </a>
                </div>
            </div>
            <div class="devider"></div>

            <a href="cart.html" class="cart">
                <i class="fa fa-shopping-cart"></i>
            </a>
        </div>


    </section>

    <nav class="top-nav container">
        <ul class="dropdown" id="mynavmenu">
            <li class="main-category"><i class="fa fa-bars"></i><a href="#">دسته بندی کالاها</a>
                <ul class="dropdown2">
                    <li><a href="#">کالای تکتال</a>
                        <ul class="megamenu">
                            <li><a href="#">موبایل</a>
                                <ul>
                                    <li><a href="#">مدل موبایل</a></li>
                                    <li><a href="#">کیف و کاور</a></li>
                                    <li><a href="#">پاور بانک</a></li>
                                    <li><a href="#">پایه نگهدارنده</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">آرایشی و بهداشتی</a></li>
                </ul>
            </li>
            <li><a href="#">سوپرمارکت</a></li>
        </ul>
        <ul class="promotion"><li><a href="#">لطفا شهر و استان خود را انتخاب کنید</a><i class="fa fa-map-marker"></i></li></ul>

    </nav>

</header>

@yield('content')

<div class="jump-to-up">
    <i class="fa fa-chevron-up"></i> <span> بازگشت به بالا </span>
</div>
<footer>
    <section class="footer container">
        <div class="icon">
            <div class="icon-item">
                <a href="#">
                    <img src="{{asset('users/assets/images/icon/1.svg')}}" alt="">
                    <span>7 روز ضمانت بازگشت</span>
                </a>
            </div> <!--icon-item-->
            <div class="icon-item">
                <a href="#">
                    <img src="{{asset('users/assets/images/icon/2.svg')}}" alt="">
                    <span>پرداخت در محل</span>
                </a>
            </div> <!--icon-item-->
            <div class="icon-item">
                <a href="#">
                    <img src="{{asset('users/assets/images/icon/4.svg')}}" alt="">
                    <span>تحویل اکسپرس</span>
                </a>
            </div> <!--icon-item-->
            <div class="icon-item">
                <a href="#">
                    <img src="{{asset('users/assets/images/icon/3.svg')}}" alt="">
                    <span>پشتیبانی ۲۴ ساعته</span>
                </a>
            </div> <!--icon-item-->
            <div class="icon-item">
                <a href="#">
                    <img src="{{asset('users/assets/images/icon/5.svg')}}" alt="">
                    <span>ضمانت اصل بودن کالا</span>
                </a>
            </div> <!--icon-item-->
        </div>
        <div class="footer-content">
            <div class="shop-help">
                <h3 class="head">راهنمای خرید از شاپ</h3>
                <ul>
                    <li><a href="#">نحوه ثبت سفارش</a></li>
                    <li><a href="#">رویه ارسال سفارش</a></li>
                    <li><a href="#">شیوه های پرداخت</a></li>
                </ul>
            </div>
            <div class="customer-service">
                <h3 class="head">خدمات مشتریان</h3>
                <ul>
                    <li><a href="#">پاسخ به پرسش های متداول</a></li>
                    <li><a href="#">رویه های بازگرداندن کالا</a></li>
                    <li><a href="#">حریم خصوصی</a></li>
                </ul>
            </div>
            <div class="newsletter">
                <h3 class="head">از تخفیف ها و جدیدترین های شاپ با خبر باشید</h3>
                <div class="content">
                    <form action="#">
                        <input type="text">
                        <button type="submit">ارسال</button>
                    </form>
                    <h3 class="head">ما را در شبکه های اجتماعی دنبال کنید</h3>
                    <div class="social">
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-twitter-square"></i></a>
                        <a href=""><i class="fa fa-facebook-square"></i></a>
                        <a href=""><i class="fa fa-google-plus-square"></i></a>
                    </div>
                </div>
            </div>
            <div class="cert">
                <h3 class="head">مجوزهای فروشگاه</h3>
                <div class="image">
                    <img src="{{asset('users/assets/images/cert/enamad.png')}}" alt="">
                    <img src="{{asset('users/assets/images/cert/samandehi.png')}}" alt="">
                </div>
            </div>
        </div> <!-- footer-content -->

        <div class="footer-contact">
            <div class="contact">
                <span>هفت روز هفته, ۲۴ ساعت شبانه روز پاسخگوی شما هستیم,</span>
                <span>شماره تماس : ۰۴۴-۳۳۳۳</span>
                <span>آدرس ایمیل : info@site.com</span>
            </div>
            <div class="app">
                <img src="{{asset('users/assets/images/bazar.png')}}" alt="">
                <img src="{{asset('users/assets/images/sibapp.png')}}" alt="">
            </div>
        </div>

        <div class="copyright">
            <p>استفاده از مطالب فروشگاه اینترنتی تک‌کالا فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به شرکت فلان (فروشگاه آنلاین تک‌کالا) می‌باشد.</p>
        </div>

    </section>
</footer>

<script src="{{asset('users/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('users/assets/vendor/swiper/js/swiper.min.js')}}"></script>
<script src="{{asset('users/assets/vendor/slicknav/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('users/assets/vendor/jquery.countdown.min.js')}}"></script>
<script src="{{asset('users/assets/vendor/persianumber.min.js')}}"></script>
<script src="{{asset('users/assets/vendor/elevatezoom.js')}}"></script>
<script src="{{asset('users/assets/js/script.js')}}"></script>
</body>
</html>

