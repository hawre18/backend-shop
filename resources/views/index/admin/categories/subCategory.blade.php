@foreach($categories as $sub_category)
    <tr>
        <th class="p-3">{{$loop->index+1}}</th>
        <td class="py-3">
            <a href="#" class="text-dark">
                <div class="d-flex align-items-center">
                    <span class="me-2">{{$sub_category->name}}</span>
                </div>
            </a>
        </td>
        <td class="p-3">{{str_repeat('----',$level). $sub_category->title}}</td>
        <td class="text-start">
            <a href="#" class="btn btn-icon btn-pills btn-soft-primary"
               data-bs-toggle="modal" data-bs-target="#viewprofile"><i
                    class="uil uil-eye"></i></a>
            <a href="{{route('categories.edit',$sub_category->id)}}" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-pen"></i></a>
            <a href="{{route('categories.delete',$sub_category->id)}}" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-trash"></i></a>
        </td>
    </tr>
    @if(count($sub_category->childrenRecursive)>0)
        @include('index.admin.categories.subCategory',['categories'=>$sub_category->childrenRecursive , 'level'=>$level+1])
    @endif
@endforeach
