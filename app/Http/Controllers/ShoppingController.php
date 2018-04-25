<?php

namespace App\Http\Controllers;

use App\Payment;
use App\SessionBook;
use App\Shipping;
use Illuminate\Http\Request;
use App\Book;

class ShoppingController extends Controller
{
    public function store($book_id, Request $request) {

        $books = $request->session()->get('books');
        if(isset($books) == false){
            $request->session()->put('books', []);
        }

        $books = $request->session()->get('books');
        $book = Book::find($book_id);
        $sessionBook = new SessionBook($book->id, $book->title, $book->author, 1, $book->price);

        array_push($books, $sessionBook);
        $request->session()->put('books', $books);

        return redirect('/card');
    }

    public function index(Request $request) {
        $card_items = $request->session()->get('books');

        $total_price = 0;
        if(isset($card_items)){
            foreach($card_items as $item) {
                $total_price += $item->price*$item->count;
            }
        }
        return view('shopping.card', ['books' => $card_items,
            'total_price' => $total_price]);
    }

    public function shipping(Request $request) {
        $books = $request->session()->get('books');

        $counts = $request->count;

        for($i = 0; $i < count($books); $i++){
            $books[$i]->count = $counts[$i];
        }

        $request->session()->put('books', $books);

        return redirect('card/showShipping');

    }

    public function showShipping() {
        $shippings = Shipping::all();
        $payments = Payment::all();

        return view ('shopping.shipping', [
            'shippings' => $shippings,
            'payments' => $payments]);
    }

    public function storeShipping(Request $request) {
        $request->session()->put('shipping', $request->shipping);
        $request->session()->put('payment', $request->payment);

        return redirect('card/delivery_data');

    }

    public function deliveryData() {
        return view('shopping.delivery_data');
    }

    public function storeData(Request $request) {
        $request->session()->put('name', $request->name);
        $request->session()->put('surname', $request->surname);
        $request->session()->put('street', $request->street);
        $request->session()->put('postal_code', $request->postal_code);
        $request->session()->put('city', $request->city);
        $request->session()->put('email', $request->email);
        $request->session()->put('mobile', $request->mobile);

        return redirect ('/card/summary');
    }

    public function show(Request $request) {
        $name = $request->session()->get('name');
        $surname = $request->session()->get('surname');
        $street = $request->session()->get('street');
        $postal_code = $request->session()->get('postal_code');
        $city = $request->session()->get('city');
        $email = $request->session()->get('email');
        $mobile = $request->session()->get('mobile');
        $shipping_id = $request->session()->get('shipping');
        $payment_id = $request->session()->get('payment');
        $books = $request->session()->get('books');

        $shipping = Shipping::find($shipping_id);
        $payment = Payment::find($payment_id);

        $total_price = 0;
        foreach($books as $item) {
            $total_price += $item->price*$item->count;
        }
        return view('shopping.summary',[
            'name' => $name,
            'surname' => $surname,
            'street' => $street,
            'postal_code' => $postal_code,
            'city' => $city,
            'email' => $email,
            'mobile' => $mobile,
            'shipping' => $shipping,
            'payment' => $payment,
            'books' => $books,
            'total_price' => $total_price,
        ]);

    }

    public function destroy($book_id, Request $request) {
        $books = $request->session()->get('books');

        for($i = 0; $i < count($books); $i++) {
            if ($book_id == $books[$i]->book_id){
                array_splice($books, $i, 1);
            }
        }

        $request->session()->put('books', $books);

        return redirect('/card');
    }
}
