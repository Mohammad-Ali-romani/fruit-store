<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartsRequest;
use App\Models\Carts;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $carts = Carts::all();
        return view("Carts.index",compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Carts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CartsRequest $request)
    {
        //store the resource
        $carts = Carts::create($request->all());
        if(!$carts){
            return redirect()->back();
        }
        return redirect()->route("Carts.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $carts = Carts::find($id);
        if(!$carts){
            return redirect()->back();
        }
        return view("Carts.show",compact('carts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $carts = Carts::find($id);
        if(!$carts){
            return redirect()->back();
        }
        return view("Carts.edit",compact('carts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CartsRequest $request, string $id)
    {
        //update the resource
        $carts = Carts::find($id);
        if(!$carts){
            return redirect()->back();
        }
        $carts->update($request->all());
        $carts->save();
        return redirect()->route("Carts.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $carts = Carts::find($id);
        if(!$carts){
            return redirect()->back();
        }
        $carts->delete();
        return redirect()->route("Carts.index");
    }
}
