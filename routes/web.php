<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\GalleryController;

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

// Testimonial Page
Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');

// Gallery Page
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');