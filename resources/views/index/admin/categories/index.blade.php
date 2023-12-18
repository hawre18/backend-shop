@extends('template.admin.layout')
@section('content')
    <!-- Start Page Content -->
    <div class="container-fluid">
        <div class="layout-specing">
            <div class="d-md-flex justify-content-between">
                <h5 class="mb-0">لیست برندها</h5>

                <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
                    <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">داکتریس</a></li>
                        <li class="breadcrumb-item active" aria-current="page">بیماران</li>
                    </ul>
                </nav>
            </div>

            <div class="row">
                <div class="col-12 mt-4">
                    <div class="table-responsive shadow rounded">
                        @if(Session::has('category_success'))
                            <div class="alert alert-success">
                                <div>{{session('category_success')}}</div>
                            </div>
                        @endif
                            @if(Session::has('category_error'))
                                <div class="alert alert-success">
                                    <div>{{session('category_error')}}</div>
                                </div>
                            @endif
                        <table class="table table-center bg-white mb-0">
                            <thead>
                            <tr>
                                <th class="border-bottom p-3" style="min-width: 50px;">ردیف</th>
                                <th class="border-bottom p-3" style="min-width: 180px;">نام</th>
                                <th class="border-bottom p-3">عنوان</th>
                                <th class="border-bottom p-3">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $row)
                            <tr>
                                <th class="p-3">{{$loop->index+1}}</th>
                                <td class="py-3">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2">{{$row->name}}</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="p-3">{{$row->title}}</td>
                                <td class="text-start">
                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary"
                                       data-bs-toggle="modal" data-bs-target="#viewprofile"><i
                                            class="uil uil-eye"></i></a>
                                    <a href="{{route('categories.edit',$row->id)}}" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-pen"></i></a>
                                    <a href="{{route('categories.delete',$row->id)}}" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-trash"></i></a>
                                </td>
                            </tr>
                                    @if(count($row->childrenRecursive)>0)
                                        @include('index.admin.categories.subCategory',['categories'=>$row->childrenRecursive , 'level'=>1 ])
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row text-center">
                <!-- PAGINATION START -->
                <div class="col-12 mt-4">
                    <div class="d-md-flex align-items-center text-center justify-content-between">
                        <span class="text-muted me-3">نمایش 1 - 10 از 50</span>
                        <ul class="pagination justify-content-center mb-0 mt-3 mt-sm-0">
                            <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">قبلی</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">بعدی</a></li>
                        </ul>
                    </div>
                </div><!--end col-->
                <!-- PAGINATION END -->
            </div><!--end row-->
            <!--end row-->
        </div>
    </div>
    <!--end container-->

    <!-- End -->
    <!--End page-content" -->
    </div>
    <!-- page-wrapper -->

@endsection
