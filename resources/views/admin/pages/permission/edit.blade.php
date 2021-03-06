@extends('admin.layout.master')
@section('content')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý quyền</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sửa quyền</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    @if(session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    <form action="{{route('updatePermission',$permission->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="codePermissionUpdate">Code:</label>
                            <input value="{{$permission->code}}" type="text" name="code" class="form-control" id="codePermissionUpdate">
                            @error('code')
                            <span style="display: block" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="namePermissionUpdate">Tên:</label>
                            <input value="{{$permission->name}}" type="text" name="name" class="form-control" id="namePermissionUpdate">
                            @error('name')
                            <span style="display: block" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="descriptionPermissionUpdate">Mô tả:</label>
                            <input value="{{$permission->description}}" type="text" name="description" class="form-control" id="descriptionPermissionUpdate">
                            @error('description')
                            <span style="display: block" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <button class="btn btn-primary">Sửa</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection
