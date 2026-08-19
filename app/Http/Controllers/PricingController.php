<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $plans = PricingPlan::where('is_active', true)
            ->orderBy('id')
            ->get();

        return view('frontend.pricing.index', compact('plans'));
    }
}
