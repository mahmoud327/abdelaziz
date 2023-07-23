<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\baners;
use Illuminate\Http\Request;

class banersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $baners = baners::all();
        return view('front.home' , compact('baners'));
    }

}
