@extends('template.users.layout')
@section('content')
    <section class="product-wrapper container">
        <div class="headline">
            <h3>محصولات پرفروش</h3></div>
        <div id="mostpslider" class="swiper-container">
            <div class="product-box swiper-wrapper">
                <div class="product-item swiper-slide">
                    <a href="#"><img src="{{asset('users/assets/images/363465.jpg')}}" alt=""></a> <a class="title" href="#">شارژر همراه انکر مدل A1271 PowerCore ظرفیت 20100 م</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
                <div class="product-item swiper-slide">
                    <a href="#"><img src="{{asset('users/assets/images/114776337.jpg')}}" alt=""></a> <a class="title" href="#">لامپ ال ای دی 20 وات سیدکو کد 001 پایه E27</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
                <div class="product-item swiper-slide">
                    <a href="#"><img src="{{asset('users/assets/images/p8.jpg')}}" alt=""></a> <a class="title" href="#">کوله پشتی برنامه نویسان</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
                <div class="product-item swiper-slide">
                    <a href="#"><img src="{{asset('users/assets/images/110177926.jpg')}}" alt=""></a> <a class="title" href="#">تخم مرغ تازه پروتانا بسته 20 عددی</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
                <div class="product-item swiper-slide">
                    <a href="#"><img src="{{asset('users/assets/images/3830350.jpg')}}" alt=""></a> <a class="title" href="#">کرم ضد آنفلوانزا مکث آویرال مدل Adults حجم 70 میلی</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
                <div class="product-item swiper-slide">
                    <a href="#"><img src="{{asset('users/assets/images/p8.jpg')}}" alt=""></a> <a class="title" href="#">کوله پشتی برنامه نویسان</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
            </div>
            <div id="mostpslider-nbtn" class="slider-nbtn swiper-button-next"></div>
            <div id="mostpslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
        </div>
    </section>
@endsection
