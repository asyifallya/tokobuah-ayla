<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;
use App\Models\Order;

class FruitController extends Controller {
    public function index() {
        $fruits = Fruit::all();
        return view('fruits', compact('fruits'));
    }

    public function addToCart($id) {
        $fruit = Fruit::findOrFail($id);
        $cart = session()->get('cart', []);
        
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $fruit->name,
                "quantity" => 1,
                "price" => $fruit->price,
                "image" => $fruit->image
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Buah ditambahkan ke keranjang!');
    }

    public function cart() {
        return view('cart');
    }

    public function removeFromCart($id) {
        $cart = session()->get('cart');
        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back();
    }

    public function checkout(Request $request) {
        $order = new Order();
        $order->customer_name = $request->name;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->total_price = $request->total_price;
        $order->save();

        session()->forget('cart');
        return view('success');
    }
}
