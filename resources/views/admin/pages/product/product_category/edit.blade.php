@extends('admin.layout.master')
@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Quản lý danh mục sản phẩm</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Sửa danh mục</li>
                </ol>
            </div>
            <div style="width: 40%; margin: auto">
                @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <form action="{{route('updateProductCate', $productCate->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="productCategoryNameUpdate">Tên:</label>
                        <input value="{{$productCate->name}}" type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="productCategoryNameUpdate">
                        @error('name')
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
