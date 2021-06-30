@extends('admin.layout.master')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Quản lí sản phẩm</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <ol class="breadcrumb col-md-12 col-sm-12 ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Màu sản phẩm</li>
            </ol>
            <a href="{{route('createProductColor')}}" class="btn btn-primary addBtn mb-4">Thêm màu sản phẩm</a>
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title d-flex align-items-center">
                        <i style="font-size: 20px;" class="fa fa-table mr-2"></i>
                        <h2>Bảng màu sản phẩm</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable-keytable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên màu</th>
                                            <th>Mã màu</th>
                                            <th>Hành động</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($productColor as $value)
                                            <tr>
                                                <td>{{$value->id}}</td>
                                                <td>{{$value->name}}</td>
                                                <td>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="{{$value->color_code}}" class="bi bi-circle-fill" viewBox="0 0 16 16">--}}
                                                        <circle cx="8" cy="8" r="8"/>
                                                    </svg>
                                                    {{$value->color_code}}
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary" href="{{route('editProductColor',$value->id)}}">Edit</a>
                                                    <a class="btn btn-danger" href="{{route('deleteProductColor',$value->id)}}">Delete</a>
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
    </div>
@endsection
