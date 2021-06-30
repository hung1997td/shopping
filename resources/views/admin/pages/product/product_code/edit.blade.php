@extends('admin.layout.master')
@section('content')
    <h1 class="mt-4">Quản lý sản phẩm</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Thuộc tính</li>
    </ol>
    <div>
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
            <form action="{{route('updateProductCode',$productCode->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="updateProductCodeName">Tên:</label>
                        <input type="text" name="code" value="{{$productCode->code}}" class="form-control" id="updateProductTagName">
                        @error('code')
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
