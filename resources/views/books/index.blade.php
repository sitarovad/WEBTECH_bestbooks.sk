@extends('admin_layout.admin')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
    @endif
    <h1 id="products-title" class="text-center">Zoznam produktov</h1>
    <a id="add" class="btn btn-light col-md-4 offset-md-4" href="/books/create">Pridať produkt</a>
    <hr>
    <form id="filter">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="code">Kód</label>
                <input type="text" class="form-control" id="code">
            </div>
            <div class="form-group col-md-3">
                <label for="title">Názov knihy</label>
                <input type="text" class="form-control" id="title">
            </div>
            <div class="form-group col-md-3">
                <label for="author">Autor</label>
                <input type="text" class="form-control" id="author">
            </div>
            <div class="form-group col-md-3">
                <label for="language">Kategória</label>
                <select class="form-control" id="language">
                    <option>Všetko</option>
                    <option>Beletria</option>
                    <option>Pre deti a mládež</option>
                    <option>Životopisné</option>
                    <option>Cudzojazyčné</option>
                    <option>História</option>
                    <option>Umenie</option>
                    <option>Voľný čas</option>
                    <option>Cestovanie</option>
                    <option>Zdravie</option>
                    <option>Učebnice</option>
                    <option>Iné</option>
                </select>
            </div>
        </div>
        <button id="filter" class="btn btn-light col-md-4 offset-md-4">Vyhľadať</button>
    </form>

    <div id="products" class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kód</th>
                <th scope="col">Názov</th>
                <th scope="col">Množstvo</th>
                <th scope="col">Akcia</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->code}}</td>
                <td><a href="/books/{{$book->id}}"></a>{{$book->title}}</td>
                <td>{{$book->quantity}}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a class="btn btn-light update" href="{{ URL::to('books/' . $book->id . '/edit') }}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>Upraviť
                        </a>&nbsp;&nbsp;
                        <form action="{{url('books', [$book->id])}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-outline-danger delete"><i class="fa fa-trash-o" aria-hidden="true"></i>Odstrániť</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
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
@endsection