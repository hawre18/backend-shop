@extends('template.admin.layout')
@section('content')
    <div class="page-wrapper doctris-theme toggled">

        <div class="container-fluid">
            <div class="layout-specing">
                <div class="d-md-flex justify-content-between">
                    <h5 class="mb-0">خبر </h5>

                    <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
                        <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html">داکتریس</a></li>
                            <li class="breadcrumb-item"><a href="shop.html">فروشگاه</a></li>
                            <li class="breadcrumb-item active" aria-current="page">جزییات محصول</li>
                        </ul>
                    </nav>
                </div>

                <div class="card border-0 rounded shadow p-4 mt-4">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-5">
                            <div class="slider slider-for">
                                <div><img src="{{asset('admin/assets/images/pharmacy/shop/01.jpg')}}" class="img-fluid rounded" alt=""></div>
                                <div><img src="{{asset('admin/assets/images/pharmacy/shop/02.jpg')}}" class="img-fluid rounded" alt=""></div>
                                <div><img src="{{asset('admin/assets/images/pharmacy/shop/03.jpg')}}" class="img-fluid rounded" alt=""></div>
                                <div><img src="{{asset('admin/assets/images/pharmacy/shop/04.jpg')}}" class="img-fluid rounded" alt=""></div>
                            </div>

                            <div class="slider slider-nav">
                                <div><img src="{{asset('admin/assets/images/pharmacy/shop/01.jpg')}}" class="img-fluid" alt=""></div>
                                <div><img src="{{asset('admin/assets/images/pharmacy/shop/02.jpg')}}" class="img-fluid" alt=""></div>
                                <div><img src="{{asset('admin/assets/images/pharmacy/shop/03.jpg')}}" class="img-fluid" alt=""></div>
                                <div><img src="{{asset('admin/assets/images/pharmacy/shop/04.jpg')}}" class="img-fluid" alt=""></div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                            <div class="me-md-4">
                                <h4 class="title">جعبه پلاستیک دارو</h4>
                                <h5 class="mt-4 py-2">نظرات:</h5>
                                <p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                    سطرآنچنان که لازم است </p>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div><!--end container-->

    </div>
@endsection
