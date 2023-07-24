<?php

namespace App\Http\Controllers;

use App\Http\Requests\banerStoreRequest;
use App\Models\baners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageTrait;

class banersController extends Controller
{
use ImageTrait;

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


       $banner= baners::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        
             if($request->file('image')){
              $path= $this->uploadFile('uploads/banners', $request->file('image'));
               $banner->update(['image' => $path]);
             }
             
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
      
            $baners->description = $request->description;
            $baners->save();
            
            if($request->file('image')){
              $path= $this->uploadFile('uploads/banners', $request->file('image'));
               $baners->update(['image' => $path]);
             }
             
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
