@extends('template.admin.layout')
@section('content')
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between">
            <h5 class="mb-0">افزودن گروه ویژگی جدید</h5>

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
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error )
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{url('admin/attributeGroups')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label"> عنوان</label>
                                            <input name="title" id="name" type="text" class="form-control" placeholder="عنوان">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">نام</label>
                                            <input name="name" id="name2" type="text" class="form-control" placeholder="نام:">
                                        </div>
                                    </div><!--end col-->

                                </div><!--end row-->

                                <button type="submit" class="btn btn-primary">افزودن</button>
                            </form>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
         </div>


@endsection
