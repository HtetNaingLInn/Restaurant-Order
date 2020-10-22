<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableRequest;
use App\Models\Table;

class TableController extends Controller
{

    public function index()
    {
        $table = Table::all();
        return view('admin.table.list', compact('table'));
    }

    public function store(TableRequest $request)
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
