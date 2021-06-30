@extends('admin.layout.master')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Quản lý danh mục tin tức</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active">Thêm danh mục tin tức</li>
            </ol>
        </div>
        <div style="width: 40%; margin: auto">
            <form action="{{route('storeProductCate')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="newsCategoryNameAdd">Tên:</label>
                    <input type="text" name="name" class="form-control" id="newsCategoryNameAdd">
                </div>
                <div class="form-group">
                    <select name="nameProductCate" id="newsCategoryCategoryAdd" class="form-control">
                        <option value="0"><b>Chọn là danh mục cha:</b></option>
                        {!! $html !!}
                    </select>
                </div>
                <button class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </main>
@endsection
