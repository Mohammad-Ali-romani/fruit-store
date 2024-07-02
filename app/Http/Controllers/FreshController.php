<?php

namespace App\Http\Controllers;

use App\Http\Requests\FreshRequest;
use App\Models\Fresh;
use Illuminate\Http\Request;

class FreshController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $fresh = Fresh::all();
        return view("Fresh.index",compact('fresh'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Fresh.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FreshRequest $request)
    {
        //store the resource
        $filename = uniqid('Fresh_').".". $request->file('image')->getClientOriginalExtension();
        $checkFile = $request->file('image')->move(public_path('image/Fresh'),$filename);
        if(!$checkFile){
            return redirect()->back();
        } 
        $fresh = Fresh::create([
            'text'      =>          $request->text,
            'image'     =>          $filename
        ]);
        if(!$fresh){
            return redirect()->back();
        }
        return redirect()->route("Fresh.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $fresh = Fresh::find($id);
        if(!$fresh){
            return redirect()->back();
        }
        return view("Fresh.show",compact("fresh"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $fresh = Fresh::find($id);
        if(!$fresh){
            return redirect()->back();
        }
        return view("Fresh.edit",compact("fresh"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update the resource
        $fresh = Fresh::find($id);
        if(!$fresh){
            return redirect()->back();
        }
        $request->validate([
            'text'          =>          'required',
        ]);
        if($request->has('image') && !empty($request->file('image'))){
            $filename = uniqid('Fresh_').".". $request->file('image')->getClientOriginalExtension();
            $checkFile = $request->file('image')->move(public_path('image/Fresh'),$filename);
            if(!$checkFile){
                return redirect()->back();
            } 
            $fresh->update([
                'text'      =>      $request->text,
                'image'     =>      $filename
            ]);
            $fresh->save();
            return redirect()->route("Fresh.index");
        }else{
            $fresh->update([
                'text'      =>      $request->text,
            ]);
            $fresh->save();
            return redirect()->route("Fresh.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $fresh = Fresh::find($id);
        if(!$fresh){
            return redirect()->back();
        }
        $file = public_path("image/Fresh").'/'.$fresh->image;
        if(file_exists($file)){
            unlink($file);
            $fresh->delete();
            return redirect()->route("Fresh.index");
        }
        $fresh->delete();
        return redirect()->route("Fresh.index");
    }
}
