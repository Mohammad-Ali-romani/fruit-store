<?php

use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->middleware('auth')->group(function(){

    //  Hero controller
    Route::resource('Hero', HeroController::class);
    
});







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

