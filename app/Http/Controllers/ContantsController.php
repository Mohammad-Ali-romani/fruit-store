<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContantsRequest;
use App\Models\Contants;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class ContantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $contants = Contants::all();
        return view("Contants.index",compact('contants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Contants.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContantsRequest $request)
    {
        //store a new resource in storage
        $contants = Contants::create($request->all());
        if(!$contants){
            return redirect()->back();
        }
        return redirect()->route("Contants.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $contants = Contants::find($id);
        if(!$contants){
            return redirect()->back();
        }
        return view("Contants.show",compact('contants'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $contants = Contants::find($id);
        if(!$contants){
            return redirect()->back();
        }
        return view("Contants.edit",compact('contants'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContantsRequest $request, string $id)
    {
        //update the resource
        $contants = Contants::find($id);
        if(!$contants){
            return redirect()->back();
        }
        $contants->update($request->all());
        $contants->save();
        return redirect()->route("Contants.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $contants = Contants::find($id);
        if(!$contants){
            return redirect()->back();
        }
        $contants->delete();
        return redirect()->route("Contants.index");
    }
}
