<?php

use App\Http\Controllers\ProfileController;
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
