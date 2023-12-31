<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/welcome', function(){
        return view('welcome');
    });
    Route::get('/pengurus', 'pengurus')->name('pengurus');
    Route::get('/detail-event', 'detail')->name('detail-event');
    Route::get('/ranting', 'ranting')->name('ranting');
});
