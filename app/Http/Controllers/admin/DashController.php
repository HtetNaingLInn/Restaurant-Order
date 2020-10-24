<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Table;

class DashController extends Controller
{
    public function dash()
    {
        $table = Table::all();
        return view('admin.dashboard.dashboard', compact('table'));
    }

    public function menu($id)
    {
        $table = Table::find($id);
        $category = Category::all();
        $menu = Menu::all();
        return view('admin.dashboard.menu', compact('table', 'category', 'menu'));
    }

    public function category($id, $table)
    {

        $table = Table::find($table);
        $category = Category::all();

        $cat = Category::find($id);

        $menu = $cat->menus;

        return view('admin.dashboard.category', compact('table', 'category', 'menu'));
    }
}
