@extends('admin.layout.master')
@section('content')
    <h1 class="mt-4">Quản lý vai trò</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Thêm vai trò</li>
    </ol>
    <form action="{{route('storeRoles')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="roleCodeAdd">Code:</label>
                <input type="text" name="code" class="form-control" id="createRoleCode" placeholder="Nhập code ">
                @error('name')
                <span style="display: block" class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="roleNameAdd">Mô tả:</label>
                <input type="text" name="name" class="form-control" id="createRoleName" placeholder="Nhập mô tả chpo vai trò">
                @error('name')
                <span style="display: block" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <div class="role__right">
                    <label style="margin-top: 30px">
                        <input
                            style='margin-right: 5px;' class="perAll"
                            type='checkbox'> Check all
                    </label>
                    @foreach($parentPermissions as $parentPermission)
                        <div class="parentCheck">
                            <label>
                                <input
                                    style='margin-right: 5px; margin-left: 30px' class="perChecked"
                                    type='checkbox'
                                    value="{{$parentPermission->id}}">{{$parentPermission->name}}
                            </label>
                            @foreach($parentPermission->permissionChildren as $permissionChild)
                                <label
                                    style="display: inline-block; width: 100%; margin-left: 60px">
                                    <input class="childrenCheck" style="margin-right: 5px;"
                                           name="pers[]"
                                           type="checkbox"
                                           value="{{$permissionChild->id}}">{{$permissionChild->name}}
                                </label>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy bỏ</button>
        </div>
    </form>
@endsection
