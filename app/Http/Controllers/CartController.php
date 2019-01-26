<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\User;
use App\Cart;


class CartController extends Controller
{
    public function __construct()
    {
        if(!\Session::has('cart')) \Session::put('cart', array());
    }
    
    public function index() 
    {
        $cart = \Session::get('cart');
        $total = $this->total();
        
        return view('client.cart', compact('cart', 'total'));
    }

    public function total() 
    {
        $cart = \Session::get('cart');
        $total = 0;
        foreach($cart as $item) {
            $total += $item->precio * $item->cantidad;
        }
        
        return $total;
    }

    public function add(Product $product) 
    {
        $cart = \Session::get('cart');
        $product->cantidad = 1;
        $cart [$product->id] = $product;
        \Session::put('cart', $cart);
        
        return view('client.cart');
    }

    public function delete(Product $item) 
    {
        $cart = \Session::get('cart');
        unset($cart[$item->id]);
        \Session::put('cart', $cart);

        return view('client.cart');
    }

    public function update(Product $item, $cantidad) 
    {
        $cart = \Session::get('cart');
        $cart [$item->id]->cantidad = $cantidad;
        \Session::put('cart', $cart);

        return redirect()->route('cart');

    }

    public function order()
    {
        if(count(\Session::get('cart')) <= 0) 
            return redirect()->route('/{id}/cart');

        $cart = \Session::get('cart');
        $total = $this->total();

        return view('client.order', compact('cart', 'total'));
    }

}
