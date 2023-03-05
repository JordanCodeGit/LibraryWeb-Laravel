<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $cb = Book::count();
        $cc = 6;
        $books = Book::all();

        return view('pages.dashboard', compact('title', 'cb', 'cc', 'books'));
    }
}
