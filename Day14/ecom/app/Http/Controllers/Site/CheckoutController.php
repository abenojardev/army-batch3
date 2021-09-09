<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cache;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = Cache::get('cart') ?? [];
        $items = [];

        foreach($cart as $product_id => $item){

        }
        
        dd($items);
        
        return view('site.checkout.cart');
    }
}
