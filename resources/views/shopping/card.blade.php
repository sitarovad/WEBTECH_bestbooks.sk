@extends('layout.app')

@section('content')
    <section id="shop-card-list">
        <h1 id="shop-card-title">Váš košík</h1>

        @foreach($books as $book)
        <div class="row">
            <div class="col-md-2">
                <img class="image-book img-shop" src="{{ asset('images/book.png') }}" alt="Obalka knihy {{$book->name}}">
            </div>
            <div class="col-md-4 name">
                <h5 class="card-title">{{$book->name}}</h5>
                <p class="card-text">{{$book->author}}</p>
            </div>

            <form class="col-md-2 num">
                <div class="form-group">
                    <label class="label-num" for="number1">Počet kusov: </label>
                    <input type="number" id="number1" value="{{$book->count}}" class="form-control mx-sm-3">
                </div>
            </form>

            <div class="col-md-2 text-center price-card">
                <p class="price">{{$book->price}} €</p>
            </div>
            <div class="col-md-2">
                <button class="btn btn-light delete-card">
                    <i class="fa fa-trash-o" aria-hidden="true"></i> Odstrániť</button>
            </div>
        </div>
        <hr>
        @endforeach
        <p id="total-price" class="col-md-3 offset-md-8">Spolu: {{$total_price}} €</p>

        <a class="btn btn-light add col-md-4 offset-md-1" href="/">Späť na nákup</a>
        <a class="btn btn-light add col-md-4 offset-md-2" href="/card/shipping">
            <b>Pristúpiť k objednávke</b>
        </a>
@endsection