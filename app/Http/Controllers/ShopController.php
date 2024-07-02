<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopRequest;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $shop = Shop::all();
        return view("Shop.index",compact('shop'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Shop.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ShopRequest $request)
    {
        //store the resource
        $filename = uniqid('Shop_').".". $request->file('image')->getClientOriginalExtension();
        $checkFile = $request->file('image')->move(public_path('image/Shop'),$filename);
        if(!$checkFile){
            return redirect()->back();
        } 
        $shop = Shop::create([
            'name'          =>          $request->name,
            'price'         =>          $request->price,
            'desc'          =>          $request->desc,
            'text'          =>          $request->text,
            'image'         =>          $filename,
        ]);
        if(!$shop){
            return redirect()->back();
        }
        return redirect()->route("Shop.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $shop = Shop::find($id);
        if(!$shop){
            return redirect()->back();
        }
        return view("Shop.show",compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $shop = Shop::find($id);
        if(!$shop){
            return redirect()->back();
        }
        return view("Shop.edit",compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update the resource
        $shop = Shop::find($id);
        if(!$shop){
            return redirect()->back();
        }
        $request->validate([
            'name'              =>           'required',  
            'desc'              =>           'required',
            'text'              =>           'required',
            'price'             =>           'required',
        ]);
        if($request->has('image') && !empty($request->file('image'))){
            $filename = uniqid('Shop_').".". $request->file('image')->getClientOriginalExtension();
            $checkFile = $request->file('image')->move(public_path('image/Shop'),$filename);
            if(!$checkFile){
                return redirect()->back();
            } 
            $shop->update([
                'name'          =>          $request->name,
                'price'         =>          $request->price,
                'desc'          =>          $request->desc,
                'text'          =>          $request->text,
                'image'         =>          $filename
            ]);
            $shop->save();
            return redirect()->route("Shop.index");
        }else{
            $shop->update([
                'name'          =>          $request->name,
                'price'         =>          $request->price,
                'desc'          =>          $request->desc,
                'text'          =>          $request->text,
            ]);
            $shop->save();
            return redirect()->route("Shop.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $shop = Shop::find($id);
        if(!$shop){
            return redirect()->back();
        }
        $file = public_path("image/Shop").'/'.$shop->image;
        if(file_exists($file)){
            unlink($file);
            $shop->delete();
            return redirect()->route("Shop.index");
        }
        $shop->delete();
        return redirect()->route("Shop.index");
    }
}
