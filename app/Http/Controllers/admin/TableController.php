<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{

    public function index()
    {
        $table = Table::all();
        return view('admin.table.list', compact('table'));
    }

    public function store(Request $request)
    {
        Table::create(['name' => $request->name]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Table::find($id)->delete();
        return redirect()->back();
    }
}
