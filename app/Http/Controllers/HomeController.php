<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Carts;
use App\Models\Category;
use App\Models\Producte;

class HomeController extends Controller
{
    
    public function index(){
        $cart = Carts::all();
        $producte = Producte::all();
        $ads = Ads::all();
        $category = Category::all();
        $data = [
        'cart'          =>  $cart,
        'producte'      =>  $producte,
        'ads'           =>  $ads,
        'category'      =>  $category,
        ];
        return view('front.home',$data);
    }
}