<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Model\ProductSize;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        $productSize=ProductSize::all();
        return view('admin.pages.product.product_size.index',compact('productSize'));
    }

    public function create()
    {
        return view('admin.pages.product.product_size.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ],
            [
                'name.required' => 'Không được để trống'
            ]);

        $productSize = new ProductSize();
        $productSize->name = $request->name;
        $productSize->save();
//        saveLog(auth()->user()->id, 'Tạo 1 tag mới');
        return redirect()->route('ProductSize');
    }

    public function edit($id)
    {
        $productSize = ProductSize::find($id);
        return view('admin.pages.product.product_size.edit', compact('productSize'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ],
            [
                'name.required' => 'Không được để trống'
            ]);

        $productSize = ProductSize::find($id);
        $productSize->name = $request->name;
        $productSize->save();
//        saveLog(auth()->user()->id, 'Sửa 1 tag');
        return redirect()->route('ProductSize')->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        ProductSize::destroy($id);
//        saveLog(auth()->user()->id, 'Xóa 1 tag');
        return redirect()->route('ProductSize');
    }
}
