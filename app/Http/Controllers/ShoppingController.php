<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\ProductsModel;
use Illuminate\Support\Facades\Session;

class ShoppingController extends Controller
{
    public function cart()
    {
        if (Cart::content()->count() == 0) {
            Session::flash('info', 'Cart empty, go shopping');
            return redirect()->back();
        }
        return view('cart');
    }

    public function add_to_cart(Request $request)
    {
        $product = ProductsModel::find($request->product_id);
        $cartItem = Cart::add([
            'id' => $product->products_id,
            'name' => $product->name,
            'qty' => $request->qty,
            'price' => $product->price
        ]);

        Cart::associate($cartItem->rowId, 'App\ProductsModel');

        Session::flash('success', 'Product added to cart');

        return redirect()->route('cart');
    }

    public function cart_delete($id)
    {
        Cart::remove($id);
        Session::flash('success', 'Product removed');
        return redirect()->back();
    }

    public function inc($id, $qty)
    {
        Cart::update($id, $qty + 1);
        Session::flash('success', 'Product quantity updated');
        return redirect()->back();
    }

    public function dec($id, $qty)
    {
        Cart::update($id, $qty - 1);
        Session::flash('success', 'Product quantity updated');
        return redirect()->back();
    }

    public function rapid_add(Request $request, $id)
    {
        $product = ProductsModel::find($id);
        $cartItem = Cart::add([
            'id' => $product->products_id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price
        ]);

        Cart::associate($cartItem->rowId, 'App\ProductsModel');

        Session::flash('success', 'Product added to cart');

        return redirect()->route('cart');
    }
}
