@extends('admin.layout.master')
@section('content')
    <h1 class="mt-4">Quản lý thương hiệu</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Thêm thương hiệu</li>
    </ol>
    <form action="{{route('storeProductBrand')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="form-group position-relative text-center">
                <img class="imagesForm" width="100" height="100"
                     src="{{asset('backend/img/default1.png')}}"/>
                <label class="formLabel" for="productAvatar">
                    <i style="font-size: 18px;padding: 20px 10px" class="fa fa-pencil"></i>
                    <input
                        style="display: none" type="file" id="productAvatar" class="imagesAvatar"
                        name="fileToUpload"></label>
            </div>
            <div class="form-group">
                <label for="brandNameAdd">Tên:</label>
                <input type="text" name="name" class="form-control" id="createProductBrandName" placeholder="ahihi đây là thương hiệu">
                @error('name')
                <span style="display: block" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy bỏ</button>

        </div>
    </form>
@endsection
