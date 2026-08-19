<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $featuredServices = Service::where('is_active', true)
            ->where('is_feature', true)
            ->orderBy('id')
            ->get();

        return view('frontend.home.index', compact('featuredServices'));
    }
}
