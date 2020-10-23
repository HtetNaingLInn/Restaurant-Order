<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\user_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        if (request('search')) {
            $user = User::where('name', 'like', '%' . request('search') . '%')->get();
        } else {
            $user = User::orderby('id', 'desc')->get();
        }

        $role = Role::all();

        return view('admin.user.list', compact('user', 'role'));
    }

    public function create()
    {
        $role = Role::all();
        return view('admin.user.create', compact('role'));
    }

    public function store(Request $request)
    {
        if ($request->image) {
            $image = $request->image;
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . '/user/', $imageName);
        } else {
            $imageName = 'profile.jpg';
        }

        $password = Hash::make($request->password);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'role_id' => $request->role,
            'image' => $imageName,

        ]);
        user_detail::create([
            'user_id' => $user->id,
            'phone' => $request->phone,
            'nrc' => $request->nrc,
            'age' => $request->age,
            'salary' => $request->salary,
            'address' => $request->address,
            'remark' => $request->remark,
        ]);
        return redirect('admin/user');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $password = $user->password;
        $role = Role::all();
        return view('admin.user.edit', compact('user', 'role'));
    }

    public function update(Request $request, $id)
    {
        $image = $request->image;
        if ($image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . '/user/', $imageName);
        } else {
            $user = User::find($id);
            $imageName = $user->image;
        }

        $password = Hash::make($request->password);

        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'role_id' => $request->role,
            'image' => $imageName,

        ]);
        $detail = $user->user_detail;
        $detail->phone = $request->phone;
        $detail->nrc = $request->nrc;
        $detail->age = $request->age;
        $detail->salary = $request->salary;
        $detail->address = $request->address;
        $detail->remark = $request->remark;
        $detail->save();

        return redirect('admin/user');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('admin/user')->with('status', 'Deleted Complete');
    }

    public function role($id)
    {
        if (request('search')) {
            $role = Role::find($id);
            $user = $role->user->where('name', 'like', '%' . request('search') . '%');
        } else {
            $role = Role::find($id);
            $user = $role->user;
        }
        $roles = Role::all();

        $role = Role::find($id);

        return view('admin.user.role', compact('user', 'role', 'roles'));
    }
}
