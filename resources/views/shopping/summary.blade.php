@extends('layout.app')

@section('content')
    <section id="shop-card-list">
        <h1 id="shop-card-title">Sumarizácia objednávky</h1>

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
                        <span type="number" id="number1" class="form-control mx-sm-3">{{$book->count}}</span>
                    </div>
                </form>

                <div class="col-md-2 text-center price-card">
                    <p class="price">{{$book->price}} €</p>
                </div>
            </div>
            <hr>
        @endforeach
        <p id="total-price" class="col-md-3 offset-md-8">Spolu: {{$total_price}} €</p>
        <p id="shipping-sum" class="col-md-4">
            <b>Spôsob dodania:</b> {{$shipping->label}}</p>
        <p id="payment-sum" class="col-md-4">
            <b>Spôsob platby:</b> {{$payment->label}}</p>
        <section>
            <h1 id="data-sum-title">Fakturačné údaje</h1>
            <p>{{$name}} {{$surname}}
                <br>{{$street}}
                <br>{{$postal_code}} {{$city}}</p>

            <p>E-mail: {{$email}}, Tel.: {{$mobile}}
            </p>
        </section>
        <a class="btn btn-light add col-md-4 offset-md-1" href="/card/delivery_data">Zmeniť údaje</a>
        <a class="btn btn-light add col-md-4 offset-md-2" href="/card/confirmation">
            <b>Potvrdiť objednávku</b>
        </a>
    </section>
@endsection