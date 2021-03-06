<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Http\Controllers\Controller;
use App\Model\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(){
        $permissions = Permission::all();
        return view('admin.pages.permission.index', compact('permissions'));
    }
    public function create()
    {
        $html = getPermission($parent_id = 0);
        return view('admin.pages.permission.create', compact('html'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description'=>'required'
        ],
            [
                'name.required' => 'Không được để trống',
                'description.required' => 'Không được để trống'
            ]);

        $permission = new Permission();
        $permission->code = $request->code;
        $permission->name = $request->name;
        $permission->description = $request->description;
        $permission->parent_id = $request->permission_parent;
        $permission->save();
//        saveLog(auth()->user()->id, 'Tạo 1 quyền mới');
        return redirect()->route('Permission');
    }

    public function edit($id)
    {
        $permission = Permission::find($id);
        return view('admin.pages.permission.edit', compact('permission'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description'=>'required'
        ],
            [
                'name.required' => 'Không được để trống',
                'description.required' => 'Không được để trống'
            ]);

        $permission = Permission::find($id);
        $permission->code = $request->code;
        $permission->name = $request->name;
        $permission->description = $request->description;
        $permission->save();
//        saveLog(auth()->user()->id, 'Sửa 1 quyền');
        return redirect()->route('Permission')->with('success', 'Sửa thành công');
    }

    public function destroy($id)
    {
        Permission::destroy($id);
//        saveLog(auth()->user()->id, 'Xóa 1 quyền');
        return  redirect()->route('Permission');
    }
}
