<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('frontend.faq.index', compact('faqs'));
    }
}
