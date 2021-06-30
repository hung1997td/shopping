<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Model\Permission;
use App\Model\Roles;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Roles::all();
        return view('admin.pages.roles.index', compact('roles'));
    }

    public function create()
    {
        $parentPermissions = Permission::where('parent_id', 0)->get();
        return view('admin.pages.roles.create', compact('parentPermissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required'
        ],
            [
                'code.required' => 'Không được để trống',
                'name.required' => 'Không được để trống'
            ]);

        $role = new Roles();
        $role->code = $request->code;
        $role->name = $request->name;
        $role->save();
        $role->permissions()->sync($request->pers);
//        saveLog(auth()->user()->id, 'Tạo 1 vai trò mới');
        return redirect()->route('Roles');
    }

    public function edit($id)
    {
        $parentPermissions = Permission::where('parent_id', 0)->get();
        $role = Roles::find($id);
        return view('admin.pages.roles.edit', compact('parentPermissions', 'role'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required'
        ],
            [
                'code.required' => 'Không được để trống',
                'name.required' => 'Không được để trống'
            ]);
        $role = Roles::find($id);
        $role->code = $request->code;
        $role->name = $request->name;
        $role->save();

        $role->permissions()->sync($request->pers);
//        saveLog(auth()->user()->id, 'Sửa 1 vai trò');
        return redirect()->route('Roles')->with('success', 'Sửa thành công');
    }

    public function destroy($id)
    {
        Roles::destroy($id);
//        saveLog(auth()->user()->id, 'Xóa 1 vai trò');
        return redirect()->route('Roles');
    }
}
