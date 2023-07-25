<?php

namespace App\Http\Controllers;

use App\Http\Requests\photoStoreRequest;
use App\Models\Category;
use App\Models\photos;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Traits\ImageTrait;

class WorkController extends Controller
{
    use ImageTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $works = Work::all();
        return view('admin.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.works.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $arr = [];
        $work = Work::create($request->except('image'));

        if ($request->file('image')) {

            foreach ($request->image as $image) {
                $path = $this->uploadFile('uploads/works', $image);
                array_push($arr, $path);
            }
            $work->image = $arr;
            $work->save();
        }

        if ($request->file('main_image')) {

            $path = $this->uploadFile('uploads/works', $request->main_image);
            $work->main_image = $path;
            $work->save();
        }


        return to_route('admin.works.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $photos = photos::findorFail($id);
        return view('admin.photos.edite', compact('photos'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    { {

            $photos = photos::findorFail($id);
            $photos->name = $request->name;




            $photos->description = $request->description;
            $photos->save();
            if ($request->file('image')) {
                $path = $this->uploadFile('uploads/photos', $request->file('image'));
                $photos->update(['image' => $path]);
            }
            return to_route('admin.photos.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Work::findorFail($id)->delete();


        return to_route('admin.works.index');
    }
}
