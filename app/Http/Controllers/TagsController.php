<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagsRequest;
use App\Models\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $tags = Tags::all();
        return view("Tags.index",compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Tags.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagsRequest $request)
    {
        //store the resource
        $tags = Tags::create($request->all());
        if(!$tags){
            return redirect()->back();
        }
        return redirect()->route("Tags.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $tags = Tags::find($id);
        if(!$tags){
            return redirect()->back();
        }
        return view("Tags.show", compact('tags'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $tags = Tags::find($id);
        if(!$tags){
            return redirect()->back();
        }
        return view("Tags.edit", compact('tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagsRequest $request, string $id)
    {
        //update the resource
        $tags = Tags::find($id);
        if(!$tags){
            return redirect()->back();
        }
        $tags->update($request->all());
        $tags->save();
        return redirect()->route("Tags.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $tags = Tags::find($id);
        if(!$tags){
            return redirect()->back();
        }
        $tags->delete();
        return redirect()->route("Tags.index");
    }
}
