<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class DashController extends Controller
{
    public function dash()
    {
        return view('admin.dashboard');
    }
}
