<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product_TagsRequest;
use App\Models\Product_Tags;
use Illuminate\Http\Request;

class Product_TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $product_tags = Product_Tags::all();
        return view("Product_Tags.index",compact('product_tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Product_Tags.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Product_TagsRequest $request)
    {
        //store the resource
        $product_tags = Product_Tags::create($request->all());
        if(!$product_tags){
            return redirect()->back();
        }
        return redirect()->route("Product_Tags.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $product_tags = Product_Tags::find($id);
        if(!$product_tags){
            return redirect()->back();
        }
        return view("Product_Tags.show",compact('product_tags'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $product_tags = Product_Tags::find($id);
        if(!$product_tags){
            return redirect()->back();
        }
        return view("Product_Tags.edit",compact('product_tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Product_TagsRequest $request, string $id)
    {
        //update the resource
        $product_tags = Product_Tags::find($id);
        if(!$product_tags){
            return redirect()->back();
        }
        $product_tags->update($request->all());
        $product_tags->save();
        return redirect()->route("Product_Tags.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $product_tags = Product_Tags::find($id);
        if(!$product_tags){
            return redirect()->back();
        }
        $product_tags->delete();
        return redirect()->route("Product_Tags.index");
    }
}
