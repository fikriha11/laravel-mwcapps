<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/pengurus', 'pengurus')->name('pengurus');
    Route::get('/ranting', 'ranting')->name('ranting');
});
