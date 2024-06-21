<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.home');
});

Route::get('/login', function () {
    return view("auth.login");
});
Route::get('/registers', function () {
    return view("auth.register");
});


Route::view('/home','front.home');
Route::view('/cart','front.cart');
Route::view('/chakout','front.chakout');
Route::view('/contact','front.contact');
Route::view('/shop','front.shop');
Route::view('/shopdetail','front.shopdetail');
Route::view('/testimonial','front.testimonial');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
