<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Model\Images;
use App\Model\Product;
use App\Model\ProductCategory;
use App\Model\ProductCode;
use App\Model\ProductColor;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::all();
        $colors=ProductColor::all();
        $codes=ProductCode::all();
        $categoryLimit=ProductCategory::where('parent_id',0)->take(3)->get();
        return view('client.component.shop',compact('categoryLimit','products','colors','codes'));
    }
    public function navbar(){
        $carts=session()->get('cart');
        return view('client.layout.navbar',compact('carts'));
    }
    public function show($id)
    {
        $product = Product::find($id);
        $images=Images::all();
        $category=ProductCategory::all();
        $categoryLimit=ProductCategory::where('parent_id',0)->take(3)->get();
        return view('client.pages.product.product-detail',compact('categoryLimit','product','category','images'));
    }
    public function addToCart($id)
    {
//        session()->flush();
        $products=Product::find($id);
        $cart=session()->get('cart');
        if (isset($cart[$id])){
            $cart[$id]['quantity']=$cart[$id]['quantity']+1;
        }else{
            $cart[$id]=[
              'name'=>$products->name,
              'regular_price'=>$products->regular_price,
              'quantity'=>1,
              'image'=>$products->image,
            ];
        }
        session()->put('cart',$cart);
        return response()->json([
            'code'=>200,
            'message'=>'succes'
        ],200);
    }
    public function showCart()
    {
        $carts=session()->get('cart');
        return view('client.pages.product.cart',compact('carts'));
    }
    public function updateCart(Request $request)
    {
        if ($request->id&&$request->quantity){
            $carts=session()->get('cart');
            $carts[$request->id]['quantity']=$request->quantity;
            session()->put('cart',$carts);
            $carts=session()->get('cart');
            $cartView=view('client.pages.product.cart',compact('carts'))->render();
            return response()->json([
                'cart'=>$cartView,
                'code'=>200
            ],200);
        }
    }
    public function deleteCart(Request $request)
    {
        if ($request->id){
            $carts=session()->get('cart');
            unset($carts[$request->id]);
            session()->put('cart',$carts);
            $carts=session()->get('cart');
            $cartView=view('client.pages.product.cart',compact('carts'))->render();
            return response()->json([
                'cart'=>$cartView,
                'code'=>200
            ],200);
        }
    }
}
