<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $categories = $galleries
            ->unique('category_name')
            ->map(fn ($gallery) => [
                'name' => $gallery->category_name,
                'slug' => $gallery->category_slug,
            ])
            ->values();

        return view('frontend.gallery.index', compact('galleries', 'categories'));
    }
}
