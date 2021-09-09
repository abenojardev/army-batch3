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

        foreach($cart as $product_id => $item){
            $product = Product::find($product_id);

            $product->qty = $item['qty'];

            array_push($items, $product);
        }

        dd($items);
        
        return view('site.checkout.cart');
    }
}
