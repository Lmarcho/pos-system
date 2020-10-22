<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Stock $product)
    {
        // add the product to cart
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->amount,
            'quantity' => $product->quantity,
        ));

        return redirect()->route('cart.index');
    }

    public function index()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('cart.index', compact('cartItems'));

    }
}
