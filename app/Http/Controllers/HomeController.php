<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\PricingPlan;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $featuredServices = Service::where('is_active', true)
            ->where('is_feature', true)
            ->orderBy('id')
            ->get();

        $featuredPlans = PricingPlan::where('is_active', true)
            ->where('is_feature', true)
            ->orderBy('id')
            ->get();

        $featuredBlogs = Blog::where('is_active', true)
            ->where('is_feature', true)
            ->orderByDesc('date')
            ->take(4)
            ->get();

        $featuredTestimonials = Testimonial::where('is_active', true)
            ->where('is_feature', true)
            ->orderBy('sort_order')
            ->get();

        return view('frontend.home.index', compact('featuredServices', 'featuredPlans', 'featuredBlogs', 'featuredTestimonials'));
    }
}
