<?php

namespace App\Http\Controllers;

use App\Http\Requests\Main_InfoRequest;
use App\Models\Main_Info;
use Illuminate\Http\Request;

class Main_InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $main = Main_Info::all();
        return view("Main.index",compact('main'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Main.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Main_InfoRequest $request)
    {
        //store the resource
        $main = Main_Info::create($request->all());
        if(!$main){
            return redirect()->back();
        }
        return redirect()->route("Main.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $main = Main_Info::find($id);
        if(!$main){
            return redirect()->back();
        }
        return view("Main.show",compact('main'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $main = Main_Info::find($id);
        if(!$main){
            return redirect()->back();
        }
        return view("Main.edit",compact('main'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Main_InfoRequest $request, string $id)
    {
        //update the resource
        $main = Main_Info::find($id);
        if(!$main){
            return redirect()->back();
        }
        $main->update($request->all());
        $main->save();
        return redirect()->route("Main.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $main = Main_Info::find($id);
        if(!$main){
            return redirect()->back();
        }
        $main->delete();
        return redirect()->route("Main.index");
    }
}
