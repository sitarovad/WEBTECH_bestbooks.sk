<?php

namespace App\Http\Controllers;

use App\Book;
use App\Language;
use App\Availability;
use App\Cathegory;
use App\Subcathegory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        $cathegories = Cathegory::all();
        return view('books.index',['books' => $books,
            'cathegories' => $cathegories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Language::all();
        $availabilities = Availability::all();
        $cathegories = Cathegory::all();
        return view('books.create',
            ['languages' => $languages,
            'availabilities' => $availabilities,
            'cathegories' => $cathegories,
            'subcathegories' => $cathegories[0]->subcathegories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'publisher' => 'required',
            'price' => 'required',
            'publish_year' => 'required',
            'pages_number' => 'required',
            'size' => 'required',
            'binding' => 'required',
            'code' => 'required',
            'quantity' => 'required',
            'rating' => 'required',
            'availability' => 'required',
            'language' => 'required',
            'subcathegory' => 'required',
        ]);

        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'content' => $request->description,
            'publisher' => $request->publisher,
            'price' => $request->price,
            'publish_year' => $request->publish_year,
            'pages_number' => $request->pages_number,
            'size' => $request->size,
            'binding' => $request->binding,
            'code' => $request->code,
            'quantity' => $request->quantity,
            'rating' => $request->rating,
            'availability_id' => $request->availability,
            'language_id' => $request->language,
            'subcathegory_id' => $request->subcathegory,
            ]);

        $request->session()->flash('message', 'Nová kniha bola úspešne pridaná.');

        return redirect('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show',compact('book', $book));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $languages = Language::all();
        $availabilities = Availability::all();
        $cathegories = Cathegory::all();
        return view('books.edit',['book' => $book,
            'languages' => $languages,
            'availabilities' => $availabilities,
            'cathegories' => $cathegories,
            'subcathegories' => $cathegories[0]->subcathegories
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'publisher' => 'required',
            'price' => 'required',
            'publish_year' => 'required',
            'pages_number' => 'required',
            'size' => 'required',
            'binding' => 'required',
            'code' => 'required',
            'quantity' => 'required',
            'rating' => 'required',
            'availability' => 'required',
            'language' => 'required',
            'subcathegory' => 'required',
        ]);

        $book->title = $request->title;
        $book->content = $request->description;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->price = $request->price;
        $book->publish_year = $request->publish_year;
        $book->pages_number = $request->pages_number;
        $book->size = $request->size;
        $book->binding = $request->binding;
        $book->code = $request->code;
        $book->quantity = $request->quantity;
        $book->rating = $request->rating;
        $book->availability_id = $request->availability;
        $book->language_id = $request->language;
        $book->subcathegory_id = $request->subcathegory;
        $book->save();

        $request->session()->flash('message', 'Údaje o knihe úspešne aktualizované.');

        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Book $book)
    {
        $book->delete();
        $request->session()->flash('message', 'Kniha bola úspešne vymazaná.');
        return redirect('books');
    }

    public function getSubcathegories(Request $request) {
        $cathegory_name = $request->input('cathegory');
        $cathegory = Cathegory::with('subcathegories')->where('name', $cathegory_name)->first();
        $subcathegories = $cathegory->subcathegories;
        return response()->json(['subcathegories' => $subcathegories]);
    }

    public function filter(Request $request) {
        $cathegory_id = Input::get('cathegory');
        $cathegory = Cathegory::find($cathegory_id);
        $books = $cathegory->books;
        $cathegories = Cathegory::all();
        if($request->title) {
            $title = Input::get('title');
            $books = $cathegory->books()->where('title', 'LIKE', '%' . Input::get('title') . '%')->get();
        }
        return view('books.index',['books' => $books,
            'cathegories' => $cathegories]);

    }
}
