@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-1">
            <img class="image-book-detail" src="images/book.png" alt="Obalka knihy {{$book->title}}">
            <div id="info">
                <ul class="list-unstyled">
                    <li>
                        <b>Vydavateľstvo:</b>{{$book->publisher}}</li>
                    <li>
                        <b>Jazyk:</b>{{$book->language}}</li>
                    <li>
                        <b>Rok vydania:</b>{{$book->publish_year}}</li>
                    <li>
                        <b>Počet strán:</b>{{$book->pages_number}}</li>
                    <li>
                        <b>Rozmer:</b>{{$book->size}}</li>
                    <li>
                        <b>Väzba:</b>{{$book->binding}}</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <h1>{{$book->title}}</h1>
            <p id="author">{{$book->author}}</p>
            <p id="price-detail">{{$book->price}}</p>
            <button id="add-button" type="button" class="btn btn-light">Vložiť do košíka</button>
            <p id="content-detail">{{$book->content}}</p>
        </div>
    </div>
    </section>
    <section class="container">
        <h2>Odporúčame</h2>
        <div class="container">
            <div class="row">
                <div class="card">
                    <img class="card-img-top" src="images/book.png" alt="Obalka knihy Noc">
                    <div class="card-body justify-center">
                        <h5 class="card-title">Noc</h5>
                        <p class="card-text">Bernard Minier</p>
                        <p class="card-text price">14,02 €</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/book.png" alt="Obalka knihy Noc">
                    <div class="card-body justify-center">
                        <h5 class="card-title">Noc</h5>
                        <p class="card-text">Bernard Minier</p>
                        <p class="card-text price">14,02 €</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/book.png" alt="Obalka knihy Noc">
                    <div class="card-body justify-center">
                        <h5 class="card-title">Noc</h5>
                        <p class="card-text">Bernard Minier</p>
                        <p class="card-text price">14,02 €</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/book.png" alt="Obalka knihy Noc">
                    <div class="card-body justify-center">
                        <h5 class="card-title">Noc</h5>
                        <p class="card-text">Bernard Minier</p>
                        <p class="card-text price">14,02 €</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/book.png" alt="Obalka knihy Noc">
                    <div class="card-body justify-center">
                        <h5 class="card-title">Noc</h5>
                        <p class="card-text">Bernard Minier</p>
                        <p class="card-text price">14,02 €</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/book.png" alt="Obalka knihy Noc">
                    <div class="card-body justify-center">
                        <h5 class="card-title">Noc</h5>
                        <p class="card-text">Bernard Minier</p>
                        <p class="card-text price">14,02 €</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection