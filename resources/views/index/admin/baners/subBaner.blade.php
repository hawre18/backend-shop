@foreach($baners as $sub_Baners)
    <tr>
        <th class="p-3">{{$loop->index+1}}</th>
        <td class="py-3">
            <a href="#" class="text-dark">
                <div class="d-flex align-items-center">
                    <img src="{{asset('admin/assets/images/client/01.jpg')}}"
                         class="avatar avatar-md-sm rounded-circle shadow" alt="">
                    <span class="me-2">{{$sub_Baners->title}}</span>
                </div>
            </a>
        </td>
        <td class="p-3">{{str_repeat('----',$level). $sub_Baners->title}}</td>
        <td class="p-3">{{$sub_Baners->link}}</td>
        <td class="p-3"><span class="badge bg-soft-success">{{$sub_Baners->status}}</span></td>
        <td class="text-start">
            <a href="#" class="btn btn-icon btn-pills btn-soft-primary"
               data-bs-toggle="modal" data-bs-target="#viewprofile"><i
                    class="uil uil-eye"></i></a>
            <a href="{{route('baners.edite' ,$sub_Baners->id)}}" class="btn btn-icon btn-pills btn-soft-success"
                    class="uil uil-pen"></i></a>
            <a href="{{route('baners.destroy' ,$sub_Baners->id)}}" class="btn btn-icon btn-pills btn-soft-danger"><i
                    class="uil uil-trash"></i></a>
            <form action="{{route('baners.delete' ,$sub_Baners->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit">DE</button>
            </form>
        </td>
    </tr>
    @if(count($sub_Baners->childrenRecursive)>0)
        @include('index.admin.baners.subBaner',['baners'=>$sub_Baners->childrenRecursive , 'level'=>$level+1])
    @endif
@endforeach
