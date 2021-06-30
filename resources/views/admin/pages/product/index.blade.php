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
                    <li class="breadcrumb-item active">Sản phẩm </li>
                </ol>
                <a href="{{route('createProduct')}}" class="btn btn-primary addBtn mb-4">Thêm sản phẩm</a>
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title d-flex align-items-center">
                            <i style="font-size: 20px;" class="fa fa-table mr-2"></i>
                            <h2>Bảng danh sách sản phẩm</h2>
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
                                                <th>Ảnh</th>
                                                <th>Mô tả</th>
                                                <th>Giá</th>
                                                <th>Sale</th>
                                                <th>Slug</th>
                                                <th>Thuộc tính sản phẩm</th>
                                                <th>Màu</th>
                                                <th>Size</th>
                                                <th>Tag</th>
                                                <th>Thương hiệu</th>
                                                <th>Danh mục</th>
                                                <th>Hành động</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            @foreach($products as $product)
                                                <tr>
                                                    <td>{{$product->id}}</td>
                                                    <td>{{$product->name}}</td>
                                                    <td class="text-center"><img src="
                                                @if($product->image)
                                                    {{asset('backend/images').'/'.$product->image}}
                                                @else
                                                     {{asset('backend/img/default.png')}}
                                                @endif"
                                                     alt="" width="100" height="100"></td>
                                                    <td>{{$product->description}}</td>
                                                    <td>{{$product->regular_price}}</td>
                                                    <td>{{$product->sale}}</td>
                                                    <th>{{$product->slug}}</th>
                                                    <td>
                                                        @foreach ($codes as $code)
                                                            @if ($product->code_id == $code->id)
                                                                {{$code->code}}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach ($linkProductColor as $value)
                                                            @if ($product->id == $value->product_id)
                                                                @foreach ($colors as $color)
                                                                    @if($color->id == $value->color_id)
                                                                        <i class="fa fa-circle" style="color:{{$color->color_code}};font-size:20px"></i>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach ($linkProductSize as $value)
                                                            @if ($product->id == $value->product_id)
                                                                @foreach ($sizes as $size)
                                                                    @if($size->id == $value->size_id)
                                                                        {{$size->name . ','}}
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach ($linkProductTag as $value)
                                                            @if ($product->id == $value->product_id)
                                                                @foreach ($tags as $tag)
                                                                    @if($tag->id == $value->tag_id)
                                                                        {{$tag->name . ','}}
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach ($brands as $brand)
                                                            @if ($product->brand_id == $brand->id)
                                                                {{$brand->name}}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach ($category as $cate)
                                                            @if ($product->category_id == $cate->id)
                                                                {{$cate->name}}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary mb-3" href="{{route('editProduct',$product->id)}}">Edit</a>
                                                        <a class="btn btn-danger" href="{{route('deleteProduct',$product->id)}}">Delete</a>
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
