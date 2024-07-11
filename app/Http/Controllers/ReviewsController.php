<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewsRequest;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $reviews = Reviews::all();
        return view("Reviews.index",compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Reviews.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReviewsRequest $request)
    {
        //store the resource
        $reviews = Reviews::create($request->all());
        if(!$reviews){
            return redirect()->back();
        }
        return redirect()->route("Reviews.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $reviews = Reviews::find($id);
        if(!$reviews){
            return redirect()->back();
        }
        return view("Reviews.show", compact('reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $reviews = Reviews::find($id);
        if(!$reviews){
            return redirect()->back();
        }
        return view("Reviews.edit", compact('reviews'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReviewsRequest $request, string $id)
    {
        //update the resource
        $reviews = Reviews::find($id);
        if(!$reviews){
            return redirect()->back();
        }
        $reviews->update($request->all());
        $reviews->save();
        return redirect()->route("Reviews.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $reviews = Reviews::find($id);
        if(!$reviews){
            return redirect()->back();
        }
        $reviews->delete();
        return redirect()->route("Reviews.index");
    }
}
