@extends('admin.layout.master')
@section('content')
    <h1 class="mt-4">Quản lý tag</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Thêm tags</li>
    </ol>
    <form action="{{route('storeProductTag')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="tagNameAdd">Tên:</label>
                <input type="text" name="name" class="form-control" id="createProductTagName" placeholder="ahihi đây là tag">
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
