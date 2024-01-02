<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengurusController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail-event', [HomeController::class, 'detail'])->name('detail-event');
Route::get('/ranting', [HomeController::class, 'ranting'])->name('ranting');
Route::get('/pengurus', [PengurusController::class, 'index'])->name('pengurus');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');