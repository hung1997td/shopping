<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Model\ProductColor;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $productColor=ProductColor::all();
        return view('admin.pages.product.product_color.index',compact('productColor'));
    }

    public function create()
    {
        return view('admin.pages.product.product_color.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'color_code'=> 'required'
        ],
            [
                'name.required' => 'Không được để trống',
                'color_code.required'=> 'Không được để trống'
            ]);

        $productColor = new ProductColor();
        $productColor->name = $request->name;
        $productColor->color_code = $request->color_code;
        $productColor->save();
//        saveLog(auth()->user()->id, 'Tạo 1 tag mới');
        return redirect()->route('ProductColor');
    }

    public function edit($id)
    {
        $productColor = ProductColor::find($id);
        return view('admin.pages.product.product_color.edit', compact('productColor'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'color_code'=> 'required'
        ],
            [
                'name.required' => 'Không được để trống',
                'color_code.required'=> 'Không được để trống'
            ]);

        $productColor = ProductColor::find($id);
        $productColor->name = $request->name;
        $productColor->color_code = $request->color_code;
        $productColor->save();
//        saveLog(auth()->user()->id, 'Sửa 1 tag');
        return redirect()->route('ProductColor')->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        ProductColor::destroy($id);
//        saveLog(auth()->user()->id, 'Xóa 1 tag');
        return redirect()->route('ProductColor');
    }
}
