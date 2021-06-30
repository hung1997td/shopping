@extends('admin.layout.master')
@section('content')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý quyền</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Quản lý quyền</li>
                    </ol>
                        <a href="{{route('createPermission')}}" class="btn btn-primary addBtn">Thêm quyền
                        </a>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Bảng quyền
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Code</th>
                                        <th>Tên</th>
                                        <th>Mô tả</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($permissions as $permission)
                                        <tr>
                                            <td>{{$permission->id}}</td>
                                            <td>{{$permission->code}}</td>
                                            <td>{{$permission->name}}</td>
                                            <td>{{$permission->description}}</td>
                                            <td class="d-flex">
                                                    <a class="btn btn-primary mr-1"
                                                       href="{{route('editPermission',$permission->id)}}">Sửa</a>
                                                    <form action="{{route('deletePermission',$permission->id)}}"
                                                          method="POST">
                                                        @csrf
                                                        <button class="delete btn btn-danger">Xóa</button>
                                                    </form>
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
