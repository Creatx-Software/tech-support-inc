<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('frontend.services.index');
    }

    public function servicesdetail()
    {
        return view('frontend.servicesdetail.index');
    }
}
