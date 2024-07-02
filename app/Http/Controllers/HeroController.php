<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeroRequest;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource 
        $hero = Hero::all();
        return view("Hero.index",compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Hero.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HeroRequest $request)
    {
        //store the resource
        $filename = uniqid('Hero_').".". $request->file('image')->getClientOriginalExtension();
        $checkFile = $request->file('image')->move(public_path('image/Hero'),$filename);
        if(!$checkFile){
            return redirect()->back();
        } 
        $hero = Hero::create([
            'name'      =>      $request->name,
            'image'     =>      $filename
        ]);
        if(!$hero){
            return redirect()->back();
        }
        return redirect()->route("Hero.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $hero = Hero::find($id);
        if(!$hero){
            return redirect()->back();
        }
        return view("Hero.show",compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $hero = Hero::find($id);
        if(!$hero){
            return redirect()->back();
        }
        return view("Hero.edit",compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update the resource
        $hero = Hero::find($id);
        if(!$hero){
            return redirect()->back();
        }
        $request->validate([
            'name'      =>      'required',
        ]);
        if($request->has('image') && !empty($request->file('image'))){
            $filename = uniqid('Hero_').".". $request->file('image')->getClientOriginalExtension();
            $checkFile = $request->file('image')->move(public_path('image/Hero'),$filename);
            if(!$checkFile){
                return redirect()->back();
            } 
            $hero->update([
                'name'      =>      $request->name,
                'image'     =>      $filename
            ]);
            $hero->save();
            return redirect()->route("Hero.index");
        }else{
            $hero->update([
                'name'      =>      $request->name,
            ]);
            $hero->save();
            return redirect()->route("Hero.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $hero = Hero::find($id);
        if(!$hero){
            return redirect()->back();
        }
        $file = public_path('image/Hero').'/'.$hero->image;
        if(file_exists($file)){
            unlink($file);
            $hero->delete();
            return redirect()->route("Hero.index");
        }
        $hero->delete();
        return redirect()->route("Hero.index");
    }
}
