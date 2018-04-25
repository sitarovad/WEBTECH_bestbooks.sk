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
        $books = Book::paginate(6);
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
        $books = Book::all()->take(6);
        return view('books.show',['book' => $book, 'books' => $books]);
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
        $books = $cathegory->books()->paginate(6);
        $cathegories = Cathegory::all();
        if($request->title) {
            $books = $cathegory->books()->where('title', 'ilike', '%' . Input::get('title') . '%')->paginate(6);
        }
        return view('books.index',['books' => $books,
            'cathegories' => $cathegories]);

    }

    public function cathegoryIndex($cathegory_id) {
        $cathegory = Cathegory::find($cathegory_id);
        $books = $cathegory->books()->paginate(4);
        $subcathegories = $cathegory->subcathegories;
        $authors = $cathegory->books()->select('author')->take(6)->get();
        $languages = Language::all();

        return view('books.cathegory', [
            'cathegory' => $cathegory,
            'books' => $books,
            'subcathegories' => $subcathegories,
            'authors' => $authors,
            'languages' => $languages,
        ]);
    }

    public function subcathegoryIndex($subcathegory_id) {
        $subcathegory = Subcathegory::find($subcathegory_id);
        $cathegory = $subcathegory->cathegory;
        $books = $subcathegory->books()->paginate(4);
        $subcathegories = $cathegory->subcathegories;
        $authors = $subcathegory->books()->select('author')->take(6)->get();

        return view('books.subcathegory', [
            'cathegory' => $cathegory,
            'books' => $books,
            'subcathegories' => $subcathegories,
            'subcathegory' => $subcathegory,
            'authors' => $authors,
        ]);
    }

    public function cathegoryFilter(Request $request, $cathegory_id){
        $cathegory = Cathegory::find($cathegory_id);
        $subcathegories = $cathegory->subcathegories;
        $authors = $cathegory->books()->select('author')->take(6)->get();

        if($request->order == 'author_asc')
            $books = $cathegory->books()->orderBy('author', 'asc');
        elseif($request->order == 'author_desc')
            $books = $cathegory->books()->orderBy('author', 'dec');
        elseif($request->order == 'price_asc')
            $books = $cathegory->books()->orderBy('price', 'asc');
        elseif($request->order == 'price_desc')
            $books = $cathegory->books()->orderBy('price', 'desc');
        else
            $books = $cathegory->books()->orderBy('publish_year');

        if(Input::get('authors')){
            $books=$books->where(function ($query){
                foreach(Input::get('authors') as $item) {
                    $query->orWhere('author', '=', $item);
                }
            });
        }

        $books = $books->paginate(4);

        return view('books.cathegory', [
            'cathegory' => $cathegory,
            'books' => $books,
            'subcathegories' => $subcathegories,
            'authors' => $authors,
        ]);
    }

    public function subcathegoryFilter(Request $request, $subcathegory_id){
        $subcathegory = Subcathegory::find($subcathegory_id);
        $cathegory = $subcathegory->cathegory;
        $subcathegories = $cathegory->subcathegories;
        $authors = $subcathegory->books()->select('author')->take(6)->get();
        $books_test = $subcathegory->books()->get();

        if($request->order == 'author_asc')
            $books = $subcathegory->books()->orderBy('author', 'asc');
        elseif($request->order == 'author_desc')
            $books = $subcathegory->books()->orderBy('author', 'dec');
        elseif($request->order == 'price_asc')
            $books = $subcathegory->books()->orderBy('price', 'asc');
        elseif($request->order == 'price_desc')
            $books = $subcathegory->books()->orderBy('price', 'desc');
        else
            $books = $subcathegory->books()->orderBy('publish_year');

        if(Input::get('authors')){
            $books=$books->where(function ($query){
                foreach(Input::get('authors') as $item) {
                    $query->orWhere('author', '=', $item);
                }
            });
        }

        $books = $books->paginate(4);

        return view('books.subcathegory', [
            'cathegory' => $cathegory,
            'books' => $books,
            'subcathegories' => $subcathegories,
            'subcathegory' => $subcathegory,
            'authors' => $authors,
        ]);

    }
}
