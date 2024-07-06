<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index resource
        $category = Category::all();
        return view("Category.index",compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create new resource
        return view("Category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        //store the resource
        $category = Category::create($request->all());
        if(!$category){
            return redirect()->back();
        }
        return redirect()->route("Category.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $category = Category::find($id);
        if(!$category){
            return redirect()->back();
        }
        return view("Category.show",compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $category = Category::find($id);
        if(!$category){
            return redirect()->back();
        }
        return view("Category.edit",compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        //update the resource
        $category = Category::find($id);
        if(!$category){
            return redirect()->back();
        }
        $category->update($request->all());
        $category->save();
        return redirect()->route("Category.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $category = Category::find($id);
        if(!$category){
            return redirect()->back();
        }
        $category->delete();
        return redirect()->route("Category.index");
    }
}
