<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $books = Book::all();

        return view('pages.home', compact('books'));
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('pages.show', compact('book'));
    }


    public function search(Request $request)
    {
        $search = $request->get('search');
        $books = Book::where('title', 'like', '%' . $search . '%')->paginate(5);
        return view('pages.home', compact('books'));
    }

}
