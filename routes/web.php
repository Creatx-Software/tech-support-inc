<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Us Page
Route::get('/about', [AboutUsController::class, 'index'])->name('about');

// Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Blog Page
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

// Blog Detail Page
Route::get('/blogdetail', [BlogController::class, 'blogdetail'])->name('blogdetail');