<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Model\ProductTag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $productTag=ProductTag::all();
        return view('admin.pages.product.product_tag.index',compact('productTag'));
    }

    public function create()
    {
        return view('admin.pages.product.product_tag.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ],
            [
                'name.required' => 'Không được để trống'
            ]);

        $productTag = new ProductTag();
        $productTag->name = $request->name;
        $productTag->save();
//        saveLog(auth()->user()->id, 'Tạo 1 tag mới');
        return redirect()->route('ProductTag');
    }

    public function edit($id)
    {
        $productTag = ProductTag::find($id);
        return view('admin.pages.product.product_tag.edit', compact('productTag'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ],
            [
                'name.required' => 'Không được để trống'
            ]);

        $productTag = ProductTag::find($id);
        $productTag->name = $request->name;
        $productTag->save();
//        saveLog(auth()->user()->id, 'Sửa 1 tag');
        return redirect()->route('ProductTag')->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        ProductTag::destroy($id);
//        saveLog(auth()->user()->id, 'Xóa 1 tag');
        return redirect()->route('ProductTag');
    }
}
