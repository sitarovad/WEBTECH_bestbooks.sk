@extends('layout.app')

@section('content')
    <h1 id="shop-card-title">Spôsob dodania a platby</h1>
    <form method="POST" action="/card/delivery_data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="shipping">Dodanie</label>
                <select class="form-control" id="shipping" name="shipping">
                    @foreach ($shippings as $shipping)
                        <option value="{{$shipping->id}}">{{ $shipping->label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="payment">Platba</label>
                <select class="form-control" id="payment" name="payment">
                    @foreach ($payments as $payment)
                        <option value="{{$payment->id}}">{{ $payment->label }}</option>
                    @endforeach
                </select>
            </div>
        </div>



    <a class="btn btn-light add col-md-3 offset-md-2" href="/card">Späť na košík</a>
    <button type="submit" class="btn btn-light add col-md-3 offset-md-2">
        <b>Pokračovať</b>
    </button>
    </form>
@endsection