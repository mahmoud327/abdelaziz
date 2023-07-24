<?php

namespace App\Http\Controllers;

use App\Http\Requests\photoStoreRequest;
use App\Models\Category;
use App\Models\photos;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Traits\ImageTrait;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Category::create([
            'name' => [
                'en' => $request->name_en,
                'ar' => $request->name_ar
            ],
        ]);



        return to_route('admin.categories.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findorFail($id);
        return view('admin.categories.edit', compact('category'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    { {

            $category = Category::findorFail($id);
            $category->update([
                'name' => [
                    'en' => $request->name_en,
                    'ar' => $request->name_ar
                ],
            ]);

            return to_route('admin.categories.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Category::findorFail($id)->delete();


        return to_route('admin.categories.index');
    }
}
