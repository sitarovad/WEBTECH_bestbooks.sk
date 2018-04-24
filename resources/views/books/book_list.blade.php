@extends('layout.app')

@section('content')
    <h1 id="search-title">Hľadaný výraz: {{$search}}</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-3" id="filter-menu">
                <section>
                    <h2>Filter</h2>
                    <section>
                        <h3>Zobraziť iba</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="news-checkbox">
                            <label class="form-check-label" for="news-checkbox">
                                novinky
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="popular-checkbox">
                            <label class="form-check-label" for="popular-checkbox">
                                obľúbené
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="sale-checkbox">
                            <label class="form-check-label" for="sale-checkbox">
                                v zľave
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="online-checkbox">
                            <label class="form-check-label" for="online-checkbox">
                                online na sklade
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="bookstore-checkbox">
                            <label class="form-check-label" for="bookstore-checkbox">
                                dostupné v kníhkupectve
                            </label>
                        </div>
                    </section>
                    <hr>
                    <section>
                        <h3>Autori</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="christie-checkbox">
                            <label class="form-check-label" for="christie-checkbox">
                                Aghata Christie
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="doyle-checkbox">
                            <label class="form-check-label" for="doyle-checkbox">
                                Artur Cononan Doyle
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="steel-checkbox">
                            <label class="form-check-label" for="steel-checkbox">
                                Daniele Steel
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="francis-checkbox">
                            <label class="form-check-label" for="francis-checkbox">
                                Dick Francis
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="dan-checkbox">
                            <label class="form-check-label" for="dan-checkbox">
                                Dominik Dán
                            </label>
                        </div>
                        <a href="#">Ďalší autori</a>
                    </section>
                    <hr>
                    <section>
                        <h3>Jazyky</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="slovak-checkbox">
                            <label class="form-check-label" for="slovak-checkbox">
                                slovenský
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="english-checkbox">
                            <label class="form-check-label" for="english-checkbox">
                                anglický
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="german-checkbox">
                            <label class="form-check-label" for="german-checkbox">
                                nemecký
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="spanish-checkbox">
                            <label class="form-check-label" for="spanish-checkbox">
                                španielsky
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="czech-checkbox">
                            <label class="form-check-label" for="czech-checkbox">
                                český
                            </label>
                        </div>
                        <a href="#">Ďalšie jazyky</a>
                    </section>
                </section>
            </div>
            <div class="col-md-9">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        Usporiadať podľa
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">autora (A-Z)</a>
                        <a class="dropdown-item" href="#">autora (Z-A)</a>
                        <a class="dropdown-item" href="#">ceny od najnižšej</a>
                        <a class="dropdown-item" href="#">ceny od najvyššej</a>
                        <a class="dropdown-item" href="#">roku vydania</a>
                    </div>
                </div>
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
                            <button type="button" class="btn btn-light add-button">Vložiť do košíka</button>
                        </div>
                    </div>
                </section>
                @empty
                    <p>Nenašli sa žiadne knihy vyhovujúce vyhľadávaniu</p>
                @endforelse
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>

    </div>
@endsection