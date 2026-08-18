<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('frontend.blog.index');
    }

    public function blogdetail()
    {
        return view('frontend.blogdetail.index');
    }
}
