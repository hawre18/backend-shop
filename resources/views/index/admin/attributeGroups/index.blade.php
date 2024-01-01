   @extends('template.admin.layout')
   @section('content')
    <!-- Start Page Content -->
        <div class="container-fluid">
            <div class="layout-specing">
                <div class="d-md-flex justify-content-between">
                    <h5 class="mb-0">لیست بنرها</h5>

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
                            @if(Session::has('attribute_success'))
                                <div class="alert alert-success">
                                    <div>{{session('attribute_success')}}</div>
                                </div>
                            @endif
                            @if(Session::has('attribute_error'))
                                <div class="alert alert-success">
                                    <div>{{session('attribute_error')}}</div>
                                </div>
                            @endif
                            <table class="table table-center bg-white mb-0">
                                <thead>
                                <tr>
                                    <th class="border-bottom p-3" style="min-width: 50px;">ردیف</th>
                                    <th class="border-bottom p-3" style="min-width: 180px;">عنوان</th>
                                    <th class="border-bottom p-3">نام</th>
                                    <th class="border-bottom p-3">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($attributeGroups as $row)
                                <tr>
                                    <th class="p-3">{{$loop->index+1}}</th>
                                    <td class="py-3">
                                        <a href="#" class="text-dark">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2">{{$row->title}}</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="p-3">{{$row->name}}</td>
                                    <td class="text-start">
                                        <a href="{{route('attributeGroups.edit',$row->id)}}" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-pen"></i></a>
                                        <a href="{{route('attributeGroups.delete',$row->id)}}" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-trash"></i></a>
                                        <form action="{{route('attributeGroups.delete' ,$row->id)}}" method="post"
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit">DE</button>
                                        </form>
                                    </td>
                                </tr>
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
