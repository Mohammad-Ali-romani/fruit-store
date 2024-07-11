<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $users = Users::all();
        return view("Users.index",compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        return view("Users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsersRequest $request)
    {
        //store the newly created resource
        $users = Users::create($request->all());
        if(!$users){
            return redirect()->back();
        }
        return redirect()->route("Users.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $users = Users::find($id);
        if(!$users){
            return redirect()->back();
        }
        return view("users.show",compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $users = Users::find($id);
        if(!$users){
            return redirect()->back();
        }
        return view("Users.edit",compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsersRequest $request, string $id)
    {
        //update the resource
        $users = Users::find($id);
        if(!$users){
            return redirect()->back();
        }
        $users->update($request->all());
        $users->save();
        return redirect()->route("Users.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the resource
        $users = Users::find($id);
        if(!$users){
            return redirect()->back();
        }
        $users->delete();
        return redirect()->route("Users.index");
    }
}
