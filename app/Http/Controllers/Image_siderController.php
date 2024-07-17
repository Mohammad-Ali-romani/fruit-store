<?php

namespace App\Http\Controllers;

use App\Http\Requests\Image_siderRequest;
use App\Models\Image_sider;
use Illuminate\Http\Request;

class Image_siderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $sider  =   Image_sider::all();
        return view("Image_Sider.index",compact('sider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Image_Sider.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Image_siderRequest $request)
    {
        //store the resource
        $sider = Image_sider::create($request->all());
        if(!$sider){
            return redirect()->back();
        }
        return redirect()->route("Image_Sider.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $sider = Image_sider::find($id);
        if(!$sider){
            return redirect()->back();
        }
        return view("Image_Sider.show",compact('sider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $sider = Image_sider::find($id);
        if(!$sider){
            return redirect()->back();
        }
        return view("Image_Sider.edit",compact('sider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Image_siderRequest $request, string $id)
    {
        //update the resource
        $sider = Image_sider::find($id);
        if(!$sider){
            return redirect()->back();
        }
        $sider->update($request->all());
        $sider->save();
        return redirect()->route("Image_Sider.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $sider = Image_sider::find($id);
        if(!$sider){
            return redirect()->back();
        }
        $sider->delete();
        return redirect()->route("Image_Sider.index");
    }
}
