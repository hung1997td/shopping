@extends('admin.layout.master')
@section('content')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý quyền</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Thêm quyền</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="{{route('storePermission')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="codePermissionAdd">Code:</label>
                            <input type="text" name="code" class="form-control" id="codePermissionAdd">
                            @error('code')
                            <span style="display: block" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="namePermissionAdd">Tên:</label>
                            <input type="text" name="name" class="form-control" id="namePermissionAdd">
                            @error('name')
                            <span style="display: block" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="descriptionPermissionAdd">Mô tả:</label>
                            <input type="text" name="description" class="form-control" id="descriptionPermissionAdd">
                            @error('description')
                            <span style="display: block" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <select name="permission_parent" class="form-control">
                                <option value="0"><b>Chọn nhóm quyền cha:</b></option>
                                {!! $html !!}
                            </select>
                        </div>
                        <button class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection
