<?php

namespace App\Http\Controllers;

use App\Http\Requests\massageStoreRequest;
use App\Models\contects;
use Illuminate\Console\View\Components\Confirm;
use Illuminate\Http\Request;

class massagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $massage = contects::first();
        return view('front.massage', compact('massage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.massage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(massageStoreRequest $request)
    {
        massages::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'massage' => $request->massage,
        ]);
        echo'your massage is sent successfuly';

        return view('front.massage');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        massages::findorFail($id)->delete();


        return to_route('admin.index');
    }
}
