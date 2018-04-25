@extends('layout.app')

@section('content')
    <section id="shop-card-list">
        @if(isset($books))
        @foreach($books as $book)
            <form id="delete-form-{{$book->book_id}}" action="/card/delete/{{$book->book_id}}" method="POST" style="display: none;">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
            </form>
        @endforeach
        @endif
        <h1 id="shop-card-title">Váš košík</h1>
        <form method="POST" action="/card/counts">
            @csrf
        @if(isset($books))
            @foreach($books as $book)
            <div class="row">
                <div class="col-md-2">
                    <img class="image-book img-shop" src="{{ asset('images/book.png') }}" alt="Obalka knihy {{$book->name}}">
                </div>
                <div class="col-md-2 name">
                    <h5 class="card-title">{{$book->name}}</h5>
                    <p class="card-text">{{$book->author}}</p>
                </div>

                    <div class="form-group">
                        <label class="label-num" for="number{{$book->book_id}}">Počet kusov: </label>
                        <input type="number" name="count[]" class="form-control mx-sm-3 count_of_products" id="number{{$book->book_id}}" value="{{$book->count}}">
                    </div>

                <div class="col-md-2 text-center price-card">
                    <p>Jednotková cena</p>
                    <p class="price">{{$book->price}} €</p>
                </div>
                <div class="col-md-2 text-center price-card">
                    <p>Spolu</p>
                    <p class="total-price-for-book">{{$book->price}} €</p>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-light delete-card"
                            onclick="event.preventDefault();
                           document.getElementById('delete-form-{{$book->book_id}}').submit();">
                        <i class="fa fa-trash-o" aria-hidden="true"></i> Odstrániť</button>
                </div>
            </div>
            <hr>
            @endforeach
        @endif
        <p id="total-price" class="col-md-3 offset-md-8">Spolu: {{$total_price}} €</p>

        <a class="btn btn-light add col-md-4 offset-md-1" href="/">Späť na nákup</a>
        @if(isset($books))


                <button type="submit" class="btn btn-light add col-md-4 offset-md-2"><b>Pristúpiť k objednávke</b></button>


        @endif
            </form>
    </section>
@endsection