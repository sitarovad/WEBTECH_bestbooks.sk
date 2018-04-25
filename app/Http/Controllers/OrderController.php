<?php

namespace App\Http\Controllers;

use App\DeliveryData;
use App\Order;
use App\BookOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request) {
        $order = 0;
        $name = $request->session()->get('name');
        $surname = $request->session()->get('surname');
        $street = $request->session()->get('street');
        $postal_code = $request->session()->get('postal_code');
        $city = $request->session()->get('city');
        $email = $request->session()->get('email');
        $mobile = $request->session()->get('mobile');
        $shipping = $request->session()->get('shipping');
        $payment = $request->session()->get('payment');
        $books = $request->session()->get('books');

        $total_price = 0;
        foreach($books as $item) {
            $total_price += $item->price*$item->count;
        }

        if(Auth::check()){
            $user_id = Auth::user()->id;

            $order = Order::create([
                'total_price' => $total_price,
                'user_id' => $user_id,
                'shipping_id' => $shipping,
                'payment_id' => $payment,
            ]);
        }
        else {
            $delivery_data = DeliveryData::create([
                'name' => $name,
                'surname' => $surname,
                'email' => $email,
                'mobile' => $mobile,
                'street' => $street,
                'postal_code' => $postal_code,
                'city' => $city,
            ]);

            $order = Order::create([
                'total_price' => $total_price,
                'delivery_data_id' => $delivery_data->id,
                'shipping_id' => $shipping,
                'payment_id' => $payment,
            ]);
        }

        foreach ($books as $book) {
            $book_order = BookOrder::create([
                'order_id' => $order->id,
                'book_id' => $book->book_id,
            ]);
        }

        $request->session()->remove('name');
        $request->session()->remove('surname');
        $request->session()->remove('street');
        $request->session()->remove('postal_code');
        $request->session()->remove('city');
        $request->session()->remove('email');
        $request->session()->remove('mobile');
        $request->session()->remove('shipping');
        $request->session()->remove('payment');
        $request->session()->remove('books');

        return view('shopping.confirmation');
    }
}
