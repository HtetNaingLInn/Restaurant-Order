<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::orderby('id', 'desc')->get();
        return view('admin.category.list', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        Category::create(['name' => $request->name]);
        return redirect()->back();
    }

    public function show($id)
    {
        $category = Category::find($id);
        $menus = $category->menus;

        return view('admin.category.show', compact('menus', 'category'));

    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        Category::find($id)->update(['name' => $request->name]);
        return redirect('admin/category')->with('status', 'Edit Completed');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}
