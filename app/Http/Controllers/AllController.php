<?php

namespace App\Http\Controllers;

use App\Http\Requests\AllRequest;
use App\Models\All;
use Illuminate\Http\Request;

class AllController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $all = All::all();
        return view("All,index",compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("All.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AllRequest $request)
    {
        //store the resource
        $filename = uniqid('All_').".". $request->file('image')->getClientOriginalExtension();
        $checkFile = $request->file('image')->move(public_path('image/All'),$filename);
        if(!$checkFile){
            return redirect()->back();
        } 
        $all = All::create([
            'image'     =>      $filename
        ]);
        if(!$all){
            return redirect()->back();
        }
        return redirect()->route("All.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $all = All::find($id);
        if(!$all){
            return redirect()->back();
        }
        return view("All.show",compact('all'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $all = All::find($id);
        if(!$all){
            return redirect()->back();
        }
        return view("All.edit",compact('all'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AllRequest $request, string $id)
    {
        //update the resource
        $all = All::find($id);
        if(!$all){
            return redirect()->back();
        }
        $request->validate([
            'image'     =>       'required|mimes:jpg,bmp,png',

        ]);
        if($request->has('image') && !empty($request->file('image'))){
            $filename = uniqid('All_').".". $request->file('image')->getClientOriginalExtension();
            $checkFile = $request->file('image')->move(public_path('image/All'),$filename);
            if(!$checkFile){
                return redirect()->back();
            } 
            $all->update([
                'image'     =>      $filename
            ]);
            $all->save();
            return redirect()->route("All.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete from storage
        $all = All::find($id);
        if(!$all){
            return redirect()->back();
        }
        $file = public_path('image/All').'/'.$all->image;
        if($file){
            unlink($file);
            $all->delete();
            return redirect()->route("All.index");
        }
    }
}
