<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ListingsController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $product = Product::all();
        
        return view('site.listing.index')->with([
            'products' => $product
        ]);
    }

    public function add_to_cart($id)
    {
        // check if session exists
        // create session / get session
        // product available 
        // add to session

        $cart = 'cart';
        $session = $this->request->session();

        // if there is no cart 
        if(!$session->has($cart)){
            $session->put('cart', []);
        }

        $current_cart = $session->get($cart);

        // if products exists
        dd($current_cart);
        if(array_key_exists($id, $current_cart)){
            $current_cart[$id]['qty'] = $current_cart[$id]['qty'] + 1;
        } else {
            $current_cart[$id] = [
                'qty' => 1
            ];
        }

        $session->put($cart, $current_cart);

        dd(
            $session->get($cart)
        );
    }
}
