<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Model\Images;
use App\Model\LinkProductColor;
use App\Model\LinkProductSize;
use App\Model\LinkProductTag;
use App\Model\Product;
use App\Model\ProductBrand;
use App\Model\ProductCategory;
use App\Model\ProductCode;
use App\Model\ProductColor;
use App\Model\ProductSize;
use App\Model\ProductTag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $codes=ProductCode::all();
        $colors=ProductColor::all();
        $linkProductColor=LinkProductColor::all();
        $brands=ProductBrand::all();
        $sizes=ProductSize::all();
        $linkProductSize =LinkProductSize::all();
        $category=ProductCategory::all();
        $linkProductTag=LinkProductTag::all();
        $tags=ProductTag::all();
        $products =Product::all();
        return view('admin.pages.product.index',compact('products','linkProductTag','tags','codes','colors','linkProductColor','brands','sizes','linkProductSize','category'));
    }

    public function create()
    {
        $codes=ProductCode::all();
        $brands=ProductBrand::all();
        $category=ProductCategory::all();
        $colors=ProductColor::all();
        $sizes=ProductSize::all();
        $html = getProductCategory($parent_id = 0);
        $tags =ProductTag::all();
        return view('admin.pages.product.create', compact('brands','tags','codes','tags','html','category','colors','sizes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'regular_price' => 'required'
        ],
            [
                'name.required' => 'Không được để trống',
                'description.required' => 'Không được để trống',
                'regular_price.required' => 'Không được để trống',
            ]);


        $product = new Product();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->regular_price = $request->regular_price;
        $product->sale = $request->sale;
        $product->slug = Str::slug($product->name, '-');
        $product->code_id = $request->code;
        $product->brand_id = $request->brand;
        $product->category_id = $request->category;
        $product->save();

        if ($request->hasFile('fileToUpload')){
            $image_src = saveFile($request->file('fileToUpload'), 'product/' . date('Y/m/d'));
            $product->image = $image_src;
            $product->save();
        }
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $img_path = saveFile($file, 'product/' . date('Y/m/d'));
                $product_images = new Images();
                $product_images->product_id = $product->id;
                $product_images->path = $img_path;
                $product_images->save();
            }
        } else {
            if ($request->get('delete_img') == 1) {
                Images::where('product_id', $product->id)->delete();
            }
        }

        $product->colors()->sync($request->colors);
        $product->sizes()->sync($request->sizes);
        $product->tags()->sync($request->tags);
//        saveLog(auth()->user()->id, 'Tạo 1 sản phẩm mới');
        return redirect()->route('Product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $codes=ProductCode::all();
        $images=Images::all();
        $linkProductSize=LinkProductSize::all();
        $linkProductColor=LinkProductColor::all();
        $sizes = ProductSize::all();
        $brands = ProductBrand::all();
        $colors = ProductColor::all();
        $linkProductTag=LinkProductTag::all();
        $tags=ProductTag::all();
        $html = getProductCategory($product->category_id);
        return view('admin.pages.product.edit', compact('html','tags','linkProductTag','codes','images','linkProductSize','linkProductColor', 'product', 'colors', 'sizes', 'brands'));

    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'regular_price' => 'required'
        ],
            [
                'name.required' => 'Không được để trống',
                'description.required' => 'Không được để trống',
                'regular_price.required' => 'Không được để trống',
            ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->regular_price = $request->regular_price;
        $product->sale = $request->sale;
        $product->slug = Str::slug($product->name, '-');
        $product->code_id = $request->codes;
        $product->brand_id = $request->brand;
        $product->category_id = $request->category;
        $product->save();

        if ($request->hasFile('fileToUpload')){
            $image_src = saveFile($request->file('fileToUpload'), 'product/' . date('Y/m/d'));
            $product->image = $image_src;
            $product->save();
        }
        if ($request->hasFile('images')) {
            Images::where('product_id', $product->id)->delete();
            foreach ($request->file('images') as $file) {
                $img_path = saveFile($file, 'product/' . date('Y/m/d'));
                $product_images = new Images();
                $product_images->product_id = $product->id;
                $product_images->path = $img_path;
                $product_images->save();
            }
        } else {
            if ($request->get('delete_img') == 1) {
                Images::where('product_id', $product->id)->delete();
            }
        }

        $product->colors()->sync($request->color);
        $product->sizes()->sync($request->size);
        $product->tags()->sync($request->tag);

//        saveLog(auth()->user()->id, 'Sửa 1 danh mục sản phẩm');
        return redirect()->route('Product')->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        Product::destroy($id);
//        saveLog(auth()->user()->id, 'Xóa 1 tag');
        return redirect()->route('Product');
    }
}
