@extends('admin.layout.master')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Quản lý sản phẩm </h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Thuộc tính</li>
                </ol>
                <a href="{{route('createProductCode')}}" class="btn btn-primary addBtn mb-4">Thêm thuộc tính sản phẩm
                </a>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Bảng thuộc tính sản phẩm
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productCode as $value)
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->code}}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{route('editProductCode',$value->id)}}">Edit</a>
                                            <a class="btn btn-danger" href="{{route('deleteProductCode',$value->id)}}">Delete</a>
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
@endsection
