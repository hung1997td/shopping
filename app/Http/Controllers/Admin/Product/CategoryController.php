<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Model\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $productCate=ProductCategory::all();
        return view('admin.pages.product.product_category.index',compact('productCate'));
    }

    public function create()
    {
        $html = getProductCategory($parent_id = 0);
        return view('admin.pages.product.product_category.create', compact('html'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ],
            [
                'name.required' => 'Không được để trống'
            ]);

        $productCate = new ProductCategory();
        $productCate->name = $request->name;
        $productCate->parent_id = $request->nameProductCate;
        $productCate->slug = Str::slug($productCate->name, '-');
        $productCate->save();
//        saveLog(auth()->user()->id, 'Tạo 1 tag mới');
        return redirect()->route('ProductCate');
    }

    public function edit($id)
    {
        $productCate = ProductCategory::find($id);
        return view('admin.pages.product.product_category.edit', compact('productCate'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ],
            [
                'name.required' => 'Không được để trống'
            ]);

        $productCate = ProductCategory::find($id);
        $productCate->name = $request->name;
        $productCate->slug = Str::slug($productCate->name, '-');
        $productCate->save();
//        saveLog(auth()->user()->id, 'Sửa 1 tag');
        return redirect()->route('ProductCate')->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        ProductCategory::destroy($id);
//        saveLog(auth()->user()->id, 'Xóa 1 tag');
        return redirect()->route('ProductCate');
    }
}
