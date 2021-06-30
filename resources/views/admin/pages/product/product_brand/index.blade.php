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
                <li class="breadcrumb-item active">Thương hiệu sản phẩm</li>
            </ol>
            <a href="{{route('createProductBrand')}}" class="btn btn-primary addBtn mb-4">Thêm thương hiệu sản phẩm</a>
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title d-flex align-items-center">
                        <i style="font-size: 20px;" class="fa fa-table mr-2"></i>
                        <h2>Bảng thương hiệu sản phẩm</h2>
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
                                            <th>Tên</th>
                                            <th>Logo</th>
                                            <th>Slug</th>
                                            <th>Hành động</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($productBrand as $value)
                                            <tr>
                                                <td>{{$value->id}}</td>
                                                <td>{{$value->name}}</td>
                                                <td class="text-center"><img
                                                        src="
                                                @if($value->logo)
                                                        {{asset('backend/images').'/'.$value->logo}}
                                                        @else
                                                        {{asset('backend/img/default.png')}}
                                                        @endif"
                                                        alt="" width="100" height="100"></td>
                                                <td>{{$value->slug}}</td>
                                                <td>
                                                    <a class="btn btn-primary" href="{{route('editProductBrand',$value->id)}}">Edit</a>
                                                    <a class="btn btn-danger" href="{{route('deleteProductBrand',$value->id)}}">Delete</a>
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
