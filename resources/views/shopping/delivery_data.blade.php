@extends('layout.app')

@section('content')
    <section class="col-md-8 offset-md-2">
        <h1 id="data-title">Fakturačné údaje</h1>
        <form id="data-form" method="POST" action="/card/summary">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Meno</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="surname">Priezvisko</label>
                    <input type="text" class="form-control" id="surname" name="surname" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street">Ulica</label>
                    <input type="text" class="form-control" id="street" name="street" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="postal-code">PSČ</label>
                    <input type="text" class="form-control" id="postal-code" name="postal_code" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">Mesto</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="mobile">Telefónne číslo</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" required>
                </div>
            </div>
            <a class="btn btn-light add col-md-3 offset-md-2" href="/card/shipping">Späť na košík</a>
            <button type="submit" class="btn btn-light add col-md-3 offset-md-2">
                <b>Pokračovať</b>
            </button>
        </form>


@endsection