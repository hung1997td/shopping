<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Model\ProductBrand;
use App\Model\ProductCode;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CodeController extends Controller
{
    public function index()
    {
        $productCode=ProductCode::all();
        return view('admin.pages.product.product_code.index',compact('productCode'));
    }

    public function create()
    {
        return view('admin.pages.product.product_code.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
        ],
            [
                'code.required' => 'Không được để trống'
            ]);

        $productCode = new ProductCode();
        $productCode->code = $request->code;
        $productCode->save();
//        saveLog(auth()->user()->id, 'Tạo 1 tag mới');
        return redirect()->route('ProductCode');
    }

    public function edit($id)
    {
        $productCode = ProductCode::find($id);
        return view('admin.pages.product.product_code.edit', compact('productCode'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required'
        ],
            [
                'code.required' => 'Không được để trống'
            ]);

        $productCode = ProductBrand::find($id);
        $productCode->code = $request->code;
        $productCode->save();
//        saveLog(auth()->user()->id, 'Sửa 1 tag');
        return redirect()->route('ProductCode')->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        ProductCode::destroy($id);
//        saveLog(auth()->user()->id, 'Xóa 1 tag');
        return redirect()->route('ProductCode');
    }
}
