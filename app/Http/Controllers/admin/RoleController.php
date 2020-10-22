<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Models\Role;

class RoleController extends Controller
{

    public function index()
    {
        $role = Role::all();
        return view('admin.role.list', compact('role'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return view('admin.role.edit', compact('role'));
    }

    public function update(RoleRequest $request, $id)
    {
        Role::find($id)->update(['name' => $request->name]);
        return redirect('admin/role')->with('status', 'Edited Complete');
    }

    public function destroy($id)
    {
        Role::find($id)->delete();
        return redirect()->back()->with('status', 'Deleted Complete');
    }
}
