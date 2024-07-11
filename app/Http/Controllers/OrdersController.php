<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrdersRequest;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $orders = Orders::all();
        return view("Orders.index",compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Orders.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrdersRequest $request)
    {
        //store the resource
        $orders = Orders::create($request->all());
        if(!$orders){
            return redirect()->back();
        }
        return redirect()->route("Orders.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $orders = Orders::find($id);
        if(!$orders){
            return redirect()->back();
        }
        return view("Orders.show", compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the  resource
        $orders = Orders::find($id);
        if(!$orders){
            return redirect()->back();
        }
        return view("Orders.edit", compact('orders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update the resource
        $orders = Orders::find($id);
        if(!$orders){
            return redirect()->back();
        }
        $orders->update($request->all());
        $orders->save();
        return redirect()->route("Orders.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $orders = Orders::find($id);
        if(!$orders){
            return redirect()->back();
        }
        $orders->delete();
        return redirect()->route("Orders.index");
    }
}
