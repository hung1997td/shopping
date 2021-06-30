<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\ProductBrand;
use App\Model\ProductCategory;
use App\Model\ProductColor;
use App\Model\ProductSize;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products=Product::all();
        $colors=ProductColor::all();
        $sizes=ProductSize::all();
        $brands=ProductBrand::all();
        $categories=ProductCategory::all();
        $categoryLimit=ProductCategory::where('parent_id',0)->take(3)->get();
        return view('client.pages.shop.shop',compact('categoryLimit','products','categories','brands','sizes','colors'));
    }
}
