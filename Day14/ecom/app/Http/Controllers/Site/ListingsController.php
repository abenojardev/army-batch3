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

        if(!$session->has($cart)){
            $session->put('cart', []);
        }

        dd(
            $session->get($cart)
        );
    }
}
