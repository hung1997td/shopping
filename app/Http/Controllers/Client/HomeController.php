<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Model\LinkProductColor;
use App\Model\Product;
use App\Model\ProductCategory;
use App\Model\ProductCode;
use App\Model\ProductColor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $linkProductColor=LinkProductColor::all();
        $colors=ProductColor::all();
        $products=Product::all();
        $categories=ProductCategory::all();
        $categoryLimit=ProductCategory::where('parent_id',0)->take(3)->get();
        $codes=ProductCode::all();
        return view('client.index',compact('codes','products','categories','linkProductColor','colors','categoryLimit'));
    }

    public function store()
    {

    }

    public function show()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
