<?php

namespace App\Http\Controllers;

use App\Http\Requests\contectStoreRequest;
use App\Models\contects;
use Illuminate\Http\Request;

class contectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contects = contects::all();
        return view('admin.contects.index', compact('contects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(contectStoreRequest $request)
    {

        contects::create([
            'name' => $request->name,
            'description' => $request->description,

        ]);
        return to_route('admin.contects.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contects = contects::findorFail($id);
        return view('admin.contects.edite' , compact('contects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
            $contects = contects::findorFail($id);
            $contects->name = $request->name;
            $contects->description = $request->description;
            $contects->save();
            return to_route('admin.contects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        contects::findorFail($id)->delete();


        return to_route('admin.contects.index');
    }
}
