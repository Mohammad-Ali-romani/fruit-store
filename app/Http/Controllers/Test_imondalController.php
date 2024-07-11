<?php

namespace App\Http\Controllers;

use App\Http\Requests\Test_imondalRequest;
use App\Models\Test_imondal;
use Illuminate\Http\Request;

class Test_imondalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $test = Test_imondal::all();
        return view("Test.index",compact("test"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Test.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Test_imondalRequest $request)
    {
        //store a new resource in storage
        $test = Test_imondal::create($request->all());
        if(!$test){
            return redirect()->back();
        }
        return redirect()->route("Test.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $test = Test_imondal::find($id);
        if(!$test){
            return redirect()->back();
        }
        return view("Test.show",compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $test = Test_imondal::find($id);
        if(!$test){
            return redirect()->back();
        }
        return view("Test.edit",compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Test_imondalRequest $request, string $id)
    {
        //update the resource
        $test = Test_imondal::find($id);
        if(!$test){
            return redirect()->back();
        }
        $test->update($request->all());
        $test->save();
        return redirect()->route("Test.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $test = Test_imondal::find($id);
        if(!$test){
            return redirect()->back();
        }
        $test->delete();
        return redirect()->route("Test.index");
    }
}
