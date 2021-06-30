@extends('admin.layout.master')
@section('content')
    <h1 class="mt-4">Quản lý sản phẩm</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Size</li>
    </ol>
    <div>
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
            <form action="{{route('updateProductBrand',$productBrand->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group position-relative text-center">
                        <img class="imagesForm" width="100" height="100" src="
                            @if($productBrand->logo)
                        {{asset('backend/images').'/'.$productBrand->logo}}
                        @else
                        {{asset('backend/img/default.png')}}
                        @endif"/>
                        <label class="formLabel" for="fileToAddProduct">
                            <i style="font-size: 18px;padding: 20px 10px" class="fa fa-pencil"></i>
                            <input style="display: none" type="file" id="fileToAddProduct" class="imagesAvatar"
                                   name="fileToUpload"></label>
                    </div>
                    <div class="form-group">
                        <label for="updateProductBrandName">Tên:</label>
                        <input type="text" name="name" value="{{$productBrand->name}}" class="form-control" id="updateProductTagName">
                        @error('name')
                        <span style="display: block" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Sửa</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy bỏ</button>

                </div>
            </form>
    </div>
@endsection
