<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFrontController extends Controller
{
    public function index()
    {
        return view('frontend.contactfront');
    }
}
