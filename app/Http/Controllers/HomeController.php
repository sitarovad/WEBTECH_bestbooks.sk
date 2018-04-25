<?php

namespace App\Http\Controllers;

use App\Book;
use App\Language;
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
        $books = Book::where('title', 'ilike', '%' . $search . '%')
            ->orWhere('author', 'ilike', '%' . $search . '%')
            ->paginate(4);

        return view ('books.book_list', [
            'search'=> $search,
            'books' => $books,
        ]);
    }
}
