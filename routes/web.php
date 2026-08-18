<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ServiceController;

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

// Terms and Conditions Page
Route::get('/terms-and-conditions', [TermsController::class, 'index'])->name('terms');

// Privacy Policy Page
Route::get('/privacy-policy', [PrivacyController::class, 'index'])->name('privacy');

// FAQ Page
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

// Services Page
Route::get('/services', [ServiceController::class, 'index'])->name('services');

//services detail page
Route::get('/servicesdetail', [ServiceController::class, 'servicesdetail'])->name('servicesdetail');