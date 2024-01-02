@extends('template.admin.layout')
@section('styles')
<link href="{{asset('admin/assets/css/dropzone.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between">
            <h5 class="mb-0">افزودن بنر جدید</h5>

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
                                               @foreach($errors->all() as $error)
                                                   <li>{{$error}}</li>
                                               @endforeach
                                           </ul>
                                           </div>
                                       @endif
                                    <form action="{{url('admin/baners')}}" method="post">
                                          @csrf
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">عنوان</label>
                                            <input name="title" id="name2" type="text" class="form-control" placeholder="عنوان :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">لینک</label>
                                            <input name="link" id="name2" type="text" class="form-control" placeholder="لینک :">
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

                                    <div class="col-md-12">
                                        <input type="hidden" name="image_id" id="BanerImage">
                                            <label class="form-label">عکس بنر</label>
                                            <div id="image_baner" class="mb-3 dropzone">
                                            <div class="mb-3 dropzone">
                                        </div>
                                    </div>
                                </div><!--end row-->
                                <button type="submit" class="btn btn-primary">افزودن بنر</button>
                            </form>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
         </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{asset('admin/assets/js/dropzone.js')}}"></script>
    <script>
        Dropzone.autoDiscover=false;
        var drop=new Dropzone('#image_baner',{
            maxFiles:1,
            addRemoveLinks:true,
            url:"{{route('banerImage.upload')}}",
            sending:function (file,xhr,formData){
                formData.append("_token","{{csrf_token()}}")
            },
            success:function (file,response){
                document.getElementById('BanerImage').value=response.image_banerId
             }
        });
    </script>
@endsection
