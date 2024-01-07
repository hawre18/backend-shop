@extends('template.admin.layout')
@section('content')
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between">
            <h5 class="mb-0">ویرایش بنر</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">داکتریس</a></li>
                    <li class="breadcrumb-item"><a href="doctors.html">پزشکان</a></li>
                    <li class="breadcrumb-item active" aria-current="page">افزودن پزشک</li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12 ">
                <div class="card border-0 p-4 rounded shadow">
                    @if(Session::has('baner_error'))
                        <div class="alert alert_error">
                        </div>{{session('baner_error')}}</div>
                        </div>
                    @endif
            @if($errors->any)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                    <form action="{{route('baners.update' ,$baner->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label"> عنوان</label>
                                    <input name="title" id="title" type="text" class="form-control" placeholder="عنوان" value="{{$baner->title}}">
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">لینک</label>
                                    <input name="link" id="link" type="text" class="form-control" placeholder="لینک :" value="{{$baner->link}}">
                                </div>
                            </div><!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">وضعیت</label>
                                    <select name="status" class="form-control select2input">
                                        <option disabled selected>انتخاب کنید</option>
                                        <option value="active">فعال</option>
                                        <option value="deactive">غیرفعال</option>
                                    </select>
                                </div>
                            </div><!--end col-->

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">توضیحات بنر</label>
                                    <textarea name="description" id="comments" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                        </div><!--end row-->

                        <button type="submit" class="btn btn-primary">ویرایش بنر</button>
                    </form>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>


@endsection
