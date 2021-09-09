<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cache;
use App\Models\Product;

class CheckoutController extends Controller
{
    public function index()
    {
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

        dd($items, $total);
        
        return view('site.checkout.cart');
    }
}
