<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiscRequest;
use App\Models\Disc;
use Illuminate\Http\Request;

class DiscController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $disc = Disc::all();
        return view("Disc.index",compact('disc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create the resource
        return view("Disc.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DiscRequest $request)
    {
        //store the resource
        $filename = uniqid('Disc_').".". $request->file('image')->getClientOriginalExtension();
        $checkFile = $request->file('image')->move(public_path('image/Disc'),$filename);
        if(!$checkFile){
            return redirect()->back();
        } 
        $disc = Disc::create([
            'name'          =>          $request->name,
            'desc'          =>          $request->desc,
            'image'          =>          $filename,
        ]);
        if(!$disc){
            return redirect()->back();
        }
        return redirect()->route('Disc.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $disc = Disc::find($id);
        if(!$disc){
            return redirect()->back();
        }
        return view("Disc.show",compact('disc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $disc = Disc::find($id);
        if(!$disc){
            return redirect()->back();
        }
        return view("Disc.edit",compact('disc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update the resource
        $disc = Disc::find($id);
        if(!$disc){
            return redirect()->back();
        }
        $request->validate([
            'name'          =>           'required',
            'desc'          =>           'required',
        ]);
        if($request->has('image') && !empty($request->file('image'))){
            $filename = uniqid('Disc_').".". $request->file('image')->getClientOriginalExtension();
            $checkFile = $request->file('image')->move(public_path('image/Disc'),$filename);
            if(!$checkFile){
                return redirect()->back();
            } 
            $disc->update([
                'name'          =>          $request->name,
                'desc'          =>          $request->desc,
                'image'          =>          $filename,
            ]);
            $disc->save();
            return redirect()->route("Disc");
        }else{
            $disc->update([
                'name'          =>          $request->name,
                'desc'          =>          $request->desc,
            ]);
            $disc->save();
            return redirect()->route("Disc");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $disc = Disc::find($id);
        if(!$disc){
            return redirect()->back();
        }
        $file = public_path('image/Disc').'/'.$disc->image;
        if(file_exists($file)){
            unlink($file);
            $disc->delete();
            return redirect()->route('Disc.index');
        }
        $disc->delete();
        return redirect()->route('Disc.index');
    }
}
