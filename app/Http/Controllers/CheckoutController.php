<?php

namespace App\Http\Controllers;

use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Gérer le paiement
    public function checkout()
    {
        return view('checkout');
    }

    public function store(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $charge = \Stripe\Charge::create([
                'amount' => Cart::subtotal() * 100,
                'currency' => 'eur',
                'description' => 'Mon paiement',
                'source' => $request->stripeToken,
                'receipt_email' => $request->email
            ]);
            dd($charge);
        } catch (\Stripe\Exception\CardException $e) {
            throw $e;
        }
    }

    //Paiement réussi
    public function success()
    {
        return view('success');
    }
}
