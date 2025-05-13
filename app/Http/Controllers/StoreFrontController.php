<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreFrontController extends Controller
{
    public function index()
    {
        return view('frontend.storefront');
    }
}
