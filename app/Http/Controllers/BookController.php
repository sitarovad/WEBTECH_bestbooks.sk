<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

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
        return view('books.index',compact('books',$books));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
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
        ]);

        $book = Book::create([
            'title' => $request->title,
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
        return view('books.edit',compact('book',$book));
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
        ]);

        $book->title = $request->title;
        $book->content = $request->description;
        $book->publisher = $request->publisher;
        $book->price = $request->price;
        $book->publish_year = $request->publish_year;
        $book->pages_number = $request->pages_number;
        $book->size = $request->size;
        $book->binding = $request->binding;
        $book->code = $request->code;
        $book->quantity = $request->quantity;
        $book->rating = $request->rating;
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
}
