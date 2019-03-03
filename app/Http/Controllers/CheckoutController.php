<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Cart;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function pay(Request $request)
    {
        Stripe::setApiKey("sk_test_amXUyFX40uzeCsUeMMUv0zqF");
        $token = $request->stripeToken;
        $charge = Charge::create([
            'amount' => Cart::total() * 100,
            'currency' => 'usd',
            'description' => 'Granite Bagas Ecommerce',
            'source' => $token
        ]);

        Session::flash('success', 'Purchase Successfull, wait for our email!');
        Cart::destroy();

        Mail::to($request->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);

        return redirect('/');
    }
}
