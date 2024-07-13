<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContantsController;
use App\Http\Controllers\Image_siderController;
use App\Http\Controllers\Main_InfoController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\Product_TagsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\Test_imondalController;
use App\Models\Meta_Product;
use App\Models\Services;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.home');
});

Route::get('/front.login', function () {
    return view("front.auth.login");
});
Route::get('/front.register', function () {
    return view("front.auth.register");
});


Route::view('/cart','front.cart');
Route::view('/checkout','front.checkout');
Route::view('/contact','front.contact');
Route::view('/shop','front.shop');
Route::view('/shopdetail','front.shopdetail');
Route::view('/testimonial','front.testimonial');
Route::view('/error','front.error');
Route::view('/index','Dashboard.index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::resource('Products',ProductController::class);
Route::resource('Category',CategoryController::class);
Route::resource('Main_Info',Main_InfoController::class);
Route::resource('Product_Tags',Product_TagsController::class);
Route::resource('Tags',TagsController::class);
Route::resource('Reviews',ReviewsController::class);
Route::resource('All',AllController::class);
Route::resource('Meta_Product',Meta_Product::class);
Route::resource('Carts',CartsController::class);
Route::resource('Orders',OrdersController::class);
Route::resource('Contants',ContantsController::class);
Route::resource('Test_Imandal',Test_imondalController::class);
Route::resource('Setting',SettingController::class);
Route::resource('Image_Slider',Image_siderController::class);
Route::resource('Image_Slider',Image_siderController::class);