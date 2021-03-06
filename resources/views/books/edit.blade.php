@extends('layout.app')

@section('content')
    <h1 id="admin-title" class="text-center">Upraviť produkt</h1>
    <form class="col-md-8 offset-md-2" action="{{url('books', [$book->id])}}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Názov</label>
            <input type="text" class="form-control" value="{{$book->title}}" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="author">Autor</label>
            <input type="text" class="form-control" value="{{$book->author}}"id="author" name="author">
        </div>
        <div class="form-group">
            <label for="content">Popis</label>
            <textarea class="form-control" id="content" name="description" rows="5">{{$book->content}}</textarea>
        </div>
        <div class="form-group">
            <label for="publisher">Vydavateľstvo</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="{{$book->publisher}}">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="cathegory">Kategória</label>
                <select class="form-control" id="cathegory" name="cathegory">
                    @foreach ($cathegories as $cathegory)
                        <option value="{{$cathegory->id}}">{{ $cathegory->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="subcathegory">Podkategória</label>
                <select class="form-control" id="subcathegory" name="subcathegory">
                    @foreach ($subcathegories as $subcathegory)
                        <option value="{{$subcathegory->id}}"
                           @if ($subcathegory->id == $book->subcathegory_id)
                                selected="selected"
                           @endif
                        >{{ $subcathegory->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="year">Rok vydania</label>
                <input type="date" class="form-control" id="year" name="publish_year" value="{{$book->publish_year}}">
            </div>
            <div class="form-group col-md-6">
                <label for="language">Jazyk</label>
                <select class="form-control" id="language" name="language">
                    @foreach ($languages as $language)
                        <option value="{{$language->id}}"
                            @if ($language->id == $book->language_id)
                                selected="selected"
                            @endif
                        >{{ $language->label }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="pages">Počet strán</label>
                <input type="number" class="form-control" id="pages" name="pages_number" value="{{$book->pages_number}}">
            </div>
            <div class="form-group col-md-6">
                <label for="size">Rozmer (mm)</label>
                <input type="text" class="form-control" id="size" name="size" value="{{$book->size}}">
            </div>
        </div>
        <div class="form-group">
            <label for="binding">Väzba</label>
            <input type="text" class="form-control" id="binding" name="binding" value="{{$book->binding}}">
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="price">Cena za kus (€)</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$book->price}}">
            </div>
            <div class="form-group col-md-4">
                <label for="code">Kód</label>
                <input type="text" class="form-control" id="code" name="code" value="{{$book->code}}">
            </div>
            <div class="form-group col-md-4">
                <label for="rating">Hodnotenie (max. 10)</label>
                <input type="text" class="form-control" id="rating" name="rating" value="{{$book->rating}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="quantity">Množstvo</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{$book->quantity}}">
            </div>
            <div class="form-group col-md-6">
                <label for="availability">Dostupnosť</label>
                <select class="form-control" id="availability" name="availability">
                    @foreach ($availabilities as $availability)
                        <option value="{{$availability->id}}"
                            @if ($availability->id == $book->availabilty_id)
                                selected="selected"
                            @endif
                        >{{ $availability->label }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-light col-md-8 offset-md-2 add-button">Zmeniť údaje</button>
        </div>
    </form>
@endsection