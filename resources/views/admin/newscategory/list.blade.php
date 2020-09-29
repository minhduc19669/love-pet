@extends('admin_layout')
@section('admin_content')
    <h4 class="header-title">Danh mục tin tức</h4>
    <a href="{{route('newscategory.add')}}"><i class="ion ion-md-add"></i><span>Thêm mới</span></a>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên dannh mục tin tức</th>
                <th>Ghi chú</th>
                <th>Trạng thái</th>

            </tr>
            </thead>
            <tbody>
            @foreach($newscategory as $key => $category)
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$category->news_cate_title}}</td>
                    <td>{{$category->news_cate_desc}}</td>
                    @if($category->category_status==0)
                        <td><a href={{\Illuminate\Support\Facades\URL::to('/users/unactive-category/'.$category->id)}}><i style="color: red" class="fas fa-smile-wink"></i></a></td>
                    @else
                        <td><a href={{\Illuminate\Support\Facades\URL::to('/users/active-category/'.$category->id)}}><i style="color: blue" class="fas fa-smile-wink"></i></a></td>

                    @endif
                    <td><a style="margin-right: 10px" href={{\Illuminate\Support\Facades\URL::to('users/edit-newscategory/'.$category->id)}}    ><i class=" ion ion-md-color-filter"></i></a>|<a onclick="return confirm('bạn có thật sự muốn xóa không?')" style="margin-left: 10px" href={{\Illuminate\Support\Facades\URL::to('users/remove-cate/'.$category->id)}}><i class=" ion ion-md-close"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection