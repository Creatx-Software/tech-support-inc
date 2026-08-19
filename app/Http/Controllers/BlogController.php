<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Blog::where('is_active', true)
            ->when($request->filled('category'), function ($query) use ($request) {
                $query->whereHas('category', fn ($q) => $q->where('slug', $request->query('category')));
            })
            ->when($request->filled('tag'), function ($query) use ($request) {
                $query->whereHas('tags', fn ($q) => $q->where('slug', $request->query('tag')));
            })
            ->with('category')
            ->orderByDesc('date')
            ->get();

        $categories = BlogCategory::where('is_active', true)
            ->withCount(['blogs' => fn ($q) => $q->where('is_active', true)])
            ->orderBy('name')
            ->get();

        $tags = BlogTag::where('is_active', true)->orderBy('name')->get();

        return view('frontend.blog.index', compact('blogs', 'categories', 'tags'));
    }
}
