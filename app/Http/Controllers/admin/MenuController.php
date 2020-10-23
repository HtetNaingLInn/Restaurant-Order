<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index()
    {
        if (request('search')) {
            $menus = Menu::where('name', 'like', '%' . request('search') . '%')->get();
        } else {
            $menus = Menu::orderby('id', 'desc')->get();
        }

        $category = Category::all();

        return view('admin.menu.list', compact('menus', 'category'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.menu.create', compact('categories'));
    }

    public function store(MenuRequest $request)
    {

        $category = $request->category;
        $image = $request->image;
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path() . '/menu/', $imageName);
        $menu = Menu::create([
            'name' => $request->name,
            'image' => $imageName,
            'price' => $request->price,
        ]);

        $menu->categories()->sync($category);

        return redirect('admin/menu')->with('status', 'Added Completed');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $menu = Menu::find($id);
        return view('admin.menu.edit', compact('menu', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $category = $request->category;
        $menu = Menu::find($id);
        $menu->fill($request->only(['name', 'price']));
        $menu->save();
        $image = $request->image;
        if ($image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . '/menu/', $imageName);
            $menu->image = $imageName;
            $menu->save();
        }

        $menu->categories()->sync($category);

        return redirect('admin/menu')->with('status', 'Edited Completed');

    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->back()->with('status', 'Deleted Complete');
    }

    public function category($id)
    {

        if (request('search')) {
            $category = Category::find($id);
            $menus = $category->menus->where('name', 'like', '%' . request('search') . '%');
        } else {
            $category = Category::find($id);
            $menus = $category->menus;
        }

        $categories = Category::all();

        $category = Category::find($id);

        return view('admin.menu.category', compact('menus', 'category', 'categories'));
    }
}
