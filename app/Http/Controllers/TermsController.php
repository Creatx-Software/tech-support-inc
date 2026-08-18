<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index()
    {
        return view('frontend.terms.index');
    }
}
