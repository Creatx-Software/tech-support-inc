<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\Service;


class RouteController extends Controller
{
    public function resolve($slug): View
    {
        // Try service first
        $service = Service::where('slug', $slug)
                    ->where('is_active', true)
                    ->first();

        if ($service) {
            $otherServices = Service::where('is_active', true)
                                ->where('id', '!=', $service->id)
                                ->orderBy('id')
                                ->take(5)
                                ->get();

            return view('frontend.servicesdetail.index', compact('service', 'otherServices'));
        }

        // Try blog next
        if (! class_exists(Blog::class)) {
            abort(404);
        }

        $blog = Blog::where('slug', $slug)
                    ->where('is_active', true)
                    ->with(['category', 'tags'])
                    ->first();

        if ($blog) {
            $relatedBlogs = Blog::where('is_active', true)
                                ->where('id', '!=', $blog->id)
                                ->with('category')
                                ->inRandomOrder()
                                ->take(2)
                                ->get();

            $categories = BlogCategory::where('is_active', true)
                                      ->withCount(['blogs' => fn ($q) => $q->where('is_active', true)])
                                      ->orderBy('name')
                                      ->get();

            $popularPosts = Blog::where('is_active', true)
                                ->where('id', '!=', $blog->id)
                                ->with('category')
                                ->latest('date')
                                ->take(3)
                                ->get();

            $allTags = BlogTag::where('is_active', true)->orderBy('name')->get();

            return view('frontend.blogdetail.index', compact(
                'blog',
                'relatedBlogs',
                'categories',
                'popularPosts',
                'allTags'
            ));
        }

        abort(404);
    }
}