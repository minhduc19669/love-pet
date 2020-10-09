@extends('admin_layout')
@section('admin_content')
    <h4 class="header-title">Danh mục</h4>
    <a href="{{route('subcategory.add')}}"><i class="ion ion-md-add"></i><span>Thêm mới</span></a>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Id</th>
                <th>Tên danh mục sản phẩm con</th>
                <th>Tên danh mục sản phẩm</th>
                <th>Chú thích </th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $key => $category )
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <th>{{$category->sub_id}}</th>
                    <td>{{$category->category_sub_product_name}}</td>
                    <td>{{$category->parent_id}}</td>
                    <td>{{$category->category_sub_product_desc}}</td>
                    <td><a style="margin-right: 10px" href={{route('subcategory.edit',$category->sub_id)}}    ><i class=" ion ion-md-color-filter"></i></a>|<a onclick="return confirm('Bạn có thật sự muốn xóa không?')" style="margin-left: 10px" href={{route('subcategory.remove',$category->sub_id)}}><i class=" ion ion-md-close"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection