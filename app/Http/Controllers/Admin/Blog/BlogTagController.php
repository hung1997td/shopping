<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Model\BlogTag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogTagController extends Controller
{
    public function index()
    {
        $blogTag=BlogTag::all();
        return view('admin.pages.blog.blog_tag.index',compact('blogTag'));
    }

    public function create()
    {
        return view('admin.pages.blog.blog_tag.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ],
            [
                'name.required' => 'Không được để trống'
            ]);

        $blogTag = new BlogTag();
        $blogTag->name = $request->name;
        $blogTag->slug = Str::slug($blogTag->name, '-');
        $blogTag->save();
//        saveLog(auth()->user()->id, 'Tạo 1 tag mới');
        return redirect()->route('BlogTag');
    }

    public function edit($id)
    {
        $blogTag = BlogTag::find($id);
        return view('admin.pages.blog.blog_tag.edit', compact('blogTag'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ],
            [
                'name.required' => 'Không được để trống'
            ]);

        $blogTag = BlogTag::find($id);
        $blogTag->name = $request->name;
        $blogTag->slug = Str::slug($blogTag->name, '-');
        $blogTag->save();
//        saveLog(auth()->user()->id, 'Sửa 1 tag');
        return redirect()->route('BlogTag')->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        BlogTag::destroy($id);
//        saveLog(auth()->user()->id, 'Xóa 1 tag');
        return redirect()->route('BlogTag');
    }
}
