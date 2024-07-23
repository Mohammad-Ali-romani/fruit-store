<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProducteRequest;
use App\Models\Category;
use App\Models\Meta;
use App\Models\Producte;
use Illuminate\Http\Request;

class ProducteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index the resource
        $producte = Producte::all();
        $category = Category::all();
        $data = [
            'producte'      => $producte,
            'category'      => $category
        ];
        return view("Producte.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new resource
        $category = Category::all();
        $meta = Meta::all();
        $data = [
            'category'  => $category,
            'meta'      => $meta,
        ];
        return view("Producte.create",$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProducteRequest $request)
    {
        //store the resource
        $filename = uniqid('Producte_').".". $request->file('image')->getClientOriginalExtension();
        $checkFile = $request->file('image')->move(public_path('image/Producte'),$filename);
        if(!$checkFile){
            return redirect()->back();
        }
        $producte = Producte::create([
            'name'           =>      $request->name,
            'desc'           =>      $request->desc,
            'price'          =>      $request->price,
            'image'          =>      $filename,
            'category_id'    =>      $request->category_id,
            'meta_id'        =>      $request->meta_id,
            'content'        =>      $request->content,
            'quantity'       =>      $request->quantity,
            'evaluation'     =>      $request->evaluation,
            'old_price'      =>      $request->old_price,
        ]);
        if(!$producte){
            return redirect()->back();
        }
        return redirect()->route("Producte.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show the resource
        $producte = Producte::find($id);
        $category = Category::all();
        $meta = Meta::all();
        $data = [
            'category' => $category,
            'meta'      => $meta,
            'producte' => $producte,
        ];
        if(!$producte){
            return redirect()->back();
        }
        return view("Producte.show",$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit the resource
        $producte = Producte::find($id);
        $category = Category::all();
        $meta = Meta::all();
        $data = [
            'category' => $category,
            'meta'      => $meta,
            'producte' => $producte,
        ];
        if(!$producte){
            return redirect()->back();
        }
        return view("Producte.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProducteRequest $request, string $id)
    {
        //update the producte
        $producte = Producte::find($id);
        if(!$producte){
            return redirect()->back();
        }
        if($request->has('image') && !empty($request->file('image'))){
            $filename = uniqid('Producte_').".". $request->file('image')->getClientOriginalExtension();
            $checkFile = $request->file('image')->move(public_path('image/Producte'),$filename);
            if(!$checkFile){
                return redirect()->back();
            }
            $producte->update([
                'name'           =>      $request->name,
                'desc'           =>      $request->desc,
                'price'          =>      $request->price,
                'image'          =>      $filename,
                'category_id'    =>      $request->category_id,
                'meta_id'        =>      $request->meta_id,
                'content'        =>      $request->content,
                'quantity'       =>      $request->quantity,
                'evaluation'     =>      $request->evaluation,
                'old_price'      =>      $request->old_price,
            ]);
            $producte->save();
            return redirect()->route("Producte.index");
        }else{
            $producte->update([
                'name'           =>      $request->name,
                'desc'           =>      $request->desc,
                'price'          =>      $request->price,
                'category_id'    =>      $request->category_id,
                'meta_id'        =>      $request->meta_id,
                'content'        =>      $request->content,
                'quantity'       =>      $request->quantity,
                'evaluation'     =>      $request->evaluation,
                'old_price'      =>      $request->old_price,
            ]);
            $producte->save();
            return redirect()->route("Producte.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the specified resource from storage
        $producte = Producte::find($id);
        if(!$producte){
            return redirect()->back();
        }
        $file = public_path('image/Producte').'/'.$producte->image;
        if(file_exists($file)){
            unlink($file);
            $producte->delete();
            return redirect()->route("Producte.index");
        }
        $producte->delete();
        return redirect()->route("Producte.index");
    }
}
