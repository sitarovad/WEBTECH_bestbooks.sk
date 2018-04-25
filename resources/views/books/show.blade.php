@extends('layout.app')

@section('content')
    <div class="row info">
        <div class="col-md-4 offset-md-1">
            <img class="image-book-detail" src="{{ asset('images/book.png') }}" alt="Obalka knihy {{$book->title}}">
            <div id="info">
                <ul class="list-unstyled">
                    <li>
                        <b>Vydavateľstvo:</b> {{$book->publisher}}</li>
                    <li>
                        <b>Jazyk:</b> {{$book->language->label}}</li>
                    <li>
                        <b>Rok vydania:</b> {{$book->publish_year}}</li>
                    <li>
                        <b>Počet strán:</b> {{$book->pages_number}}</li>
                    <li>
                        <b>Rozmer:</b> {{$book->size}}</li>
                    <li>
                        <b>Väzba:</b> {{$book->binding}}</li>
                    <li>
                        <b>Dostupnosť:</b> {{$book->availability->label}}</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <h1>{{$book->title}}</h1>
            <p id="author">{{$book->author}}</p>
            <p id="price-detail">{{$book->price}} €</p>
            <a id="add-button" class="btn btn-light" href="/card/{{$book->id}}">Vložiť do košíka</a>
            <p id="content-detail">{{$book->content}}</p>
        </div>
    </div>
    </section>
    <section class="container">
        <h2>Odporúčame</h2>
        <div class="container">
            <div class="row">
                @foreach($books as $book)
                    <div class="my_card">
                        <img class="card-img-top" src="{{ asset('images/book.png') }}" alt="Obalka knihy {{$book->title}}">
                        <div class="card-body justify-center">
                            <h5 class="card-title"><a href="/books/{{$book->id}}">{{$book->title}}</a></h5>
                            <p class="card-text">{{$book->author}}</p>
                            <p class="card-text price">{{$book->price}} €</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection