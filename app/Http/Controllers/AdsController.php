<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdsRequest;
use App\Models\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $ads = Ads::all();
        return view("Ads.index",compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Ads.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdsRequest $request)
    {
        //create the resource
        $filename = uniqid('Ads_').".". $request->file('image')->getClientOriginalExtension();
        $checkFile = $request->file('image')->move(public_path('image/Ads'),$filename);
        if(!$checkFile){
            return redirect()->back();
        }
        $ads = Ads::create([
            'image'         =>          $filename
        ]);
        if(!$ads){
            return redirect()->back();
        }
        return redirect()->route("Ads.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $ads = Ads::find($id);
        if(!$ads){
            return redirect()->back();
        }
        return view("Ads.show",compact('ads'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $ads = Ads::find($id);
        if(!$ads){
            return redirect()->back();
        }
        return view("Ads.edit",compact('ads'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update the resource
        $ads = Ads::find($id);
        if(!$ads){
            return redirect()->back();
        }
        if($request->has('image') && !empty($request->file('image'))){
            $filename = uniqid('Ads_').".". $request->file('image')->getClientOriginalExtension();
            $checkFile = $request->file('image')->move(public_path('image/Ads'),$filename);
            if(!$checkFile){
                return redirect()->back();
            }
            $ads->update([
                'image'         =>      $filename
            ]);
            $ads->save();
            return redirect()->route("Ads.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource from storage
        $ads = Ads::find($id);
        if(!$ads){
            return redirect()->back();
        }
        $file = public_path('image/Ads').'/'.$ads->image;
        if(file_exists($file)){
            unlink($file);
            $ads->delete();
            return redirect()->route("Ads.index");
        }
    }
}
