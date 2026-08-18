<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Us Page
Route::get('/about', [AboutUsController::class, 'index'])->name('about');