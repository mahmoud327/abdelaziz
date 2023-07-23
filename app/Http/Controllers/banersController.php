<?php

namespace App\Http\Controllers;

use App\Http\Requests\banerStoreRequest;
use App\Models\baners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class banersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $baners = baners::all();
        return view('admin.baners.index' , compact('baners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.baners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(banerStoreRequest $request)
    {

        $image = $request->file('image')->store('public/baners');

        baners::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);
        return to_route('admin.baners.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $baners = baners::findorFail($id);
        return view('admin.baners.edite' , compact('baners'));

    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        {

            $baners = baners::findorFail($id);
            $baners->name = $request->name;
            foreach (['image'] as $key) {
                if($request->$key){
                    $image = $request->$key;
                    $image_name = $image->hashName();
                    $save[$key] = $image->storeAs('assets/uploads/users', $image_name, 'public_path');
                }
            }
            $baners->description = $request->description;
            $baners->save();
            return to_route('admin.baners.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        baners::findorFail($id)->delete();


        return to_route('admin.baners.index');
    }
}
