<?php

namespace App\Http\Controllers;

use App\Models\Fruit; 
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
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
        return redirect()->route('cart.index')->with('success', $fruit->name . ' berhasil ditambah!');
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function remove(Request $request)
{
    // Mengambil ID yang dikirim dari <input name="id">
    if($request->id) {
        $cart = session()->get('cart');
        if(isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }
    }
    return redirect()->back()->with('success', 'Produk berhasil dihapus!');
}
}