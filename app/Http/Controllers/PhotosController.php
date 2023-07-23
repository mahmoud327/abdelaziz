<?php

namespace App\Http\Controllers;

use App\Http\Requests\photoStoreRequest;
use App\Models\photos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = photos::all();
        return view('admin.photos.index' , compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.photos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(photoStoreRequest $request)
    {

        $image = $request->file('image')->store('public/photos');

        photos::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);
        return to_route('admin.photos.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $photos = photos::findorFail($id);
        return view('admin.photos.edite' , compact('photos'));

    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        {

            $photos = photos::findorFail($id);
            $photos->name = $request->name;
            foreach (['image'] as $key) {
                if($request->$key){
                    $image = $request->$key;
                    $image_name = $image->hashName();
                    $save[$key] = $image->storeAs('assets/uploads/users', $image_name, 'public_path');
                }
            }
            $photos->description = $request->description;
            $photos->save();
            return to_route('admin.photos.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        photos::findorFail($id)->delete();


        return to_route('admin.photos.index');
    }
}
