@extends('admin.layout.master')
@section('content')
    <h1 class="mt-4">Quản lý màu</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Thêm màu</li>
    </ol>
    <form action="{{route('storeProductColor')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="tagNameAdd">Tên:</label>
                <input type="text" name="name" class="form-control" id="createProductColorName" placeholder="ahihi đây là tag">
                @error('name')
                <span style="display: block" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group" style="width: 80px">
                <label for="colorCodeAdd">Màu:</label>
                <input type="color" name="color_code" class="form-control" id="createProductColorName" value="df">
{{--                <i class="bi bi-circle-fill"></i>--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">--}}
{{--                    <circle cx="8" cy="8" r="8"/>--}}
{{--                </svg>--}}
                @error('color_code')
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
