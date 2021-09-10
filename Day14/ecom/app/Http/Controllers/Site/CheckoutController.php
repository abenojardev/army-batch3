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

          $stripe->checkout->sessions->create([
            'success_url' => 'https://example.com/success',
            'cancel_url' => 'https://example.com/cancel',
            'payment_method_types' => ['card'],
            'line_items' => [
              [
                'price' => 1000.00,
                'quantity' => 2,
              ],
            ],
            'mode' => 'payment',
          ]);

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
