<<<<<<< HEAD
@extends('admin_layout')
@section('admin_content')
    <h4 class="header-title">Thương hiệu</h4>
    <a href="{{route('brand.add')}}"><i class="ion ion-md-add"></i><span>Thêm mới</span></a>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên thương hiệu</th>
                <th>Logo</th>
                <th>Ghi chú</th>
                <th>Trạng thái</th>

            </tr>
            </thead>
            <tbody>
            @foreach($list as $key => $brand )

                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$brand->brand_name}}</td>
                    <td><img width="50px" src="\brand\{{$brand->brand_image}}"></td>
                    <td>{{$brand->brand_desc}}</td>
                    @if($brand->brand_status==0)
                        <td><a href={{\Illuminate\Support\Facades\URL::to('/admin/unactive-brand/'.$brand->id)}}><i style="color: red" class="fas fa-smile-wink"></i></a></td>
                    @else
                        <td><a href={{\Illuminate\Support\Facades\URL::to('/admin/active-brand/'.$brand->id)}}><i style="color: blue" class="fas fa-smile-wink"></i></a></td>

                    @endif
                    <td><a style="margin-right: 10px" href={{\Illuminate\Support\Facades\URL::to('admin/edit-brand/'.$brand->id)}}    ><i class=" ion ion-md-color-filter"></i></a>|<a onclick="return confirm('bạn có thật sự muốn xóa không?')" style="margin-left: 10px" href={{\Illuminate\Support\Facades\URL::to('admin/remove-brand/'.$brand->id)}}><i class=" ion ion-md-close"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

=======
<?php
>>>>>>> 7f8aed56f1cb2eb03d8445e4a37f5369a39e120f