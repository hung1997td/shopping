@extends('admin.layout.master')
@section('content')
    <h1 class="mt-4">Quản lý sản phẩm</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Color</li>
    </ol>
    <div>
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
            <form action="{{route('updateProductColor',$productColor->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="updateProductColorName">Tên:</label>
                        <input type="text" name="name" value="{{$productColor->name}}" class="form-control" id="updateProductColorName">
                        @error('name')
                        <span style="display: block" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="updateProductColorColor">Tên:</label>
                        <input type="text" name="color_code" value="{{$productColor->color_code}}" class="form-control" id="updateProductColorColor">
                        @error('color_code')
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
