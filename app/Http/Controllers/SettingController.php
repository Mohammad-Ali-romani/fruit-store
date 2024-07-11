<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $setting = Setting::all();
        return view("Setting.index",compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Setting.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SettingRequest $request)
    {
        //store the resource
        $setting = Setting::create($request->all());
        if(!$setting){
            return redirect()->back();
        }
        return redirect()->route("Setting.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $setting =  Setting::find($id);
        if(!$setting){
            return redirect()->back();
        }
        return view("Setting.show",compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $setting =  Setting::find($id);
        if(!$setting){
            return redirect()->back();
        }
        return view("Setting.edit",compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SettingRequest $request, string $id)
    {
        //update the setting
        $setting = Setting::find($id);
        if(!$setting){
            return redirect()->back();
        }
        $setting->update($request->all());
        $setting->save();
        return redirect()->route("Setting.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $setting = Setting::find($id);
        if(!$setting){
            return redirect()->back();
        }
        $setting->delete();
        return redirect()->route("Setting.index");
    }
}
