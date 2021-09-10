<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cache;
use App\Models\Product;
use \Stripe\StripeClient;

class CheckoutController extends Controller
{
    public function index()
    {
        $stripe = new StripeClient(
            env('STRIPE_SECRET_KEY')
          );

          $charge = $stripe->charges->create([
            'amount' => 20000,
            'currency' => 'usd',
            'source' => 'tok_visa',
            'description' => 'My First Test Charge (created for API docs)',
          ]);

          dd($charge);

        $cart = Cache::get('cart') ?? [];
        $items = [];
        $total = 0;

        foreach($cart as $product_id => $item){
            $product = Product::find($product_id);

            $product->qty = $item['qty'];

            $product->total = $item['qty'] * $product->price;

            $total += $product->total;

            array_push($items, $product);
        }
 
        return view('site.checkout.cart')->with([
            'items' => $items,
            'total' => $total
        ]);
    }
}
