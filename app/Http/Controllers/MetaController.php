<?php

namespace App\Http\Controllers;

use App\Http\Requests\MetaRequest;
use App\Models\Meta;
use Illuminate\Http\Request;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $meta = Meta::all();
        return view("Meta.index",compact('meta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Meta.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MetaRequest $request)
    {
        //store the resource
        $meta = Meta::create($request->all());
        if(!$meta){
            return redirect()->back();
        }
        return redirect()->route("Meta.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $meta = Meta::find($id);
        if(!$meta){
            return redirect()->back();
        }
        return view("Meta.show", compact('meta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $meta = Meta::find($id);
        if(!$meta){
            return redirect()->back();
        }
        return view("Meta.edit", compact('meta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MetaRequest $request, string $id)
    {
        //update the resource
        $meta = Meta::find($id);
        if(!$meta){
            return redirect()->back();
        }
        $meta->update($request->all());
        $meta->save();
        return redirect()->route("Meta.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $meta = Meta::find($id);
        if(!$meta){
            return redirect()->back();
        }
        $meta->delete();
        return redirect()->route("Meta.index");
    }
}
