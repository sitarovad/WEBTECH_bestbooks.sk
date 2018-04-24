<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all()->take(10);
        return view('landing_page', ['books' => $books]);
    }

    public function search(Request $request){
        $search = Input::get('search');
        $books = Book::where('title', 'LIKE', '%' . $search . '%')->get();
        /*$books_author_asc = Book::where('title', 'LIKE', '%' . $search . '%')->orderBy('author', 'asc')->get();
        $books_author_desc = Book::where('title', 'LIKE', '%' . $search . '%')->orderBy('author', 'desc')->get();
        $books_price_asc = Book::where('title', 'LIKE', '%' . $search . '%')->orderBy('price', 'asc')->get();
        $books_price_desc = Book::where('title', 'LIKE', '%' . $search . '%')->orderBy('price', 'desc')->get();
        $books_year = Book::where('title', 'LIKE', '%' . $search . '%')->orderBy('publish_year', 'desc')->get();*/


        return view ('books.book_list', ['search'=> $search, 'books' => $books]);
    }
}
