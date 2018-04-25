@extends('layout.app')

@section('content')
    <h1 id="search-title">Hľadaný výraz: {{$search}}</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div>
                @forelse($books as $book)
                <section class="container book-cathegory-detail">
                    <div class="row">
                        <div class="col-md-3 img">
                            <img class="image-book" src="{{ asset('images/book.png') }}" alt="Obalka knihy {{$book->title}}">
                        </div>
                        <div class="col-md-6">
                            <h5 class="card-title"><a href="/books/{{$book->id}}">{{$book->title}}</a></h5>
                            <p class="card-text">{{$book->author}}</p>
                            <p class="content">{{$book->content}}
                            </p>
                        </div>
                        <div class="col-md-3 price-add">
                            <p class="text-center price">{{$book->price}} €</p>
                            <a class="btn btn-light add-button" href="/card/{{$book->id}}">Vložiť do košíka</a>
                        </div>
                    </div>
                </section>
                @empty
                    <p>Nenašli sa žiadne knihy vyhovujúce vyhľadávaniu</p>
                @endforelse
                <nav aria-label="Page navigation example">
                    {{$books->links()}}
                </nav>
            </div>

        </div>

    </div>
@endsection