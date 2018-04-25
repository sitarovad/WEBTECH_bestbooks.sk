@extends('layout.app')

@section('content')
    <h1 id="cathegory-title">{{$cathegory->name}}</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-3" id="filter-menu">
                <section>
                    <h2>Podkategórie</h2>
                    <ul class="list-unstyled">
                        @foreach($subcathegories as $subcathegory)
                        <li>
                            <a href="/subcathegory/{{$subcathegory->id}}">{{$subcathegory->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </section>
                <hr>
                <section>
                    <h2>Filter</h2>
                    <form method="GET" action="/cathegory/{{$cathegory->id}}/filtred">
                        <div class="form-group">
                            <label for="cathegory">Usporiadať podľa:</label>
                            <select class="form-control" id="order" name="order">
                                <option value="author_asc">autora (A-Z)</option>
                                <option value="author_desc">autora (Z-A)</option>
                                <option value="price_asc">ceny od najnižšej</option>
                                <option value="price_desc">ceny od najvyššej</option>
                                <option value="year">roku vydania</option>
                            </select>
                        </div>
                        <hr>
                        <section>
                            <h3>Autori</h3>
                            @foreach($authors as $author)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="authors[]" value="{{$author->author}}" id="author-checkbox">
                                    <label class="form-check-label" for="author-checkbox">
                                        {{$author->author}}
                                    </label>
                                </div>
                            @endforeach
                        </section>
                        <hr>
                        <button type="submit" class="btn btn-light add-button">Vyhľadať</button>
                    </form>
                </section>
            </div>
            <div class="col-md-9">
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
                                <a href="/card/{{$book->id}}"class="btn btn-light add-button">Vložiť do košíka</a>
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