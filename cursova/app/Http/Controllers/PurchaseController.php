<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Cart;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return redirect()->route('main');
    }

    public function getCart()
    {
        if (!session()->has('cart')) {
            return view('cart.cart', ['products' => null]);
        }
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        return view('cart.cart', ['products' => $cart->items, 'price' => $cart->price]);
    }

    public function getCheckout()
    {
        if (!session()->has('cart')) {
            return view('cart.cart');
        }
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->price;
        return view('cart.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        if (!session()->has('cart')) {
            return view('cart.cart');
        }
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        $order = new Order();
        $order->products = serialize($cart->items);
        $order->name = $request->input('name');
        $order->phone = $request->input('phone');
        $order->save();
        session()->forget('cart');
        return view('user.index');
    }
}
