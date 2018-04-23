@extends('admin_layout.admin')

@section('content')
    <h1 id="admin-title" class="text-center">Pridať nový produkt</h1>
    <form class="col-md-8 offset-md-2" action="/books" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Názov</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="author">Autor</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="form-group">
            <label for="content">Popis</label>
            <textarea class="form-control" id="content" name="description" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="publisher">Vydavateľstvo</label>
            <input type="text" class="form-control" id="publisher" name="publisher">
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
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="quantity">Množstvo</label>
                <input type="number" class="form-control" id="quantity" name="quantity">
            </div>
            <div class="form-group col-md-6">
                <label for="language">Jazyk</label>
                <select class="form-control" id="language" name="language">
                    @foreach ($languages as $language)
                        <option value="{{$language->id}}">{{ $language->label }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="pages">Počet strán</label>
                <input type="number" class="form-control" id="pages" name="pages_number">
            </div>
            <div class="form-group col-md-6">
                <label for="size">Rozmer (mm)</label>
                <input type="text" class="form-control" id="size" name="size">
            </div>
        </div>
        <div class="form-group">
            <label for="binding">Väzba</label>
            <input type="text" class="form-control" id="binding" name="binding">
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="price">Cena za kus (€)</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="form-group col-md-4">
                <label for="code">Kód</label>
                <input type="text" class="form-control" id="code" name="code">
            </div>
            <div class="form-group col-md-4">
                <label for="rating">Hodnotenie (max. 10)</label>
                <input type="text" class="form-control" id="rating" name="rating">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="quantity">Množstvo</label>
                <input type="number" class="form-control" id="quantity" name="quantity">
            </div>
            <div class="form-group col-md-6">
                <label for="availability">Dostupnosť</label>
                <select class="form-control" id="availability" name="availability">
                    @foreach ($availabilities as $availability)
                        <option value="{{$availability->id}}">{{ $availability->label }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-light col-md-8 offset-md-2 add-button">Pridať produkt</button>
        </div>
    </form>
@endsection