<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\photos;
use Illuminate\Http\Request;

class photosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $image = photos::all();
        return view('front.portfolio' , compact('image'));
    }

}

