@extends('admin_layout')
@section('admin_content')
    <h4 class="header-title">Danh sách nhân viên quản lí</h4>
    <a href="{{route('user.create')}}"><i class="ion ion-md-add"></i><span>Thêm mới</span></a>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên nhân viên</th>
                <th>Ảnh đại diện</th>
                <th>Email</th>
                <th>Chức vụ</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key => $user )
            <tr>
                <th scope="row">{{++$key}}</th>
                <td style="margin-top: 10px">{{$user->name}}</td>
                <td> @if($user->avatar)
                                    <img src="{{asset("storage/images/".$user->avatar)}}" id="imgProfile"
                                         style="width: 100px; height: 100px" class="img-thumbnail"/>
                                @else
                                    <img src="http://placehold.it/150x150" id="imgProfile"
                                         style="width: 100px; height: 100px" class="img-thumbnail"/>
                                @endif</td>
                <td>{{$user->email}}</td>
                <td>
                            @foreach ($user->roles as $role)

                                                {{$role->role_name}}<br>

                                            @endforeach
                </td>

                <td><a style="margin-right: 10px" href="{{route('user.edit',$user->id)}}"><i class=" ion ion-md-color-filter"></i></a>|
                    @if (Auth::id()==$user->id)
                        <a style="pointer-events: none;cursor:default; color:black;" onclick="return confirm('Bạn có chắc chắn không?')" style="margin-left: 10px" href="{{route('user.delete',$user->id)}}"><i class=" ion ion-md-close"></i></a>
                        @else
                        <a onclick="return confirm('Bạn có chắc chắn không?')" style="margin-left: 10px" href="{{route('user.delete',$user->id)}}"><i class=" ion ion-md-close"></i></a>
                    @endif
                    </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
