@extends('admin.layout.master')
@section('content')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý người dùng</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Quản lý người dùng</li>
                    </ol>
                        <a href="{{route('createUsers')}}" class="btn btn-primary addBtn">Thêm người dùng
                        </a>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Bảng người dùng
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Ảnh đại diện</th>
                                        <th>Tên</th>
                                        <th>Họ</th>
                                        <th>Email</th>
                                        <th>Nhóm quyền</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $key => $user)
                                        <tr>
                                            <td class="text-center"><img
                                                    src="@if($user->image)
                                                    {{asset('backend/images').'/'.$user->image}}
                                                    @else
                                                    {{asset('backend/img/default.png')}}
                                                    @endif"
                                                    alt="" width="100" height="100"></td>
                                            <td>{{$user->first_name}}</td>
                                            <td>{{$user->last_name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                @foreach($user->roles as $role)
                                                    {{$role->name}},
                                                @endforeach
                                            </td>
                                            <td >
                                                    <a class="btn btn-primary mr-1"
                                                       href="{{route('editUsers',$user->id)}}">Sửa</a>
                                                <a class="delete btn btn-danger"
                                                   href="{{route('deleteUsers',$user->id)}}">Xóa</a>
{{--                                                    <form action="{{route('deleteUsers',$user->id)}}"--}}
{{--                                                          method="POST">--}}
{{--                                                        @csrf--}}
{{--                                                        <button class="delete btn btn-danger">Xóa</button>--}}
{{--                                                    </form>--}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
