<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Table;

class DashController extends Controller
{
    public function dash()
    {
        $table = Table::all();
        return view('admin.dashboard', compact('table'));
    }
}
