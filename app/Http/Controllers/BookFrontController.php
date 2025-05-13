<?php

namespace App\Http\Controllers;

use App\Models\Manajemen;
use Illuminate\Http\Request;

class BookFrontController extends Controller
{
    public function index()
    {
        $books = Manajemen::with('detailmanajemen')->get();
        return view('frontend.bookfront', compact('books'));
    }
}
