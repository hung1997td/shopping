@extends('admin.layout.master')
@section('content')
    <h1 class="mt-4">Quản lý sản phẩm</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Thêm sản phẩm</li>
    </ol>
    <form action="{{route('storeProduct')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="form-group position-relative text-center">
                <img class="imagesForm" width="100" height="100"
                     src="{{asset('backend/img/default.png')}}"/>
                <label class="formLabel" for="productAvatar">
                    <i style="font-size: 18px;padding: 20px 10px" class="fa fa-pencil"></i>
                    <input
                        style="display: none" type="file" id="productAvatar" class="imagesAvatar"
                        name="fileToUpload"></label>
            </div>
            <div class="form-group">
                <label for="productNameAdd">Tên:</label>
                <input type="text" name="name" class="form-control" id="createProductName" placeholder="ahihi đây là sản phẩm">
                @error('name')
                <span style="display: block" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="productDessAdd">Mô tả:</label>
                <input type="text" name="description" class="form-control" id="createProductDess" placeholder="ahihi đây là mô tả">
                @error('description')
                <span style="display: block" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="productPriceAdd">Giá gốc:</label>
                <input type="number" name="regular_price" class="form-control" id="createProductPrice" placeholder="ahihi đây là giá gốc">
                @error('regular_price')
                <span style="display: block" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="productSaleAdd">Sale:</label>
                <input type="number" name="sale" class="form-control" id="createProductSale" placeholder="ahihi đây là giá sale">
            </div>
            <div class="form-group">
                <label for="productCodeAdd">Thuộc tính sản phẩm:</label>
                @foreach($codes as $code)
                <label style="display: inline-block; width: 100%;">
                    <input style="margin-right: 5px" name="code" type="radio" value="{{$code->id}}">{{$code->code}}
                </label>
                @endforeach
            </div>
            <div class="form-group">
                <label for="price_product">Album ảnh (tối đa 6 file)</label>
                <div class="multi-images">
                    <input type="hidden" name="delete_img" value="0">
                    <div class="img-item text-center">
                        <label class="labelProduct" for="productImages">
                            <i class="fa fa-plus-circle" style="font-size: 45px"></i>
                            <input style="display: none" id="productImages" type='file' class="imgInp imgInp1" multiple name="images[]" />
                        </label>
                        <div class="img-list d-flex justify-content-start flex-wrap">
                        </div>
                        <p class="delete-img" style="padding-top: 20px;cursor: pointer;font-size: 20px">Xóa</p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Màu:</label>
                @foreach($colors as $color)
                    <label style="display: inline-block; width: 100%;">
                        <input style="margin-right: 5px;vertical-align: middle" name="colors[]" type="checkbox" value="{{$color->id}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" style="margin-right: 10px" fill="{{$color->color_code}}" class="bi bi-circle-fill" viewBox="0 0 16 16">--}}
                            <circle cx="8" cy="8" r="8"/>
                        </svg>({{ $color->name }})
                    </label>
                @endforeach
            </div>
            <div class="form-group">
                <label>Size:</label>
                @foreach($sizes as $size)
                    <label style="display: inline-block; width: 100%;">
                            <input style="margin-right: 5px" name="sizes[]" type="checkbox" value="{{$size->id}}">{{$size->name}}
                    </label>
                @endforeach
            </div>
            <div class="form-group">
                <label>Tag:</label>
                @foreach($tags as $tag)
                    <label style="display: inline-block; width: 100%;">
                        <input style="margin-right: 5px" name="tags[]" type="checkbox" value="{{$tag->id}}">{{$tag->name}}
                    </label>
                @endforeach
            </div>
            <div class="form-group">
                <label for="productBrandAdd">Thương hiệu:</label>
                <select name="brand" id="createProductBrand" class="form-control">
                    @foreach($brands as $brand)
                    <option value="{{$brand->id}}"><b>{{$brand->name}}</b></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="productCateAdd">Danh mục:</label>
                <select name="category" id="createProductCate" class="form-control">
                    <option value="0"><b>Chọn danh mục</b></option>
                    {!! $html !!}
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy bỏ</button>
        </div>
    </form>
@endsection
@section('footer_script')
<script>
    function read(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('.imagesForm').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }
    $(".imagesAvatar").change(function() {
        read(this);
    });
    function readURL(input, object) {
        if (input.files.length > 6) {
            alert('Tối đa upload 6 file');
            object.parents('.img-item').find('input[type=file]').val('');
            return  false;
        }
        if (input.files && input.files[0]) {
            for (i = 0; i < input.files.length; i++) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    object.parents('.img-item').find('.img-list').append('<img src="'+e.target.result+'" />');
                }

                reader.readAsDataURL(input.files[i]); // convert to base64 string
            }
        }
    }

    $(".imgInp").change(function() {
        $(this).parents('.img-item').find('.img-list').html('');
        readURL(this, $(this));
    });

    $('.delete-img').click(function () {
        $('input[name=delete_img]').val('1');
        $(this).parents('.img-item').find('.img-list').html('');
        $(this).parents('.img-item').find('input[type=file]').val('');
    });
</script>
@endsection
