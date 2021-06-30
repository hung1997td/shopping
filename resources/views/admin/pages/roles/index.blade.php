@extends('admin.layout.master')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Quản lý vai trò</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Sản phẩm </li>
                </ol>
                <a href="{{route('createRoles')}}" class="btn btn-primary addBtn mb-4">Thêm vai trò
                </a>
                <div class="card-header">
                    <i class="fa fa-table"></i>
                    Bảng vai trò
                </div>
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Code</th>
                                                    <th>Mô tả</th>
                                                    <th>Hành động</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($roles as $role)
                                                    <tr>
                                                        <td>{{$role->id}}</td>
                                                        <td>{{$role->code}}</td>
                                                        <td>{{$role->name}}</td>
                                                        <td>
                                                            <a class="btn btn-primary" href="{{route('editRoles',$role->id)}}">Edit</a>
                                                            <a class="btn btn-danger" href="{{route('deleteRoles',$role->id)}}">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </main>
    </div>
@endsection
s
