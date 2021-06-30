@extends('admin.layout.master')
@section('content')
    <h1 class="mt-4">Quản lý size</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Thêm size</li>
    </ol>
    <form action="{{route('storeProductSize')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="sizeNameAdd">Tên:</label>
                <input type="text" name="name" class="form-control" id="createProductSizeName" placeholder="ahihi đây là size">
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
