<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicesRequest;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $services = Services::all();
        return view("Services.index",compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Services.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServicesRequest $request)
    {
        //store the resource
        $services = Services::create($request->all());
        if(!$services){
            return redirect()->back();
        }
        return redirect()->route("Services.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $services = Services::find($id);
        if(!$services){
            return redirect()->back();
        }
        return view("Services.show",compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $services = Services::find($id);
        if(!$services){
            return redirect()->back();
        }
        return view("Services.edit",compact('services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServicesRequest $request, string $id)
    {
        //update the resource
        $services = Services::find($id);
        if(!$services){
            return redirect()->back();
        }
        $services->update($request->all());
        $services->save();
        return redirect()->route("Services.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource 
        $services = Services::find($id);
        if(!$services){
            return redirect()->back();
        }
        $services->delete();
        return redirect()->route("Services.index");
    }
}
