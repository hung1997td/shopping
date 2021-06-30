<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Model\ProductBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index()
    {
        $productBrand=ProductBrand::all();
        return view('admin.pages.product.product_brand.index',compact('productBrand'));
    }

    public function create()
    {
        return view('admin.pages.product.product_brand.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ],
            [
                'name.required' => 'Không được để trống'
            ]);

        $productBrand = new ProductBrand();
        $productBrand->name = $request->name;
        $productBrand->slug = Str::slug($productBrand->name, '-');
        $productBrand->save();
        if ($request->hasFile('fileToUpload')){
            $image_src = uploadFile($_FILES['fileToUpload'], 'product');
            $productBrand->logo = $image_src;
            $productBrand->save();
        }
//        saveLog(auth()->user()->id, 'Tạo 1 tag mới');
        return redirect()->route('ProductBrand');
    }

    public function edit($id)
    {
        $productBrand = ProductBrand::find($id);
        return view('admin.pages.product.product_brand.edit', compact('productBrand'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ],
            [
                'name.required' => 'Không được để trống'
            ]);

        $productBrand = ProductBrand::find($id);
        $productBrand->name = $request->name;
        $productBrand->slug = Str::slug($productBrand->name, '-');
        $productBrand->save();
        if ($request->hasFile('fileToUpload')){
            $image_src = saveFile($request->file('fileToUpload'), 'product/' . date('Y/m/d'));
            $productBrand->logo = $image_src;
            $productBrand->save();
        }
//        saveLog(auth()->user()->id, 'Sửa 1 tag');
        return redirect()->route('ProductBrand')->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        ProductBrand::destroy($id);
//        saveLog(auth()->user()->id, 'Xóa 1 tag');
        return redirect()->route('ProductBrand');
    }
}
