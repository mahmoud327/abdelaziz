<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\massages;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $massage = massages::all();
        return view('admin.index', compact('massage'));
    }
}
