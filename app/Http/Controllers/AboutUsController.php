<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;

class AboutUsController extends Controller
{
    public function index()
    {
        $featuredTestimonials = Testimonial::where('is_active', true)
            ->where('is_feature', true)
            ->orderBy('sort_order')
            ->get();

        return view('frontend.about.index', compact('featuredTestimonials'));
    }
}
