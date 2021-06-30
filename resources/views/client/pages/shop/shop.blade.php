@extends('client.layout.master')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Shop</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->
    <!-- START MAIN CONTENT -->
<div class="main_content">

    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row align-items-center mb-4 pb-1">
                        <div class="col-12">
                            <div class="product_header">
                                <div class="product_header_left">
                                    <div class="custom_select">
                                        <select class="form-control form-control-sm sorter-options" data-role="sorter">
                                            <option value="order">Default sorting</option>
                                            <option value="name asc">Sắp xếp theo: Tên (A - Z)</option>
                                            <option value="name desc">Sắp xếp theo: Tên (Z - A)</option>
                                            <option value="base_price asc">Giá tăng dần</option>
                                            <option value="base_price desc">Giá giảm dần</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="product_header_right">
                                    <div class="products_view">
                                        <a href="javascript:Void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                                        <a href="javascript:Void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                                    </div>
                                    <div class="custom_select">
                                        <select class="form-control form-control-sm">
                                            <option value="">Showing</option>
                                            <option value="9">9</option>
                                            <option value="12">12</option>
                                            <option value="18">18</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row shop_container">
                        @foreach($products as $product)
                        <div class="col-md-4 col-6">
                            <div class="product">
                                <div class="product_img">
                                    <a href="{{route('productDetail',$product->id)}}">
                                        <img src="{{asset('backend/images')}}/{{$product->image}}" alt="product_img9">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="{{URL::to('product-details',$product->id.$product->slug)}}"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="{{route('productDetail',$product->id)}}">{{$product->name}}</a></h6>
                                    <div class="product_price">
                                        @if($product->sale==null)
                                            <span class="price">{{ number_format($product->regular_price) }} VNĐ</span>
                                        @else
                                            <span class="price">{{ number_format($product->sale) }} VNĐ</span>
                                            <del>{{ number_format($product->regular_price) }} VNĐ</del>
                                        @endif
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:87%"></div>
                                        </div>
                                        <span class="rating_num">(25)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>{{$product->description}}</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            @foreach($product->colors as $color)
                                                <span class="active" data-color="{{$color->color_code}}" style="background-color:{{$color->color_code}} "></span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="pagination mt-3 justify-content-center pagination_style1">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="linearicons-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <div class="sidebar">
                        <div class="widget">
                            <h5 class="widget_title">Categories</h5>
                            <ul class="widget_categories">
                                @foreach($categories as $cate)
                                    @if($cate->parent_id===0)
                                        <li>
                                            <a href="/shop_cate/{{$cate->id}}">
                                                <span class="categories_name">{{$cate->name}}</span>
                                                <span class="categories_num">(9)</span>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title">Brand</h5>
                            <ul class="list_brand">
                                @foreach($brands as $brand)
                                <li>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="{{$brand->name}}" value="">
                                        <label class="form-check-label" for="{{$brand->name}}"><span>{{$brand->name}}</span></label>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title">Size</h5>
                            <div class="product_size_switch">
                                @foreach($sizes as $size)
                                <span>{{$size->name}}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title">Color</h5>
                            <div class="product_color_switch">
                                @foreach($colors as $color)
                                <span data-color="{{$color->color_code}}"></span>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget">
                            <div class="shop_banner">
                                <div class="banner_img overlay_bg_20">
                                    <img src="{{asset('client/assets/images/sidebar_banner_img.jpg')}}" alt="sidebar_banner_img">
                                </div>
                                <div class="shop_bn_content2 text_white">
                                    <h5 class="text-uppercase shop_subtitle">New Collection</h5>
                                    <h3 class="text-uppercase shop_title">Sale 30% Off</h3>
                                    <a href="#" class="btn btn-white rounded-0 btn-sm text-uppercase">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- END SECTION SHOP -->
    @include('client.component.subscribe')
@endsection
